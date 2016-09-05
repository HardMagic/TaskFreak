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
 * Copyright (C) 2006 Stan Ozier
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
 * @package    Tirzen Framework
 * @author     Stan Ozier <tech@tirzen.com>
 * @copyright  2006-2010 - Stan Ozier
 * @license    http://www.gnu.org/licenses/lgpl.txt (LGPL)
 * @link       http://www.tirzen.net/tzn/
 * @version    1.8
 */
 
/**
 * TZN: Tirzen Framework (TZN) common/generic class
 *
 * @package    TZN
 * @author     Stan Ozier <stan@tirzen.net>
 * @version    1.8 revision 3
 */



/* ------------------------------------------------------------------------ *\
define("TZN_DEBUG",0);
	// 0 no debug, 1 on error, 2 show most, 3 show all
define("TZN_SPECIALCHARS",1);
	// 0 = none, 1 = custom > & ", 2 = htmlspecialchars, 3 = htmlentities
define("TZN_HTMLMODE","html");
	// no = no HTML, bbs = BBS [b]style[/b], html = HTML accepted
define("TZN_BOOL_TRUE","Y");
define("TZN_BOOL_FALSE","N");
	// image or HTML for booleans
define("TZN_TZDEFAULT","user");
define("TZN_DATEFIELD","SQL");
\* ------------------------------------------------------------------------ */

define("TZN_DATE_SQL","%Y-%m-%d");
define("TZN_DATETIME_SQL","%Y-%m-%d %H:%M:%S");

if (@constant('TZN_DATE_US_FORMAT')) {
    define("TZN_DATE_FRM","%m/%d/%y");	// US format 
} else {
    define("TZN_DATE_FRM","%d/%m/%y");	// rest of the world dd/mm
}

define("TZN_KEY_LENGTH",8);
define("TZN_KEY_STRING","ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890");

define("TZN_NOW",strtotime(gmdate('Y-m-d H:i:s')));
define("TZN_TZSERVER",intval(date('Z')));

if (@constant('TZN_TRANS_ID')) {
	ini_set("session.use_trans_sid",1);
} else {
	ini_set('session.use_trans_sid', 0);
	ini_set('session.use_only_cookies', 1);
}

class Tzn {

	var $_error;
	var $_properties;
	
	function Tzn() {
        $this->_error = array();
    }
    
    /**
	 * addProperties : generic function
	 * add property(ies) to class/object
	 * @param prm1 array or name of property
	 * @param prm2 if first parameter is, second is type (else: not needed)
	 */
    function addProperties($prm1, $prm2=null) {
    	if (is_array($prm1)) {
			if (is_array($this->_properties)) {
				$this->_properties = array_merge($this->_properties,$prm1);
			} else {
				$this->_properties = $prm1;
			}
		} else if ($prm2) {
			if (!is_array($this->_properties)) {
				$this->_properties = array();
			}
			$this->_properties[$prm1] = $prm2;
		}
    }
    
    /**
	 * removeProperties : generic function
	 * remove property(ies) to class/object
	 * @param prm1 array or name of property
	 * @param prm2 if first parameter is, second is type (else: not needed)
	 */
    function removeProperties($prm1) {
    	if (is_array($this->_properties)) {
    		if (is_array($prm1)) {
    			foreach($prm1 as $key) {
    				unset($this->_properties[$key]);
    			}
    		} else {
    			unset($this->_properties[$prm1]);
    		}
    	}
    }

	
	/* --- GET  -------------------------------------------------- */
	
	/**
	 * get : generic function
	 * check property type and call corresponding method
	 * variable parameters
	 */
	function get($key)
	{
		if (!$key) {
			return 'Error: Tzn::get (empty 1st parameter)';
		}
		if ($dfn = $this->_properties[$key]) {
			if (is_array($dfn)) {
				return call_user_func_array(array(&$this,'getLst'),$dfn);
			}
			$arrType = explode(',',$dfn);
			if ($arrType[0] == 'OBJ') {
				// indirect call to object
				$arrArgs = func_get_args();
				array_shift($arrArgs[0]); // remove first parameter (key)
				$obj = $this->$key;
				if (is_object($obj)) {
					return call_user_func_array(array(&$obj,'get'), $arrArgs);
				}
			} else if (func_num_args() > 1) {;
				$arrArgs = func_get_args();
				return call_user_func_array(array(
					&$this,'get'.$arrType[0]),$arrArgs);
			} else {
				$type = $arrType[0];
				$arrType[0] = $key;
				// echo "calling get$type with "; print_r($arrType);
				return call_user_func_array(array(&$this,'get'.$type),$arrType);
			}
		}
	}
	
	function getUid() {
		return $this->id;
	}
	
	function getValue($key) {
        if ($this->$key) {
            return str_replace('"','&quot;',$this->$key);
        } else {
            return '';
        }
    }
	
	function getRdm($len = TZN_KEY_LENGTH, $strChars = TZN_KEY_STRING)
	{
		$strCode = "";
		$intLenChars = strlen($strChars);
		for ( $i = 0; $i < $len; $i++ )	{
			$n = mt_rand(1, $intLenChars);
			$strCode .= substr($strChars, ($n-1), 1);
		}
		return $strCode;
	}
	
	function getInt($keyval,$default=0)
	{
		$value = Tzn::_value($keyval,$default);
		return number_format(round($value),0);
	}

	function getNum($keyval,$default=0)
	{
		$value = Tzn::_value($keyval,$default);
		$value = number_format(abs(round($value)),0);
		if (!$value) {
			$value = $default;
		}
		return $value;
	}
	
