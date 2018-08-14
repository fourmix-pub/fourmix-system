<?php


namespace App\Http\Controllers\Events;

use App\Contracts\Repositories\EventRepositoryContract;
use App\Http\Requests\Settings\EventEntryRequest;
use App\Http\Requests\settings\EventUpdateRequest;
use App\Models\EventEntry;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\EventRequest;
use App\Models\Event;

class EventController extends Controller
{
    protected $eventRepository;

    /**
     * Create a new controller instance.
     *
     * @param EventRepositoryContract $eventRepository
     */
    public function __construct(EventRepositoryContract $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * Display a listing of the resource.
     * 一覧表示機能
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.events', $this->eventRepository->eventResources());
    }

    /**
     * 新規作成項目の保存
     * @param EventRequest $request
     * @return mixed
     */
    public function store(EventRequest $request)
    {
        return response()->save($this->eventRepository->create($request));
    }

    /**
     * イベント詳細表示
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail(Event $event)
    {
        $event->load(['eventDates' => function ($query) {
            $query->with(['users']);
        }]);

        $users = User::whereHas('eventDates', function ($query) use ($event) {
            $query->where('event_id', $event->id);
        })->get();

        return view('events.detail', compact('event', 'users'));
    }

    /**
     * 新規作成ページ表示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('events.create', $this->eventRepository->eventResources());
    }

    /**
     * 出欠情報を保存
     * @param  EventEntryRequest $request
     * @param Event $event
     * @return response
     */
    public function entry(EventEntryRequest $request, Event $event)
    {
        return response()->save($this->eventRepository->entry($request, $event));
    }

    /**
     * OPEN/CLOSEの編集
     * @param EventUpdateRequest $request
     * @param Event $event
     * @return mixed
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        return response()->update($this->eventRepository->update($request, $event));
    }
}