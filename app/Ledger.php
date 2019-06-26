<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ledger extends Model
{
    use SoftDeletes;

    
    public $primaryKey = 'id';

    public $timestamps = true;
    
    protected $table = 'ledgers';




}
