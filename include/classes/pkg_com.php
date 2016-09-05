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

class News extends TznDb
{
	function News()
	{
		parent::TznDb('news');
		$this->addProperties(array(
			'id'	 			=> 'UID',
			'postDate'			=> 'DTE',
			'summary'			=> 'STR',
			'display'			=> 'BOL'
		));
	}
}

class EmailMessage extends TznDB {

	var $_parts;

    function EmailMessage() {
		parent::TznDB('emailMessage');
		$this->addProperties(
			array(
				'id'				=> 'UID',
				'direction'			=> 'BOL', // 0 -> FROM recipient (OUT), 1-> TO recipient (IN)
				'recipientName'		=> 'STR',
				'recipientAddress'	=> 'EML',
				'recipientCc'		=> 'EML',
				'subject'			=> 'STR',
				'body'  			=> 'HTM',
				'html'				=> 'BOL',
				'active'			=> 'BOL'
			)
		);
		$this->_parts = array();
	}

    function getDirection() {
        if ($this->direction) {
            return $GLOBALS['langEmail']['direction_in'];
        } else {
            return $GLOBALS['langEmail']['direction_out'];
        }
    }

    function getRecipient() {
        if ($this->direction) {
            return $GLOBALS['langEmail']['recipient_to'].': '.$this->getHtml("recipientAddress");
        } else {
            return $GLOBALS['langEmail']['recipient_from'].': '.$this->getHtml("recipientAddress");
        }
    }
	
	function setBody($body='') {
        $bodyOk = false;
        if (!$this->body) {
            $bodyOk = true;
            $this->body = $body;
        } else if (preg_match_all('/\{[^}]*\}/',$this->body,$arrFound)) {
			$arrFound = $arrFound[0];
			if (count($arrFound)) {
				$arrFound = array_unique($arrFound);
				foreach ($arrFound as $pattern) {
					$value = '';
					$prop = Tzn::utf8_substr($pattern,1,-1);
                    if ($prop == 'body') {
                        $bodyOk = true;
                        $this->body = str_replace($pattern,$body,$this->body);
                        continue;
                    }
                    $arrProp = explode('->',$prop);
                    if (count($arrProp) > 1) {
                        $varObj = $arrProp[0];
                        if (is_object($GLOBALS[$var])) {
                            $objItem =& $GLOBALS[$var];
                            if (in_array($prop,$objItem->_properties)) {
                                $value = $objItem->$prop;
                            } else if (method_exists($objItem,$prop)) {
                                $value = $objItem->$prop();
                            }
                        }
                    } else {
                        $value = $GLOBALS[$prop];
                    }					
					/*
					echo $prop.' -&gt; ';
					echo $value.'<br />';
					*/
					if ($value) {
						$this->body = str_replace($pattern,$value,$this->body);
					}
				}
			}
		}
        if (!$bodyOk) {
            // supplied body not placed
            $this->body .= "\r\n".$body;
        }
		//echo '<pre>'.$this->body.'</pre>';
	}

    function check() {
        if (!$this->recipientAddress) {
            $this->_error["recipientAddress"] = $GLOBALS['langEmail']['check_recipient'];
        }
        if (!$this->subject) {
            $this->_error["subject"] = $GLOBALS['langEmail']['check_subject'];
        }
        return (count($this->_error) == 0);
    }

    function add_attachment($name =  "", $ctype = "application/octet-stream") {

        $this->_parts[] = array (
            "ctype" => $ctype,
            "encode" => $encode,
            "name" => $name
        );
    }

    function build_message($part) {
        $resume = COM_PATH_ATTACHMENT.$part["name"];
        $fp = fopen($resume, "r");
        $read = fread($fp, filesize($resume));
        $read = chunk_split(base64_encode($read));
        $encoding =  "base64";
        return  "Content-Type: ".$part[ "ctype"].($part[ "name"]? "; name = \"".$part[ "name"]."\"" :  "")."\nContent-Transfer-Encoding: $encoding\n\n$read\n";
   }

   /*
    *      void build_multipart()
    *      Build a multipart mail
    */

    function build_multipart($boundary) {
        
        // $multipart = "Content-Type: multipart/mixed; boundary = $boundary\n\nThis is a MIME encoded message.\n\n--$boundary";
        $multipart = "";

        for($i = sizeof($this->__parts)-1; $i >= 0; $i--) {
            $multipart .=  "\n".$this->build_message($this->__parts[$i])."--$boundary";
        }
        return $multipart.=  "--\n";
    }

   /*
    *      string get_mail()
    *      returns the constructed mail
    */

   /* send mail */

