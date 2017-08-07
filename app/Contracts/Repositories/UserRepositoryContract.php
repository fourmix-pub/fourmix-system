<?php

namespace App\Contracts\Repositories;


interface UserRepositoryContract
{
    /**
     * 担当者リソース取得契約.
     * @return mixed
     */
    public function userResources();
}