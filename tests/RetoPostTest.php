<?php

use PHPUnit\Framework\TestCase;

use Reto\Models\Author;
use Reto\Models\Category;

class RetoPostTest extends TestCase
{
    public function test_get_post_atributtes()
    {
        $author = new Author('Gonzalo', 'gonpineiro', 'gon.pi@gmail.com');
        $category = new Category('php');
        $author->addPost('title', 'content', $category);

        $this->assertInstanceOf(Author::class, $author);
        $this->assertEquals('title', $author->getPost()[0]->getTitle());
        $this->assertEquals('content', $author->getPost()[0]->getContent());
        $this->assertEquals('php', $author->getPost()[0]->getCategory()->getName());

    }
}
