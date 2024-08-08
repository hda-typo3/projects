<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,teaser,description,studentsfreetext,copartner,copartnerlink,path_segment',
        'iconfile' => 'EXT:projects/Resources/Public/Icons/tx_projects_domain_model_project.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'title, teaser, description, studentsfreetext, lecturersfreetext, date, copartner, copartnerlink, topimage, media, thumbimage, lightboxstyle, path_segment, category, degreecourse, semester, students, lecturers, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_projects_domain_model_project',
                'foreign_table_where' => 'AND {#tx_projects_domain_model_project}.{#pid}=###CURRENT_PID### AND {#tx_projects_domain_model_project}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.title',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'teaser' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.teaser',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.teaser.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.description',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.description.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'studentsfreetext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.studentsfreetext',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.studentsfreetext.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'lecturersfreetext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.lecturersfreetext',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.lecturersfreetext.description',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
        'date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.date',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.date.description',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'copartner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.copartner',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.copartner.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'copartnerlink' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.copartnerlink',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.copartnerlink.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'topimage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.topimage',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.topimage.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'topimage',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'topimage',
                        'tablenames' => 'tx_projects_domain_model_project',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
        'media' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.media',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.media.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'media',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'media',
                        'tablenames' => 'tx_projects_domain_model_project',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
        'thumbimage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.thumbimage',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.thumbimage.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'thumbimage',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'thumbimage',
                        'tablenames' => 'tx_projects_domain_model_project',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
        'lightboxstyle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.lightboxstyle',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.lightboxstyle.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'path_segment' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.path_segment',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.path_segment.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.category',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.category.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_projects_domain_model_category',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'degreecourse' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.degreecourse',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.degreecourse.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_projects_domain_model_degreecourse',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'semester' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.semester',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.semester.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_projects_domain_model_semester',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'students' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.students',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.students.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_projects_domain_model_students',
                'MM' => 'tx_projects_project_students_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'lecturers' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.lecturers',
            'description' => 'LLL:EXT:projects/Resources/Private/Language/locallang_db.xlf:tx_projects_domain_model_project.lecturers.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_projects_domain_model_lecturers',
                'MM' => 'tx_projects_project_lecturers_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
    
    ],
];
