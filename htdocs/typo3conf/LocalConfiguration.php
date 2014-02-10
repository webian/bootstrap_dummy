<?php
return array(
	'BE' => array(
		'RTE_imageStorageDir' => '1:variants',
		'disable_exec_function' => 0,
		'explicitADmode' => 'explicitAllow',
		'fileCreateMask' => '0666',
		'folderCreateMask' => '2777',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'extTablesDefinitionScript' => 'extTables.php',
	),
	'EXT' => array(
		'extConf' => array(
			'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:0:"";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
			'fluidcontent' => 'a:1:{s:9:"removeTab";s:1:"1";}',
			'fluidcontent_bootstrap' => 'a:0:{}',
			'fluidpages' => 'a:2:{s:8:"doktypes";s:0:"";s:10:"autoRender";s:1:"0";}',
			'flux' => 'a:6:{s:9:"debugMode";s:1:"0";s:15:"disableCompiler";s:1:"0";s:7:"compact";s:1:"0";s:20:"rewriteLanguageFiles";s:1:"0";s:12:"handleErrors";s:1:"0";s:12:"reportErrors";s:1:"0";}',
			'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'infinite_scroll_gallery' => 'a:0:{}',
			'info' => 'a:0:{}',
			'jquerycolorbox' => 'a:0:{}',
			'linkvalidator' => 'a:0:{}',
			'media' => 'a:6:{s:18:"default_categories";s:1:"3";s:15:"image_thumbnail";s:7:"100x100";s:10:"image_mini";s:7:"120x120";s:11:"image_small";s:7:"320x320";s:12:"image_medium";s:7:"760x760";s:11:"image_large";s:9:"1200x1200";}',
			'metadata' => 'a:0:{}',
			'nc_staticfilecache' => 'a:8:{s:23:"clearCacheForAllDomains";s:1:"1";s:22:"sendCacheControlHeader";s:1:"0";s:27:"enableStaticFileCompression";s:1:"1";s:23:"showGenerationSignature";s:1:"1";s:8:"strftime";s:36:"cached statically on: %d-%m-%y %H:%M";s:5:"debug";s:1:"0";s:11:"recreateURI";s:1:"0";s:26:"markDirtyInsteadOfDeletion";s:1:"0";}',
			'news' => 'a:13:{s:29:"removeListActionFromFlexforms";s:1:"0";s:20:"pageModuleFieldsNews";s:313:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,category;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,category,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:11:"archiveDate";s:4:"date";s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:25:"showMediaDescriptionField";s:1:"0";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:4:"none";s:12:"showImporter";s:1:"0";s:24:"showAdministrationModule";s:1:"1";}',
			'opendocs' => 'a:0:{}',
			'realurl' => 'a:5:{s:10:"configFile";s:21:"typo3/RealUrl.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'rtehtmlarea' => 'a:13:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:17:"defaultDictionary";s:2:"en";s:14:"dictionaryList";s:2:"en";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"1";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"enableDAMBrowser";s:1:"0";s:16:"forceCommandMode";s:1:"0";s:15:"enableDebugMode";s:1:"0";s:23:"enableCompressedScripts";s:1:"1";}',
			'saltedpasswords' => 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}',
			'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
			'seo_basics' => 'a:2:{s:10:"xmlSitemap";s:1:"1";s:16:"sourceFormatting";s:1:"1";}',
			'speciality' => 'a:0:{}',
			'specialityglobal' => 'a:0:{}',
			'specialitylocal' => 'a:0:{}',
			't3jquery' => 'a:14:{s:15:"alwaysIntegrate";s:1:"0";s:17:"integrateToFooter";s:1:"1";s:17:"enableStyleStatic";s:1:"0";s:18:"dontIntegrateOnUID";s:0:"";s:23:"dontIntegrateInRootline";s:0:"";s:13:"jqLibFilename";s:23:"jquery-###VERSION###.js";s:9:"configDir";s:19:"uploads/tx_t3jquery";s:13:"jQueryVersion";s:5:"1.8.x";s:15:"jQueryUiVersion";s:5:"1.9.x";s:18:"jQueryTOOLSVersion";s:0:"";s:22:"jQueryBootstrapVersion";s:0:"";s:16:"integrateFromCDN";s:1:"1";s:11:"locationCDN";s:6:"jquery";s:13:"updateMessage";s:1:"0";}',
			'uncache' => 'a:0:{}',
			'vhs' => 'a:0:{}',
			'vidi' => 'a:2:{s:10:"data_types";s:18:"fe_users,fe_groups";s:11:"default_pid";s:1:"1";}',
			'wt_spamshield' => 'a:10:{s:12:"useNameCheck";s:1:"0";s:12:"usehttpCheck";s:1:"3";s:9:"notUnique";s:0:"";s:13:"honeypodCheck";s:1:"1";s:15:"useSessionCheck";s:1:"1";s:16:"SessionStartTime";s:2:"10";s:14:"SessionEndTime";s:3:"600";s:10:"AkismetKey";s:0:"";s:12:"email_notify";s:0:"";s:3:"pid";s:2:"-1";}',
		),
		'extListArray' => array(
			'introduction',
			'perm',
			'func',
			'filelist',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			'css_styled_content',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'rsaauth',
			'saltedpasswords',
			'info',
			'vhs',
			'flux',
			'fluidpages',
			'fluidcontent',
			'fluidcontent_bootstrap',
			'linkvalidator',
			'realurl',
			'news',
			'indexed_search',
			'wt_spamshield',
			'jquerycolorbox',
			'seo_basics',
			'vidi',
			'metadata',
			'media',
			'scheduler',
			'nc_staticfilecache',
			'infinite_scroll_gallery',
			'opendocs',
			'extension_builder',
			'uncache',
			't3jquery',
			'speciality',
			'specialityglobal',
			'specialitylocal',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'it',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
			),
		),
	),
	'FE' => array(
		'loginSecurityLevel' => 'rsa',
		'pageNotFound_handling' => 'http://bootstrap.webian.it/index.php?id=16',
	),
	'GFX' => array(
		'gdlib_png' => 1,
		'im_path_lzw' => '',
		'im_version_5' => 'gm',
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'compat_version' => '6.1',
	),
);
?>