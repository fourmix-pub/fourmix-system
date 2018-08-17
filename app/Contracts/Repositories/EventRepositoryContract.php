<?php

namespace App\Contracts\Repositories;

interface EventRepositoryContract
{
    /**
     * イベントのリソースを取得する
     * @return mixed
     */
    public function eventResources();

    /**
     * イベント作成
     * @param $request
     * @return mixed
     */
    public function create($request);

    /**
     * 詳細を取得する
     * @return mixed
     */
    public function details();
}