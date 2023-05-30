<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{

    protected $table = "cursos";

    public function miniaturas()
    {
        return $this->belongsToMany(Miniatura::class);
    }

    public function razones()
    {
        return $this->hasOne(Razone::class ,'id_curso');
    }

    public function textos()
    {
        return $this->hasOne(TextosRazone::class ,'id_curso');
    }


    public function ventas()
    {
        return $this->hasOne(VentaCurso::class ,'id_curso');
    }

    public function metas()
    {
        return $this->hasOne(MetasCurso::class ,'id_curso');
    }


}
