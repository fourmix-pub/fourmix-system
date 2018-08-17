<?php

namespace App\Repositories;

use App\Contracts\Repositories\MatchRepositoryContract;
use App\Models\Match;
use Carbon\Carbon;

class MatchRepository implements MatchRepositoryContract
{
    /**
     * マッチングテーブルを取得
     * @return array
     */
    public function matchResources()
    {
        $match = request()->user()->matches
            ? request()->user()->matches->firstWhere('date', \Carbon\Carbon::today()->format('Y-m-d'))
            : null;
        return compact('match');
    }
    /**
     * matching参加情報を更新
     * @param $request
     * @param Match $match
     * @return bool|mixed
     */
    public function update($request, Match $match)
    {
        $match->user_id = auth()->user()->id;
        $match->date = Carbon::today();
        $match->participation = $request->get('participation');
        return $match->save();
    }
}
