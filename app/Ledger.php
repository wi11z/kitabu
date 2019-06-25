<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ledger extends Model
{
    use SoftDeletes;

      
    protected $fillable = 'amount';
    protected $table = 'ledgers';




}
