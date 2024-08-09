<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Projects',
    'Pi1',
    'All'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['projects_pi1'] = 'layout,recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['projects_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('projects_pi1', 'FILE:EXT:projects/Configuration/FlexForms/all.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Projects',
    'Pi2',
    'Lecturer'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Projects',
    'Pi3',
    'List'
);
