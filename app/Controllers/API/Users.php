<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;


class Users extends BaseController
{
    use ResponseTrait;

    public function index() {
        $data['title'] = 'Log In';
        $data['response'] = "xd";
        return $this->respondCreated($data, "wow");
    }
}

?>