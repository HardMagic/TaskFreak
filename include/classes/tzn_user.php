<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Tirzen Framework (TZN)
 *
 * This declares the common class from which any object from the TZN shall
 * inherit. It is compatible with PHP versions 4 and 5.
 *
 * THIS PACKAGE IS PROVIDED "AS IS" AND WITHOUT ANY EXPRESS OR IMPLIED
 * WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF
 * MERCHANTIBILITY AND FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This package is licensed under the LGPL License
 * Copyright (C) 2005 Stan Ozier
 *
 * This library is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation; either version 2.1 of the License, or (at your option)
 * any later version.
 * This library is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for more
 * details.
 * You should have received a copy of the GNU Lesser General Public License
 * along with this library; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA 
 *
 * @package    Tirzen Framework MySQL database
 * @author     Stan Ozier <tech@tirzen.com>
 * @copyright  2006-2010 - Stan Ozier
 * @license    http://www.gnu.org/licenses/lgpl.txt (LGPL)
 * @link       http://www.tirzen.com/tzn/
 * @version    1.8
 */
 
/**
 * TZN: Tirzen Framework (TZN)
 *
 * @package    TZN-user
 * @author     Stan Ozier <stan@tirzen.net>
 * @version    1.8 revision 3
 */



/* ------------------------------------------------------------------------ *\
define("TZN_USER_ID_LENGTH",8);		// length of room/user ID
define("TZN_USER_LOGIN","username");// Login mode = username OR email
define("TZN_USER_NAME_MIN",3);		// minimum length for username
define("TZN_USER_NAME_MAX",10);		// maximum length for username
define("TZN_USER_PASS_MIN",3);		// minimum length for password
define("TZN_USER_PASS_MAX",10);		// maximum length for password
define("TZN_USER_PASS_MODE",3);
	// 1 -> PHP crypt function
	// 2 -> mySQL crypt
	// 3 -> mySQL encode
	// ALGO_NAME -> PHP mCrypt_ALGO_NAME 
\* ------------------------------------------------------------------------ */

define('TZN_USER_NAME_REGEXP','/^[a-zA-Z0-9._-]+$/');

/**
 * User Object - User common features
 * @author   Stan Ozier <stan@tirzen.net>
 * @package tzn_user
 * @version    1.8 revision 3
 */

/*
-TODO-
login: check expiration date
checkautologin: add level support
isLogged: add direct checking support (if already checked then return var)
move level to generic class
*/

class TznUser extends TznDb {

    var $_logingOut;   
		// destroying session is not effective,
    	// so have to set this to true if loggin off

    function TznUser($table) {
    	$this->_properties = array(
    		'id'				=> 'UID',
    		'username'			=> 'STR',
    		'password'			=> 'STR',
    		'salt'				=> 'STR',
    		'autoLogin'			=> 'BOL',
    		'timeZone'			=> 'INT',
    		'creationDate'		=> 'DTM',
    		'expirationDate'	=> 'DTE',
    		'lastLoginDate'		=> 'DTM',
    		'lastLoginAddress'	=> 'STR',
			'lastChangeDate'	=> 'DTM',
    		'visits'			=> 'NUM',
    		'badAccess'			=> 'NUM',
    		'level'				=> 'LVL',
    		'enabled'			=> 'BOL',
   		);
   		$this->_table=$table;
   		$this->timeZone=0;
    }
	
	function qLoginTimeZone($name='tznUserTimeZone') {
		$str = <<<EOS
<script type="text/javascript" language="javascript">
  var tzo=(new Date().getTimezoneOffset()*60)*(-1);
  document.write('<input type="hidden" name="$name" value="'+tzo+'" />');
</script>
EOS;
		print $str;
	}

	function setLogin($username) 
    {
        if ((strlen($username) < TZN_USER_NAME_MIN) 
        	|| (strlen($username) > TZN_USER_NAME_MAX)) {
            $this->_error["username"] = 
            	$GLOBALS["langTznUser"]["user_name_limit1"]
            	.TZN_USER_NAME_MIN.$GLOBALS["langTznUser"]["user_name_limit2"]
            	.TZN_USER_NAME_MAX.$GLOBALS["langTznUser"]["user_name_limit3"];
            return false;
        } else if ($this->checkUnique("username",$username)) {
            $this->_error["username"] = 
            	$GLOBALS["langTznUser"]["user_name_exists"];
            return false;
        } else if (preg_match('/^[a-zA-Z0-9\-_]+$/', $username)) {
            $this->username = $username;
            return true;
        } else {
			$this->_error["username"] =
				$GLOBALS["langTznUser"]["user_name_invalid"];
			return false;
		}
        return true;
    }

