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
}
