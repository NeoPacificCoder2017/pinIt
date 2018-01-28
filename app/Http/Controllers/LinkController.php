<?php

namespace App\Http\Controllers;

use App\Link;;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Category;

class LinkController extends Controller
{  
    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function getLinksByCategory($categoryId)
    {
        $links = Link::all()->where('category_id', $categoryId);
        $categories = Category::all();

        return view('home')->with(['links' => $links, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        $categories = Category::all();

        return view('home')->with(['links' => $links, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        // $user = User::find($id);
        // return view('links.link-form-new')->wtih('user', $user);
        return view('links.link-form-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = new Link;
        $link->url = $request->url;
        $link->title = $request->title;
        $link->user_id = $request->id;
        $link->picture = $request->picture;
        $link->category_id = $request->category_id;
        $link->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show($linkId)
    {
        $link = Link::find($linkId);
        return view('links.link')->with('link', $link);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($linkId)
    {
        $link = Link::find($linkId);

        return view('links.link')->with('link', $link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $linkId)
    {
        $link = Link::find($linkId);
        $link->url = $request->url;
        $link->title = $request->title;
        $link->user_id = $request->user_id;
        $link->picture = $request->picture;
        $link->category_id = $request->category_id;
        $link->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($linkId)
    {
        $link = Link::find($linkId);
        $link->delete();
    }
}