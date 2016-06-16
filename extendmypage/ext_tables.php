<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_extendmypage_headerhtmlcode' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:extendmypage/locallang_db.xml:pages.tx_extendmypage_headerhtmlcode',
		'exclude' => 1,
		'config' => array(
						'type' => 'text',
						'renderType' => 't3editor',
						'format' => 'html',
						'rows' => 12,
		)
	),
	'tx_extendmypage_sourceparam' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:extendmypage/locallang_db.xml:pages.tx_extendmypage_sourceparam',
		'exclude' => 1,
		'config' => array (
				'type' => 'input',
				'max' => 255
		)
	),
	'tx_extendmypage_mediumparam' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:extendmypage/locallang_db.xml:pages.tx_extendmypage_mediumparam',
		'exclude' => 1,
		'config' => array (
				'type' => 'input',
				'max' => 255
		)
	),
	'tx_extendmypage_contentparam' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:extendmypage/locallang_db.xml:pages.tx_extendmypage_contentparam',
		'exclude' => 1,
		'config' => array (
				'type' => 'input',
				'max' => 255
		)
	),
	'tx_extendmypage_termparam' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:extendmypage/locallang_db.xml:pages.tx_extendmypage_termparam',
		'exclude' => 1,
		'config' => array (
				'type' => 'input',
				'max' => 255
		)
	),
	'tx_extendmypage_nameparam' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:extendmypage/locallang_db.xml:pages.tx_extendmypage_nameparam',
		'exclude' => 1,
		'config' => array (
				'type' => 'input',
				'max' => 255
		)
	),
);




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,1);

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi1',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,2);


$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi2',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,3);

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi3',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,4);




$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi4',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,5);


$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi5',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,6);

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi6',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,7);

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi7',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,6);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','--div--;UTM Parameters, tx_extendmypage_headerhtmlcode');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_extendmypage_sourceparam', '','after:tx_extendmypage_headerhtmlcode');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_extendmypage_mediumparam', '','after:tx_extendmypage_sourceparam');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_extendmypage_contentparam', '','after:tx_extendmypage_mediumparam');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_extendmypage_termparam', '','after:tx_extendmypage_contentparam');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_extendmypage_nameparam', '','after:tx_extendmypage_termparam');


$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:extendmypage/locallang_db.xml:tt_content.list_type_pi8',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');







?>
