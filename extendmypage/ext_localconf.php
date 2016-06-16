<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, 'pi1/class.tx_extendmypage_pi1.php', '_pi1', 'list_type', 1);
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_extendmypage_headerhtmlcode';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_extendmypage_sourceparam';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_extendmypage_mediumparam';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_extendmypage_contentparam';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_extendmypage_termparam';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_extendmypage_nameparam';
?>
