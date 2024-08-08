<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projects_domain_model_category', 'EXT:projects/Resources/Private/Language/locallang_csh_tx_projects_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projects_domain_model_category');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projects_domain_model_degreecourse', 'EXT:projects/Resources/Private/Language/locallang_csh_tx_projects_domain_model_degreecourse.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projects_domain_model_degreecourse');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projects_domain_model_project', 'EXT:projects/Resources/Private/Language/locallang_csh_tx_projects_domain_model_project.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projects_domain_model_project');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projects_domain_model_semester', 'EXT:projects/Resources/Private/Language/locallang_csh_tx_projects_domain_model_semester.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projects_domain_model_semester');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projects_domain_model_students', 'EXT:projects/Resources/Private/Language/locallang_csh_tx_projects_domain_model_students.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projects_domain_model_students');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projects_domain_model_lecturers', 'EXT:projects/Resources/Private/Language/locallang_csh_tx_projects_domain_model_lecturers.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projects_domain_model_lecturers');
})();
