<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LogoutControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function testSuccess(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        $this->actingAs($user)
            ->postJson('/logout')
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);

        $this->assertGuest();
    }

    public function tearDown(): void
    {
        User::where('email', 'test@example.com')->delete();
    }
}
