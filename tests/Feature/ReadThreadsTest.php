<?php

namespace Tests\Feature;

use App\Reply;
use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;

    protected $thread;

    protected function setUp()
    {
        parent::setUp();

        $this->thread = factory(Thread::class)->create();
    }

    /** @test */
    public function testUserCanBrowseAllThreads()
    {
        $this->get('/threads')
            ->assertSee($this->thread->title);
    }

    /** @test */
    public function testUserCanReadASingleThread()
    {
        $this->get('/threads/' . $this->thread->id)
            ->assertSee($this->thread->title);
    }

    /** @test */
    public function testUserCanReadRepliesOnAThread()
    {
        $reply = factory(Reply::class)
            ->create(['thread_id' => $this->thread->id]);

        $this->get('/threads/' . $this->thread->id)
            ->assertSee($reply->body);
    }
}
