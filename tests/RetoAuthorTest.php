<?php

use PHPUnit\Framework\TestCase;
use Reto\Models\Author;
use Reto\Models\Category;

class RetoAuthorTest extends TestCase
{
    public function test_get_author_atributtes()
    {
        $author = new Author('Gonzalo', 'gonpineiro', 'gon.pi@gmail.com');

        $this->assertEquals('Gonzalo', $author->getName());
        $this->assertEquals('gonpineiro', $author->getUsername());
        $this->assertEquals('gon.pi@gmail.com', $author->getEmail());
    }

    public function test_add_post_and_get_post()
    {
        $author = new Author('Gonzalo', 'gonpineiro', 'gon.pi@gmail.com');
        $author->addPost('title', 'content', new Category('php'));

        $this->assertInstanceOf(Author::class, $author->getPost()[0]->getAuthor());
    }
}
