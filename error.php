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

$pReferer = $_SERVER['HTTP_REFERER'];

$pMessage = stripslashes($_REQUEST['tznMessage']);
$pMessage = preg_replace("/<script[^>]*>[^<]+<\/script[^>]*>/is"
	,"", $pMessage); 
$pMessage = preg_replace("/<\/?(div|span|iframe|frame|input|"
	."textarea|script|style|applet|object|embed|form)[^>]*>/is"
	,"", $pMessage);

?>
<html>
<head>
<title>TaskFreak! oooops</title>
<style>
body {
	margin: 0px;
	padding: 0px;
	margin-bottom: 6px;
	background-color: #fff;
}
div#horiz {
	width: 500px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: small;
	text-align: center;
}
h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: large;
}
p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: medium;
}
p.error {
    color: #c00;
}
</style>
</head>
<body>
<div align="center">
  <div id="horiz">
	<p>&nbsp;</p>
	<p><img src="skins/redfreak/images/freak-logo.png" border="0" alt="TaskFreak!" /></p>
    <p>Houston, there's a problem...!</p>
  <?php
  
	if ($_REQUEST['tznMessage']) {
		echo '<p class="error" style="text-align:center">'.$pMessage.'</p>';
		//error_log(stripslashes($_REQUEST['tznMessage']));
	}
    if (@is_readable('./install/index.php')) {
  ?>
    <p><a href="install/?action=1">click here to check installation</a></p>
  <?php
    } else {
  ?>
    <p>(and installation folder can not be found)</p>
  <?php
    }
    if ($_SERVER['HTTP_REFERER']) {
  ?>
    <p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">click here to go back and try again</a></p>
  <?php
    } else if (!ereg('error\.php$',$_SERVER['PHP_SELF'])) {
  ?>
    <p><a href="javascript:window.location.reload(true)">click here to try again</a></p>
  <?php
    }
  ?>
	<p><a href="index.php?">click here to return to home page (task list)</a></p>
  
  </div>
</div>
</body>
</html>
