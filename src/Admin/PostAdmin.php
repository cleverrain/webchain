<?php

namespace App\Admin;

use App\Entity\User;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\NewsBundle\Admin\PostAdmin as PostAdminBase;

class PostAdmin extends PostAdminBase
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) :void
    {
        $formMapper
            ->add('title', 'text', array(
                'label' => 'Post Title'
            ))
            ->add('author', 'entity', array(
                'class' => User::class
            ));
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) :void
    {
        $datagridMapper
            ->add('title')
            ->add('author')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) :void
    {
        $listMapper
            ->addIdentifier('title')
            ->add('slug')
            ->add('author')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper) :void
    {
        $showMapper
            ->add('title')
            ->add('slug')
            ->add('author')
        ;
    }
}