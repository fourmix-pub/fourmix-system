<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class WeekSchedule extends Model
{

    /**
     * 予定記録者　取得.
     * １対１.
     */

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
