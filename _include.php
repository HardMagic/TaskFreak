<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

if (@is_readable('./include/config.php')) {
    include './include/config.php';
} else if (@is_readable('../include/config.php')) {
    include '../include/config.php';
} else {
    header('Location: error.php?tznMessage='
        .urlencode('Could not find or access config.php file. Please edit _include.php file.'));
    exit;
}
?>
