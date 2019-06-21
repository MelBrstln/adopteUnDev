<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $table = 'developers';
    protected $fillable = ['name', 'firstName', 'mail', 'phoneNumber', 'adresse', 'postcode', 'city', 'resume', 'cv', 'picture', 'jobInterest'];
    protected $guarded = ['id'];

//    public function company()
//    {
//        return $this->hasMany(Company::class);
//    }

    public function company()
    {
        return $this->belongsToMany(Company::class,'messages','developer_id','entreprise_id');
    }
}

