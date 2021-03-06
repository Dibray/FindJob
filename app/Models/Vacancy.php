<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use CrudTrait;

    protected $table = 'vacancies';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
