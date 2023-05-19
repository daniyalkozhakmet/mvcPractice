<?php


/**
 * User class
 */
class Job
{

    use Model;

    protected $table = 'jobs';

    protected $allowedColumns = [
        'id',
        "category_id",
        'company',
        'job_title',
        'description',
        'salary',
        'location',
        'contact_email',
        'contact_user',
        'post_date',
    ];
    public function getAllJobs()
    {
        $data = $this->findAll();
        $per_page = $this->limit;
        $total_page = ceil($this->getQty() / $per_page);
        $active_page = $this->offset;
        $response['data'] = $data;
        $response['per_page'] = $per_page;
        $response['total_page'] = $total_page;
        $response['active_page'] = $active_page;
        return $response;
    }

    // public function validate($data)
    // {
    //     $this->errors = [];

    //     if (empty($data['email'])) {
    //         $this->errors['email'] = "Email is required";
    //     } else
    // 	if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    //         $this->errors['email'] = "Email is not valid";
    //     }

    //     if (empty($data['password'])) {
    //         $this->errors['password'] = "Password is required";
    //     }

    //     if (empty($data['terms'])) {
    //         $this->errors['terms'] = "Please accept the terms and conditions";
    //     }

    //     if (empty($this->errors)) {
    //         return true;
    //     }

    //     return false;
    // }
}
