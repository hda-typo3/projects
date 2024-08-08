<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Projects',
        'Pi1',
        [
            \Hda\Projects\Controller\ProjectController::class => 'all, show'
        ],
        // non-cacheable actions
        [
            \Hda\Projects\Controller\ProjectController::class => 'show'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Projects',
        'Pi2',
        [
            \Hda\Projects\Controller\ProjectController::class => 'lecturer, show'
        ],
        // non-cacheable actions
        [
            \Hda\Projects\Controller\ProjectController::class => 'show'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Projects',
        'Pi3',
        [
            \Hda\Projects\Controller\ProjectController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Hda\Projects\Controller\ProjectController::class => 'show'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = projects-plugin-pi1
                        title = LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_pi1.name
                        description = LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = projects_pi1
                        }
                    }
                    pi2 {
                        iconIdentifier = projects-plugin-pi2
                        title = LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_pi2.name
                        description = LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = projects_pi2
                        }
                    }
                    pi3 {
                        iconIdentifier = projects-plugin-pi3
                        title = LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_pi3.name
                        description = LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_pi3.description
                        tt_content_defValues {
                            CType = list
                            list_type = projects_pi3
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
