<?php

namespace Reto\Models;

use Reto\Models\User;
use Reto\Models\Post;

class Author extends User
{
    protected $posts = [];

    public function __construct($name, $username, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }

    public function addPost($title, $content, $category)
    {
        $post = new Post($this, $title, $content, $category);
        array_push($this->posts, $post);
    }

    public function getPost()
    {
        return $this->posts;
    }
}
