<?PHP
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
 * @link       http://www.tirzen.com/tzn/
 * @version    1.8
 */

/**
 * TZN: Tirzen Framework (TZN) common/generic class
 *
 * @package    TZN
 * @author     Stan Ozier <stan@sweetlava.com>
 * @version    1.8
 */

/*
define('TZN_FILE_ICONS_PATH','');
define('TZN_FILE_ICONS_URL','');
define('TZN_FILE_TEMP_PATH','');
define('TZN_FILE_UPLOAD_PATH','');
define('TZN_FILE_UPLOAD_URL','');
define('TZN_FILE_RANDOM',false);
define('TZN_FILE_GD_VERSION',2);
define('TZN_FILE_GD_QUALITY',65);
*/

define(TZN_FILE_SLASH,"/");

class TznFile extends Tzn {

    var $folder;
    var $origName;
    var $tempName;
    var $fileName;
	var $fileType;
	var $fileSize;
	var $thumbParams;
    var $_mimeList;

  function TznFile($type='image') {
        if ($type == 'document') {
            $this->_mimeList= array (
				"jpeg"	=> ".jpg",
				"jpg"	=> ".jpg",
				"pjpeg"	=> ".jpg",
				"png"	=> ".png",
				"gif"	=> ".gif",
				"x-png"	=> ".png",
				"plain" => ".txt",
				"pdf"	=> ".pdf",
				"msword" => ".doc",
				"msexcel" => ".xls",
				"ms-excel" => ".xls",
				"vnd.ms-excel" => ".xls",
				"quicktime" => ".mov",
				"x-msvideo" => ".avi",
				"x-zip-compressed" => ".zip",
				"tiff" => ".tif",
				"html" => ".html",
				"xml" => ".xml",
				"vnd.ms-powerpoint" => ".pps",
				"vnd.powerpoint" => ".pps"
			);
        } else {
            $this->_mimeList= array (
				"jpeg"	=> ".jpg",
				"jpg"	=> ".jpg",
				"pjpeg"	=> ".jpg",
				"png"	=> ".png",
				"gif"	=> ".gif",
				"x-png"	=> ".png",
				"tiff" => ".tif"
			);
        }
    }

	function isImage() {
		return ereg("jpg|jpeg|png|gif",$this->fileType);
	}

	function pIcon($option="") {
		$ext = strrchr($this->_origName,'.');
		if (@constant("TZN_FILE_ICONS_PATH")) {
			$ext = substr($ext,1);
			if (file_exists(TZN_FILE_ICONS_PATH."f_".$ext.".gif")) {
				$img = TZN_FILE_ICONS_URL."f_".$ext.".gif";
			} else {
				$img = TZN_FILE_ICONS_URL."f_unknown.gif";
			}
			return '<img src="'.$img.'" width="16" heigth="16" border="0" alt="'
				.$ext.'" '.$option.'/>';
		} else {
			return $ext;
		}
	}

    function getShortSize() {
        $dsize = $this->fileSize;
        if (strlen($dsize) <= 9 && strlen($dsize) >= 7) {                  
			$dsize = number_format($dsize / 1048576,1); 
			return "$dsize MB"; 
		} elseif (strlen($dsize) >= 10) { 
			$dsize = number_format($dsize / 1073741824,1); 
			return "$dsize GB"; 
		} else { 
			$dsize = number_format($dsize / 1024,1); 
			return "$dsize KB"; 
		} 
    }

