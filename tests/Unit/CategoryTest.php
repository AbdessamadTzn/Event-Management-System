<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /** @test */
    public function category_has_expected_columns()
    {
        $this->assertTrue(
            Schema::HasColumns('categories', [
                'id', 'name'
            ]), 'Category Table does not have the expected columns.'
        );
    }
}
