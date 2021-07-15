<?php

namespace App\Http\Requests;

use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TransportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "truck_number"=>["required"],
            "place"=> ["required"],
            "date"=> ["required","date"],
            "point"=> ["required", "numeric"],
            "person"=> ["required", "string"],
            "mobile"=> ["required", "numeric"],
            "fare"=> ["required", "numeric"],
            "commission"=> ["required", "numeric"],
            "status"=> ["nullable"],
            "invoice"=> ["required", "numeric"],
            "description"=> ["required", "string"],
        ];
    }

    public function store(){
        Transport::create($this->toArray());
    }

    public function toArray()
    {
        return [
            "truck_number"=> request("truck_number"),
            "place"=> request("place"),
            "date"=> Carbon::parse(request("date")),
            "point"=> request("point"),
            "person"=> request("person"),
            "mobile"=> request("mobile"),
            "fare"=> request("fare"),
            "commission"=> request("commission"),
            "status"=> request("status"),
            "invoice"=> request("invoice"),
            "description"=> request("description"),
        ];
    }
}