	function upload($field) {
		if (($_FILES[$field] == null) || ($_FILES[$field]['tmp_name'] == '')) {
			return false;
		}
		// check file type
		$fileType = $_FILES[$field]['type'];
		if ($pos = strpos($fileType,";")) {
			// opera returns mimetype; filename
			$fileType = substr($fileType,0,$pos);
		}
		$arrMime = split("/",$fileType);
		$type = $arrMime[1];
		if ((!empty($type)) && (array_key_exists($type,$this->_mimeList))) {
			$ext = $this->_mimeList[$type];
		} else {
			$this->_error[$field] =
				$GLOBALS['langTznDocument']['document_wrong_type'];
			return false;
		}
		
		$this->folder = '';
		$num = func_num_args();
		if ($num > 1) {
			$args = func_get_args();
			$idx = 1;
			if (is_array($args[1])) {
				$this->thumbParams = $args[1];
				$this->folder = $this->thumbParams[0][2];
			} else if (intval($args[1]) == $args[1]) {
				// param is width			
				if ($num > 3) {
					$this->folder = $args[3];
				}
				$this->thumbParams[0] = array($args[1],$args[2],$this->folder);
			} else {
				// param is folder
				$this->folder = $arg[1];
			}
		}
		
		// echo("mimetype=".$fileType."<br>");
		if (is_uploaded_file($_FILES[$field]['tmp_name'])) {
			$this->tempName = substr(strrchr($_FILES[$field]['tmp_name'],DIRECTORY_SEPARATOR),1);
			$this->origName = $_FILES[$field]['name'];
			$this->fileType = $fileType;
			$this->fileSize = $_FILES[$field]['size'];
			copy($_FILES[$field]['tmp_name'],
				TZN_FILE_TEMP_PATH.$this->tempName);
			// echo "file ".$this->origName." uploaded in ".TZN_FILE_TEMP_PATH." as ".$this->tempName;
			// exit;
			return $this->tempName;
		}
		return false;
	}
	
	function save() {
		
		if (!$this->tempName) {
			return false;
		}
		// delete old file
		if ($this->oldFile) {
			$this->delete($this->oldFile);
		}
		// generate filename
		$this->fileName = $this->zGenFileName($this->origName,$this->folder);
		if (is_array($this->thumbParams)) {
			// create thumbnail
			foreach ($this->thumbParams as $arrPrm) {
				// thumbnail(width,height,folder)
				$this->thumbnail($arrPrm[0],$arrPrm[1],$arrPrm[2]);
			}
			unlink(TZN_FILE_TEMP_PATH.$this->tempName);
		} else if (file_exists(TZN_FILE_TEMP_PATH.$this->tempName)) {
			// move file to destination folder
			copy(TZN_FILE_TEMP_PATH.$this->tempName,
				TZN_FILE_UPLOAD_PATH.$this->folder.$this->fileName);
			unlink(TZN_FILE_TEMP_PATH.$this->tempName);
            return true;
        }
	}
	
	function thumbnail($width=9999,$height=9999,$folder='') {
		
		// get image information
		if (file_exists(TZN_FILE_TEMP_PATH.$this->tempName)) {
			$filepath = $this->tempName;
		} else {
			$filepath = $this->folder.$this->fileName;
		}
		
		if (($folder != "") && 
			(strrpos($folder,TZN_FILE_SLASH) != (strlen($folder)-1)))
		{
			$folder = $folder.TZN_FILE_SLASH;
		}
		$thumbUrl = TZN_FILE_UPLOAD_URL.$folder;
		$thumbPath = $folder;
		
		$objThumb = new TznThumbnail($filepath, $width, $height,
			$thumbUrl, $thumbPath, $this->fileName);
		$objThumb->generate();
	}

    function delete($fileName=null,$folder='') {
        if (!$fileName) {
            $fileName = $this->fileName;
        }
        if ($folder) {
        	$fileName = $folder.$fileName;
        }
		if (file_exists($fileName) && is_file($fileName)) {
            return unlink($fileName);
        } else if (file_exists(TZN_FILE_TEMP_PATH.$fileName) &&
        	is_file(TZN_FILE_TEMP_PATH.$fileName))
        {
            return unlink(TZN_FILE_TEMP_PATH.$fileName);
        } else if (file_exists(TZN_FILE_UPLOAD_PATH.$fileName) &&
        	is_file(TZN_FILE_UPLOAD_PATH.$fileName))
        {
            return unlink(TZN_FILE_UPLOAD_PATH.$fileName);
        }
        return false;
    }
    
