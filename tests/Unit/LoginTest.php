<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use Faker\Factory;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_login()
    {
        $user = Factory(User::class)->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/home');

        $response->assertStatus(200);
    }
}
