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
 * @package    Tirzen Framework MySQL database
 * @author     Stan Ozier <tech@tirzen.com>
 * @copyright  2006-2010 - Stan Ozier
 * @license    http://www.gnu.org/licenses/lgpl.txt (LGPL)
 * @link       http://www.tirzen.net/tzn/
 * @version    1.8
 */
 
/**
 * TZN: Tirzen Framework (TZN) (mysql) DB class
 *
 * @package    TZN-mySQL
 * @author     Stan Ozier <stan@tirzen.net>
 * @version    1.8
 */



/* ------------------------------------------------------------------------ *\
define("TZN_DB_DEBUG",0);
	// 0 quiet, 1 show error, 2 development level, 3 full debug
define("TZN_DB_HOST","localhost");
define("TZN_DB_USER","test");
define("TZN_DB_PASS","test");
define("TZN_DB_BASE","test");
define("TZN_DB_PERMANENT",1);
\* ------------------------------------------------------------------------ */

define('TZN_DB_COUNT_OFF',111);
define('TZN_DB_COUNT_AUTO',112);

/**
 * DB Connection
 * connects to mySQL database
 * @author   Stan Ozier <stan@tirzen.net>
 * @package  TZN-mySQL
 */

class TznDbConnection {
	var $_dbHost;
	var $_dbUser;
	var $_dbPass;
	var $_dbBase;
	var $_dbLink;
    var $_critical;

	function TznDbConnection($host=null, $user=null, $pass=null, $base=null) {
        if ($host && $user && $base) {
            $this->_dbHost = $host;
            $this->_dbUser = $user;
            $this->_dbPass = $pass;
            $this->_dbBase = $base;
        } else {
            $this->_dbHost = TZN_DB_HOST;
            $this->_dbUser = TZN_DB_USER;
            $this->_dbPass = TZN_DB_PASS;
            $this->_dbBase = TZN_DB_BASE;
        }
        $this->_critical = true;
	}

	function connect() {
		if (!$this->_dbLink) {
			if (@constant('TZN_DB_PERMANENT')) {
				$this->_dbLink = @mysql_pconnect($this->_dbHost,$this->_dbUser
					,$this->_dbPass);
			} else {
				$this->_dbLink = @mysql_connect($this->_dbHost,$this->_dbUser
					,$this->_dbPass);
			}
			if (!$this->_dbLink) {
                if (!$this->_critical) {
                    $this->_error['db'] = @mysql_error();
                } else if (defined("TZN_DB_ERROR_PAGE") && 
					(constant("TZN_DB_ERROR_PAGE")))
				{
                    $_REQUEST['tznMessage'] = 'Can not connect to database<br />'
                        .@mysql_error();
                    include TZN_DB_ERROR_PAGE;
                    exit;
				} else {
					die('Cannot connect to Database');
				}
                return false;
			}
			if (!@mysql_select_db($this->_dbBase,$this->_dbLink)) {
                if (!$this->_critical) {
                    $this->_error['db'] = @mysql_error();
                } else if (defined("TZN_DB_ERROR_PAGE") && 
                	(constant("TZN_DB_ERROR_PAGE")))
                {
                    $_REQUEST['tznMessage'] = 'Can not select database<br />'
                        .@mysql_error();
                    include TZN_DB_ERROR_PAGE;
                    exit;
				} else {
					die('Database does not exist');
				}
                return false;
			}
		}
        return true;
	}

	function isConnected() {
		if ($this->_dbLink) {
			return true;
		} else {
			return false;
		}
	}

    function getTables() {
        $arrTables = array();
        if ($result = @mysql_query('SHOW TABLES')) {
            while($row = mysql_fetch_row($result)) {
                $arrTables[] = $row[0];
            }
            return $arrTables;
        }
        return false;
    }

    function querySelect($qry) {
		return new TznDbResult($qry,@mysql_query($qry,$this->_dbLink),$this->_critical);
	}

	function queryAffect($qry) {
		if ($this->isConnected()) {
			@mysql_query($qry,$this->_dbLink);
			if (($affected_row = mysql_affected_rows($this->_dbLink)) == -1) {
				switch(TZN_DB_DEBUG) {
				case 3:
                case 2:
					$strError = '<code>'.htmlspecialchars($qry).'</code><br/>';
				case 1:
					$this->_error['db'] = 'Error SQL #'.mysql_errno().': '.mysql_error();
                    $strError .= $this->_error['db'];
                default:
                    if ($this->_critical) {
                        if (defined("TZN_DB_ERROR_PAGE") &&
                            (constant("TZN_DB_ERROR_PAGE"))) 
                        {
                            $_REQUEST['tznMessage'] = 'SQL Error (affect)<br />'
                                .$strError;
                            include TZN_DB_ERROR_PAGE;
                            exit;
                        } else {
                            die('<div id="debug">SQL error (affect)<br />'.$strError.'</div>');
                        }
                    }
                    break;
				}
				return false;
			} else if (TZN_DB_DEBUG == 3) {
				echo "<code>".htmlspecialchars($qry)."</code><br/>";
			}
			return ($affected_row)?$affected_row:TRUE;
		} else {
			echo ("not connected to database");
			exit;
			return false;
		}
	}
}

