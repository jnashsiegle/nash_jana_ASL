<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\Lists;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Html;
use Session;
use View;
use Auth;



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
    public function index(Request $request)
    {
        $lists = Lists::where('user_id', $request->user()->id)->get();

        return view('lists.index')->withLists($lists);
        
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
        return view('lists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'shoppingDate' => 'required'
            ]);
            $request->user()->lists()->create([
            'name' => $request->name,
            ]);
            $input = $request->all();            
            Lists::create(Input::all());

            





            Session::flash('flash_message', 'List successfully added!');

            return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $list = Lists::find($id);
        $list = Lists::findOrFail($id);

        return view('lists.show')->withList($list);
        //return view('lists.show', compact('list'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $list = Lists::findOrFail($id);

    return view('lists.edit')->withList($list);
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
        $list = Lists::findOrFail($id);

        $this->validate($request, [
            'title'=> 'required',
            'description' => 'required',
            'shoppingDate' =>'required'
        ]);

        $input = $request->all();

        $list->fill($input)->save();

        Session::flash('flash_message', 'List successfully updated!');

        return redirect()->back();
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Lists::findOrFail($id);

        $list->delete();

        Session::flash('flash_message', 'List successfully deleted!');

        return redirect()->route('lists.index');
    }
}
