<?php

namespace Tests\Feature;

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

    public function test_transport_index_page_can_be_rendered(){
        $request = $this->get("transports");
        $request->assertViewIs("transport.index");
        $request->assertViewHas("transports");
    }

    public function test_transport_create_page_can_be_rendered(){
        $request = $this->get("transports/create");
        $request->assertViewIs("transport.create");
    }

    public function test_transport_can_be_stored(){

        $data = $this->data();
        $this->post("transports", $data)->assertOk();

        $this->assertNotNull(Transport::first());
        $this->assertEquals(Transport::all()->count(), 1);
    }

    public function test_transport_can_be_shown(){
        Transport::create($this->data());
        $response = $this->get("transports/1");
        $response->assertOk();
        $response->assertViewIs("transport.show");
        $response->assertViewHas("transport");
    }

    public function test_transport_can_be_deleted(){
        Transport::create($this->data());
        $transport = Transport::first();
        $this->delete("transports/".$transport->id)->assertOk();
        $this->assertNull(Transport::first());
    }

    public function test_transport_edit_page_can_be_rendered(){
        Transport::create($this->data());
        $response = $this->get("transports/1/edit");
        $response->assertViewIs("transport.edit");
        $response->assertViewHas("transport");
    }

    public function test_transport_can_be_updated(){
        Transport::create($this->data());
        $transport = Transport::first();
        $this->put("transports/".$transport->id, $this->data([
            "person"=> "halim",
        ]))->assertOk();
        
        $transport = Transport::first();
        $this->assertNotNull($transport);
        $this->assertEquals($transport->person, "halim");
    }

    private function data($data = []){
        return array_merge([
            "id"=> 1,
            "truck_number"=> "101",
            "place"=> "sylhet",
            "date"=> Carbon::now()->subDay(3),
            "point"=> 2,
            "person"=> "Akash",
            "mobile"=> "01743920880",
            "fare"=> 2020,
            "commission"=> 1000,
            "status"=> true,
            "invoice"=> 30000,
            "description"=> "due",
        ], $data);
    }
}
