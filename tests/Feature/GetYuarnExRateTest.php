<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class GetYuarnExRateTest extends TestCase
{
    public function test_link_isset(): void
    {
        $response = $this->get('/api/get-yuan-exrate');
        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     */
    public function test_get_one(): void
    {
        $response = $this->get('/api/get-yuan-exrate');

        // $response->dd();

        $response
            ->assertJson(
                fn(AssertableJson $json) =>
                $json->has('yuan')
                ->etc()
            );
    }
}
