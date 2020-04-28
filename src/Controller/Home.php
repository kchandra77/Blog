<?php
 
namespace App\Controller;
 
use Frami\AbstractController;
 
class Home extends AbstractController
{
    public function print() 
    {
        return $this->render('home',[
            'flashbag'=> $this->flash()->get() //recupere ce que contient dans la session flash et l'affiche 
        ]);
    }

}
    