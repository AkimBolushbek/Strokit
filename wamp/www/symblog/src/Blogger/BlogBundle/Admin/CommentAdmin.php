<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 19.11.14
 * Time: 22:59
 */

namespace Blogger\BlogBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Form\Type;
use Sonata\AdminBundle\Show\ShowMapper;
class CommentAdmin extends Admin
{
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name'
    );

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('user')
            ->add('blog')
            ->add('comment')
            ->add('approved')
            ->add('created')
            ->add('updated')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('user')
            ->add('blog')
            ->add('comment')
            ->add('approved')
            ->add('created')
            ->add('updated')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('user')
            ->add('blog')
            ->add('comment')
            ->add('approved')
            ->add('created')
            ->add('updated')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('user')
            ->add('blog')
            ->add('comment')
            ->add('approved')
            ->add('created')
            ->add('updated')
        ;
    }
} 