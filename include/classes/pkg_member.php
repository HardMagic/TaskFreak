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

class GlobalPositionList extends TznCollection
{
    function GlobalPositionList($maxlevel=100) {
        $arrData = $GLOBALS['langGlobalPosition'];
        if ($maxlevel < 100) {
            foreach($arrData as $key=>$value) {
                if ($key> $maxlevel) {
                    unset($arrData[$key]);
                }
            }
        }
		parent::TznCollection($arrData);
    }

    function getPosition($level) {
        if (array_key_exists($level, $GLOBALS['confGlobalRights'])) {
            return $this->_data[$level];
        } else {
            return '???';
        }
    }

}

class ProjectStatusList extends TznCollection
{
    function ProjectStatusList() {
		parent::TznCollection($GLOBALS['langProjectStatus']);
    }
}

class ProjectStatus extends TznDb
{
	
	function ProjectStatus() {
		parent::TznDb('projectStatus');
		$this->addProperties(array(
			'id'			=> 'UID',
			'projectId'		=> 'NUM',
			'statusDate'	=> 'DTM',
			'statusKey'		=> 'NUM',
			'member'		=> 'OBJ'
		));
	}
	
	function getStatus() {
		return $GLOBALS['langProjectStatus'][$this->statusKey];
	}
	
}

class Project extends TznDb 
{

	function Project() {
		parent::TznDb('project');
		$this->addProperties(array(
			'id'	 			=> 'UID',
			'name'				=> 'STR',
			'description'		=> 'BBS'
		));
	}
	
	function setStatus($status,$userId) {
		$objStatus = new ProjectStatus();
		$objStatus->projectId = $this->id;
		$objStatus->setDtm('statusDate','NOW');
		$objStatus->statusKey = $status;
        $objStatus->member->id = $userId;
		return $objStatus->add();
	}

    function pPosition($default='-') {
		$str = $this->memberProject->getPosition();
        print ($str)?$str:$default;
	}
	
	function check() {
		return $this->checkEmpty('name');
	}
	
	function add($status,$userId) {
		if (parent::add()) {
            // add poroject initial status
			if ($this->setStatus($status,$userId)) {
                // add user as project leader
                $objLeader = new MemberProject();
                $objLeader->initObjectProperties();
                $objLeader->project->id = $this->id;
                $objLeader->member->id = $userId;
                $objLeader->position = FRK_PROJECT_LEADER; // leader
                return $objLeader->add();
            } else {
                // -TODO- rollback
                return false;
            }
		} else {
			return false;
		}
	}
	
