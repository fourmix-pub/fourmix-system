<?php

namespace App\Http\Controllers\Events;

use App\Contracts\Repositories\EventRepositoryContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
     *一覧表示機能
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.events', $this->eventRepository->eventResources());
    }

}
