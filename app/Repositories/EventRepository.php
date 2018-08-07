<?php

namespace App\Repositories;


use App\Contracts\Repositories\EventRepositoryContract;
use App\Models\Event;
use App\Models\EventDate;

class EventRepository implements EventRepositoryContract
{
    /**
     * イベントのリソースを取得する
     * @return mixed
     */
    public function eventResources()
    {
        $events = Event::with('user')->paginate(5);
        return compact('events');
    }

    /**
     * イベント作成
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $event = new Event();

        $event->title = $request->get('title');
        $event->contents = $request->get('contents');
        $event->user_id = auth()->user()->id;
        $event->location = $request->get('location');

         $event->save();

         foreach($request->get('dates') as $date) {
             $eventDate = new EventDate();
             $eventDate->date = $date;
             $eventDate->event_id = $event->id;
             $eventDate->save();
         }
         return true;
    }



    /**
     * 詳細を取得する
     * @return mixed
     */
    public function details()
    {
        $event = Event::with('user')->where('id');
        return compact('event');
    }
}