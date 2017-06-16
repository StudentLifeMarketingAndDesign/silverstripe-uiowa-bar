<?php

class UiowaBarSiteConfigExtension extends DataExtension {

	private static $db = array(
		'QuickLinkTitleOne' => 'Text',
		'QuickLinkTitleTwo' => 'Text',
		'QuickLinkTitleThree' => 'Text',
		'QuickLinkURLOne' => 'Text',
		'QuickLinkURLTwo' => 'Text',
		'QuickLinkURLThree' => 'Text'
	);

	private static $has_one = array(

	);

	private static $defaults = array(

	);

	public function updateCMSFields(FieldList $fields) {


		$fields->addFieldToTab("Root.Main", new HeaderField( '<br><h3>Header Quick Links</h3>', '3', true ) );
		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkTitleOne', 'Quick Link Title'));
		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkURLOne', 'Quick Link URL'));

		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkTitleTwo', 'Quick Link Title'));
		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkURLTwo', 'Quick Link URL'));

		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkTitleThree', 'Quick Link Title'));
		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkURLThree', 'Quick Link URL'));


		return $fields;
	}

}