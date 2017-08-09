<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions;

    protected function assertRelation($instance, $model)
    {
        $this->assertTrue($instance instanceof $model, get_class($instance).' is not instanceof '.$model);
        $this->assertTrue($instance->count() > 0, get_class($instance).' is null');
    }
}
