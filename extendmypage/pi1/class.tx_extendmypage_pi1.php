<?php

/* * *************************************************************
*  Copyright notice
*
*  (c) 2016 Alagukannan Kumaresan <alagukannan83@yahoo.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
* ************************************************************* */
/**
* [CLASS/FUNCTION INDEX of SCRIPT]
*
* Hint: use extdeveval to insert/update function index above.
*/
#require_once(PATH_tslib . 'class.tslib_pibase.php');

/**
* Plugin 'Extend My Page' for the 'extendmypage' extension.
*
* @author	Alagukannan Kumaresan <alagukannan83@yahoo.de>
* @package	TYPO3
* @subpackage	tx_extendmypage
*/
class tx_extendmypage_pi1 extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {

  var $prefixId = 'tx_extendmypage_pi1';  // Please give same name of class name
  var $scriptRelPath = 'pi1/class.tx_extendmypage_pi1.php';
  var $extKey = 'extendmypage'; // Typo3 extension key.
  var $pi_checkCHash = true;

  /**
  * The main method of the PlugIn
  *
  * @param	string		$content: The PlugIn content
  * @param	array		$conf: The PlugIn configuration
  * @return	The content that is displayed on the website
  */
  function main($content, $conf) {
    $this->conf = $conf;
    $this->pi_setPiVarDefaults();
    $this->pi_loadLL();


     /* This block only for Image Upload if you would like to add images via page properties, then use this below commented block.
    $content = "";
    $this->upload = "uploads/tx_extendmypage/";
    foreach ($GLOBALS['TSFE']->rootLine as $page) {


      $images = $page["tx_extendmypage_partnerlogo"];
      if ($images != "") {
        $images_array = explode(",", $images);
        if (count($images_array) > 0) {
          foreach ($images_array AS $image_single) {
            $imgTSConfig['img'] = 'IMAGE';
            $imgTSConfig['img.'] = $this->conf['img.'];
            $imgTSConfig['img.']['file'] = $this->upload . $image_single;

            $bild_img = $this->cObj->IMAGE($imgTSConfig['img.']);

            $content.=$bild_img;
            //print_r($imgTSConfig);
            //break;
          }
          return $content;
        }
      }

      */

    }

    if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/extendmypage/pi1/class.tx_extendmypage_pi1.php']) {
      include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/extendmypage/pi1/class.tx_extendmypage_pi1.php']);
    }
    ?>
