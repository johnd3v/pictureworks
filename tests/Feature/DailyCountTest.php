<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class DailyCountTest extends TestCase
{
    /**
     * @method GET /api/daily
     * Test get endpoint for daily count
     * 
     * @return void
     */
    public function test_api_get_daily_count()
    {
        $response = $this->getJson('/api/daily');

        $response->assertJson(fn (AssertableJson $json) => $json->hasAll(['count', 'success']));
    }

    /**
     * @method POST /api/daily
     * Test post endpoint for daily count
     * 
     * @return void
     */
    public function test_api_post_daily_count()
    {
        $response = $this->postJson('/api/daily');

        $response->assertJson(fn (AssertableJson $json) => $json->hasAll(['count', 'success']));
    }
}
