<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orangtuaa extends Model
{
    //
    protected $table = 'orangtuaas';
    protected $fillable =['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible =['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = true;
}