	/**
		get decimal value (key/val,[decimal],[default])
		@param keyval field or value
		@param decimal precision
		@param default value
	*/
	function getDec($keyval)
	{
		$arrArgs = func_get_args();
		$i = 1;
		$dec = null;
		if (intval($arrArgs[1]) == $arrArgs[1]) {
			// number of digits after decimal point
			$dec = $arrArgs[1];
			$i++;
		}
		$value = Tzn::_value($keyval,$arrArgs[$i]);
		if ($dec) {
			return number_format($value,$dec);
		} else {
			if (round($value) != $value) {
				$dec = 2;
				if (is_object($this)) {
					$arrType = explode(',',$this->_properties[$key]);
					if (count($arrType) > 1) {
						$dec = $arrType[1];
					}
				}
				return number_format($value,$dec);
			}
			return number_format($value);
		}
	}

	/**
		get decimal value, form field format (key/val,[decimal],[default])
		@param keyval field or value
		@param decimal precision
		@param default value
	*/
	function getDec2($keyval)
	{
		$arrArgs = func_get_args();
		$i = 1;
		$dec = null;
		if (intval($arrArgs[1]) == $arrArgs[1]) {
			// number of digits after decimal point
			$dec = $arrArgs[1];
			$i++;
		}
		$value = Tzn::_value($keyval,$arrArgs[$i]);
		if ($dec) {
			return number_format($value,$dec,'.','');
		} else {
			if (round($value) != $value) {
				$dec = 2;
				if (is_object($this)) {
					$arrType = explode(',',$this->_properties[$key]);
					if (count($arrType) > 1) {
						$dec = $arrType[1];
					}
				}
				return number_format($value,$dec,'.','');
			}
			return number_format($value,null,'.','');
		}
	}
	
	/**
	 * getStr (key/val,[cut],[default])
	 */
	function getStr($keyval)
	{
		return Tzn::_strValue(func_get_args());
	}
	
	function getUrl($keyval,$default='') {
		return Tzn::_value($keyval,$default);
	}
	
	function getEml($keyval,$default='') {
		return Tzn::_value($keyval,$default);
	}
	
	function getTxt($keyval)
	{
		return Tzn::_strValue(func_get_args());
	}
	
	function getBbs($keyval,$default='')
	{
		return Tzn::_value($keyval,$default);
	}
	
	function getHtm($keyval,$default='')
	{
		return Tzn::_value($keyval,$default);
	}

	function getImg($keyval,$default='')
	{
		return Tzn::_value($keyval,$default);
	}
	
	function getBol($keyval,$default=null)
	{
		if (is_object($this)) {
			// $value = Tzn::_value($keyval,$default);
			if (is_null($this->$keyval)) {
				$value = $default;
			} else {
				$value = $this->$keyval;
			}
		} else {
			$value = $default;
		}
		return $value?true:false;
	}
	
	function getDte($keyval,$format='SQL',$default='')
	{
		$value = Tzn::_value($keyval,$default);
		if (!$value || preg_match('/^(0000|9999)/',$value)) {
			return $default;
		} else if (($ts = strtotime($value)) > 0) {
			$const = 'TZN_DATE_'.$format;
			if (defined($const)) {
				$format = constant($const);
			} else if (!preg_match('/%/',$format)) {
				$format = TZN_DATE_SQL;
            }
            $value = strftime($format,$ts);
            if (@constant('TZN_FORCE_UTF-8')) {
            	return utf8_encode($value);
            } else {
	            return $value;
            }
		} else {
			// error
			return false;
		}
	}
	
	function getDtm($keyval,$format='SQL',$tz=TZN_TZDEFAULT,$default='')
	{
		$value = Tzn::_value($keyval,$default);
		if ($value == 'now' || $value == 'NOW') {
			$value = TZN_NOW;
		} else if ((preg_match('/^(0000|9999)/',$value)) 
			|| (($dt = @strtotime($value)) === -1)) 
		{
			if (!preg_match('/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}/',$default)) {
				return $default;
			} else {
				$value = $default;
			}
		} else {
			$value = $dt;
		}
		if (!$value) {
			return '/!\\';
		}
		$tz = $this->_getUserTZ($tz);
		$const = 'TZN_DATETIME_'.$format;
		if (defined($const)) {
			$format = constant($const);
		} else if (!preg_match('/%/',$format)) {
			$format = TZN_DATETIME_SQL;
		}
		$value = strftime($format,$value+$tz);
		if (@constant('TZN_FORCE_UTF-8')) {
        	return utf8_encode($value);
        } else {
         return $value;
        }
	}

    function getLvl($keyval, $level) {
        if (is_object($this)) {
            $data =& $this->$keyval;
        } else {
        	$data =& $keyval;
        }
        $level = $level - 1;
        return $data{$level};
	}
	
	/* -- Private methods ---- */
	
	/**
	 * z : static function to retreive data (object or static)
	 */
	
	function _value($keyval,$default='')
	{
		if (is_object($this)) {
			if (preg_match("/^(.*)\((.*)\)$/i",$keyval,$m)) {
				$keyval = $m[1];
				if ($m[2]) {
					$value = call_user_func_array(array(&$this,$keyval),
						explode(',',$m[2]));
				} else {
					$value = $this->$keyval();
				}
			} else {
				if (is_numeric($keyval)) {
					$value = $keyval;
				} else if (array_key_exists($keyval,$this->_properties)) {
					$value = $this->$keyval;
				} else {
					$value = $keyval;
				}
				if (TZN_DEBUG == 3) {
					echo '['.$keyval.']=['.$value.']';
				}
			}
		} else {
			$value = $keyval;
		}
		//if (is_null($value)) {
		// echo '['.$value.'-'.$default.']';
		if (empty($value)) {
			$value = $default;
		}
		return $value;
	}
	
