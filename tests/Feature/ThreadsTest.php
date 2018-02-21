<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{
    /** @test */
    public function testUserCanBrowseAllThreads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
