<?php
/**
 * Created by PhpStorm.
 * User: YUTA
 * Date: 2017/08/01
 * Time: 16:42.
 */

namespace App\Contracts\Repositories;

interface JobTypeRepositoryContract
{
    /**
     * リソース取得契約.
     * @return mixed
     */
    public function jobTypeResources();
}
