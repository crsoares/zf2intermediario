<?php

namespace SONAcl\Controller;

use Zend\View\Model\ViewModel;

use SONBase\Controller\CrudController;

class ResourcesController extends CrudController
{
    public function __construct()
    {
        $this->service = 'SONAcl\Service\Resource';
        $this->entity = 'SONAcl\Entity\Resource';
        $this->form = 'SONAcl\Form\Resource';
        $this->controller = 'resources';
        $this->route = 'sonacl-admin/default';
    }
}
