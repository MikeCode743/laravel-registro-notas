<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaEvaluacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'NOTA_EVALUACION';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_NOTA_EVALUACION';
}
