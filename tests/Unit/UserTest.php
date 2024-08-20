<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    /** @test */
    public function user_database_has_expected_columns()
    {

        $this->assertTrue(
            Schema::HasColumns('users', [
                'id', 'name', 'email', 'email_verified_at', 'password'
            ]), 1);
    }
    //** @test */
    public function user_has_many_events(){
        $user = factory(User::class) -> create();
        $event = factory(Event::class) -> create(['user_id' => $user->id]);

        $user->load('events');

    // Assert that the user’s events collection contains the created event
        $this->assertTrue($user->events->contains($event));

    }
}
