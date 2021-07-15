<?php

namespace Tests\Feature;

use App\Models\Transport;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class TransportQueryTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp():void{
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function test_transport_can_be_searched_by_date(){
        Transport::factory(10)->create();
        $date = Carbon::parse("12/02/2001");
        $this->get("search_by_date/?date=".$date)->assertOk();        
    }
}
