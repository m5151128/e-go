<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * test status code
     *
     * @return void
     */
    public function testStatusCode()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    /**
     * test body text
     *
     * @return void
     */
    public function testBody()
    {
        $response = $this->get('/home');

        $response->assertSeeText('こんにちは');
    }
}
