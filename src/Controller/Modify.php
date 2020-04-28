<?php
 
namespace App\Controller;
 
use Frami\AbstractController;
 
class Modify extends AbstractController
{
    public function print() 
    {
        return $this->render('modify');
    }

}
