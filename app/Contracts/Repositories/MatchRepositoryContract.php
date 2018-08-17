<?php

namespace App\Contracts\Repositories;

use App\Models\Match;

interface MatchRepositoryContract
{
    /**
     * matching参加情報を更新する
     * @param $request
     * @param $match
     * @return mixed
     */
    public function update($request, Match $match);
}