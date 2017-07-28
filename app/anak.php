<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
     //
    protected $table = 'anaks';
    protected $fillable =['nama','orangtuaa_id','umur','alamat'];
    protected $vilable =['nama','orangtuaa_id','umur','alamat'];
    public $timestamps = true;
    public function orangtuaa()
    {
    	return $this->belongsTo('App\orangtuaa','orangtuaa_id');
    }
    
}
