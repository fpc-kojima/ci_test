<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CiExampleTest extends TestCase
{

    public function setUp(){
        //必要らしい
        parent::setUp();

        //artisanコマンドの実行
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
