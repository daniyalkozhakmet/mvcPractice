<?php

/**
 * home class
 */
class CreateJob
{
	use Controller;

	public function index()
	{
		$job = new Job();
		$categories = $job->getCategories();
		$this->data['categories'] = $categories;

		if ($_POST) {
			if (!$job->validate($_POST)) {
				$this->data['errors'] = $job->errors;
			} else {
				$job->createJob($_POST);
				redirect('home');
			}
		}
		$this->view('createJob');
	}
}
