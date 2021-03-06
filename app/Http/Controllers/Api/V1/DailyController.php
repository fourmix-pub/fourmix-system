<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Tools\CalculateContract;
use App\Http\Resources\V1\DailyResource;
use App\Models\Daily;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailyController extends Controller
{

    /**
     * 日報一覧を取得するAPI
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return DailyResource::collection(
            Daily::filter()
                ->with([
                    'user',
                    'project',
                    'workType',
                    'jobType',
                ])
                ->latest('date')
                ->latest('end')
                ->paginate(500)
        );
    }



    /**
     * 日報を作成するAPI
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request, CalculateContract $contract)
    {
        $this->validate($request, [
            'work_type_id' => 'required|int',
            'job_type_id' => 'required|int',
            'project_id' => 'required|int',
            'date' => 'required|string|date_format:Y-m-d',
            'start' => 'required|string|startTime|date_format:H:i',
            'end' => 'required|string|endTime|after:start|date_format:H:i',
            'rest' => 'nullable|int',
            'note' => 'nullable|string'
        ]);

        $daily = new Daily();

        $daily->user_id = $request->user()->id;
        $daily->work_type_id = $request->input('work_type_id');
        $daily->job_type_id = $request->input('job_type_id');
        $daily->project_id = $request->input('project_id');
        $daily->date = $request->input('date');
        $daily->start = $request->input('start');
        $daily->end = $request->input('end');
        $daily->rest = $request->input('rest');
        $daily->note = $request->input('note');

        $daily->time = $contract->dailyTime($daily);
        $daily->cost = $contract->dailyCost($daily, $request->user());

        $daily->save();

        return (new DailyResource($daily->reload([
            'user',
            'project',
            'workType',
            'jobType',
        ])))
            ->response()
            ->setStatusCode(201);
    }


    /**
     * 日報を更新するAPI
     * @param Request $request
     * @param Daily $daily
     * @return DailyResource
     */
    public function update(Request $request, Daily $daily, CalculateContract $contract)
    {
        $this->validate($request, [
            'work_type_id' => 'nullable|int',
            'job_type_id' => 'nullable|int',
            'project_id' => 'nullable|int',
            'date' => 'nullable|string|date_format:Y-m-d',
            'start' => 'nullable|string|date_format:H:i',
            'end' => 'nullable|string|after:start|date_format:H:i',
            'rest' => 'nullable|int',
            'note' => 'nullable|string'
        ]);

        if ($request->has('work_type_id')) {
            $daily->work_type_id = $request->input('work_type_id');
        }
        if ($request->has('job_type_id')) {
            $daily->job_type_id = $request->input('job_type_id');
        }
        if ($request->has('project_id')) {
            $daily->project_id = $request->input('project_id');
        }
        if ($request->has('date')) {
            $daily->date = $request->input('date');
        }
        if ($request->has('start')) {
            $daily->start = $request->input('start');
        }
        if ($request->has('end')) {
            $daily->end = $request->input('end');
        }
        if ($request->has('rest')) {
            $daily->rest = $request->input('rest');
        }
        if ($request->has('note')) {
            $daily->note = $request->input('note');
        }

        $daily->time = $contract->dailyTime($daily);
        $daily->cost = $contract->dailyCost($daily, $request->user());

        $daily->update();

        return (new DailyResource($daily->reload([
            'user',
            'project',
            'workType',
            'jobType',
        ])))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * 日報を削除するAPI
     * @param Daily $daily
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function delete(Daily $daily)
    {
        $daily->delete();

        return response(null, 204);
    }
}
