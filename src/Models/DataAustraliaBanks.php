<?php

namespace Bluora\LaravelDatasetsAustralia\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class DataAustraliaBanks extends EloquentModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'data_australia_banks';

    /**v
     * The attributes that require casting
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'bsb'   => 'string',
        'bank'  => 'string',
        'title' => 'string',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bsb',
        'bank',
        'title',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