/**
 * DB Result
 * represents a mySQL result set
 * @author   Stan Ozier <stan@ozier.net>
 * @package  DB
 */

class TznDbResult {
    var $_dbResult;
    var $_count;
    var $_idx;

    function TznDbResult($qry,$result = null,$critical=true) {
        if ($result) {
        	if (TZN_DB_DEBUG == 3) {
        		echo "<code>".htmlspecialchars($qry)."</code><br/>";
        	}
            $this->_dbResult = $result;
            $this->_count = mysql_num_rows($result);
            $this->_idx = 0;
			return $this->_count;
        } else {
            switch(TZN_DB_DEBUG) {
            case 3:
            case 2:
                $strError = '<code>'.htmlspecialchars($qry).'</code><br/>';
            case 1:
                $this->_error['db'] = 'Error SQL #'.mysql_errno().': '.mysql_error();
                $strError .= $this->_error['db'];
            default:
                if ($critical) {
                    if (defined("TZN_DB_ERROR_PAGE") &&
                        (constant("TZN_DB_ERROR_PAGE"))) 
                    {
                        $_REQUEST['tznMessage'] = 'SQL Error (select)<br />'
                            .$strError;
                        include TZN_DB_ERROR_PAGE;
                        exit;
                    } else {
                        die('<div id="debug">SQL error (select)<br />'.$strError.'</div>');
                    }
                }
                break;
            }
            return false;
        }
    }

    function rCount() {
        return $this->_count;
    }

    function rNext() {
        $row = @mysql_fetch_object($this->_dbResult);
        if (!$row) {
			// $this->freeResult();
			return false;
		}
		$this->_idx++;
		return $row;
	}

	function rColumns() {
		if ($this->_count) {
			$row = @mysql_fetch_assoc($this->_dbResult);
			$arrCols = array_keys($row);
			mysql_data_seek($this->_dbResult,$this->_idx);
			return $arrCols;
		} else {
			return false;
		}
	}

	function rSkip($num = 1) {
		$next = $this->_idx + $num;
		if (($next < $this->_idx) && (@mysql_data_seek($this->_dbResult, $next))) 
		{
			$this->_idx += $num;
			return true;
		} else {
			return false;
		}
	}

	function rItem($num) {
		if (($num < $this->_idx) && (@mysql_data_seek($this->_dbResult, $num))) {
			$this->_idx = $num;
			return $this->rNext();
		} else {
			return false;
		}
	}

	function rReset() {
		if (@mysql_data_seek($this->_dbResult, 0)) {
			$this->_idx = 0;
			return true;
		} else {
			return false;
		}
	}

    function rMore() {
        if ($this->_idx < $this->_count) {
            return true;
        } else {
            return false;
        }
    }

    function rFree() {
		if ($this->_dbResult) {
			@mysql_free_result($this->_dbResult);
          }
        $this->_idx = 0;
        $this->_count = 0;
      }
}

/**
 * Static Result
 * Equivalent of a resultset in an array
 * @author   Stan Ozier <stan@tirzen.com>
 * @package  DB
 */

class TZNStaticResult {

	var $_itemList;
	var $_itemListIdx;
	var $_numRows;
	var $_count;
	var $_indexed;

	function TZNStaticResult($itemList=null, $indexed=false) {
		$this->_indexed = $indexed;
		$this->_itemList = array();
		$this->mergeList($itemList);
		$this->_count = 0;
		return true;
	}
	
	function mergeList($itemList) {
		if (($itemList) && (is_array($itemList))) {
			if (count($this->_itemList)) {
				$this->_itemList = array_merge($this->_itemList,$itemList);
				if ($this->_indexed) {
					ksort($this->_itemList);
				} else {
					asort($this->_itemList);
				}
			} else {
				$this->_itemList = $itemList;
			}
			$this->_numRows = count($this->_itemList);
			if ($this->_indexed) {
				$this->_itemListIdx = $this->_itemList;
			}
		}
	}

	function getNumberRows() {
			return $this->_numRows;
	}

	function rNext() {
		if ($this->_indexed) {
			if ($item = array_shift($this->_itemListIdx)) {
				$this->_count++;
				return $item;
			} else {
				return false;
			}
		} else {
			if ($this->_count < $this->_numRows) {
				$row = $this->_itemList[$this->_count];
				$this->_count++;
				return $row;
			} else {
				return false;
			}
		}
	}

