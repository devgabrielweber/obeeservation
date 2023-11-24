<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\LeituraSensor;
use App\Models\leituraSensor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\leituraSensorController
 */
class leituraSensorControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $leituraSensors = leituraSensor::factory()->count(3)->create();

        $response = $this->get(route('leitura-sensor.index'));

        $response->assertOk();
        $response->assertViewIs('leituraSensor.index');
        $response->assertViewHas('leituras');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\leituraSensorController::class,
            'store',
            \App\Http\Requests\leituraSensorStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_behaves_as_expected(): void
    {
        $response = $this->post(route('leitura-sensor.store'));
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('leitura-sensor.create'));

        $response->assertOk();
        $response->assertViewIs('leituraSensor.create');
    }


    /**
     * @test
     */
    public function destroy_displays_view(): void
    {
        $leituraSensor = leituraSensor::factory()->create();

        $response = $this->delete(route('leitura-sensor.destroy', $leituraSensor));

        $response->assertOk();
        $response->assertViewIs('leituraSensor.index');
    }
}
