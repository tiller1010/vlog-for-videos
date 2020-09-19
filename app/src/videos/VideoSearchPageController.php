<?php

use SilverStripe\Control\HTTP;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\PaginatedList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FormAction;
use SilverStripe\View\ArrayData;

class VideoSearchPageController extends PageController {
	
	private static $allowed_actions = [
		'VideoSearchForm'
	];

	public function index(HTTPRequest $request){

		$videos = VideoObject::get();
		$activeFilters = ArrayList::create();

		if($search = $request->getVar('Keywords')){
			$activeFilters->push(ArrayData::create([
				'Label' => "'$search'"
			]));

			$videos = $videos->filter([
				'Title:PartialMatch' => $search
			]);
		}

		$paginatedVideos = PaginatedList::create(
			$videos,
			$request
		)->setPageLength(5)->setPaginationGetVar('s');

		$data = [
			'Results' => $paginatedVideos,
			'ActiveFilters' => $activeFilters
		];

		return $data;
	}

	public function VideoSearchForm(){
		$form = Form::create(
			$this,
			'VideoSearchForm',
			FieldList::create(
				TextField::create('Keywords')
					->setAttribute('placeholder', 'Search for a video')
			),
			FieldList::create(FormAction::create('doVideoSearch', 'Search'))
		);

		$form->setFormMethod('GET')
			->setFormAction($this->Link())
			->disableSecurityToken()
			->loadDataFrom($this->request->getVars());

			return $form;
	}
}