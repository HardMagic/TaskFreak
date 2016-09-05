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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
div, p, li, td {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: small;
}
th {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: small;
    text-align: center;
}
big {
    font-weight: bold;
    font-size: x-large;
}
td input {
    width: 120px;
}
#preview {
    position: relative;
    left: 50%;
    width: 700px;
    margin-left: -350px;
    border: 2px solid #ccc;
    padding: 5px;
    background-color: #f3f3f3;
}
pre {
    font-family: monospace;
    font-size: normal;
}
.ok {
    font-weight: bold;
    color: #393;
}
.warning {
	color: #f90;
}
.error {
    font-weight: bold;
    color: #c00;
}
</style>
<script>
function gE(id) {
	return document.getElementById(id);
}
function isD(e) {
	if (e) {
		return (e.style.display == 'block');
	} else {
		return false;
	}
}
function sD(e) {
	if (e) {
		e.style.display = 'block';
	}
}
function hD(e) {
	if (e) {
		e.style.display = 'none';
	}
}
function tD(e) {
	if (e) {
		if (isD(e)) {
			hD(e);
		} else {
			sD(e);
		}
	}
}
</script>
<head>
<title>TaskFreak! Setup</title>
</head>
<body>
<p align="center"><img src="../skins/redfreak/images/freak-logo.png" border="0" alt="TaskFreak!" /></p>
<p align="center">
    <a href="?action=1">Check install</a> |
    <a href="?action=2">README!</a> |
    <a href="?action=5">Rights FAQ</a> |
    <a href="?action=3">Change history</a> |
    <a href="?action=4">Import data</a> |
    <a href="http://forum.taskfreak.com/" target="_blank">Community/Support (online forum)</a>
</p>
<?php

