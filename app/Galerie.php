<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galerie extends Model 
{

    protected $table = 'galeries';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_bien', 'photo');
    protected $visible = array('slug', 'id_bien', 'photo');

    public function bien()
    {
        return $this->belongsTo('App\Bien', 'id_bien');
    }

}