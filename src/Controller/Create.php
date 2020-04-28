<?php
 
namespace App\Controller;
 
use App\Entity\ArticleEntity;
use Frami\AbstractController;
use App\Repository\ArticleRepository;
 
class Create extends AbstractController
{
    public function print() 
    {
        return $this->render('create');
    }

    public function process()
    {
        if(!empty($_POST['title']) && !empty($_POST['content']))
        {
            $entity = new ArticleEntity();
            $entity->setTitle($_POST['title']);
            $entity->setContent($_POST['content']);

            $repo = new ArticleRepository();
            if($repo->add($entity))
            {
                $this->flash()->set('Votre article a été enregistré ');
                // redirection
                $this->redirectToRoute('/');
            }else

            $this->flash()->set('Votre article n\'a pas été enregistré ');
            // redirection
            $this->redirectToRoute('/blog/create');


        }
        else {

            return $this->render('create', [
                'error' => 'Veuillez compléter tous les champs'
            ]);
        }
    }

}