	function delete() {
		if ($this->id) {
			$this->getConnection();
			if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
				// mySQL 4.1 and later (SQL subqueries allowed)
				return $this->query('DELETE '.$this->gTable('project').', '.$this->gTable('memberProject').', '
					.$this->gTable('projectStatus').', '.$this->gTable('item').', '.$this->gTable('itemComment')
					.', '.$this->gTable('itemFile').', '.$this->gTable('itemStatus')
					.' FROM '.$this->gTable('project')
					.' INNER JOIN '.$this->gTable('memberProject').' ON '.$this->gTable('memberProject').'.projectId = '.$this->gTable('project').'.projectId'
					.' LEFT JOIN '.$this->gTable('projectStatus').' ON '.$this->gTable('projectStatus').'.projectId = '.$this->gTable('project').'.projectId'
					.' LEFT JOIN '.$this->gTable('item').' ON '.$this->gTable('item').'.projectId = '.$this->gTable('project').'.projectId'
					.' LEFT JOIN '.$this->gTable('itemComment').' ON '.$this->gTable('itemComment').'.itemId = '.$this->gTable('item').'.itemId'
					.' LEFT JOIN '.$this->gTable('itemFile').' ON '.$this->gTable('itemFile').'.itemId = '.$this->gTable('item').'.itemId'
					.' LEFT JOIN '.$this->gTable('itemStatus').' ON '.$this->gTable('itemStatus').'.itemId = '.$this->gTable('item').'.itemId'
					.' WHERE '.$this->gTable('project').'.projectId = '.$this->id);
			} else {
				// mysql 3.23 and 4.0 -TODO- transactions
				// 1. delete project
				if (parent::delete()) {
					// 2. delete members
					$this->query('DELETE FROM '.$this->gTable('memberProject').' WHERE projectId='.$this->id);
					// 3. search project tasks
					if ($objResult = $this->query('SELECT itemId FROM '.$this->gTable('item')
						.' WHERE projectId='.$this->id))
					{
						$arrIds = array();
						while($objItem = $objResult->rNext()) {
							$arrIds[] = $objItem->itemId;
						}
						if (count($arrIds)) {
							$strIds = implode(',',$arrIds);
							// 3.1. delete task comments
							$this->query('DELETE FROM '.$this->gTable('itemComment')
								.' WHERE itemId IN ('.$strIds.')');
							// 3.2 delete task files
							$this->query('DELETE FROM '.$this->gTable('itemFile')
								.' WHERE itemId IN ('.$strIds.')');
							// 3.3. delete task status
							$this->query('DELETE FROM '.$this->gTable('itemStatus')
								.' WHERE itemId IN ('.$strIds.')');
						}
						// 3.4. delete tasks
						$this->query('DELETE FROM '.$this->gTable('item').' WHERE projectId='.$this->id);
						// 4. delete status history
						$this->query('DELETE FROM '.$this->gTable('projectStatus').' WHERE projectId='.$this->id);
						return true;
					} // end search
				}
			}
		}
		return false;
	}
}

class ProjectStats extends Project
{

	function ProjectStats() {
		parent::Project();
		$this->addProperties(array(
			'projectStatus'	=> 'OBJ',
            'memberProject' => 'OBJ'
		));
	}

    function pStatus() {
		print $this->projectStatus->getStatus();
	}

    function _cleanProperties() {
        unset($this->_properties['projectStatus']);
        unset($this->_properties['memberProject']);
        unset($this->projectStatus);
        unset($this->memberProject);
    }

    function add($status,$userId) {
        $this->_cleanProperties();
        return parent::add($status,$userId);
    }
	
    function update($param='') {
        $this->_cleanProperties();
        parent::update($param);
    }

    function load($userId, $strict=true) {
        if (!$this->id) {
            return false;
        }
        if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
            // optimize for mysql > 4.1
            $sqlSelect = 'SELECT pp.*, ps.statusKey AS projectStatus_statusKey, '
                .'p1.position AS memberProject_position, ps.statusDate AS projectStatus_statusDate '
                .'FROM '.$this->gTable().' AS pp '
                .'INNER JOIN '.$this->gTable('projectStatus').' AS ps ON ps.projectId = pp.projectId '
                .(($strict)?'INNER':'LEFT').' JOIN '.$this->gTable('memberProject')
                .' AS p1 ON p1.projectId=pp.projectId AND p1.memberId='.$userId
                .' WHERE ps.statusDate=(SELECT MAX(ps2.statusDate) FROM '.$this->gTable('projectStatus')
                .' AS ps2 WHERE pp.projectId = ps2.projectId) '
                .' AND ps.projectId = '.$this->id
                .' GROUP BY ps.projectId';
        } else {
            $sqlSelect = 'SELECT pp.*, p1.position AS memberProject_position, '
                .'SUBSTRING(MAX(CONCAT(ps.statusDate,ps.statusKey)),1,19) AS projectStatus_statusDate, '
                .'SUBSTRING(MAX(CONCAT(ps.statusDate,ps.statusKey)),20) AS projectStatus_statusKey '
                .'FROM '.$this->gTable().' AS pp '
                .'INNER JOIN '.$this->gTable('projectStatus').' AS ps ON ps.projectId = pp.projectId '
                .(($strict)?'INNER':'LEFT').' JOIN '.$this->gTable('memberProject')
                    .' AS p1 ON p1.projectId=pp.projectId AND p1.memberId='.$userId
                .' WHERE ps.projectId = '.$this->id
                .' GROUP BY ps.projectId';
        }

