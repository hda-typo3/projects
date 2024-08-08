<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Projects',
    'Pi1',
    'All'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Projects',
    'Pi2',
    'Lecturer'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Projects',
    'Pi3',
    'list,show'
);
