<?php

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{


		if ($_POST) {
			show($_POST['Home']);
			// $mail = $_POST['mail'];
			// $file = fopen('test.txt', "a");
			// fwrite($file, "[ MAIL ]"."$mail\n");
			// fclose($file);
		} else {
			print_r($_POST);
		}

		$job = new Job();
		$jobs = $job->getAllJobs();
		$qty = count($jobs);
		$this->data = $jobs;
		$this->view('home');
	}
}
