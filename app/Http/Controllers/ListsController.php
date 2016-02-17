<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lists;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

    GET    /Lists           Index
    GET /Lists/create       Create
    POST    /Lists          Store
    GET /Lists/{id}         Show (individual record)
    GET /Lists/{id}/edit    Edit
    PUT /Lists/{id}         Update
    DELETE  /Lists/{id}     Destroy
     */
    public function index()
    {
        return view('lists/index');
    }  


    /**
    *Allow only logged in users to access
    */
        public function __construct()
    {
    $this->middleware('auth');
    }   


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
