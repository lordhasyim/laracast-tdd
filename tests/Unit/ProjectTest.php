<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    function it_has_a_path()
    {
        $project = factory('App\Project')->create();

        $this->assertEquals("/projects/" . $project->id , $project->path());
    }

    /** @test */
    function it_belongs_to_an_owner()
    {
        $project = factory('App\Project')->create();

        $this->assertInstanceOf('App\User' , $project->owner);
    }
}
