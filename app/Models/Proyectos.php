<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    //$fillable: evitamos asignacion masiva.
    protected $fillable = ['nombre','descripcion'];

    //metodo boot: mientras se este creando un nuevo proyecto, guardamos el usuario identificado en ese momento.
    /*protected static function boot()
    {
        parent::boot();
        static::creating(function ($project){
            $project->user_id = auth()->id();
        });
    }*/


}
