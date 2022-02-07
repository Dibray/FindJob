<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SalaryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SalaryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SalaryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Salary::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/salary');
        CRUD::setEntityNameStrings('salary', 'salaries');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('min');
        CRUD::column('max');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SalaryRequest::class);

        CRUD::field('id');
        CRUD::field('min');
        CRUD::field('max');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