        //echo '<div class="debug">'.$sqlSelect.'</div>'; exit;
        
        return $this->loadByQuery($sqlSelect);
    }
	
	function loadList($userId, $strict=true) {
        $sqlCommon = 'FROM '.$this->gTable().' AS pp '
            .'INNER JOIN '.$this->gTable('projectStatus').' AS ps ON ps.projectId = pp.projectId '
            .(($strict)?'INNER':'LEFT').' JOIN '.$this->gTable('memberProject')
            .' AS p1 ON p1.projectId=pp.projectId AND p1.memberId='.$userId;
        if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
            // optimize for mysql > 4.1
            $sqlCount = 'SELECT COUNT(DISTINCT pp.projectId) as rowCount, ps.statusDate AS projectStatus_statusDate, '.$sqlCommon;
            $sqlSelect = 'SELECT pp.*, ps.statusKey AS projectStatus_statusKey, '
                .'p1.position AS memberProject_position, ps.statusDate as projectStatus_statusDate '.$sqlCommon;
            $this->addWhere('ps.statusDate=(SELECT MAX(ps2.statusDate) FROM '.$this->gTable('projectStatus')
                .' AS ps2 WHERE pp.projectId = ps2.projectId)');
        } else {
            $sqlCount = 'SELECT COUNT(DISTINCT pp.projectId) as rowCount '.$sqlCommon;
            $sqlSelect = 'SELECT pp.*, p1.position AS memberProject_position, '
                .'SUBSTRING(MAX(CONCAT(ps.statusDate,ps.statusKey)),1,19) AS projectStatus_statusDate, '
                .'SUBSTRING(MAX(CONCAT(ps.statusDate,ps.statusKey)),20) AS projectStatus_statusKey '
                .$sqlCommon;
        }
        $this->addGroup('ps.projectId');

		return parent::loadList($sqlCount,$sqlSelect);
	}

}

class ProjectStatsFull extends ProjectStats
{

	function ProjectStatsFull() {
		parent::ProjectStats();
		$this->addProperties(array(
			'memberCount'	=> 'NUM',
			'itemCount'		=> 'NUM'
		));
	}

    function pStatus() {
		print $this->projectStatus->getStatus();
	}
	
	function loadList($userId, $strict=true) {
        $sqlCommon = 'FROM '.$this->gTable().' AS pp '
            .'INNER JOIN '.$this->gTable('projectStatus').' AS ps ON ps.projectId = pp.projectId '
            .(($strict)?'INNER':'LEFT').' JOIN '.$this->gTable('memberProject')
            .' AS p1 ON p1.projectId=pp.projectId AND p1.memberId='.$userId
			.' LEFT JOIN '.$this->gTable('memberProject').' AS p2 ON p2.projectId=pp.projectId'
			.' LEFT JOIN '.$this->gTable('item').' AS i1 ON i1.projectId=pp.projectId';
        if (@constant('FRK_MYSQL_VERSION_GT_4_1')) {
            // optimize for mysql > 4.1
            $sqlCount = 'SELECT COUNT(DISTINCT pp.projectId) as rowCount, ps.statusDate as projectStatus_statusDate '.$sqlCommon;
			$sqlSelect = 'SELECT pp.*, COUNT(DISTINCT p2.memberId) AS memberCount, ps.statusKey AS projectStatus_statusKey, '
				.'COUNT(DISTINCT i1.itemId) AS itemCount, '
                .'p1.position AS memberProject_position, ps.statusDate as projectStatus_statusDate '.$sqlCommon;
            $this->addWhere('ps.statusDate=(SELECT MAX(ps2.statusDate) FROM '.$this->gTable('projectStatus')
                .' AS ps2 WHERE pp.projectId = ps2.projectId)');
        } else {
            $sqlCount = 'SELECT COUNT(DISTINCT pp.projectId) as rowCount '.$sqlCommon;
			$sqlSelect = 'SELECT pp.*, COUNT(DISTINCT p2.memberId) AS memberCount, p1.position AS memberProject_position, '
				.'COUNT(DISTINCT i1.itemId) AS itemCount, '
                .'SUBSTRING(MAX(CONCAT(ps.statusDate,ps.statusKey)),1,19) AS projectStatus_statusDate, '
                .'SUBSTRING(MAX(CONCAT(ps.statusDate,ps.statusKey)),20) AS projectStatus_statusKey '
                .$sqlCommon;
        }
        $this->addGroup('ps.projectId');

		return Project::loadList($sqlCount,$sqlSelect);
	}

}

