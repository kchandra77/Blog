<?php
 
namespace App\Repository;
 
use App\Entity\ArticleEntity;
use Frami\AbstractRepository;
 
class ArticleRepository extends AbstractRepository
{
    public function add(ArticleEntity $article)
    {
        $query = $this->db->prepare('INSERT INTO `article` (title, content, createdAt) VALUES (?,?, NOW())');
        return $query->execute([
            $article->getTitle(),
            $article->getContent()
        ]);
    }
}