	function _strValue($arg)
	{
		$cut = 0; $pos = 1;
		if (is_int($arg[1])) {
			$cut = $arg[1];
			$pos++;
		}
		$default = $arg[$pos++];
		$style = $arg[$pos];
		$value = Tzn::_value($arg[0],$default);
		$value = strip_tags($value);
		if ($cut) {
			$value = str_replace("\r\n"," ",$value);
			if (($cut > 2) && (strlen($value) > $cut)) {
				$value = trim(substr($value,0,($cut-2))).".."; 
			}
		}
		switch (TZN_SPECIALCHARS)
		{
			case 1:
				$spe = array('&','<','>','"');
				$sfe = array('&amp;','&lt;','&gt;','&quot;');
				$value = str_replace($spe,$sfe,$value);
				break;
			case 2:
				$value = htmlspecialchars($value);
				break;
			case 3:
				$value = htmlentities($value);
				break;
		}
		return $value;
	}

	function _getUserTZ($tz=TZN_TZDEFAULT) {
		if (is_numeric($tz)) {
			$tz = intval($tz);
		} else if ($tz == 'server') {
			$tz = TZN_TZSERVER;
		} else if ($tz == 'user') {
			$tz = intval($_SESSION['tznUserTimeZone']);
		} else if (is_object($this) && isset($this->$tz)) {
			$tz = intval($this->$tz);
		} else {
			$tz = 0;
		}
		// error_log('tz = '.$tz);
		return $tz;
	}
	
	function _dteValue($value,$format='SQL',$default='')
	{
		$const = 'TZN_DATE_'.$format;
		if (defined($const)) {
			$format = constant($const);
		} else if (!preg_match('/%/',$format)) {
			$format = TZN_DATE_SQL;
        }
        if (is_null($value)) {
            $value = $default;
        }
		if (!$value || preg_match('/^(0000|9999)/',$value)) {
            // case 1: no date set
            return '9999-00-00';
		} else if ($value == 'now' || $value == 'NOW') {
			// case 2: now
            $value = time() - TZN_TZSERVER + $this->_getUserTZ('user');
        } else if (strpos($value,'/')) {
	        // dd/mm or mm/dd format
	        $arrValue = explode('/',$value);
	        if (@constant('TZN_DATE_US_FORMAT')) {
	            // US date format mm/dd
	            $month = $arrValue[0];
	            $day = $arrValue[1];
	        } else {
	            // common date format dd/mm
	            $day = $arrValue[0];
	            $month = $arrValue[1];
	        }
	        $year = (count($arrValue)>2)?$arrValue[2]:gmdate('Y');
	        // error_log("we have $day/$month/$year here");
	        $value = mktime (0,0,0, $month, $day, $year);
        } else {
            // try to parse english sentence
            $tmp = @strtotime($value);
            // error_log('check '.$value.': '.$tmp);
            if ($tmp == -1 || $tmp === false) {
                // invalid date format (non english language?)
                // try to translate
                /* $value = str_replace(
                    array_values($GLOBALS['langTznDate']),
                    array_keys($GLOBALS['langTznDate']),
                    $value); */
                // error_log('unknown date value: '.$value.' / '.$GLOBALS['langTznDate']['august']);
                if (is_array($GLOBALS['langTznDate'])) {
                    $value = strtr($value, array_flip($GLOBALS['langTznDate']));
                }
                // error_log(' &gt; '.$value);
                $tmp = strtotime($value);
            }
            if ($tmp == -1 || $tmp === false) {
                // still not valid?
                return false;
            }
        	$value = $tmp - TZN_TZSERVER + $this->_getUserTZ('user') ;
        }
        return strftime($format,$value);
    }
	
	function _dtmValue($value,$format='SQL',$tz=TZN_TZDEFAULT,$default='')
	{
		if ($value == 'now' || $value == 'NOW') {
			$value = TZN_NOW;
			$tz = 0;
		} else if ((preg_match('/^(0000|9999)/',$value)) 
			|| (($dt = @strtotime($value)) === -1)) 
		{
			if (!preg_match('/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}/',$default)) {
				return $default;
			} else {
				$value = $default;
			}
		} else {
			$value = $dt;
		}
		if (!$value) {
			return '0000-00-00';
		}
		$tz = $this->_getUserTZ($tz);
		$const = 'TZN_DATETIME_'.$format;
		if (defined($const)) {
			$format = constant($const);
		} else if (!preg_match('/%/',$format)) {
			$format = TZN_DATETIME_SQL;
		}
		return strftime($format,$value-$tz);
	}

	function dump($nested = '')
	{
       	// setting data coming from an array (GET, POST, SESSION or mySQL)
        foreach($this->_properties as $key => $type) {
        	if ($type == 'OBJ') {
				echo $nested.$key." [$type] {\r\n";
				$this->$key->dump($nested.'  ');
				echo $nested."} \r\n";
        	} else {
				echo $nested.$key." [$type] => "
					.((is_null($this->$key))?'NULL':$this->$key)."\r\n";
			}
        }
    }
	
	/* --- SET  -------------------------------------------------- */

	function initObjectProperties($nested = false) {
		foreach($this->_properties as $key => $type) {
			if ($type == 'OBJ') {
				if ($nested) {
					$this->$key = new $key();
				} else {
					if (!is_object($this->$key)) {
						$this->$key = new $key();
					}
					$this->$key->initObjectProperties(true);
				}
			}
		}
	}
	