class ProjectPositionList extends TznCollection
{
    function ProjectPositionList($maxlevel=100) {
        $arrData = $GLOBALS['langProjectPosition'];
        if ($maxlevel < 100) {
            foreach($arrData as $key=>$value) {
                if ($key> $maxlevel) {
                    unset($arrData[$key]);
                }
            }
        }
		parent::TznCollection($arrData);
    }

    function pJSarray() {
        echo "\n<script>var arrPositions = new Array('";
        echo implode("','",$this->_data);
        echo "');</script>\n";
    }

}

class MemberProject extends TznDb 
{

	function MemberProject() {
		parent::TznDb('memberProject');
		$this->addProperties(array(
			'project' 			=> 'OBJ',
			'member'			=> 'OBJ',
			'position'			=> 'NUM' // 0 request, 1 member, 2 official, 3 pro, 4 leader
		));
	}

	function getPosition() {
		return $GLOBALS['langProjectPosition'][$this->position];
	}
	
	function pPosition() {
		echo $this->getPosition();
	}

    function checkRights($level) {
        $level--;
        return ($GLOBALS['confProjectRights'][$this->position]{$level} == '1');
    }

    function loadPosition($projectId,$memberId) {
        $table = $this->gTable('memberProject');
        return $this->loadByFilter($table.'.projectId='.$projectId
			.' AND '.$table.'.memberId='.$memberId);
    }
	
	function add() {
		if (!$this->project->id || !$this->member->id) {
			return false;
		}
		$this->getConnection();
		if ($this->loadByFilter($this->gTable('memberProject').'.projectId='.$this->project->id
			.' AND '.$this->gTable('memberProject').'.memberId='.$this->member->id)) 
		{
			// already in project
			return false;
		} else {
			return parent::add();
		}
	}
	
	function update($fields=null) {
		parent::update($fields,'projectId='.$this->project->id
			.' AND memberId='.$this->member->id);
	}
	
	function delete() {
		if ($this->project->id && $this->member->id) {
			$this->getConnection();
			return $this->query('DELETE FROM '.$this->gTable()
				.' WHERE projectId='.$this->project->id
				.' AND memberId='.$this->member->id);
		} else {
			return false;
		}
	}

}

class Member extends TznUser 
{

	function Member() {
		parent::TznUser('member');
		$this->addProperties(array(
			'email'				=> 'EML',
			'title'				=> 'STR',
			'firstName'			=> 'STR',
			'middleName'		=> 'STR',
			'lastName'			=> 'STR',
			'city'				=> 'STR',
			'zipCode'			=> 'STR',
			'stateCode'			=> 'STR',
			'country'			=> 'OBJ',
			'phone'				=> 'STR',
			'mobile'			=> 'STR',
			'fax'				=> 'STR',
            'author'            => 'OBJ'
		));
        $this->_properties['level'] = 'NUM';
	}

    function checkLevel($level) {
        $level--;
        return ($GLOBALS['confGlobalRights'][$this->level]{$level} == '1');
    }
	
	function getShortName($default='') {
		$str = $this->firstName;
		if ($this->middleName) {
			$str .= ' '.Tzn::utf8_substr($this->middleName,0,1).'.';
		}
		return ($str)?$str:$default;
	}
	
