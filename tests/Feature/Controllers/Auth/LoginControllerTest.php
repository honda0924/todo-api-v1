<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function test_success(): void
    {
        User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        $params = [
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        $this->postJson('/login', $params)
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Authenticated.',
            ]);
    }

    public function tearDown(): void
    {
        User::where('email', 'test@example.com')->delete();
    }
}
