<?php

namespace Tests\Feature;

use App\Models\Group;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_groups_can_have_users_attached()
    {
        $user = User::factory()->create();
        $group = Group::factory()->hasAttached($user)->create();

        $this->assertCount(1, $group->users);
    }
}
