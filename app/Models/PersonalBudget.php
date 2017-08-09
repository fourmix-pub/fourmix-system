<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalBudget extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
