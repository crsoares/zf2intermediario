<?php

namespace SONAcl\Controller;

use Zend\View\Model\ViewModel;

use SONBase\Controller\CrudController;

class RolesController extends CrudController
{
    public function __construct()
    {
        $this->service = 'SONAcl\Service\Role';
        $this->entity = 'SONAcl\Entity\Role';
        $this->formService = 'SONAcl\Form\Role';
        $this->controller = 'roles';
        $this->route = 'sonacl-admin/default';
    }

    public function testeAction()
    {
        $acl = $this->getServiceLocator()->get('SONAcl\Permissions\Acl');

        echo $acl->isAllowed('Redator', 'Páginas', 'Visualizar') ? 'Permitido' : 'Negado';
        die;
    }
}
