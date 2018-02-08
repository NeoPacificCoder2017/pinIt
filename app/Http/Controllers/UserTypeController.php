<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTypes = UserType::all();

        return view('userTypes.userTypes', compact('userTypes'));
    }

    /**
     * Show the template for displaying the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndexView()
    {
        return view('userTypes.userTypes');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex()
    {
        return UserType::all();        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('userTypes.userType-form-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userType = new UserType;
        $userType->title = $request->title;
        $userType->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apiStore(Request $request)
    {
        $userType = UserType::create($request->all());
        return response()->json($userType, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userType = UserType::find($id);

        return view('userTypes.userType')->with('userType', $userType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userType = UserType::find($id);

        return view('userTypes.userType-form-edit')->with('userType', $userType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userType = UserType::find($id);
        $userType->title = $request->title;
        $userType->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function apiUpdate(Request $request, UserType $userType)
    {
        $userType->update($request->all());
        return response()->json($userType, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userType = UserType::find($id);
        $userType->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function apiDestroy(UserType $userType)
    {
        $userType->delete();
        return response()->json($userType, 204);
    }
}
