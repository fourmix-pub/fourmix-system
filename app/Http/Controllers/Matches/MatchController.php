<?php

namespace App\Http\Controllers\Matches;

use App\Contracts\Repositories\MatchRepositoryContract;
use App\Models\Match;
use App\Http\Requests\Settings\MatchRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchController extends Controller
{
    protected $matchRepository;

    /**
     * MatchController constructor.
     * @param $matchRepository
     */
    public function __construct(MatchRepositoryContract $matchRepository)
    {
        $this->matchRepository = $matchRepository;
    }

    /**
     * マッチングインデックスを表示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('lunch/matching', $this->matchRepository->matchResources());
    }

    /**
     * マッチング参加フラグを更新
     * @param MatchRequest $request
     * @param Match $match
     * @return mixed
     */
    public function update(MatchRequest $request, Match $match)
    {
        return response()->update($this->matchRepository->update($request, $match))->with('status', '登録しました');
    }
}