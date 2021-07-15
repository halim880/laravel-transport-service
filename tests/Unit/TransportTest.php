<?php

namespace Tests\Unit;

use App\Models\Transport;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class TransportTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp():void{
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function test_transport_can_be_created(){
        Transport::factory()->create();
        $this->assertNotNull(Transport::first());
        $this->assertEquals(Transport::all()->count(), 1);
    }
}
