<?php

/**
 * home class
 */
class SingleJob
{
    use Controller;

    public function index()
    {

        $job = new Job();
        //Getting single
        if (isset($_GET['id'])) {
            $single = $job->first(['id' => $_GET['id']]);
            $this->data['job'] = $single;
            $this->view('single');
        } else {
            redirect('home');
        }
    }
}