    function zGenFileName($fileName, $folder) {
		// returns a string for new file name
		$fileRoot = substr($fileName,0,strrpos($fileName,'.'));
		$fileRoot = preg_replace('/[^a-zA-Z0-9_\-\.]/','_',strtolower($fileRoot));
		$fileRoot .= '-';
		$ext = strrchr($fileName,'.');
		$i = 1;
		do {
			if (TZN_FILE_RANDOM) {
				$fileDest = Tzn::getRdm(16,
					"abcdefghijklmnopqrstuvwxyz0123456789");
			} else {
				$fileDest = $fileRoot.(($i<10)?'0'.$i:$i);
			}
			$fileDest .= $ext;
			$i++;
		} while (file_exists(TZN_FILE_UPLOAD_PATH.$folder.$fileDest));
		return $fileDest;
	}
    

}


/**
 *  Thumbnail
 */

class TznThumbnail	{

	var $_rootPath;
	var $_rootUrl;
	var $_filePath; // path to orginal
	var $_fileName; // file name of original
	var $_orgXSize; // original width
	var $_newXSize; // request max width
	var $_genXSize; // thumbnail width
	var $_orgYSize; // orignal height
	var $_newYSize; // requested max height
	var $_genYSize; // thumbnail height
	var $_type;
	var $_thumbPath; // path to saved thumbnails
	var $_thumbUrl; // URL to saved thumbnails
	var $_image; // original image
	var $_thumb; // thumbnail
	var $_quality; // jpeg compression rate
	var $_needResize;

	function TznThumbnail($fileName, $newxsize=9999,$newysize=9999,
		$thumbUrl='', $thumbPath='', $save=true, $quality=TZN_FILE_GD_QUALITY) 
	{
		$fileName = urldecode($fileName);
		$idx = strrpos($fileName,TZN_FILE_SLASH);
		if ($idx === false) {
			$this->_fileName = $fileName;
			$this->_filePath = "";
		} else {
			$this->_fileName = substr($fileName, $idx+1);
			$this->_filePath = substr($fileName, 0, $idx+1);
		}
		// echo($this->_fileName." -- ".$this->_filePath);
		$this->_newXSize = $newxsize;
		$this->_newYSize = $newysize;
		if (!$this->getInfo()) {
			// no need to resize
			$this->_needResize = false;
		} else {
			$this->_needResize = true;
		}
		if ($save) {
			//$this->_thumbPath = $this->addTrailingSlash($thumbPath);
            $this->_thumbPath = $thumbPath;
          	if (is_string($save)) {
          		// new filename for thumbnail
          		$this->_thumbFile = $save;
          	}
		} else {
			$this->_thumbPath = "";
			$this->_thumbUrl = $thumbUrl;
		}
		$this->_quality = $quality;
	}


	function getTag($mode = "real", $options = 'border="0"') {
		$html = "";
		if ($this->_needResize) {
			if ($mode == "real") {
				$html = '<a href="'.$this->_rootUrl
					.$this->_filePath.$this->_fileName.'" target="_blank">';
			}
			if ($this->_thumbPath != "") {
				// save to disk
				$this->generate();
				$html .= '<img src="'.$this->_rootUrl
					.$this->_thumbPath.$this->_fileName
					.'" width="'.$this->_genXSize.'" height="'.$this->_genYSize
					.'" '.$options;
			} else {
				// redirect to script
				$html .= '<img src="getThumb.php?mode='.$mode
					.'&fileName='.urlencode($this->_filePath.$this->_fileName)
					.'&newxsize='.$this->_newXSize
					.'&newysize='.$this->_newYSize.'&q='.$this->_quality
					.'" width="'.$this->_genXSize.'" height="'.$this->_genYSize
					.'" '.$options.' />';
			}
			if ($mode == "real") {
				$html .= "</a>";
			}
		} else {
			$html = '<img src="';
			$html .= $this->_rootUrl;
			$html.= $this->_filePath.$this->_fileName.'" width="'
				.$this->_orgXSize.'" height="'.$this->_orgYSize
				.'" '.$options.' />';
		}
		return $html;
	}

