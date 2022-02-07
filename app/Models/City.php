<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use CrudTrait;

    protected $table = 'cities';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function vacancy()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function company()
    {
        return $this->hasMany(Company::class);
    }
}