	function setAuto(&$data, $nested = '', $method='_setFromHttp')
	{
        if (is_object($data)) {
        	$method = '_setFromObject';
        }
        foreach($this->_properties as $key => $type) {
        	if ($type == 'LVL' && ($method == '_setFromHttp')) {
        		continue;
        	} else if ($key == 'id') {
        		if ($nested) {
					$this->$method($data,'id',$nested.'Id');
				} else if (is_object($data) || @constant('TZN_PHP4_SQLITE')) {
					$this->$method($data,'id',$this->getIdKey());
        		} else {
					$this->$method($data,'id','id');
				}
        	} else if ($type == 'OBJ') {
        		if ($nested) {
        		// set only id of 2nd level nested object
					$obj = new $key();
					$obj->$method($data,'id',$nested.'_'.$key.'Id');
					// $nid = $nested.'_'.$key.'Id';
					// echo "setting $key ID=".$data->$nid." to $key by $method <br/>";
					$this->$key = $obj;
					unset($obj);
				} else {
					if (!is_object($this->$key)) {
						$this->$key = new $key();
					}
					$this->$key->setAuto($data,$key,$method);
				}
        	} else if ((preg_match('/^IMG/i',$type)) && ($method == '_setFromHttp')) {
        		// upload
        		$arrType = explode(',',$type);
        		$arrType[0] = $key;
        		call_user_func_array(array(&$this,'uplImg'),$arrType);
        	} else {
        		$nKey = $nested?$nested.'_'.$key:$key;
				$this->$method($data,$key,$nKey);
				/*
				if ($nested && ($method == '_setFromHttp')) {
					echo "$nested: setting $key as ".$this->$key." ($nKey) <br/>";
				}
				*/
			}
        }
    }

    function _setDirect(&$data,$key,$dkey) {
        if (isset($data[$dkey])) {
			$this->set($key,$data[$dkey]);
		}
    }
    
    function _setFromHttp(&$data,$key,$dkey) {
    	if (isset($data[$dkey])) {
			$this->set($key, $this->getHttp($data[$dkey]));
		}
    }
    
    function _setFromObject(&$data,$key,$dkey) {
    	$this->$key = $data->$dkey;
    }

	function getHttp($value,$sanitize=false) {
    	if ($value && (get_magic_quotes_gpc() || @constant('TZN_MAGIC_FIX'))) {
			// remove fucking magic quotes
			$value=stripslashes($value);
		}
		if ($sanitize) {
			switch ($sanitize) {
				case 'html':
					$value = str_replace("'",'&quot;',strip_tags($value));
					break;
				default:
					$value = htmlspecialchars($value);
					break;
			}
		}
		return $value;
    }

	function setHttp($key,$value) {
		if (!is_null($value)) {
			$this->set($key, $this->getHttp($value));
			/*
			$arrType = explode(',',$this->_properties[$key]);
			if ($key == 'id') {
				$this->setUid($value);
			} else if ((!is_null($value)) || ($arrType[0] == 'IMG')) {
				$arrArgs = func_get_args();
				echo "calling... set".$arrType[0]." with <pre>";
				print_r($arrArgs);
				echo "</pre>";
				exit;
			}
			*/
		}
	}
    
    function set($key,$value)
	{
		$arrType = explode(',',$this->_properties[$key]);
		if ($key == 'id') {
			$this->setUid($value);
		} else if ((!is_null($value)) || ($arrType[0] == 'IMG')) {
			$arrArgs = func_get_args();
			if ($arrType[0]) {
				return call_user_func_array(array(
					&$this,'set'.$arrType[0]),$arrArgs);
			} else {
				echo "OOPS: error calling set() (no type defined for $key)";
				exit;
			}
		}
	}
    
    function setUid($value) {
    	if (preg_match('/^[0-9a-zA-Z]*$/',$value)) {
	    	$this->id = $value;
	    }
    }
	
	function getReg($value,$regexp) {
		if (ereg($regexp,$value)) {
			return $value;
		} else {
			return false;
		}
	}
	
	function setReg($key, $value, $regexp) {
		if (ereg($regexp,$value)) {
			$this->$key = $value;
			return true;
		} else {
			return false;
		}
	}
	
	function setInt($key, $value)
	{
		$value = preg_replace(array('/[a-zA-Z]/','/ /','/,/'),'',$value);
		$this->$key = intval($value);
	}
	
	function setNum($key, $value)
	{
		$value = preg_replace(array('/[a-zA-Z]/','/ /','/,/'),'',$value);
		$this->$key = abs(intval($value));
	}
	
	function setDec($key, $value)
	{
		$value = preg_replace(array('/[a-zA-Z]/','/ /','/,/'),'',$value);
		// echo '{'.$value.'}'.floatval($value);
		$this->$key = floatval($value);
	}
	
	function setStr($key, $value)
	{
		$this->$key = strip_tags($value);
	}
	
	function setTxt($key, $value)
	{
		$this->$key = 
			preg_replace("/<script[^>]*>[^<]+<\/script[^>]*>/is","", $value);
	}
	
	function setEml($key, $value)
	{
		$value = ($value)?trim($value):$value;
		if ($value) {
			if (preg_match("/^[a-z0-9]([a-z0-9_\-\.]*)@([a-z0-9_\-\.]*)\.([a-z]{2,6})$/i",$value))
			{
				$this->$key = $value;
			} else {
				$this->e($key,"invalid email");
			}
		} else if (!is_null($value)) {
			$this->$key = '';
		}
	}
	
	function setUrl($key, $value)
	{
		$value = ($value)?trim($value):$value;
		if ($value && (!preg_match("/^(http|https|ftp)?:\/\//i",$value))) {
			$value = "http://".$value;
		}
		if ($value == "http://") {
			$value = "";
		}
		$this->$key = $value;
	}
	
	function setBbs($key, $value)
	{
		$value = preg_replace("/<script[^>]*>[^<]+<\/script[^>]*>/is"
			,"", $value); 
		$value = preg_replace("/<\/?(div|span|iframe|frame|input|"
			."textarea|script|style|applet|object|embed|form)[^>]*>/is"
			,"", $value);
		$this->$key = $value;
	}
	
	function setHtm($key, $value)
	{
		// scary
		$this->$key = $value;
	}

	function setImg($key,$value)
	{
		// sImg (key, ([width,height], [folder])* )
		// DATABASE
		$this->$key = $value;
	}
	
