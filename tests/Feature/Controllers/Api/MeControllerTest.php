<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class MeControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function testSuccess(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password'  => Hash::make('password')
        ]);

        $this->actingAs($user)
            ->getJson('/api/me')
            ->assertStatus(200)
            ->assertJson([
                'data' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ]);
    }
    public function tearDown(): void
    {
        User::where('email', 'test@example.com')->delete();
    }
}
