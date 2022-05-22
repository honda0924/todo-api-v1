<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $categories = Category::all();

        Task::factory()
            ->count(30)
            ->create()
            ->each(function ($task) use ($categories) {
                $task->categories()->attach($categories->random(rand(1,3))->pluck('id')->toArray());
            })
            ->each(function ($task) use ($users) {
                $task->users()->attach($users->random(rand(1,3))->pluck('id')->toArray());
            });
    }
}