	function uplImg($key)
	{
		// HTTP upload
		$objFile = new TznFile();		
		// set old file name
		$objFile->oldFile = $this->$key;
		// upload and set arguments
		$arrArgs = func_get_args();
		if (count($arrArgs) == 1) {
			// if no specific parameter for size and folder, gets default from properties
			$arrArgs = explode(',',$this->_properties[$key]);
       		$arrArgs[0] = $key;
		}
		$ok = call_user_func_array(array(
			&$objFile,'upload'),$arrArgs);
		// set value
		$tmpKey = $key.'_tmp';
		if ($ok) {
			// set value from upload
			$this->$key = $objFile;
			$_SESSION[$tmpKey] = $objFile;
			return true;
		} else if ($value = $_SESSION[$tmpKey]) {
			// set value from session
			if ($value->tempName && file_exists(TZN_FILE_TEMP_PATH.$value->tempName)) {
				$this->$key = $value;
				return true;
			} else {
				unset($_SESSION[$tmpKey]);
			}
		}
		return false;
	}
	
	function setBol($key, $value)
	{
		$this->$key = $value?1:0;
	}
	
	function setDte($key, $value)
    {
        $this->$key = Tzn::_dteValue($value);
	}
	
	function setDtm($key, $value, $tz=TZN_TZSERVER)
	{
		$this->$key = Tzn::_dtmValue($value,'SQL',$tz);
	}
	
	function setObj($key, $value)
	{
		$class = ucFirst($key);
		$obj = new $class;
		$obj->setAuto($value,$key); // nested
		$this->$key = $obj;
	}

    function setLvl($keyval, $param1, $param2=null) {
		 if (is_object($this)) {
            $data =& $this->$keyval;
        } else {
        	$data =& $keyval;
        }
		if (is_null($param1)) {
			return false;
		} else if (is_array($param1)) {
			$this->setLvlAuto($name,$param1);
		} else {
			$level = $param1 - 1;
			if ($param2) {	
				$data{$level} = $param2;
			} else {
				$data{$level} = '0';
			}
		}
    }
    
    function setLvlAuto($name,$values) {
    	$data =& $this->$name;
    	if (is_array($values)) {
			for ($i=0, $j=strlen($data); $i < $j; $i++) {
				if ($values[$i]) {
					$data{$i} = $values[$i];
				} else {
					$data{$i} = '0';
				}
			}
    	} else {
    		for ($i=0, $j=strlen($data); $i < $j; $i++) {
    			$data{$i} = '0';
    		}
    	}
    }
    
	/* --- PRINT  ------------------------------------------------ */

    function f($key)
    {
        ob_start();
        $this->p($key);
        $str = ob_get_contents();
        ob_clean();
        return $str;
    }

	function p($key)
	{
		$arrArgs = func_get_args();
		if ($dfn = $this->_properties[$key]) {
			$arrType = explode(',',$dfn);
			if ($arrType[0] == 'OBJ') {
				// indirect call to object
				array_shift($arrArgs[0]); // remove first parameter (key)
				$obj = $this->$key;
				if (is_object($obj)) {
					return call_user_func_array(array(&$obj,'p'), $arrArgs);
				}
			} else if (func_num_args() > 1) {;
				return call_user_func_array(array(
					&$this,'p'.$arrType[0]),$arrArgs);
			} else {
				$type = $arrType[0];
				$arrType[0] = $key;
				// echo "calling p$type with "; print_r($arrType);
				return call_user_func_array(array(&$this,'p'.$type),$arrType);
			}
		}
		
		// print call_user_func_array(array(&$this,'get'), $arrArgs);
	}
		
	function pStr($keyval)
	{
		print Tzn::_strValue(func_get_args());		
	}

	function pNum($keyval,$default='')
	{
		print Tzn::getNum($keyval,$default);
	}
	
	function pInt($keyval,$default='')
	{
		print Tzn::getInt($keyval,$default);
	}

	function pDec($keyval,$param1='',$param2='')
	{
		print Tzn::getDec($keyval,$param1,$param2);
	}
	
	function pEml($keyval,$default='',$style='')
	{
		$value = Tzn::_value($keyval);
		if ($value) {
			print '<a href="mailto:'.$value.'"'.Tzn::_style($style)
				.'">'.$value.'</a>';
		} else {
			print $default;
		}
	}
	
	function pUrl($keyval,$target='',$default='',$style='',$xtra='')
	{
		$value = Tzn::_value($keyval);
		if ($value) {
			$str = '<a href="'.$value.'" '.Tzn::_style($style);
			if ($target) {
				$str .= 'target="'.$target.'" ';
			}
			if ($xtra) {
				$str .= $xtra;
			}
			$str .= '>'.preg_replace("/^(http[s]?|ftp):\/\//i",''
				,$value).'</a>';
			print $str;
		} else {
			print $default;
		}
	}
	
	function pTxt($keyval)
	{
		print nl2br(Tzn::_strValue(func_get_args()));
	}
	
	function pBbs($keyval,$default='')
	{
		$value = Tzn::_value($keyval,$default);
		$value = preg_replace("/(?<!\")((http|ftp)+(s)?"
			.":\/\/[^<>\s]+)/i", "<a href=\"\\0\" target=\"_blank\">\\0</a>", $value);
		print nl2br($value);
	}
	
	function pHtm($keyval,$default='&nbsp;')
	{
		print Tzn::_value($keyval,$default);
	}

	function pImg($keyval,$default='&nbsp;',$width=9999,$height=9999,$extra='') {
		// pImg (key, [default, [width,height]])
		if (is_object($this)) {
			$value = $this->_value($keyval);
		} else {
			$value = $keyval;
		}
		if (!$value) {
			print $default;
		} else {
			if (is_object($value)) {
				$value = $value->tempName;
			}
			$objThumb = new TznThumbnail($value, $width, $height);
			$str = $objThumb->getTag();
			if (!$extra) {
				print $str;
			} else {
				print str_replace('<img','<img '.$extra,$str);
			}
		}
	}
	
	function pBol($keyval,$default='',$yes=TZN_BOOL_TRUE,$no=TZN_BOOL_FALSE)
	{
		$value = Tzn::getBol($keyval,$default);
		print $value?$yes:$no;
	}
		
