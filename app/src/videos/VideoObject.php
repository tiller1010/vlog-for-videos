<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;

class VideoObject extends DataObject {
	
	private static $has_one = [
		'VideoSource' => File::class,
		'VideoPage' => VideoPage::class
	];

	public function getCMSFields(){
		return new FieldList(
			UploadField::create('VideoSource')
		);
	}
}