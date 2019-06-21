<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['developer_id', 'entreprise_id', 'message'];
    protected $guarded = ['id'];

    public function Company()
    {
        return $this->belongsToMany(Company::class,'messages');
    }

    public function Developer()
    {
        return $this->belongsToMany(Developer::class, 'developer_id');
    }
}