	function pDte($keyval,$format='SQL',$default='')
	{
		print Tzn::getDte($keyval,$format,$default);
	}
	
	function pDtm($keyval,$format='SQL',$tz=TZN_TZDEFAULT,$default='-')
	{
		if (preg_match('/^(0000|9999)/',$value)) {
			$value = $default;
		} else {
			$value = Tzn::getDtm($keyval,$format,$tz,$default);
		}
		print $value;
	}
	
	function pTmz($keyval,$default='') 
	{
		$value = $keyval;
		if (is_object($this)) {
			$value = $this->_value($keyval);
		}
		print Tzn::_tmz($value);
	}

    function pLvl($name,$level,$default=null,$yes=TZN_BOOL_TRUE,$no=TZN_BOOL_FALSE)
	{
		if (is_object($this)) {
            $data =& $this->$name;
        } else {
        	$data = '';
        }
        $level--;
		if ($level < strlen($data) && $data{$level}) {
			echo $yes;
		} else {
			echo $no;
		}
	}
	
	function _tmz($tz)
	{
		$str = "GMT";
        if ($tz != null) {
            $tza = abs($tz);
            $tzHour = ($tza / 3600);
            $tzMin = ($tza % 3600);
            if ($tz >= 0) {
                $str .= "+";
            } else {
                $str .= "-";
            }
            if ($tzHour < 10) {
                $str .= "0";
            }
            $str .= $tzHour;
            if ($tzMin < 10) {
                $str .= "0";
            }
            $str .= $tzMin;
        }
        return $str;
	}

	/* --- FORM  -------------------------------------------------- */
		
