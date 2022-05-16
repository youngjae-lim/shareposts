<?php

class Posts extends Controller
{
    public function __construct()
    {
        // Protect the /posts route from non-logged-in users
        if (!isLoggedIn()) {
            redirect('users/login');
        }
    }
    public function index()
    {
        $data = [];

        $this->view('posts/index', $data);
    }
}
