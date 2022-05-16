<?php

class Posts extends Controller
{
    public function __construct()
    {
        // Protect the /posts route from non-logged-in users
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
    }
    public function index()
    {
        // Get posts
        $posts = $this->postModel->getPosts();


        $data = [
          'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Init data
            $data = [
              'title' => trim($_POST['title']),
              'body' => trim($_POST['body']),
              'user_id' => $_SESSION['user_id'],
              'title_err' => '',
              'body_err' => '',
            ];

            // Validate Title
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }

            // Validate Body
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }

            // Make sure errors are empty
            if (empty($data['title_err']) && empty($data['body_err'])) {
                // Validated
                if ($this->postModel->addPost($data)) {
                    flash('post_message', 'Post Added!');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
                // Add Post
            } else {
                // Load view with Errors
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
            'title' => '',
            'body' => ''
            ];
        }

        $this->view('posts/add', $data);
    }
}
