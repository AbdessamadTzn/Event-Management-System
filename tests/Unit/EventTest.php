<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class EventTest extends TestCase
{
    /** @test */
    public function event_has_expected_columns()
    {
        $this->assertTrue(
            Schema::HasColumns('events', [
            'id', 'title', 'description', 'start_time', 'end_time'
        ]), 'Event Table Does Not Have Expected Columns');
    }
}
