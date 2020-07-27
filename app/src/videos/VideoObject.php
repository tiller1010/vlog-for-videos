<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

class VideoObject extends DataObject {

	private static $db = [
		'Title' => 'Text',
		'Description' => 'Text'
	]; 
	
	private static $has_one = [
		'VideoSource' => File::class,
		'VideoPage' => VideoPage::class
	];

	private static $owns = [
		'VideoSource'
	];

	public function getCMSFields(){
		return new FieldList(
			TextField::create('Title'),
			TextareaField::create('Description'),
			UploadField::create('VideoSource')
		);
	}
}