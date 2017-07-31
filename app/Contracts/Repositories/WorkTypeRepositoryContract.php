<?php
/**
 * Created by PhpStorm.
 * User: YUTA
 * Date: 2017/07/31
 * Time: 18:54
 */

namespace App\Contracts\Repositories;


interface WorkTypeRepositoryContract
{
    /**
     *
     * リソース取得契約
     * @return mixed
     */
    public function workTypeResources();
}