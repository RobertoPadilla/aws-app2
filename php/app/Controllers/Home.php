<?php

namespace App\Controllers;

class Home extends BaseController
{
    public $db;

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data['results'] = $this->db->table('Tasks')->get()->getResultObject();

        return view('welcome_message', $data);
    }
}