	function getName() {
		$str = $this->title.' '.$this->firstName;
		if ($this->middleName) {
			$str .= ' '.Tzn::utf8_substr($this->middleName,0,1).'.';
		}
		$str .= ' '.$this->lastName;
		return $str;
	}
	
	function getLocation($arrCountry = null) {
		$str = $this->city;
		$str .= ($this->stateCode)?' ('.$this->stateCode.')':'';
        if ($str) {
            $str.= ', ';
        }
		if (is_array($arrCountry)) {
			$str .= $arrCountry[$this->country->id];
		} else if ($this->country->name) {
			$str .= $this->country->name;
		} else {
			$str .= $this->country->id;
		}
		return $str;
	}
	
	function getRssCode() {
		return md5($this->firstName.$this->lastName.$this->password);
	}
	
	function checkRssCode($code) {
		return ($code == $this->getRssCode());
	}
	
	function check($pass1, $pass2, $force=false) {
		// check compulsory fields
		//$check1 = $this->checkEmpty('firstName,lastName,email,country');
		$check1 = $this->checkEmpty('firstName,lastName');
		if ($this->country->id == 'US') {
			$check2 = $this->checkEmpty('stateCode');
		} else {
			$check2 = true;
		}
		// check unique email
        if ($this->email) {
            $check3 = !$this->checkUnique('email',$this->email);
            if (!$check3) {
                $this->e('email','An account already exists with this address');
            }
        } else {
            $check3 = true;
        }
		
		// check unique login
        $check4 = $this->setLogin($this->username);

        if ($this->enabled || $force) {
            // check and set valid password
            $check5 = $this->setPassword($pass1, $pass2, false, $this->isLoaded());
        } else {
            $check5 = true;
        }

		//var_dump($check1,$check2,$check3,$check4,$check5);
		
		if ($check1 && $check2 && $check3 && $check4 && $check5) {
			return true;
		} else {
			// failed first tests, do not save
			return false;
		}
	}

    function delete() {
        if ($this->id) {
			// 1. delete member
			if (parent::delete()) {
                // 2. delete projects relations
				$this->query('DELETE FROM '.$this->gTable('memberProject').' WHERE memberId='.$this->id);
                // 3. unassociate tasks
                $this->query('UPDATE '.$this->gTable('item').' SET memberId=0 WHERE memberId='.$this->id);
                // 4. delete comments
                $this->query('DELETE FROM '.$this->gTable('itemStatus').' WHERE memberId='.$this->id);
                // 5. unassociate users
                $this->query('UPDATE '.$this->gTable('member').' SET authorId=1 WHERE authorId='.$this->id);
                return true;
            }
        }
        return false;
    }

    function loadNonMemberList($projectId) {
        $this->addWhere('mp.memberId IS NULL');
        return parent::loadList('SELECT mm.* FROM '.$this->gTable().' as mm '
            .'LEFT JOIN '.$this->gTable('memberProject').' as mp '
            .'ON mm.memberId = mp.memberId AND mp.projectId = '.$projectId);
    }

}

class Author extends Member {

    function Author() {
        parent::Member();
    }

}

class Country extends TznDb 
{

	function Country() {
		parent::TznDb('country');
		$this->addProperties(array(
			'id'	=> 'UID',
			'name'	=> 'STR'
		));
	}

}

class CountryStats extends Country
{

	function CountryStats() {
		parent::Country();
		$this->addProperties(array(
			'projectCount'	=> 'NUM'
		));
	}

}

class CountryUsrStats extends Country
{

	function CountryUsrStats() {
		parent::Country();
		$this->addProperties(array(
			'memberCount'	=> 'NUM'
		));
	}

}

class CountryResStats extends Country
{

	function CountryResStats() {
		parent::Country();
		$this->addProperties(array(
			'resourceCount'	=> 'NUM'
		));
	}

}

class UsState extends TznCollection
{
	
	function UsState() {
		parent::TznCollection(array(
			'AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming"
		));
	}
	
}

?>
