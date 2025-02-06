<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_it_should_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);
        $this->assertInstanceOf(Employer::class, $job->employer);
    }

    public function test_it_can_have_a_tag(): void
    {
        $job = Job::factory()->create();

        $job->tag('tag');

        $this->assertCount(1, $job->tags);
    }
}
