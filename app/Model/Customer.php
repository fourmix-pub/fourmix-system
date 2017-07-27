<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    /**
     * 削除日 更新.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
