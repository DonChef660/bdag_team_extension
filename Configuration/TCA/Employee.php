<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_bdagteamextension_domain_model_employee'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_bdagteamextension_domain_model_employee']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, activity, email, telephone, image, motto, employment_year, facebook, twitter, xing, description, hobby, career, category',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, activity, email, telephone, image, motto;;;richtext:rte_transform[mode=ts_links], employment_year, facebook, twitter, xing, description;;;richtext:rte_transform[mode=ts_links], hobby;;;richtext:rte_transform[mode=ts_links], career;;;richtext:rte_transform[mode=ts_links], category, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_bdagteamextension_domain_model_employee',
				'foreign_table_where' => 'AND tx_bdagteamextension_domain_model_employee.pid=###CURRENT_PID### AND tx_bdagteamextension_domain_model_employee.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'activity' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.activity',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'telephone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.telephone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 5),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'motto' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.motto',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rte',
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'employment_year' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.employment_year',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'facebook' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.facebook',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'twitter' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.twitter',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'xing' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.xing',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rte',
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'hobby' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.hobby',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rte',
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'career' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.career',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rte',
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'category' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bdag_team_extension/Resources/Private/Language/locallang_db.xlf:tx_bdagteamextension_domain_model_employee.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_bdagteamextension_domain_model_category',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
		'category' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
