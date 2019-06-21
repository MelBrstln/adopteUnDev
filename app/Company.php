<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'mail', 'phoneNumber', 'represent', 'type', 'developer_id'];
    protected $guarded = ['id'];

//    public function Developer()
//    {
//        return $this->belongsTo(Developer::class, 'developer_id');
//    }

    public function developer()
    {
        return $this->belongsTo(Developer::class,'messages','entreprise_id','developer_id');
    }
}
