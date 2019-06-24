<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class CourseAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('name')
			->add('duration')
			->add('createdAt')
			->add('startedAt')
			->add('finishedAt')
			->add('updatedAt')
			->add('isFinished')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('name')
			->add('duration')
			->add('createdAt')
			->add('startedAt')
			->add('finishedAt')
			->add('updatedAt')
			->add('isFinished')
			->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
			->add('id')
			->add('name')
			->add('duration')
			->add('createdAt')
			->add('startedAt')
			->add('finishedAt')
			->add('updatedAt')
			->add('isFinished')
			;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('name')
			->add('duration')
			->add('createdAt')
			->add('startedAt')
			->add('finishedAt')
			->add('updatedAt')
			->add('isFinished')
			;
    }
}
