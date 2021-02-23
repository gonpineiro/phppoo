<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        /* Creamos un post */
        $post = new Post();

        /* Creamos un comentario */
        $comment = new Comment();

        /* Agregamos el comentario a un post */
        $post->addComment($comment);

        /* Comprobamos que tenemos un Post */
        $this->assertEquals(1, $post->countComments());

        /* Reviiso el comentario, y confirmo si es una instancia de la clase */
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}
