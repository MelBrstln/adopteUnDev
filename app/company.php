<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'mail', 'telephone', 'represent', 'type'];
    protected $guarded = ['id'];
}
