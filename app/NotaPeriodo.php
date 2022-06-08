<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPeriodo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'NOTA_PERIODO';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_NOTA_PERIODO';
}
