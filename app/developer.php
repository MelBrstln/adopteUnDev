<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    protected $table = 'developers';
    protected $fillable = ['name', 'full-name', 'mail', 'telephone', 'adresse','postal-code','city','resume','cv','pricture','jobInterest'];
    protected $guarded = ['id'];
}