	function qHidden($keyval,$default='')
	{
		if (is_object($this)) {
			$value = Tzn::_value($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<input type="hidden" name="'.$keyval.'" value="'.$value.'" />';
		print $form;
	}
	
	function qText($keyval,$default='',$style='',$xtra='')
	{	
		if (is_int($style)) {
			$len = $style;
			$style = '';
		}
		if (is_object($this) && ($this->_properties[$keyval])) {
			$value = Tzn::_value($keyval,$default);
			if (!$style) {
				$arrType = explode(',',$this->_properties[$key]);
				switch ($arrType[0]) {
				case 'INT':	
					$style= 'tznFormInt';
					break;
				case 'NUM':	
					$style= 'tznFormNum';
					break;
				case 'DEC':	
					$style= 'tznFormDec';
					break;
				case 'STR':
				case 'TXT':
				case 'BBS':
				case 'URL':
				case 'EML':
					$style= 'tznFormStr';
					break;
				case 'INT':	
					$style= 'tznFormInt';
					break;
				}
			}
		} else /* if ($_REQUEST[$keyval]) {
			$value = $_REQUEST[$keyval];
		} else */ {
			$value = $default;
		}
		/*
		if ($value == $keyval) {
			$value = '';
		}
		*/
		$value = str_replace('"','&quot;',$value);
		$form = '<input type="text" name="'.$keyval.'" value="'.$value.'" ';
		if ($len) {
			$form .= 'size="'.$len.'" ';
		}
		if ($style) {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		Tzn::pError($keyval);
	}
	
	function qPassword($keyval,$default='',$style='',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::_value($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<input type="password" name="'.$keyval.'" ';
		if (is_int($style)) {
			$form .= 'size="'.$style.'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		Tzn::pError($keyval);
	}
	
	function qTextArea($keyval,$default='',$style='tznFormTxt',$xtra='')
	{
		if (is_object($this)) {
			$value = htmlspecialchars(Tzn::_value($keyval,$default));
			//$value = $this->get($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<textarea name="'.$keyval.'" ';
		if (strpos($style,',')) {
			// cols,rows
			$arr = explode(',',$style);
			$form .= 'cols="'.$arr[0].'" rows="'.$arr[1].'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '>'.$value.'</textarea>';
		print $form;
		Tzn::pError($keyval);
	}

	function qBbs($keyval,$default='',$style='tznFormBbs',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::_value($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<textarea id="'.$keyval.'" name="'.$keyval.'" ';
		if (strpos($style,',')) {
			// cols,rows
			$arr = explode(',',$style);
			$form .= 'cols="'.$arr[0].'" rows="'.$arr[1].'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= ' mce_editable="true">'.$value.'</textarea>';
		print $form;
		Tzn::pError($keyval);
	}
	
	function qHtml($keyval,$default='',$style='tznFormHtml',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::getHtm($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<textarea name="'.$keyval.'" ';
		if (strpos($style,',')) {
			// cols,rows
			$arr = explode(',',$style);
			$form .= 'cols="'.$arr[0].'" rows="'.$arr[1].'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '>'.$value.'</textarea>';
		print $form;
		Tzn::pError($keyval);
	}
	
	function qImage($keyval,$default='',$style='',$xtra='') {
		if (is_object($this)) {
			$value = Tzn::_value($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '';
		if ($value) {
			Tzn::pImg($keyval,'',90,60);
			$form = '<br />';
		}
		$form .= '<input type="file" name="'.$keyval.'" value="" ';
		$form .= Tzn::_style($style);
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		Tzn::pError($keyval);
	}

	function qFile($keyval,$default='',$style='',$xtra='') {
		$form .= '<input type="file" name="'.$keyval.'" value="" ';
		$form .= Tzn::_style($style);
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		Tzn::pError($keyval);
	}
	
	function qCheckbox($keyval,$default=0,$style='',$xtra='')
	{
		$value = Tzn::getBol($keyval,$default);
		$form = '<input type="checkbox" id="c_'.$keyval.'" name="'.$keyval.'" value="1" ';
		$form .= Tzn::_style($style);
		if ($value) {
			$form .= 'checked="true" ';
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		Tzn::pError($keyval);
	}

	function qCheckbox2($name,$value,$checked=false,$style='',$xtra='')
	{
		$form = '<input type="checkbox" name="'.$name.'" value="'.$value.'" ';
		$form .= Tzn::_style($style);
		if ($checked) {
			$form .= 'checked="true" ';
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
	}

	function qSelect($name,$keyval,$default='',$nochoice='',
		$style='tznFormSelect',$xtra='')
	{
		$form = '<select name="'.$name.'" ';
		$form .= Tzn::_style($style);
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '>';
		if ($nochoice) {
			$form .='<option value="">'.$nochoice.'</option>';
		}
		if (is_object($this)) {
			if ($this->rMore()) {
				while ($item = $this->rNext()) { 
					$form .= '<option value="'.$item->id.'"';
					if ($item->id == $default) {
						$form .= ' selected="true"';
					}
					$form .= '>'.$item->_value($keyval).'</option>';
				}
			}
		}
		$form .= '</select>';
		print $form;
		Tzn::pError($name);
	}

	function qSelect2($name,$key,$value,$default='',$nochoice='',
		$style='tznFormSelect',$xtra='')
	{
		$form = '<select name="'.$name.'" ';
		$form .= Tzn::_style($style);
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '>';
		if ($nochoice) {
			$form .='<option value="">'.$nochoice.'</option>';
		}
		if (is_object($this)) {
			if ($this->rMore()) {
				while ($item = $this->rNext()) { 
					$v2 = $item->_value($key);
					$form .= '<option value="'.$v2.'"';
					if ($v2 == $default) {
						$form .= ' selected="true"';
					}
					$form .= '>'.$item->_value($value).'</option>';
				}
			}
		}
		$form .= '</select>';
		print $form;
		Tzn::pError($name);
	}
	
	function qTimeZone($keyval,$default=0,$style='',$xtra='') {
		if (is_object($this)) {
			$value = Tzn::_value($keyval,$default);
		} else {
			$value = $default;
		}
        $form = '<select name="'.$keyval.'" ';
        $form .= Tzn::_style($style);
        $form .= $xtra.'>';
        for ($i=-12; $i<=12; $i++) {
            $j = ($i * 3600);
            $form .= '<option value="'.$j.'"';
            if ($j == $value) {
                $form .=' selected="true"';
            }
            $form .=">".Tzn::_tmz($j)."</option>";
        }
        $form .= "</select>";
        print $form;
    }
	
	function qDate($keyval,$default='',$style='tznFormDate',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::getDte($keyval,'FRM',$default);
		} else {
			$value = $default;
		}
		Tzn::_dateField($keyval,$value,$style,$xtra);
		Tzn::pError($keyval);
	}
	
	function qDateTime($keyval,$tz=TZN_TZDEFAULT,$default=''
		,$style='tznFormDate',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::getDte($keyval,'FRM',$tz,$default);
		} else {
			$value = $default;
		}
		Tzn::_dateField($keyval,substr($value,0,10),$style,$xtra);
		$form = ', <input type="text" name="'.$keyval.'Time" value="'
			.substr($value,11,5).'" ';
		if (is_int($style)) {
			$form .= 'size="'.$style.'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		Tzn::pError($keyval);
	}
	
	function qSubmit($keyval,$default='',$style='',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::get($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<input type="submit" name="'.$keyval.'" value="'.$value.'" ';
		if (is_int($style)) {
			$form .= 'size="'.$style.'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		// Tzn::pError($keyval);
	}

	function qButton($keyval,$default='',$style='',$xtra='')
	{
		if (is_object($this)) {
			$value = Tzn::get($keyval,$default);
		} else {
			$value = $default;
		}
		$form = '<input type="button" name="'.$keyval.'" value="'.$value.'" ';
		if (is_int($style)) {
			$form .= 'size="'.$style.'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
		// Tzn::pError($keyval);
	}

    function qLevel($name, $level, $default='') {
		if (is_object($this)) {
            $data =& $this->$name;
        } else {
        	$data = '';
        }
        $level--;
		echo('<input type="checkbox" name="'.$name.'['.$level.']" value="1"');
		if ($level < strlen($data) && $data{$level}) {
			echo(' checked="true"');
		}
		echo(' />');
	}
	
	function _dateField($name,$value,$style,$xtra)
	{
		/* -TODO- make real date fields */
		$form = '<input type="text" name="'.$name.'" value="'.$value.'" ';
		if (is_int($style)) {
			$form .= 'size="'.$style.'" ';
		} else {
			$form .= Tzn::_style($style);
		}
		if ($xtra) {
			$form .= $xtra.' ';
		}
		$form .= '/>';
		print $form;
	}
	
	/**
	 * _style : create class/style element
	 * @access private 
	 */
	function _style($style)
	{
		if ($style) {
			if (strpos($style,':')) {
				// style definition eg. color:#fff
				$slabel = 'style';
			} else {
				$slabel = 'class';
			}
			return $slabel.'="'.$style.'" ';
		} else {
			return '';
		}
	}
	
	/* --- Error Methods -------------------------------------------- */
	
	function checkEmpty($fields) {
		$arrFields = explode(',',$fields);
		foreach ($arrFields as $field) {
			$field = trim($field);
			if ((!$this->$field) 
				|| ((is_object($this->$field)) 
				&& (!$this->$field->id)))
			{
				$this->e($field,$GLOBALS['langTznCommon']['field_compulsory']);
			}
		}
		return (count($this->_error) == 0);
	}

	/**
	 * e get error
	 */
    function e($key,$value='')
    {
        if ($key) {
        	if ($value) {
        		$this->_error[$key] = $value;
        	} else {
	            return $this->_error[$key];
	        }
        }
    }
    /**
	 * gError 
	 * an alias for e()
	 */
    function gError($key)
    {
    	$this->e($key,$value);
    }
    
    /**
	 * print error
	 * this is the function you may redefine in sub classes
	 */
    function printError($key)
    {
        if ($this->_error[$key]) {
            print '<span class="tznError">'.$this->_error[$key].'</span>';
        }
    }
    
    /**
     * pError
     * an alias for printError, for both static use and object instance
     */
    function pError($key)
    {
    	if (is_object($this)) {
	        $this->printError($key);
	    }
    }

	function hasError() 
	{
		return (count($this->_error));
	}


    function printErrorList()
    {
        // usually used for debug
		if (count($this->_error)) {
			forEach($this->_error as $key => $value) {
				echo $key." =&gt; ".$value."<br/>";
			}
		}
    }
        
    /* --- Miscellaneous  --------------------------------- */

    function cloneme() {
		if (preg_match('/^4/',phpversion())) {
			// PHP 4 (auto clone)
			return $this;
		} else {
			// PHP 5 or > (copy by reference by default)
			$obj = clone($this);
			// clone nested objects
			foreach($this->_properties as $key => $type) {
				if (preg_match('/^OBJ/i',$type)) {
					$obj->$key = clone($this->$key);
				}
			}
			if ($arrExtra) {
				// extra fields to clone
				foreach($arrExtra as $extra) {
					$obj->$extra = clone($this->$extra);
				}
			}
			return $obj;
		}
	}
    
    function utf8_substr($str,$from,$len){
    	if (function_exists('mb_substr')) {
    		return mb_substr($str,$from,$len,"UTF-8");
    	} else {
			return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
	                       '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
	                       '$1',$str);
		}
	}
    
    function qSession()
    {
    	if (@constant('TZN_TRANS_ID')) {
			print '<input type="hidden" name="'.ini_get('session.name')
    			.'" value="'.session_id().'" />';
    	}
    }

	function getHttpParameter($method,$key,$save=false,$recover=false) {
		$arrValue = array();
		switch($method) {
			case 'get':
				$arrValue =& $_GET;
				break;
			case 'post':
				$arrValue =& $_POST;
				break;
			default:
				$arrValue =& $_REQUEST;
				break;
		}
		//error_log('PARAM '.$key.': ['.$method.']='.$arrValue[$key].' / session='.$_SESSION[$key]);
		$value = null;
		if (isset($arrValue[$key])) {
			// got from HTTP query string
			$value = $arrValue[$key];
			if (get_magic_quotes_gpc() && $value) {
				// remove fucking magic quotes
				$value=stripslashes($value);
			}
		} else if ($recover) {
			$value = $_SESSION[$key];
		}
		if ($save) {
			// save to session
			if ($value) {
				$_SESSION[$key] = $value;
			} else {
				unset($_SESSION[$key]);
			}
		}
		return $value;
	}
    
    function redirect($url,$message='',$forceRef=false)
    {
    	if (@constant('TZN_TRANS_ID')) {
			if (session_id() && (!preg_match('/'.session_id().'/',$url))) {
				$url = Tzn::concatUrl($url,session_name()
					.'='.session_id());
			}
    	}
    	if ($message) {
    		$message = preg_replace("/<script[^>]*>[^<]+<\/script[^>]*>/is"
			,"", $message); 
			$message = preg_replace("/<\/?(div|span|iframe|frame|input|"
				."textarea|script|style|applet|object|embed|form)[^>]*>/is"
				,"", $message);
			if (@constant('TZN_TRANS_STATUS')) {
				$_SESSION['tznMessage'] = $message;
			} else {
				$url = Tzn::concatUrl($url,'tznMessage='.urlencode($message));
			}
    	}
		if ($forceRef) {
			$url = Tzn::concatUrl($url,'ref='.rawurlencode($_SERVER['REQUEST_URI']));
		}
    	header("Location: ".str_replace('&amp;','&',$url));
    	exit;
    }
    
    function concatUrl($url,$param)
    {
    	// hash
    	$hash = '';
		if ($pos = strpos($url,'#')) {
			$hash = substr($url,$pos);
			$url = substr($url,0,$pos);
		}
		if ($pos = strpos($param,'#')) {
			$hash = substr($param,$pos);
		}
		// params
		$url = str_replace('&amp;','&',$url);
		if ($pos = strpos($url,'?')) {
			$arrParam = explode('=',$param);
			if (strpos($url,$arrParam[0].'=')) {
				// parameter already in url
				$strQuery = substr($url,$pos+1);
				$arrQuery = explode('&',$strQuery);
				$arrResult = array();
				$found = false;
				foreach ($arrQuery as $value) {
					if (preg_match('/^'.$arrParam[0].'=/', $value)) {
                        if ($arrParam[1]) {
                            // add only if has a value
    						$arrResult[] = $param;
                        }
						$found = true;
					} else {
						$arrResult[] = $value;
					}
				}
				if ($found) {
					$url = substr($url,0,$pos).'?'.implode('&',$arrResult);
				} else {
					$url .= '&'.$param;
				}
			} else {
				$url .= '&'.$param;
			}
    	} else {
    		$url .= '?'.$param;
    	}
    	return str_replace('&','&amp;',$url).$hash;
    }
	
	
}



class TznCollection
{
	var $_data;
	
	function TznCollection($data)
	{
		$this->_data = $data;
	}
	
	function p($key,$default='-') {
		if ($key) {
			echo $this->_data[$key];
		} else {
			echo $default;
		}
	}
	
	function qSelect($name, $default=null,$optional=false,
		$style='tznFormSelect',$xtra='')
	{
		$form = '<select name="'.$name.'" ';
		$form .= Tzn::_style($style);
		if ($xtra) {
			$form .= $xtra;
		}
		$form .= '>';
		if ($optional) {
			$form .='<option value="">'.$optional.'</option>';
		}
		foreach ($this->_data as $key => $value) {
			$form .= '<option value="'.$key.'"';
			if ($key == $default) {
				$form .= ' selected="selected"';
			}
			$form .= '>'.$value.'</option>';
		}
		$form .= '</select>';
		echo $form;
	}
}
