<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Crud extends Model
{
    protected $table = 'crud';
    protected $primaryKey = 'id';
    protected $fillable = ['tujuan', 'nama', 'tanggal', 'jam'];
    public $timestamps = false;
}