<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 1225555 (Thông tin phòng)
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_example()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 1225555 (Thông tin phòng)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