    function setPassword($pass1, $pass2 = false, 
    	$forceEmpty = false, $noEmptyError = false)
    {
        //echo ("setpass: [ $pass1 / $pass2 ]");
        if ($pass1 || $forceEmpty) {
            // a pass has been set
            if (($pass2 !== false) && ($pass1 != $pass2)) {
                // a confirmation has been set but is different 
                $this->_error["pass"] = 
                	$GLOBALS["langTznUser"]["user_pass_mismatch"];
                return false;
            }
            $this->salt = $this->getRdm(8,
            	'abcdefghijklmnopqrstuvwxyz'
            	.'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
            if ($pass1) {
                if ((strlen($pass1) >= TZN_USER_PASS_MIN) 
                	&& (strlen($pass1) <= TZN_USER_PASS_MAX)) {
                    switch (TZN_USER_PASS_MODE) {
                    case 1:
                        $this->password = crypt($pass1 , $this->salt);
                        break;
                    case 2:
                        $this->password = "ENCRYPT('".$pass1."','"
                        	.$this->salt."')";
                        break;
                    case 3:
                        $this->password = "ENCODE('".$pass1."','"
                        	.$this->salt."')";
                        break;
					case 4:
						$this->password = "MD5('$pass1')";
						break;
                    default:
                        $iv = mcrypt_create_iv (mcrypt_get_iv_size(MCRYPT_3DES
                        	, MCRYPT_MODE_ECB), MCRYPT_RAND);
                        $crypttext = mcrypt_encrypt(TZN_USER_PASS_MODE, $this->_salt
                        	, $pass1, MCRYPT_MODE_ECB, $iv);
                        $this->password = bin2hex($crypttext);
                    }
                } else {
                    $this->_error["pass"] = 
                    	$GLOBALS["langTznUser"]["user_pass_limit1"]
                    	.TZN_USER_PASS_MIN
                    	.$GLOBALS["langTznUser"]["user_pass_limit2"]
   	                   	.TZN_USER_PASS_MAX
   	                   	.$GLOBALS["langTznUser"]["user_pass_limit3"];
                    return false;
                }
            } else {
                $this->password = "";
            }
            return true;
        } else {
            if (!$forceEmpty && !$noEmptyError) {
                $this->_error["pass"] =
                	$GLOBALS["langTznUser"]["user_pass_empty"];
                return false;
            }
            return true;
        }
    }

    function updatePassword() {
		$this->update("password, salt, lastChangeDate");
    }

    function setLoginPassword($username, $pass1, $pass2 = false, 
    	$forceEmpty = false) 
    {
        //echo ("username = $username, pass = $pass1...");
        $step1 = $this->setPassword($pass1, $pass2, $forceEmpty, false);
        $step2 = $this->setLogin($username);
        return ($step1 && $step2);
    }

    function updateLoginPassword() {
		$this->update("username, password, salt, lastChangeDate");
	}

	function add() {
		$this->setDtm('creationDate','NOW');
		return parent::add();
	}
	
	function updateLevel() {
        return $this->update("level,lastChangeDate");
	}

    function update($fields=null) {
        $this->setDtm('lastChangeDate','NOW');
        if ($fields && (!preg_match('/lastChangeDate/',$fields))) {
        	$fields .= ",lastChangeDate";
        }
        return parent::update($fields);
    }
	
	function zBadAccess() {
        $strSql = "UPDATE ".$this->gTable()." SET"
            ." badAccess=badAccess+1"
            ." WHERE ".$this->getIdKey()." = '".$this->getUid()."'";
        $this->getConnection();
        $this->query($strSql);
    }

    function zCheckPassword($password) {
        switch (TZN_USER_PASS_MODE) {
        case 1: 
            if ($this->password == "") {
                $this->password = crypt("", $this->salt);
            }    
            if (crypt($password, $this->salt) != $this->password) {
                    // password invalid
                    $this->_error['login'] = 
                    	$GLOBALS["langTznUser"]["user_pass_invalid"];
                    $this->zBadAccess();
                    return false;
            }
            break;
        case 2:
        	$password = addslashes($password); // sanitize for SQL
            $strSql = "SELECT ENCRYPT('$password','".$this->salt
            	."') as passHash";
            if ($result = $this->query($strSql)) {
                if ($row = $result->rNext()) {
                    if ($row->passHash == $this->password) {
                        // password OK
                        break;
                    }
                }
            }
            $this->_error['login'] = 
            	$GLOBALS["langTznUser"]["user_pass_invalid"];
            $this->zBadAccess();
            return false; // error or password mismatch
            break;
        case 3:
        	$password = addslashes($password); // sanitize for SQL
            $strSql = "SELECT ENCODE('$password','".$this->salt
            	."') as passHash";
            if ($result = $this->query($strSql)) {
                if ($row = $result->rNext()) {
                    if ($row->passHash == $this->password) {
                        // password OK
                        break;
                    }
                }
            }
            $this->_error['login'] = 
            	$GLOBALS["langTznUser"]["user_pass_invalid"];
            $this->zBadAccess();
            return false; // error or password mismatch
            break;
		case 4:
			if (!$this->password && !$password) {
				break;
			}
			$password = addslashes($password); // sanitize for SQL
			$strSql = "SELECT MD5('$password') as passHash";
            if ($result = $this->query($strSql)) {
                if ($row = $result->rNext()) {
                    if ($row->passHash == $this->password) {
                        // password OK
                        break;
                    }
                }
            }
            $this->_error['login'] = 
            	$GLOBALS["langTznUser"]["user_pass_invalid"];
            $this->zBadAccess();
            return false; // error or password mismatch
            break;
        default:
            for ($i = 0; $i < strlen($this->password); $i += 2) { 
                $passBin .= chr(hexdec(substr($s,$i,2))); 
            }
            $iv = mcrypt_create_iv (mcrypt_get_iv_size (MCRYPT_3DES,
            	MCRYPT_MODE_ECB), MCRYPT_RAND);
            if (mcrypt_decrypt (MCRYPT_3DES, $this->salt, $passBin,
            	MCRYPT_MODE_ECB, $iv) == $password)
            {
                break;
            }
            $this->_error['login'] = 
            	$GLOBALS["langTznUser"]["user_pass_invalid"];
            $this->zBadAccess();
            return false;
            break;
        }
        return true;
    }

    function _activateLogin($withLevel = true) {
    	if ($tz = $_REQUEST['tznUserTimeZone']) {
    		if ($this->getInt('timeZone') != $tz) {
				$this->setInt('timeZone',$tz);
				$updTz = ',timeZone';
			}
    	}
        // register session
        $_SESSION["tznUserId"] = $this->id;
        if ($withLevel) {
            $_SESSION["tznUserLevel"] = $this->level;
        } else {
            $_SESSION["tznUserLevel"] = "0";
        }
        $_SESSION["tznUserTimeZone"] = $this->timeZone;
		$_SESSION["tznUserName"] = $this->username;
		$_SESSION["tznUserLastLogin"] = $this->lastLoginDate;
		$_SESSION["tznUserLastAddress"] = $this->lastLoginAddress;

        // update last login
        $this->setDtm('lastLoginDate','NOW');
		$this->lastLoginAddress = $_SERVER['REMOTE_ADDR'];
        $this->badAccess = 0;
		$this->visits++;
        $this->update('lastLoginDate,lastLoginAddress,badAccess,visits'.$updTz);
    }

    function login($username, $password, $level=null) {
        if ($username == '') {
            $this->_error['login'] = $GLOBALS["langTznUser"]["user_name_empty"];
            return false;
        }
        if (!preg_match(TZN_USER_NAME_REGEXP, $username)) {
        	$this->_error['login'] = $GLOBALS['langTznUser']['user_name_invalid'];
        	return false;
        }
        if ($this->loadByKey(TZN_USER_LOGIN,$username)) {
            if (($level!=null) && (!$this->getLvl($level))) {
                //Insufficient rights
                $this->_error['login'] = 
                	$GLOBALS["langTznUser"]["user_forbidden"];
            }
            if (!$this->enabled) {
                //Account Disabled
                $this->_error['login'] = 	
                	$GLOBALS["langTznUser"]["user_disabled"];
            }
            if (!$this->zCheckPassword($password)) {
                $this->_error['login'] = 	
                	$GLOBALS["langTznUser"]["user_password_invalid"];
            }
			if (count($this->_error)) {
				$this->zBadAccess();
				return false;
			}
        } else {
            $this->_error['login'] = 
            	$GLOBALS["langTznUser"]["user_name_not_found"];
            return false;
        }
        
    	$this->_activateLogin();
        return true;
    }

    function silentLogin($username, $password) {
        if ($username == '') {
            return false;
        }
        if ($this->loadByKey(TZN_USER_LOGIN,$username)) {
            if (!$this->enabled) {
                //Account Disabled
                $this->_error['login'] = 	
                    $GLOBALS["langTznUser"]["user_disabled"];
            }
            if (!$this->zCheckPassword($password)) {
                $this->_error['login'] = 	
                    $GLOBALS["langTznUser"]["user_password_invalid"];
            }
        } else {
            $this->_error['login'] = 
            	$GLOBALS["langTznUser"]["user_name_not_found"];
            return false;
        }
        return (count($this->_error) == 0);
    }


	function checkAutoLogin($forReal=true) {
        $cookieVal = $_COOKIE['autoLogin'];
		if (empty($cookieVal)) {
			return false;
		}
        $arrVal = explode(":",$cookieVal);
		$id = $arrVal[0];
		$salt = $arrVal[1];
        if($this->loadByFilter($this->gTable().'.'.$this->getIdKey()."='".$id
        	."' AND ".$this->gTable().".salt='".$salt."'")) 
        {
			if (!$forReal) {
				return true;
			}
			setCookie('autoLogin',$this->id.":".$this->salt
				,time()+(3600*24*30));
            $this->_activateLogin();
            return true;
        } else {
            return false;
        }
	}

    function setAutoLogin() {
        if (($this->id) && ($this->salt)) {
            setCookie('autoLogin',$this->id.":".$this->salt
            	,time()+(3600*24*30));
            $this->autoLogin = '1';
            $this->update('autoLogin');
            return true;
        }
        return false;
    }

    function resetAutoLogin() {
        if ($this->id) {
            setCookie('autoLogin');
            if ($this->autoLogin) {
	            $this->autoLogin = "0";
    	        $this->update("autoLogin");
    	    }
            return true;
        }
        return false;
    }

    function logout() {
		$_SESSION = array();
		// If it's desired to kill the session, also delete the session cookie.
		// Note: This will destroy the session, and not just the session data!
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
		}
		// Finally, destroy the session.
		@session_destroy();
		// while you're at it, delete auto login
		$this->resetAutoLogin();
		// set internal variable
        $this->_logingOut = true;
    }

