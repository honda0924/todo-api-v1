<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;

class TaskTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * task index
     * @test
     * @return void
     */
    public function test_index()
    {
        $tasks = Task::all();
        $response = $this->getJson('api/');

        $response->assertJsonCount($tasks->count());
    }
}
