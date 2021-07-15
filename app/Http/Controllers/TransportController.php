<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransportRequest;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("transport.index")->with([
            "transports"=> Transport::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransportRequest $request)
    {
        $request->store();
        Session::flash("success", "New invoice is created");
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(Transport $transport)
    {
        return view("transport.show")->with([
            "transport"=> $transport,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit(Transport $transport)
    {
        return view("transport.edit")->with([
            "transport"=>$transport,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(TransportRequest $request, Transport $transport)
    {
        $transport->update($request->toArray());
        Session::flash("success", "The invoice is updated");
        return redirect()->route("transports.show", $transport->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        $transport->delete();
        Session::flash("success", "The invoice is deleted");
        return redirect()->route("home");
    }
}
