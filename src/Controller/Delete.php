<?php
 
namespace App\Controller;
 
use Frami\AbstractController;
 
class Delete extends AbstractController
{
    public function print() 
    {
        return $this->render('delete');
    }

}
