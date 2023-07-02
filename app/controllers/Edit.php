<?php

/**
 * home class
 */
class Edit
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
                $job->update($_GET['id'], $_POST);
                $this->data['message'] = "Job has been updated successfully";
            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $job_retrieved = $job->where(['id' => $id]);
            $this->data['job'] = $job_retrieved[0];
            $this->view('edit');
        } else {
            redirect('home');
        }


        // //Create
        // if ($_POST) {
        //     $active_page = $_POST['page_link'];
        //     $jobs = $job->getAllJobs($active_page);
        // } else {
        //     $jobs = $job->getAllJobs();
        // }
        // // $this->data = $jobs;
        // $this->view('edit');
    }
}
