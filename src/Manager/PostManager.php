<?php

namespace App\Manager;

use \Sonata\NewsBundle\Entity\PostManager as ParentPostManager;

class PostManager extends ParentPostManager
{
    public function getPager(array $criteria, $page, $limit = 2, array $sort = [])
    {
        return parent::getPager($criteria, $page, $limit, $sort);
    }
}