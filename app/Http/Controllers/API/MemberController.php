<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Member::all();
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
        return Member::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        return Member::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Member::find($id);
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
        $a=Member::findOrFail($id);
        $a->update($request->all());
        return $a;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a=Member::find($id)->delete();
        return 204;
    }

    public function search($id)
    {
        $search = Member::where('id','=',$id)->get();
        return $search;
    }
//    public function searchByName($value, Request $request)
//    {
//        dd($request);
//        //print_r($value->value);
//        $search = Member::where('fName','like','%'.$value.'%')->get();
//        return $search;
//    }
    public function searchByName(Request $request)
    {
//        dd($request);
        //print_r($value->value);
//        $search = Member::where('fName','like','%'.$request->value.'%')->get();
        $search = Member::whereRaw("concat(fName, ' ', lName) like '%".$request->value."%'")->get();
        return $search;
    }
}