    function isLogged($level=null) {
        $lUserId = $_SESSION['tznUserId'];
        if ($lUserId == 0 || empty($lUserId) || $this->_logingOut) {
            return false;
        } else {
            $this->id = $lUserId;
			$this->level = $_SESSION['tznUserLevel'];
            $this->timeZone = $_SESSION['tznUserTimeZone'];
			$this->username = $_SESSION['tznUserName'];
			$this->lastLoginDate = $_SESSION['tznUserLastLogin'];
			$this->lastLoginAddress = $_SESSION['tznUserLastAddress'];
            if ($level) {
                if ($this->getLvl($level)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        }
    }

    function forgotPassword($key, $value) {
        // type can be 'username' or 'email'
        // forgotten password? Try to get it back or generate new one
        if ($this->salt == "") {
            if (!$this->loadByKey($key,$value)) {
                // user not found
                $this->_error['forgot'] = $key." not found";
                return false;
            }
        }
        switch (TZN_USER_PASS_MODE) {
        case 1:
            $newpass = $this->getRdm(6,"123456789");
            $this->password = crypt($pass1 , $this->salt);
            $this->updatePassword();
            break;
        case 2:
            $newpass = $this->getRdm(6,"123456789");
            $this->password = "ENCRYPT(\"".$pass1."\",\"".$this->salt."\")";
            $this->updatePassword();
            break;
        case 3:
            $strSql = "SELECT DECODE(password, '".$this->salt
            	."') as pass FROM ".$this->_table
            	." WHERE ".$this->getIdKey()."=".$this->id;
            if ($result = $this->query($strSql)) {
                if ($row = $result->nRow()) {
                    $this->password = $row->pass;
                    return $this->password;
                }
            }
            $this->_error['forgot'] = "can not decode?";
            return false;
            break;
		case 4:
            $newpass = $this->getRdm(6,"123456789");
			$this->password = "MD5('$newpass')";
            $this->updatePassword();
            break;
        default:
            $iv = mcrypt_create_iv (mcrypt_get_iv_size (MCRYPT_3DES,
            	MCRYPT_MODE_ECB), MCRYPT_RAND);
            $this->password = mcrypt_decrypt (MCRYPT_3DES, $this->salt,
            	$passBin, MCRYPT_MODE_ECB, $iv);
            return $this->password;
            break;
        }
        return $newpass;
    }

}

?>
