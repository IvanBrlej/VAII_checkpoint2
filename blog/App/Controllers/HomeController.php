<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Auth;
use App\Config\Configuration;
use App\Models\Blogy;
//use App\Models\Post;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {

        return $this->html(
            [
                'post' => 'test'
            ]);
    }

    public function contact()
    {
        return $this->html(
            []
        );
    }

    public function blogy()
    {
        $blogy = Blogy::getAll();

        return $this->html(
            [
                'blogy' => $blogy
            ]
        );
    }

    public function myBlog()
    {
        if (!Auth::isLogged()){
            $this->redirect('home');
        }
        $blogy = Blogy::getAll();

        return $this->html(
            [
                'blogy' => $blogy
            ]
        );
    }

    public function deleteBlog()
    {
        if (!Auth::isLogged()){
            $this->redirect('home');
        }
        $blogy = Blogy::getAll();
        $blogId = $this->request()->getValue('blogId');
        foreach ($blogy as $b){
            if($blogId == $b->getId()){
                $b->delete();
            }
        }
        $this->redirect('home', 'myBlog');
    }

    public function updateBlog()
    {
        if (!Auth::isLogged()){
            $this->redirect('home');
        }
        $blogy = Blogy::getAll();
        $blogId = $this->request()->getValue('blogId');
        return $this->html(
            [
                'blogy' => $blogy,
                'blogId' => $blogId
            ]
        );
    }

    public function update()
    {
        if (!Auth::isLogged()){
            $this->redirect('home');
        }
        $blogy = Blogy::getAll();
        foreach ($blogy as $b){
            if($b->getId() == $this->request()->getValue('blogId')){
                $b->setTitle($this->request()->getValue('title'));
                $b->setText($this->request()->getValue('text'));
                $b->setLoginFk($_SESSION["name"]);
                $b->save();
            }
        }
        $this->redirect('home', 'blogy');
    }
    
    //public function addLike() {
       // $postId = $this->request()->getValue('postid');
       // if($postId > 0){
         //   $post = Post::getOne($postId);
         //   $post->addLike();
      //  }

       // $this->redirect('home');
   // }

    //public function post()
    //{
     //   if (!Auth::isLogged()){
       //     $this->redirect('home');
        //}
        //return $this->html();
    //}

    //public function addComment()
    //{
        //if (!Auth::isLogged()){
        //    $this->redirect('home');
        //}
        //$postId = $this->request()->getValue('postid');
        //if ($postId) {
         //   $newComment = new Comment();
          //  $newComment->setPostId($postId);
          //  $newComment->setText($this->request()->getValue('text'));
          //  $newComment->save();
        //}
        //$this->redirect('home');
    //}
}