    function sendForm($objData, $address, $name=null) {
        // sending data from form: every field $_REQUEST["EMXXXXXXX"]
        $str = "";
        if ($this->html) {
            $str = "<table cellpadding=3 cellspacing=0 border=1>";
        }
        foreach($objData as $key => $value) {
            $pos = strpos($key, "EM");
            if (($pos === false) || ($pos > 0)) {
                continue;
            }
            $key = Tzn::utf8_substr($key,2);
            if (get_magic_quotes_gpc()) {
                $value = stripslashes($value);
            }
            if ($this->html) {
                $str .="<tr><td>".$key."</td><td>".nl2br(htmlspecialchars($value))."</td></tr>";
            } else {
                $str .= "\t".$key."=\t".$value."\n\n";
            }
        }
        if ($this->html) {
            $str .= "</table>";
        }
		if (preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$address)
			|| preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$name))
		{
				$this->_error['send'] = $GLOBALS['langEmail']['check_injection'];
				return false;
		}
        return $this->send($str, $address, $name);
	}

	function sendObject($objData, $address, $name=null) {
        $str = "";
        if ($this->html) {
            $str = "<table cellpadding=3 cellspacing=0 border=1>";
        }
		foreach($objData as $key => $value) {
			if (ereg('^_',$key)) {
				continue;
			}
			if ($value && preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$value)) {
				$this->_error['body'] = $GLOBALS['langEmail']['check_injection'];
				return false;
			}
            if ($this->html) {
                $str .="<tr valign=\"top\"><td>".$key."</td><td>".nl2br(htmlspecialchars($value))."</td></tr>";
            } else {
                $str .= "\t".$key."=\t".$value."\n\n";
            }
        }
        if ($this->html) {
            $str .= "</table>";
        }
		if (preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$address)
			|| preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$name))
		{
				$this->_error['send'] = $GLOBALS['langEmail']['check_injection'];
				return false;
		}

        return $this->send($str, $address, $name);
	}

    function send($message, $address, $name=null) {
        $this->setBody($message);
        if (!$this->active) {
            $this->_error["send"] = $GLOBALS['langEmail']['check_active'];
            return false;
		}
		//echo 'message from '.$address.'<pre>'; $this->dump(); echo '</pre>';
		$this->setEml('_tmpEmail',$address);
		$address =& $this->_tmpEmail;
        if (!$address) {
            $this->_error["address"] = $GLOBALS['langEmail']['check_recipient'];
            return false;
        }
        if ($this->recipientName && 
            (!preg_match("/(%0A|%0D|\n+|\r+)(mime-version|content-type:|to:|cc:|bcc:)/i", $this->recipientName)))
        {
            $rcpt1 = $this->recipientName." <".$this->recipientAddress.">";
        } else {
            $rcpt1 = $this->recipientAddress;
        }
        if ($name) {
            $rcpt2 = $name." <".$address.">";
        } else {
            $rcpt2 = $address;
        }
        if ($this->direction) {
            $rcptFrom = $address;
            $rcptFromComplete = $rcpt2;
            $rcptTo = $rcpt1;
        } else {
            $rcptFrom = $this->recipientAddress;
            $rcptFromComplete = $rcpt1;
            $rcptTo = $rcpt2;
        }
        $headers = "From: ".$rcptFromComplete."\r\n";
        if ($this->recipientCc) {
            $headers .= "Cc: ".$this->recipientCc."\r\n";
        }
		if ($this->recipientBcc) {
            $headers .= "BCC: ".$this->recipientBcc."\r\n";
        }

        $message = $this->body;

        if (preg_match("/(%0A|%0D|\n+|\r+)(mime-version|content-type:|to:|cc:|bcc:)/i", $message)) {
            $this->_error['body'] = $GLOBALS['langEmail']['check_injection'];
            return false;
        }

        if (count($this->_parts)) {

            $boundary =  "b".md5(uniqid(time()));
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n";
            $body = "This is a MIME encoded message.\n\n--$boundary\r\n".$body;
            if ($this->html) {
                $body .= "Content-type: text/html; charset=iso-8859-1\r\n";
            } else {
                $body .= "Content-type: text/plain; charset=iso-8859-1\r\n";
            }
            $message = $body.$message;
            $message .=  "\r\n\r\n--".$boundary.$this->build_multipart($boundary);
        } else {
            if ($this->html) {
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            } else {
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
            }
        }    

		if (preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$message)) {
			$this->_error['send'] = $GLOBALS['langEmail']['check_injection'];
			return false;
		}

        if (@constant('TZN_EMAIL_FORCE_SENDER')) {
			//error_log('EMAIL: sent forced email to '.$rcptTo);
			return @mail($rcptTo, $this->subject, $message, $headers, "-f".$rcptFrom);
        } else {
			//error_log('EMAIL: sent regular email to '.$rcptTo);
            return @mail($rcptTo, $this->subject, $message, $headers);
        }
    }

}
