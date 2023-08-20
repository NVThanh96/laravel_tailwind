<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\WebModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("web.index");
    }
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view("layouts.home");
    }
    /**
     * Display a listing of the resource.
     */
    public function test()
    {
        return view("layouts.navbar");
    }

    public function calender()
    {
        return view("calender.calender");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebModel $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebModel $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WebModel $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebModel $cr)
    {
        //
    }
}