	function generate($iSize = 0) {
        if ($iSize != 0) {
            $file = str_replace(".","_".$iSize.".",$this->_fileName);
        } else {
            $file = $this->_fileName;
        }
        
		// create thumbnail
		if ($this->_needResize) {
			$this->create();
			if ($this->_thumbPath != "") {
				// save to disk
                if ($iSize != 0) {
        			return $this->save($iSize);
                } else {
        			return $this->save();
                }
			} else {
				// return data flow
				return $this->show();
			}
		} else if ($this->_thumbPath != "") {
			if (!file_exists($this->_rootPath
				.$this->_thumbPath.$this->_fileName))
			{
				$srcFile = $this->_rootPath.$this->_filePath.$this->_fileName;
				if (!file_exists($srcFile)) {
					$srcFile = TZN_FILE_TEMP_PATH.$this->_fileName;
				}
				if (is_string($this->_thumbFile)) {
					$file = $this->_thumbFile;
				} else {
					$file = $this->_fileName;
				}
				copy($srcFile,TZN_FILE_UPLOAD_PATH.$this->_thumbPath.$file);
			}
		}
	}

	function getInfo() {
	
		if (file_exists(TZN_FILE_UPLOAD_PATH.$this->_filePath.$this->_fileName))
		{
			$this->_rootUrl = TZN_FILE_UPLOAD_URL;
			$this->_rootPath = TZN_FILE_UPLOAD_PATH;
		} else {
			$this->_rootUrl = TZN_FILE_TEMP_URL;
			$this->_rootPath = TZN_FILE_TEMP_PATH;
		}

		$orig_size = @getimagesize($this->_rootPath.
			$this->_filePath.$this->_fileName);

		$this->_orgXSize = $orig_size[0];
		$this->_orgYSize = $orig_size[1];

		$this->_genXSize = $this->_newXSize;
		$this->_genYSize = $this->_newYSize;
		$this->_type = $this->getImgType($orig_size[2]);

		if (($this->_orgXSize > $this->_genXSize) 
			|| ($this->_orgYSize > $this->_genYSize))
		{
			$ratioX = ($this->_newXSize) / $this->_orgXSize;
			$ratioY = ($this->_newYSize) / $this->_orgYSize;
			$ratioG = ($ratioX < $ratioY)?$ratioX:$ratioY;
			$this->_genXSize = round($this->_orgXSize * $ratioG);
			$this->_genYSize = round($this->_orgYSize * $ratioG);
			// $this->_genYSize = round($this->_genXSize / ($this->_orgXSize/$this->_orgYSize));
		} else {
			return false;
		}
        
		/*
		echo ("<br>file name: ".$this->_fileName);
		echo ("<br>type: ".$this->_type);
		echo ("<br>original size: ".$this->_orgXSize." / ".$this->_orgYSize);
        echo ("<br>expected size: ".$this->_newXSize." / ".$this->_newYSize);
		echo ("<br>generate size: ".$this->_genXSize." / ".$this->_genYSize);
        exit;
		*/
        return true;
	}


