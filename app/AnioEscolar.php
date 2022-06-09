<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnioEscolar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ANO_ESCOLAR';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_ANO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['FECHA_INICIO', 'FECHA_FIN'];
}
