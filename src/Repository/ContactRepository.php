<?php
 
namespace App\Repository;
 
use App\Entity\ContactEntity;
use Frami\AbstractRepository;
 
class ContactRepository extends AbstractRepository
{
    public function add(ContactEntity $contact)
    {
        $query = $this->db->prepare('INSERT INTO `contact` (names, email, messages) VALUES (?,?, NOW())');
        $query->execute([
            $contact->getName(),
            $contact->getEmail(),
            $contact->getMessage()
        ]);
    }
}
