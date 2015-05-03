<?php

namespace SONAcl\Controller;

use Zend\View\Model\ViewModel;

use SONBase\Controller\CrudController;

class PrivilegesController extends CrudController
{
    public function __construct()
    {
        $this->service = 'SONAcl\Service\Privilege';
        $this->entity = 'SONAcl\Entity\Privilege';
        $this->formService = 'SONAcl\Form\Privilege';
        $this->controller = 'privileges';
        $this->route = 'sonacl-admin/default';
    }
}
