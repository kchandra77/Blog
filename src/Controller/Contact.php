<?php
 
namespace App\Controller;
 
use Frami\AbstractController;
 
class Contact extends AbstractController
{
    public function print() 
    {
        return $this->render('contact');
    }

    public function process()
    {
        if(!empty($_POST['names']) && !empty($_POST['email']) && !empty($_POST['message']))
        {
            $entity = new ContactEntity();
            $entity->getName($_POST['names']);
            $entity->getEmail($_POST['email']);
            $entity->getMessage($_POST['message']);

            $repo = new ContactRepository();
            $repo->add($entity);
        }
        else {

            return $this->render('contact', [
                'error' => 'Veuillez compléter tous les champs'
            ]);
        }
    }
}
