<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ALUMNO';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_ALUMNO';
}
