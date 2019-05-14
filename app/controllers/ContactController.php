<?php


namespace app\controllers;


class ContactController extends Controller
{
    public function show(){
        $this->view('contact', array(
            'title' => 'Contato',
            'nome' => 'Oscar Romanini'
        ) );
    }
}