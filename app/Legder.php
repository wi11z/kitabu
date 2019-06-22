<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Legder extends Model
{
    use SoftDeletes;

      /**
     * The attribute that is mass assignable.
     *
     * @var array
     */
    protected $fillable = 'amount';



}
