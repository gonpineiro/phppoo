<?php

namespace Reto\Models;

use Reto\Models\Author;
use Reto\Models\Category;

class Post
{
    protected $author;
    protected $title;
    protected $content;
    protected $category;

    public function __construct(Author $author, $title, $content, Category $category)
    {
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getCategory()
    {
        return $this->category;
    }
}