	function rSkip($num = 1) {
		$next = $this->_count + $num;
		if ($next < $this->_numRows) {
			if ($this->_indexed) {
				for ($i = 0; $i < $num; $i++) {
					array_shift($this->_itemListIdx);
				}
			}
			$this->_count += $num;
			return true;
		} else {
			return false;
		}
	}

	function rItem($num) {
		if ($this->_indexed) {
			return $this->_itemList[$num];
		}
		if ($num < $this->_numRows) {
			$this->_count = $num;
			return $this->nextRow();
		} else {
			return false;
		}
	}

	function rReset() {
		if ($this->_indexed) {
			$this->_itemListIdx = $this->_itemList;
		}
		$this->_count = 0;
		return true;
	}

	function rMore() {
		if ($this->_count < $this->_numRows) {
				return true;
		} else {
				return false;
		}
	}

	function rFree() {
		unset($this->_itemList);
		unset($this->_itemListIdx);
		$this->_count = 0;
		$this->_numRows = 0;
	}

	function addItem($opt1,$opt2=null) {
		if ($opt2) {
			$this->_indexed = true;
			$this->_itemList[$opt1] = $opt2;
			$this->_itemListIdx[$opt1] = $opt2;
		} else {
			$this->_itemList[] = $opt1;
		}
		$this->_numRows = count($this->_itemList);
	}

	function hasItem($idx) {
		if ($this->_indexed) {
			return array_key_exists($idx, $this->_itemList);
		}
		return null;
	}

	function removeItem($idx) {
		if ($this->_indexed) {
			if ($this->hasItem($idx)) {
				unset($this->_itemList[$idx]);
				unset($this->_itemListIdx[$idx]);
				$this->_numRows--;
			}
		}
		return null;
	}
}

/**
 * DB Object
 * every object representing data stored in mySQL
 * shall inherit from this class
 * @author   Stan Ozier <stan@ozier.net>
 * @package  DB
 */

class TznDb extends Tzn {

	var $_dbConnection;
	var $_table;
	var $_prevItemId;
	var $_nextItemId;
	var $_data;
	var $_loaded;
	var $_total;
	var $_page;
	var $_pageSize;
	var $_sqlWhere;
	var $_sqlGroup;
	var $_sqlHaving;
	var $_sqlOrder;
    
    function TznDb($table) {
        $this->Tzn();
        $this->_table = $table;
        $this->_page = 1;
    }
	
	function gTable($table=null) {
		if (!$table) {
			$table = $this->_table;
		}
		return (@constant('TZN_DB_PREFIX')?TZN_DB_PREFIX.'_':'').$table;
	}
    
    function setPagination($pageSize,$page=1) {
    	$this->_pageSize = intval($pageSize);
    	$this->_page = intval($page);
    }
    
   	function getIdKey() {
		return $this->_table."Id";
    }

    function getConnection($host=null, $user=null, $pass=null, $base=null) {
        if (!is_object($this->_dbConnection)) {
           $this->_dbConnection = new TznDbConnection($host,$user,$pass,$base);
        }
		$this->_dbConnection->connect();
        return $this->_dbConnection;
    }
    
    function query($qry) {
		global $pSqlQueryCount;
		$pSqlQueryCount++;
		if (DB_DEBUG_LEVEL == 3) {
			echo "<code>".$qry."</code><br/>";
		}
		if (is_object($this->_dbConnection)) {
			if (ereg("^(SELECT|SHOW)",ltrim($qry))) {
				return $this->_dbConnection->querySelect($qry);
			} else {
				return $this->_dbConnection->queryAffect($qry);
			}
		} else {
			echo "no active connection to database - please call $db-&gt;getConnection first";
		}
    }
    
    function isLoaded() {
    	return $this->_loaded;
    }

    /* -- Query Generator Methods  -------------------------------------- */
    
    function getObjId($key) {
      $obj = $this->$key;
      return $obj->id;
    }
    
    function addWhere($data, $sep = 'AND') {
		$this->_sqlWhere = $this->concatSQL($this->_sqlWhere, $data, $sep);
    }
    
    function sqlWhere($default = '') {
		return $this->concatSQL($this->_sqlWhere, $default, 'AND', ' WHERE');
    }
    
    function addOrder($data,$default = '') {
    	if ((!ereg('^[a-zA-Z0-9_\-\., ]+$',$data)) || (empty($data))) {
    		$data = $default;
    	}
    	$this->_sqlOrder = $this->concatSQL($this->_sqlOrder, $data,',');
    }
    
    function sqlOrder($default = '') {
    	return $this->concatSQL($this->_sqlOrder, $default, ',', ' ORDER BY');
    }
    
    function addGroup($data) {
    	$this->_sqlGroup = $this->concatSQL($this->_sqlGroup, $data, ',');
    }
    
    function sqlGroup($default = '') {
    	return $this->concatSQL($this->_sqlGroup,$default, ',',' GROUP BY');
    }
	
