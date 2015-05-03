<?php

namespace SONAcl\Service;

use Doctrine\ORM\EntityManager;

use Zend\Stdlib\Hydrator;

use SONBase\Service\AbstractService;

class Resource extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        parent::__construct($em);
        $this->entity = 'SONAcl\Entity\Resource';
    }
}
