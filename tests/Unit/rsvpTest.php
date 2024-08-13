<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class rsvpTest extends TestCase
{
    /** @test */
    public function rsvp_has_expected_colums()
    {
        $this->assertTrue(
            Schema::HasColumns('r_s_v_p_s', [
                'id', 'status'
            ]),
            'RSVP Does Not Have Expected Columns'
        );
    }
}
