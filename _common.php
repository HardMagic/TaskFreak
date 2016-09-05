<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* This file is part of "TaskFreak! multi user" program.                      *
*                                                                            *
* TaskFreak! multi user is free software; you can redistribute it and/or     *
* modify it under the terms of the GNU General Public License as published   *
* by the Free Software Foundation; either version 2 of the License, or (at   *  
* your option) any later version.                                            *
*                                                                            *
* TaskFreak! multi user is distributed in the hope that it will be           *
* useful, but WITHOUT ANY WARRANTY; without even the implied warranty of     *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
* GNU General Public License for more details.                               *
*                                                                            *
* You should have received a copy of the GNU General Public License          *
* along with this program; if not, write to the Free Software                *
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA *
\****************************************************************************/

include './_include.php';

include PRJ_CLASS_PATH.'tzn_generic.php';
include PRJ_CLASS_PATH.TZN_DB_CLASS;
include PRJ_CLASS_PATH.'tzn_user.php';

include PRJ_CLASS_PATH.'pkg_member.php';
include PRJ_CLASS_PATH.'pkg_project.php';

header("Content-type: text/html; charset=".FRK_CHARSET);

session_start();

$objUser = new Member();

// === USER LOGIN ===================================================

if (!$pPageIsPublic) {
	if ($pUserIsLogged = $objUser->isLogged($pLevel)) {
		if ($objUser->load() != $_SESSION["tznUserId"]) {
			// user is logged in but user ID is not same in session and in cookie
			$objUser->logout();
			$pUserIsLogged = false;		
			Tzn::redirect('login.php','ERROR:Session invalid, please log in again');
		}
	} else {
		if ($pUserIsLogged = $objUser->checkAutoLogin()) {
			// user is automatically logged in
		} else {
			// user is not logged in and tries to access private page
			Tzn::redirect('login.php','ERROR:Please log in to access your account');
		}
	} 
}

// === ANY MESSAGE ? ===============================================

if ($_SESSION['tznMessage']) {
    $pMessageStatus = $_SESSION['tznMessage'];
    unset($_SESSION['tznMessage']);
	session_unregister('tznMessage');
}

// === USER PREFERENCES =============================================

$pProjectId = 0;

if ($pUserIsLogged) {

    // --- DEFAULTS -------------------------------------------------

    $pDefaultUserId = ($_SESSION['selUser'])?$_SESSION['selUser']:$objUser->id;

    // --- USER PROJECTS --------------------------------------------

	$objUserProjectList = new ProjectStats();
    $objUserProjectList->addOrder('statusKey ASC, name ASC');
    // $objUserProjectList->addWhere('ps.statusKey < 40');
    $objUserProjectList->addHaving('projectStatus_statusKey < 40');
    $objUserProjectList->loadList($objUser->id,(!$objUser->checkLevel(6)));
	
	// decide which is current project
	
	if ($pProject = intval($_REQUEST['sProject'])) {
		
        if (!$objUser->checkLevel(6)) {
            // user can not see all projects
            $objProjectCheck = new MemberProject();
            if (!$objProjectCheck->loadPosition($pProject,$objUser->id)) 
            {
                // user is not a member this project
                $pProject = 0;
                $pMessageStatus = 'ERROR:No access to this project';
            }
            unset($objProjectCheck);
        }
        
	} else /* if ($_SESSION['sProject']) {
		$pProject = $_SESSION['sProject'];
	} else */ {
        $pProject = 0;
    }
	
	// save team ID in session
	//$_SESSION['sProject'] = $pProject;

    // --- USER LIST ------------------------------------------------

    $objUserList = new Member();
    if (!$objUser->checkLevel(1)) {
        $objUserList->addWhere($objUserList->gTable().'.memberId='.$objUser->id);
    }
    $objUserList->addOrder('level DESC,lastName ASC');
    $objUserList->loadList();
	
}

define('FRK_LANGUAGE',FRK_DEFAULT_LANGUAGE);
define('FRK_SKIN_FOLDER',FRK_DEFAULT_SKIN_FOLDER);
define('FRK_NO_DEADLINE_TOO',FRK_DEFAULT_NO_DEADLINE_TOO);
define('FRK_NO_DEADLINE_KEEP',FRK_DEFAULT_NO_DEADLINE_KEEP);
define('FRK_DATEDIFF_MODE',FRK_DEFAULT_DATEDIFF_MODE);
define('FRK_DATEDIFF_TOMORROW',FRK_DEFAULT_DATEDIFF_TOMORROW);
define('FRK_CONTEXT_LONG',FRK_DEFAULT_CONTEXT_LONG);
define('FRK_RSS_SIZE',FRK_DEFAULT_RSS_SIZE);
define('FRK_SORT_COLUMN',FRK_DEFAULT_SORT_COLUMN);
define('FRK_SORT_ORDER',FRK_DEFAULT_SORT_ORDER);

include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/common.php';
include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/freak.php';
include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/options.php';

