<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function test_user_index()
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
        $response->assertSee('Jose');
    }

    public function test_user_detail()
    {
        $response = $this->get('/api/users/1');
        $response->assertStatus(200);
        $response->assertSee('Jose');

        $responseNotFound = $this->get('/api/users/999');
        $responseNotFound->assertStatus(404);
        $responseNotFound->assertSee('User not found');
    }
}
