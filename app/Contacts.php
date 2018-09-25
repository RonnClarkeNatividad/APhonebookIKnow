<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    public $table='contacts';
    protected $primaryKey='contact_ID';
    public $timestamps=false;
    public $incrementing=false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact_ID','firstname','lastname','nickname','age','address','contact','hobbies'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contact_ID','firstname','lastname','nickname','age','address','contact','hobbies'
    ];
}
