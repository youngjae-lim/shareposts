<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $this->db->query('SELECT *, posts.user_id as postId, users.id as userId, posts.created_at as postedDate
                          FROM posts
                          INNER JOIN users
                          ON posts.user_id = users.id
                          ORDER BY posts.created_at DESC
                        ');

        $results = $this->db->resultSet();

        return $results;
    }
}