	function addHaving($data,$sep = 'AND') {
    	$this->_sqlHaving = $this->concatSQL($this->_sqlHaving, $data,$sep);
    }
    
    function sqlHaving($default = '') {
    	return $this->concatSQL($this->_sqlHaving, $default, 'AND', ' HAVING');
    }
    
    function sqlLimit() {
    	// mySQL only
		if (!$this->_pageSize) {
			return false; // no paging
		}
		if (!$this->_page) {
			$this->_page = 1;
		}
		while ((($this->_page - 1) * $this->_pageSize) > $this->_total) {
			$this->_page--;
		}
		return ' LIMIT '.($this->_page - 1) * $this->_pageSize.', '
			.$this->_pageSize;
	}
    
    /* -- Queries -------------------------------------------------------- */

    function load() {
        // load by Id
		if ($this->id) {
	        return $this->loadByKey($this->getIdKey(), $this->id);
		} else {
			return false;
		}	
		/* else {
			return $this->loadByFilter("1 LIMIT 0,1");
		} */
    }

    function loadByKey($key, $value=null) {
	  if ($value == null) {
		  $value = $this->get($key);
	  }
	  if (!preg_match('/^[a-z0-9\-_]+$/iD', $key.$value)) {
	  	return false;	
	  }
      return $this->loadByFilter($this->gTable().".".$key." = '".$value."'");
    }

    function loadByFilter($filter) {
    	$this->_data = null;
    	$this->_total = 0;
		if (!empty($filter)) {
			$sqlSelect = "SELECT ".$this->gTable().".*";
			$sqlFrom =" FROM ".$this->gTable();
			$groupBy = false;
			foreach($this->_properties as $oKey => $oType) {
				if (ereg("Last$",$oKey)) {
					continue;
				} else if (ereg("Count$",$oKey)) {
					// -TODO- use var type instead of suffix
					// -TODO- retreive table name
					$tmpKey = substr($oKey,0,-5);
					$sqlSelect .= ", count(DISTINCT ".$tmpKey."Id) as "
						.$tmpKey."Count";
					$tmpIdKey = $this->getIdKey();
					$sqlFrom .= " LEFT JOIN ".strtolower($tmpKey)." ON ".strtolower($tmpKey)."."
						.$tmpIdKey."=".$this->gTable().".".$tmpIdKey;
					$groupBy = true;
				} else if ($oType == 'OBJ') {
					$tmpObj = new $oKey();
                    $tmpKey = $tmpObj->getIdKey();
					$tmpOnKey = $oKey."Id";
					$sqlFrom .= " LEFT JOIN ".$tmpObj->gTable()." as ".$oKey
						." ON ".$oKey.".".$tmpKey."="
						.$this->gTable().".".$tmpOnKey;
					forEach($tmpObj->_properties as $keyNested => $typeNested) 
                    {
                        if ((ereg('^UID',$typeNested))
							|| (ereg('(Count|Last)$',$keyNested)))
						{
                            continue;
                        } else if ($typeNested == 'OBJ') {
                        	$tmpNestedObj = new $keyNested();
                        	$tmpNestedKey = $tmpNestedObj->getIdKey();
                        	/* $sqlSelect .= ", ".$tmpObj->_table.".".$tmpNestedKey
                        		." as ".$oKey."_".$tmpNestedKey; */
							$sqlSelect .= ", ".$oKey.".".$tmpNestedKey
                        		." as ".$oKey."_".$tmpNestedKey;
                        } else {
							/* $sqlSelect .= ", ".$tmpObj->_table."."
								.$keyNested." as ".$oKey.'_'.$keyNested; */
							$sqlSelect .= ", ".$oKey."."
								.$keyNested." as ".$oKey.'_'.$keyNested;
                        }
                    }
				}
			}
			$strSql = $sqlSelect.$sqlFrom.$sqlWhere." WHERE ".$filter;
			if ($groupBy) {
				$strSql .= " GROUP BY ".$this->gTable().".".$this->getIdKey();
			}
			return $this->loadByQuery($strSql);
		}
		$this->_loaded = false;
		return false;
    }

