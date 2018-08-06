<?php

namespace App\Repositories;


use App\Contracts\Repositories\EventRepositoryContract;
use App\Models\Event;

class EventRepository implements EventRepositoryContract
{
    /**
     * イベントのリソースを取得する
     * @return mixed
     */
    public function eventResources()
    {
        $events = Event::with('user')->get();
        return compact('events');
    }

    /**
     * イベント作成
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        // TODO: Implement create() method.
    }

    /**
     * 詳細を取得する
     * @return mixed
     */
    public function details()
    {
        // TODO: Implement details() method.
    }
}