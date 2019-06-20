<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relation extends Model
{
    protected $table = 'relations';
    protected $fillable = ['id-company', 'id-developer'];
    protected $guarded = ['id'];
}
