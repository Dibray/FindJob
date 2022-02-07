<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use CrudTrait;

    protected $table = 'salaries';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    public function vacancy()
    {
        return $this->hasMany(Vacancy ::class);
    }
}
