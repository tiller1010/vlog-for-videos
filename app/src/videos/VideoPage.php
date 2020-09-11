<?php

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\GridField\GridFieldComponent;

class VideoPage extends Page {
	
	private static $has_many = [
		'VideoObjects' => VideoObject::class,
		'VideoComments' => VideoComment::class
	];

	public function getCMSFields(){
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', GridField::create(
			'VideoObjects',
			'Videos',
			$this->VideoObjects(),
			GridFieldConfig_RecordEditor::create()
		));
		return $fields;
	}
}