    function loadByQuery($strSql) {
        if ($strSql) {
            $this->getConnection();
            if ($result = $this->query($strSql)) {
                if ($data = $result->rNext()) {
                    $this->setAuto($data);
                    $this->_loaded = true;
                    if ($this->id) {
                        return $this->id;
                    } else {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    
    /* -- Loading List --------------------------------------------- */
    
    function loadCount($strCount='') {
    	$className = get_class($this);
		if (empty($strCount)) {
            $classModel = new $className();
            $sqlCount = "SELECT COUNT(DISTINCT "
            	.$this->gTable().".".$this->_table."Id) as rowCount";
			if (!in_array('UID',$this->_properties)) {
				$sqlCount = "SELECT COUNT(*) as rowCount";
			}
            $sqlFrom =" FROM ".$this->gTable();
            $groupBy = false;
            foreach($this->_properties as $key => $type) {
				if (ereg("(Last|Count)$",$key)) {
                    $tmpKey = strtolower(substr($key,0,-5));
                    $sqlFrom .= " LEFT JOIN ".$tmpKey." ON ".$tmpKey."."
                    	.$this->getIdKey()."="
                    	.$this->gTable().".".$this->getIdKey();
                    $groupBy = true;
                } else if ($type == 'OBJ') {
                	$tmpObj = new $key();
                    $tmpKey = $tmpObj->getIdKey();
					$tmpOnKey = $key."Id";
                    $sqlFrom .= " LEFT JOIN ".$tmpObj->gTable()." as ".$key
                    	." ON ".$key.".".$tmpKey."="
                    	.$this->gTable().".".$tmpOnKey;
                    // $groupBy = true;
                }
            }
            unset($classModel);
            if ($groupBy) {
                $this->addGroup($this->gTable().".".$this->getIdKey());
            }

            if (empty($strCount)) {
                $strCount = $sqlCount.$sqlFrom.' '.$this->sqlWhere();
                if ($groupBy) {
                    $strCount .= ' '.$this->sqlGroup();   // GROUP BY clause
					if ($this->_sqlHaving) {
						$strCount .= ' '.$this->sqlHaving();
					}
                }
            }
        }
		// echo("<p>COUNT = ".$strCount."</p>");
		$this->getConnection();
		if ($result = $this->query($strCount)) {
			if ($row = $result->rNext()) {
				$this->_total = $row->rowCount;
				return $row->rowCount;
			}
		}
		$this->_total = 0;
		return false;
	}

    function loadList($sql1 = null, $sql2 = null) {
        
        $this->_data = null;
        $this->_loaded = false;
        $this->_total = 0;

        if (!$sql1) {
            $sqlSelect = 'SELECT '.$this->gTable().'.*';
            $sqlFrom =' FROM '.$this->gTable();
            $groupBy = false;
            foreach($this->_properties as $key => $type) {
				if (ereg('Count$',$key)) {
					// -TODO- use param type instead of suffix
                    $tmpKey = substr($key,0,-5);
                    $sqlSelect .= ', COUNT('.strtolower($tmpKey).'.'.$tmpKey.'Id) as '
                    	.$tmpKey.'Count';
                    $sqlFrom .= ' LEFT JOIN '.strtolower($tmpKey)
                    	.' ON '.strtolower($tmpKey).'.'.$this->getIdKey().'='
                    	.$this->gTable().'.'.$this->getIdKey();
                    $groupBy = true;
                } else if (ereg('^OBJ',$type)) {
					$pObj = $key;
					if (strlen($type) > 3) {
						$pObj = substr($type,4);
					}
                	$tmpObj = new $pObj();
                    $tmpKey = $tmpObj->getIdKey();
                    /* $sqlFrom .= ' LEFT JOIN '.$tmpObj->_table.' as '.$key
						.' ON '.$tmpObj->_table.'.'.$tmpKey.'='
						.$this->_table.'.'.$key.'Id'; */
					$sqlFrom .= ' LEFT JOIN '.$tmpObj->gTable().' as '.$key
						.' ON '.$key.'.'.$tmpKey.'='
						.$this->gTable().'.'.$key.'Id';
                    forEach($tmpObj->_properties as $keyNested => $typeNested) 
                    {
                        if ((ereg('^UID',$typeNested))
							|| (ereg('(Count|Last)$',$keyNested)))
						{
                            continue;
                        } else if ($typeNested == 'OBJ') {
                        	$tmpNestedObj = new $keyNested();
                        	$tmpNestedKey = $tmpNestedObj->getIdKey();
                        	/* $sqlSelect .= ", ".$tmpObj->_table.".".$tmpNestedKey
                        		." as ".$key."_".$tmpNestedKey; */
							$sqlSelect .= ", ".$key.".".$tmpNestedKey
                        		." as ".$key."_".$tmpNestedKey;
                        } else {
							/* $sqlSelect .= ", ".$tmpObj->_table."."
								.$keyNested." as ".$key.'_'.$keyNested; */
							$sqlSelect .= ", ".$key."."
								.$keyNested." as ".$key.'_'.$keyNested;
                        }
                    }
                    $groupBy = true;
                }
            }
			unset($classModel);
			if ($groupBy && array_key_exists('id',$this->_properties)) {
				$this->addGroup($this->gTable().".".$this->getIdKey());
			}

			$sqlSelect = $sqlSelect.$sqlFrom;
            	
        } else if (!$sql2) {
            	$sqlSelect = $sql1;
		} else {
			$sqlCount = $sql1;
			$sqlSelect = $sql2;
		}
		// WHERE clause
		$sqlSelect .= $this->sqlWhere();	// WHERE clause
		
		if ($this->_sqlGroup) {
			$sqlSelect .= $this->sqlGroup();   // GROUP BY clause
			if ($this->_sqlHaving) {
				$sqlSelect .= ' '.$this->sqlHaving();
			}
		}
		$sqlSelect .= $this->sqlOrder();	// ORDER BY clause

		$this->getConnection();

		if ($this->_pageSize) {
			if (!$sqlCount) {
				if (!$this->loadCount()) {
					return false;
				}
			} else if ($sql1 != TZN_DB_COUNT_OFF) {
                if ($sql1 == TZN_DB_COUNT_AUTO) {
                    $tempData = $this->query($sqlSelect);
                    $this->_total = $tempData->_count;
                    unset($tempData);
                } else {
                    $sqlCount .= $this->sqlWhere();
                    if (!$this->loadCount($sqlCount)) {
                        return false;
                    }
                }
			}
			$sqlSelect .= $this->sqlLimit();
		}
		
		if ($this->_data = $this->query($sqlSelect)) {
			$return = $this->_data->_count;
		}
		
		if (!$this->_total) {
			$this->_total = $return;
		}
		
		return $return;

    }
    
    /* -- Retreiving -------------------------------------------- */
    
    function rMore() {
    	if ($this->_data) {
	    	return $this->_data->rMore();
	    }
	    return false;
    }
    
    function rCount() {
    	if ($this->_data) {
    		return $this->_data->rCount();
    	}
    	return false;
    }
    
    function rTotal() {
    	return $this->_total;
    }
    
    function rNext() {
		if ($this->rMore()) {
			return $this->_setItem($this->_data->rNext());
		} else {
			return false;
		}
	}
	
	function rSkip($num = 1) {
		if ($this->_data) {
			return $this->_data->rSkip($num);
		}
		return false;
	}
	
	function rItem($num) {
		if ($this->_data) {
			return $this->_setItem($this->_data->rItem($num));
		}
		return false;	
	}
	
	function rReset() {
		return $this->_data->rReset();
	}

	function rFree() {
		return $this->_data->rFree();
	}
	
	function _setItem($obj) {
		if ($obj) {
			$className = get_class($this);
			if (strtolower(get_class($this->_data)) == "tznstaticresult") {
				return $obj;
			} else {
				$objTmp = new $className();
				$objTmp->setAuto($obj);
				$objTmp->_loaded = true;
				return $objTmp;
			}
		} else {
			return false;
		}
	}
    
    /* -- Item functions ---------------------------------------- */

    function add($ignore=false) {
    	// create SQL statement
		$strSql = 'INSERT '.(($ignore)?'IGNORE ':'')
			.'INTO '.$this->gTable().' SET ';
		if ($this->id) {
			$strSql .= $this->getIdKey()."='".$this->id."', ";
		}
		$strSql .= $this->zPropsToSql();
		$this->getConnection();
		if ($this->query($strSql)) {
            $this->id = mysql_insert_id();
			if (!$this->id) {
				return true;
			} else {
    			return $this->id;
            }
		} else {
			return false;
		} 
    }

	function replace() {
    	// create SQL statement
		$strSql = 'REPLACE INTO '.$this->gTable().' SET ';
		if ($this->id) {
			$strSql .= $this->getIdKey()."='".$this->id."', ";
		}
		$strSql .= $this->zPropsToSql();
		$this->getConnection();
		if ($this->query($strSql)) {
			if (!$this->id) {
				$this->id = mysql_insert_id();
			}
			return $this->id;
		} else {
			return false;
		} 
    }

    function update($fields=null,$filter=null) {
    	// echo "<pre>--- UPDATE ---\r\n"; $this->dump(); echo "---\r\n";
        $strSql = "UPDATE ".$this->gTable()." SET ";
        if ($fields) {
        	$arrFields = explode(',',$fields);
        	$first = true;
        	forEach($arrFields as $field) {
				$field=trim($field);
				if ($first) {
					$first = false;
				} else {
					$strSql .= ",";
				}
				$fieldKey = $field;
				if (is_object($this->$field)) {
					$fieldKey = $field.'Id';
				}
				$strSql .= '`'.$fieldKey.'` = '.$this->zValueToSql($this->$field);
			}
		} else {
			$strSql .= $this->zPropsToSql();
		}
		if ($filter) {
        	$strSql .= ' WHERE '.$filter;
        } else if ($this->id) {
			$strSql .= " WHERE ".$this->getIdKey()."='".$this->id."'";
		} else {
			// update everything?!?
			$strSql .= " WHERE 1";
		}
		//echo $strSql; exit; // ."\r\n</pre>";
        return $this->query($strSql);
    }

    function delete($filter = null) {
    	// remove from Database
		$strSql = "DELETE FROM ".$this->gTable()." WHERE ";
		if (!empty($filter)) {
			$strSql .= $filter;
		} else if ($this->id) {
	        $strSql .= $this->getIdKey()."='".$this->id."'";
		} else {
			return false;
		}
        $this->getConnection();
        return $this->query($strSql);
    }

	function emptyTable() {
		$this->getConnection();
		return $this->query('TRUNCATE '.$this->gTable());
	}

    function checkUnique($key, $value, $field=null) {
		if ($value == "") {
			return false;
		}
        $idKey = $this->getIdKey();
        $strSql  = "SELECT ".$idKey;
		if ($key != 'id') {
			$strSql .= ', '.$key;
		}
        if ($field) {
            $strSql .=", ".$field;
        }
		$strSql .= " FROM " .$this->gTable();
		if ($key == 'id') {
			$strSql .= ' WHERE '.$idKey." = '".$value."'";
		} else {
			$strSql .= " WHERE ".$key." = '".$value."'";
			if ($this->id) {
				$strSql.=" AND ".$idKey." <> ".$this->id;
			}
		}
        $this->getConnection();
        if ($result = $this->query($strSql)) {
            if ($row = $result->rNext()) {
            	// $this->setAuto($row);
                return $row->$idKey;
            }
        }
        return false;
    }

    function concatSQL($begin, $end, $separator = 'AND', $instruction = '') {
		$separator = ' '.trim($separator).' ';
		if (!empty($instruction)) {
			$instruction .= ' ';
		}
		if (empty($begin)) {
			if (empty($end)) {
				return false;
			} else {
				return $instruction.$end;
			}
		} else if (empty($end)) {
			return $instruction.$begin;
		} else {
			return $begin.$separator.$end;
		}
	}

    /* function setSqlProperties($objData, $nested = false) {
        $this->_setObjectProperties("setSql",$objData);
    } */

    function zPropsToSql() {
        // to create SQL statement (insert or update)
        // checks if word is reserved or add ''
        $strSql = "";
        $first = true;

        foreach ($this->_properties as $key => $type) {
            if ($key == "id" || ereg("(Count|Last)$",$key)) {
                continue;
            } 
            $value = $this->$key;
            if ($type == 'OBJ' || is_object($value)) {
            	if (is_a($value, 'TznFile')) {	
            		$value->save();
            		$oKey = $key;
            		$oValue = '\''.$value->folder.$value->fileName.'\'';
            		// remove from session
            		$tmpKey = $key.'_tmp';
            		unset($_SESSION[$tmpKey]);
            	} else {
					// $oKey = $value->getIdKey();
					$oKey = $key.'Id';
					$oValue = '\''.$value->id.'\'';
				}
            } else {
                $oKey = $key;
                $oValue = $this->zValueToSql($value,$type);
            }

            if ($first) {
                $first = false;
            } else {
                $strSql.=", ";
            }
			$strSql .= '`'.$oKey.'`='.$oValue;
        }

        return $strSql;
    }
    
    function zValueToSql($value,$type=null) {
    	 if (($type == 'INT') || ($type == 'NUM') || ($type == 'DEC') || ($type == 'BOL')) {
             $str = ($value)?$value:0;
    	 } else if ($type == 'DTE') {
    	 	$str = '\''.(($value)?$value:'0000-00-00').'\'';
    	 } else if ($type == 'DTM') {
    	 	$str = '\''.(($value)?$value:'0000-00-00 00:00:00').'\'';
         } else if (is_object($value)) {
			if (is_a($value, 'TznFile')) {
				$value->save();
				$str = '\''.$value->folder.$value->filename.'\'';
			} else {
				$str = '\''.$value->id.'\'';
			}
		} else if (ereg("^(ENCODE|ENCRYPT|MD5|NOW)\(.*\)", $value)) {
            $str = $value;
        } else {
            $str = "'".addslashes($value)."'";
            /*
            if ($this->_dbConnection->_dbLink) {
            	$str = '\''.mysql_real_escape_string($value,$this->_dbConnection->_dbLink).'\'';
            } else {
            	$str = "'".addslashes($value)."'";
            }
            */
        }
        // error_log('type='.$type.', value='.$str);
        return $str;
    }
    
    /* ----- List Order ------ */
    
    function pSort($link, $param, $field, $style='',
    	$imgAsc = TZN_DB_ASC_OFF, $imgAscActive = TZN_DB_ASC_ON, 
    	$imgDesc = TZN_DB_DESC_OFF, $imgDescActive = TZN_DB_DESC_ON) 
    {
		$begin = '<a href="'.$link;
		if (ereg('\?',$link)) {
			$begin .= '&';
		} else {
			$begin .= '?';
		}
		$begin.= $param.'=';
		$end = '"';
		$end .= Tzn::_style($style);
		$end .= '>';
		if (ereg('^'.$field.' ASC',$this->_sqlOrder)) {
            print '<img src="'.$imgAscActive.'">';
		} else {
            print $begin.$field.'+ASC'.$end.'<img src="'.$imgAsc
            	.'" border="0"></a>';
		}
        if (ereg('^'.$field.' DESC',$this->_sqlOrder)) {
			print '<img src="'.$imgDescActive.'">';
		} else {
			print $begin.$field.'+DESC'.$end.'<img src="'.$imgDesc
				.'" border="0"></a>';
		}
	}

	/* ----- Pagination ------ */
	
	function pPagination($link, $param, $style = TZN_DB_PAGING_OFF,
		$styleCurrent = TZN_DB_PAGING_ON) {
		// link = page filename + original parameters
		// param = name of variable parameter for paging
		// current = current page (integer)
		// class = style for link
		// classCurrent = style for current
		$max = 0;
		// echo 'pageSize='.$this->_pageSize.' total='.$this->_total; 
		// return false;
		if (!$this->_pageSize) return false;
		while (($max * $this->_pageSize) < $this->_total) {
			$max++;
		}
		if ($max == 0) {
			return false;
		} else {
			$begin = '<a href="'.$link;
			if (ereg('\?',$link)) {
				$begin .= '&';
			} else {
				$begin .= '?';
			}
			$begin.= $param.'=';
			$end = '"';
			$end .= Tzn::_style($style);
			$end .= '>';
			$first = true;
			for ($i=1; $i<=$max; $i++) {
				if ($first) {
					$first = false;
				} else {
					print ' | ';
				}
				if ($this->_page == $i) {
					if (!empty($styleCurrent)) {
						if ($styleCurrent == '<b>') {
							print '<b>'.$i.'</b>';
						} else {
							print '<span class="'.$styleCurrent.'">'
								.$i.'</span>';
						}
					} else {
						echo($i);
					}
				} else {
					echo $begin.$i.$end.$i.'</a>';
				}
			}
		}
	}

    function pPageSelect($link, $param, $style = null, $styleCurrent = null) {
		if (!$this->_pageSize) return false;
		$max = 0;
		while (($max * $this->_pageSize) < $this->_total) {
			$max++;
		}
		if ($max == 0) {
			return false;
		} 
		if (ereg('\?',$link)) {
		  $link .= '&';
		} else {
		  $link .= '?';
		}
		print '<select name="_'.$param.'"';
		print Tzn::_style($style);
		print ' onChange="location.href=\''.$link.$param
		.'=\'+this.options[this.selectedIndex].value">';
		for($i=1; $i<=$max; $i++) {
		  print '<option value="'.$i.'"';
		  if ($this->_page == $i) {
			  print ' selected="true"';
			  print Tzn::_style($styleCurrent);
		  }
		  print '>page '.$i.'</option>';
		}
		print '</select>';
    }

	function hasPrevious() {
		if (empty($this->_page) || ($this->_page <= 1)) {
			return false;
		} else {
			return true;
		}
	}

	function pPrevious($link, $param, $text = "&lt;", 
		$styleOn = TZN_DB_PAGING_ENABLED, $styleOff = TZN_DB_PAGING_DISABLED)
	{
		// link = page filename + original parameters
		// param = name of variable parameter for paging
		// current = current page (integer)
		// class = style for link
		// classDisabled = style if disabled
		if (!$this->hasPrevious()) {
			if (!empty($styleOff)) {
				print '<span class="'.$styleOff.'">'.$text.'</span>';
			} else {
				print $text;
			}
			return false;
		} else {
			$begin = '<a href="'.$link;
			if (ereg('\?',$link)) {
				$begin .= '&';
			} else {
				$begin .= '?';
			}
			$begin.= $param.'=';
			$end = '"';
			$end .= Tzn::_style($styleOn);
			$end .= '>';
			print $begin.($this->_page-1).$end.$text.'</a>';
			return true;
		}
	}

	function hasNext() {
		if (!$this->_pageSize) return false;
		if (empty($this->_page)) {
			$this->_page = 1;
		}
		if (($this->_page * $this->_pageSize) >= ($this->_total)) {
			return false;
		} else {
			return true;
		}
	}

	function pNext($link, $param, $text = "&gt;", 
		$styleOn = TZN_DB_PAGING_ENABLED, $styleOff = TZN_DB_PAGING_DISABLED) 
	{
		// link = page filename + original parameters
		// param = name of variable parameter for paging
		// current = current page (integer)
		// class = style for link
		// classDisabled = style if disabled
		if (!$this->hasNext()) {
			if (!empty($styleOff)) {
				print '<span class="'.$styleOff.'">'.$text.'</span>';
			} else {
				print $text;
			}
			return false;
		} else {
			$begin = '<a href="'.$link;
			if (ereg('\?',$link)) {
				$begin .= '&';
			} else {
				$begin .= '?';
			}
			$begin.= $param.'=';
			$end = '"';
			$end .= Tzn::_style($styleOn);
			$end .= '>';
			print $begin.($this->_page+1).$end.$text.'</a>';
			return true;
		}
	}

}
