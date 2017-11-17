<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Release::with(['category'])
            ->where('status', 'PUBLISHED')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('releases.index', compact('models'));
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
     * @param  \App\Models\Release  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Release $post)
    {
        return view('releases.show', ['model' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Release  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Release $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Release  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Release $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Release  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Release $post)
    {
        //
    }
}
