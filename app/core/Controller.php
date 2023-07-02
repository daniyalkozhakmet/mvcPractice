<?php


trait Controller
{
	public $data;
	public $error;
	public function view($name)
	{
		$filename = "../app/views/" . $name . ".view.php";
		if (file_exists($filename)) {
			if (isset($this->data)) {
				$response = $this->data;
			}
			$response = $this->data;
			extract($response);
			require $filename;
		} else {
			$filename = "../app/views/404.view.php";
			require $filename;
		}
	}
}
