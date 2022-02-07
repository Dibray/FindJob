<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VacancyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VacancyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VacancyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Vacancy::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/vacancy');
        CRUD::setEntityNameStrings('vacancy', 'vacancies');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('salary_id');
        CRUD::column('position_id');
        CRUD::column('city_id');
        CRUD::column('company_id');
        CRUD::column('Description');
        CRUD::column('Remote');
        CRUD::column('Requirements');
        CRUD::column('Schedule');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(VacancyRequest::class);

        CRUD::field('id');
        CRUD::field('salary_id');
        CRUD::field('position_id');
        CRUD::field('company_id');
        CRUD::field('city_id');
        CRUD::field('Description');
        CRUD::field('Remote');
        CRUD::field('Requirements');
        CRUD::field('Schedule');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
