<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MotifTransaction extends Model 
{

    protected $table = 'motifTransactions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'libelle');
    protected $visible = array('slug', 'libelle');

    public function transaction()
    {
        return $this->hasMany('App\Transaction', 'id_motifTransaction');
    }

}