	function create() {
        if ($this->_type=="PNG") {
             $this->_image = 
             	imagecreatefrompng($this->_rootPath.
             		$this->_filePath.$this->_fileName);
        }
        if ($this->_type=="JPG") {
             $this->_image = 
             	imagecreatefromjpeg($this->_rootPath.
             		$this->_filePath.$this->_fileName);
        }

		if ($this->_type=="GIF") {
			$this->_image = 
				imagecreatefromgif($this->_rootPath
					.$this->_filePath.$this->_fileName);
        }

		if (($this->_thumbPath == "") || 
			(!file_exists($this->_rootPath.
			$this->_thumbPath.$this->_fileName))) 
		{
			if ($this->_image != null) {
				$this->_thumb = 
					@imageCreateTrueColor($this->_genXSize,$this->_genYSize);
			
				if (($this->_thumb == null) || ($this->_thumb === false)) {
					$this->_thumb =
						imageCreate($this->_genXSize,$this->_genYSize);
					imageCopyResized($this->_thumb,$this->_image, 0, 0, 0, 0,
						$this->_genXSize,$this->_genYSize,$this->_orgXSize,
						$this->_orgYSize);
				} else {
					// $this->_thumb = 
					//	imageCreateTrueColor($this->_genXSize,$this->_genYSize);
					imageCopyResampled($this->_thumb,$this->_image,0,0,0,0,
						$this->_genXSize, $this->_genYSize,
						$this->_orgXSize,$this->_orgYSize);					
				}
			} else {
				// fake thumb for different types
				if ($this->_newXSize > 125) {
					$this->_newXSize = 125;
				}
				$this->_thumb = imageCreate($this->_newXSize, 50); 
				$bgc = imagecolorallocate($this->_thumb, 201, 201, 201);
				$tc  = imagecolorallocate($this->_thumb, 0, 0, 0);
				imagefilledrectangle($this->_thumb, 0, 0, 
					$this->_newXSize, 50, $bgc);
				imagestring($this->_thumb, 2, ($this->_newXSize / 2) - 15, 17,
					".".$this->_type, $tc);
			}
		} else {
			// well we don't need to do anything, do we?
            $this->_thumb = $this->_image;
		}
	}


	function save($Size = 0) {

        if ($Size != 0) {
            $file = str_replace(".","_".$Size.".",$this->_fileName);
        } else if (is_string($this->_thumbFile)) {
        	$file = $this->_thumbFile;
        } else {
            $file = $this->_fileName;
        }
		// echo "saving ".$this->_type." thumbnail to ".TZN_FILE_UPLOAD_PATH.$this->_thumbPath.$file;
		if (!file_exists($this->_thumbPath.$this->_fileName)) {
			switch($this->_type) {
				case "JPG": 
					return ImageJpeg($this->_thumb,
						TZN_FILE_UPLOAD_PATH.$this->_thumbPath.$file,
						$this->_quality);
					break;
				case "PNG":
				case "GIF":
					return ImagePNG($this->_thumb, 
						TZN_FILE_UPLOAD_PATH.$this->_thumbPath.$file);
					break;
				default:
					return ImageJpeg($this->_thumb, 
						TZN_FILE_UPLOAD_PATH.$this->_thumbPath.$file,
						$this->_quality);
					break;
			}
			$this->destroy();
		}
        return true;
	}


	function show() {
		switch($this->_type) {
			case "PNG":
			case "GIF":
				header ("Content-type: image/x-png");
				return ImagePNG($this->_thumb);
				break;
			default:
				header ("Content-type: image/pjpeg");
				return ImageJpeg($this->_thumb, null, $this->_quality);
				break;
		}
		$this->destroy();
	}

	function getImgType($type)	{
		switch ($type) {
			case 1 :
        		return "GIF";
      		case 2 :
        		return "JPG";
      		case 3 :
        	 	return "PNG";
        	case 4 :
        		return "SWF";
        	case 5 :
        		return "PSD";
        	case 6 :
        		return "BMP";
        	case 7 :
        		return "TIFF_II";
        	case 8 :
        		return "TIFF_MM";
        	case 9 :
        		return "JPC";
        	case 10 :
        		return "JP2";
        	case 11 :
        		return "JPX";	
      	}
	}

	function addTrailingSlash($path) {
		if (($path != "") && 
			(strrpos($path,TZN_FILE_SLASH) != (strlen($path)-1)))
		{
			return $path.TZN_FILE_SLASH;
		} else {
			return $path;
		}
	}

	function destroy() {
		ImageDestroy($this->_image);
		ImageDestroy($this->_thumb);
	}
}


?>
