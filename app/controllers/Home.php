<?php

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{

		$job = new Job();
		//Create
		if ($_POST) {
			$active_page = $_POST['page_link'];
			$jobs = $job->getAllJobs($active_page);
		} else {
			$jobs = $job->getAllJobs();
		}
		$this->data = $jobs;
		$this->view('home');
	}
}
