<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Transaksi extends Model
{
    //
    use SoftDeletes;
    protected $table="transaksi";
    const created_at ="create_date";
    const updated_at ="modified_date";
}
