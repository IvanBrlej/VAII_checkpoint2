<?php

namespace App\Controllers;

use App\Auth;
use App\Models\Blogy;
use App\Models\Users;
use App\Config\Configuration;
use App\Core\Responses\Response;

class AuthController extends AControllerRedirect
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function loginForm()
    {
        return $this->html( [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function registrationForm()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function login(){
        $login = $this->request()->getValue('login');
        $password = $this->request()->getValue('password');

        $logged = Auth::login($login,$password);

        if($logged) {
            $this->redirect('home');
        } else {
            $this->redirect('auth','loginForm', ['error' => 'Zlé meno alebo heslo!']);
        }
    }

    public function registration()
    {
        $newUser = new Users();
        $newUser->setEmail($this->request()->getValue('email'));
        $newUser->setPassword($this->request()->getValue('password'));
        $newUser->save();

        $this->redirect('auth','loginForm');
    }

    public function upload()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }
        $newBlogy = new Blogy();
        $newBlogy->setTitle($this->request()->getValue('title'));
        $newBlogy->setText($this->request()->getValue('text'));
        $newBlogy->setLoginFk($_SESSION["name"]);
        $newBlogy->save();
        $this->redirect('home', 'blogy');
    }

    public function updateBlog()
    {
        
    }
    
    public function blogyForm()
    {
        if (!Auth::isLogged()){
            $this->redirect('home');
        }
        return $this->html();
    }

    public function logout()
    {
        Auth::logout();
        $this->redirect('home');
    }
}