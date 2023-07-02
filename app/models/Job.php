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
    public function getAllJobs($page_active = [])
    {

        if (!is_array($page_active)) {
            $this->offset = $page_active * $this->limit - $this->limit;
        }
        $data = $this->findAll();
        $per_page = $this->limit;
        $total_page = ceil($this->getQty() / $per_page);
        $active_page = ceil($this->offset / $this->limit);
        $response['data'] = $data;
        $response['per_page'] = $per_page;
        $response['total_page'] = $total_page;
        $response['active_page'] = $active_page;
        return $response;
    }
    public function getCategories()
    {
        $this->table = 'categories';
        $data = $this->findAll();
        $response = $data;
        $this->table = 'jobs';
        return $response;
    }
    public function createJob($data)
    {
        $this->table = 'jobs';
        $this->insert($data);
    }
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['category_id'])) {
            $this->errors['category_id'] = "Please select catgory";
        }
        if (empty($data['company'])) {
            $this->errors['company'] = "Company name is required";
        }
        if (empty($data['job_title'])) {
            $this->errors['job_title'] = "Job title is required";
        }
        if (empty($data['description'])) {
            $this->errors['description'] = "Description is required";
        }
        if (empty($data['salary'])) {
            $this->errors['salary'] = "Salary is required";
        }
        if (empty($data['contact_user'])) {
            $this->errors['contact_user'] = "Contact user is required";
        }
        if (empty($data['location'])) {
            $this->errors['location'] = "Location is required";
        }
        if (!filter_var($data['contact_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['contact_email'] = "Email is not valid";
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}