switch ($_REQUEST['action']) {

// --- INSTALL CHECK --------------------------------------------------------

case 1:
    $pCheckProblem = false;
    $pStrOk = '<span class="ok">OK</span>';
    echo '<div id="preview">';

    // check path to include file
    echo '<p>Check configuration</p><ul>';
    $pConfigOk = false;
    $pIncludePath = $pIncludeFile = '';
    if (@is_dir('../include')) {
        $pIncludePath = 'include/';
    } else if (@is_dir('../../include')) {
        $pIncludePath = '../include/';
    }
    
    if ($pIncludePath) {
        echo '<li>Check include folder ';
        if (is_readable('../'.$pIncludePath)) {
            echo $pStrOk.'</li>';
            echo '<li>Check config file ';
            $pIncludeFile = '../'.$pIncludePath.'config.php';
            if (is_readable($pIncludeFile)) {
                $pConfigOk = true;
                if (is_writable($pIncludeFile)) {
                    echo $pStrOk.' (writable)';
                } else {
                    echo $pStrOk;
                }
            } else {
                echo '<span class="error">no permissions!</span>';
                $pCheckProblem = true;
            }
        } else {
            echo '<span class="error">no permissions!</span>';
            $pCheckProblem = true;
        }
    } else {
        echo '<span class="error">not found!</span>';
        $pCheckProblem = true;
    }
    echo '</li></ul>';


    if (!$pConfigOk) {
        echo '<p class="error">Can not continue tests without access to config file</p>';
        break;
    }

    // check folders permissions
    echo '<p>Check folders and files permissions</p><ul>';
    $arrFolders = array($pIncludePath.'classes/',$pIncludePath.'language/','js/',
        'jscalendar/','skins/','skins/redfreak/','xajax/','xajax/xajax_js/');
    foreach ($arrFolders as $folder) {
        echo '<li>Check folder '.$folder.' ';
        if (is_dir('../'.$folder)) {
            if (is_readable('../'.$folder)) {
                echo $pStrOk;
            } else {
                echo '<span class="error">no permissions!</span>';
                $pCheckProblem = true;
            }
        } else {
            echo '<span class="error">does not exist!</span>';
            $pCheckProblem = true;
        }
        echo '</li>';
    }

    // check xajax
    $arrFiles = array('xajax/xajax.inc.php','xajax/xajaxCompress.php',
        'xajax/xajaxResponse.inc.php',
        'xajax/xajax_js/xajax.js','xajax.task.php');
    $arrXajaxError = array();
    foreach ($arrFiles as $file) {
        if (is_file('../'.$file)) {
            if (!is_readable('../'.$file)) {
                $arrXajaxError[] = '<span class="error">no permission to access to '.$file.'!</span>';
            }
        } else {
            $arrXajaxError[] = '<span class="error">'.$file.' does not exist!</span>';
        }
    }
    if (count($arrXajaxError)) {
        echo '<li>Check xajax files<ul>';
        foreach($arrXajaxError as $strError) {
            echo '<li>'.$strError.'</li>';
        }
        echo '</ul></li>';
        $pCheckProblem = true;
    } else {
        echo '<li>Check xajax files '.$pStrOk.'</li>';
    }
    echo '</ul>';

    // check database connection
    echo '<p>Database</p><ul>';
    define('TZN_DB_DEBUG',2);
    define('TZN_DB_ERROR_PAGE',FALSE);
    include $pIncludeFile;
    include_once(PRJ_CLASS_PATH.'tzn_generic.php');
    include_once(PRJ_CLASS_PATH.'tzn_mysql.php');


    $pStr = '';

    $objDb = new TznDbConnection();
    $db = $objDb->connect();
    
    echo '<li>Connection to mySQL ';
    if ($db) {
        echo $pStrOk.$pStr;
    } else {
        echo '<span class="error">Error connecting to mySQL</span>';
        echo '<br /><small>'.$objDb->_error['db'].'</small></li>';
        $pCheckProblem = true;
        break;
    }
	echo '</li>';

	echo '<li>MySQL version: ';
	$objRes = $objDb->querySelect('SELECT VERSION() AS version');
	while ($objData = $objRes->rNext()) {
		$dbVersion = $objData->version;
		preg_match('([0-9]+\.[0-9]+)',$dbVersion,$match);
		$version = floatval($match[0]);
		echo $dbVersion.' ';
		if ($version < 4.1) {
			echo '<span class="warning">(set FRK_MYSQL_VERSION_GT_4_1 to FALSE in config.php)</span>';
		} else {
			echo $pStrOk;
		}
	}
	echo '</li>';

    $arrTableInit = array('country','item','itemComment','itemFile','itemStatus','member','memberProject','project','projectStatus');
    $arrTableExist = $objDb->getTables();

    if (!is_array($arrTableExist)) {
        echo '<span class="error">can not retreive list of tables</span></li>';
        break;
    }

    $pProposeCreate = false;
    $dbPrefix = (@constant('TZN_DB_PREFIX'))?TZN_DB_PREFIX.'_':'';

    if ($_REQUEST['option'] == 'create') {
        define('TZN_IS_IMPORTED',TRUE);
        include 'mysql.init.php';
    }
   
    foreach($arrTableInit as $table) {
        echo '<li>Table '.$table.' ';
        if (in_array($dbPrefix.$table,$arrTableExist) || in_array(strtolower($dbPrefix.$table),$arrTableExist)) {
            echo $pStrOk;
        } else if ($_REQUEST['option'] == 'create') {
            $sqlVarName = 'sql'.ucFirst($table);
            $arrSql = explode(";",$$sqlVarName);
            $i = 0;
			foreach($arrSql as $sql) {
				if (!trim($sql)) {
					continue;
				}
				if ($objDb->queryAffect(trim($sql))) {
					if (ereg('^CREATE',$sql)) {
						echo '<span class="ok">created!</span>';
						$i = 0;
					} else {
						$i++;
						if ($i % 70 == 0) {
							echo '<br />';
						}
						echo '.';
					}
				} else if (ereg('^CREATE',$sql)) {
					echo '<span class="error">can not create table</span>';
					$pCheckProblem = true;
				} else {
					echo '<span class="error">error SQL insert</span>';
					$pCheckProblem = true;
				}
                usleep(500);
			}
        } else {
            echo '<span class="error">not found</span>';
            $pProposeCreate = true;
            $pCheckProblem = true;
        }
        echo '</li>';
    }

    echo '</ul>';

    if ($pProposeCreate) {
        echo '<p>One or more tables are missing... Do you wish to create them?<br />';
        echo '<input type="button" value="YES, create missing tables for me" onclick="window.location.href=\'?action=1&option=create\'" /></p>';
    } else if (!$pCheckProblem) {
        echo '<p class="ok">Install OK!</p>';
        echo '<p><input type="button" value="Launch TaskFreak!" onclick="window.location.href=\'../login.php?username=admin\'" /> ';
        echo 'Hint: default user is "admin" (no password set) </p>';
    }

    echo '</div>';
    break;

// --- README ---------------------------------------------------------------

case 2:
    echo '<div id="preview"><pre>';
    readfile('./README.txt');
    echo '</pre></div>';
    break;
 
// --- CHANGES --------------------------------------------------------------

case 5:
    echo '<div id="preview"><pre>';
    readfile('./RIGHTS.txt');
    echo '</pre></div>';
    break;

// --- CHANGES --------------------------------------------------------------

case 3:
    echo '<div id="preview"><pre>';
    readfile('./CHANGES.txt');
    echo '</pre></div>';
    break;

// --- IMPORT DATA ----------------------------------------------------------

case 4:
    
	define('TZN_IS_IMPORTED',TRUE);
	define('TZN_DB_ERROR_PAGE','');

    $pIncludePath = $pIncludeFile = '';
    if (@is_dir('../include')) {
        $pIncludePath = 'include/';
    } else if (@is_dir('../../include')) {
        $pIncludePath = '../include/';
    }

    $pIncludeFile = '../'.$pIncludePath.'config.php';
    
    if (!is_readable($pIncludeFile)) {
        echo '<div id="preview"><p class="error">Can not read configuration file</p>';
        echo '<p><a href="?action=1">Please check configuration</a></p></div>';
        break;
    }
    
    include $pIncludeFile;
    include 'mysql.copy.php';

    break;

default:

    break;
}
?>
</body>
</html>
