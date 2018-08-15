<?php

namespace App\Http\Controllers\SafetyMails;

use App\Contracts\Repositories\SafetyMailRepositoryContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\SafetyMailRequest;
use App\Mail\SafetyTestMail;
use App\Models\SafetyMail;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SafetyMailController extends Controller
{
    /**
     * 安否確認倉庫契約(インターフェース).
     * @var SafetyMailRepositoryContract
     */
    protected $repository;

    /**
     * SafetyMailController constructor.
     * @param SafetyMailRepositoryContract $repository
     */
    public function __construct(SafetyMailRepositoryContract $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('safety-mail.index', $this->repository->safetyMailResources());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('safety-mail.create');
    }

    /**
     * メールの新規作成の方法
     * @param SafetyMailRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SafetyMailRequest $request)
    {
        $this->repository->create($request);
        return redirect()->route('safety-mails.index')->with('status', '追加しました');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $users = $this->repository->safetyMailResourcesForShow($id)->users()->paginate(15);
        return view('safety-mail.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function edit(SafetyMail $safetyMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SafetyMail $safetyMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SafetyMail $safetyMail)
    {
        //
    }

    public function ajaxSendTestMail(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max: 20',
            'contents' => 'required|string|max: 1000',
            'email' => 'required|email',
        ]);

        Mail::to($request->input('email'))
            ->send(new SafetyTestMail($request->input('title'), $request->input('contents')));
        return response()->json(['status' => 'OK'], 200);
    }
}
