<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Serve;
use App\Http\Requests\StoreServeRequest;
use Illuminate\Http\Request;

class ServeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serves = Serve::all();
        $about = About::all();
        return view('layouts.serve.index',compact('serves','about'));
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
    public function store(StoreServeRequest $request)
    {
        try {

            Serve::create([
                'email' => $request->email,
            ]);
            session()->flash('Add', __('E-mail Added Successfully') );
            return redirect()
                ->route('serve');

        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serve  $serve
     * @return \Illuminate\Http\Response
     */
    public function show(Serve $serve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serve  $serve
     * @return \Illuminate\Http\Response
     */
    public function edit(Serve $serve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serve  $serve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serve $serve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serve  $serve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Serve::destroy($request->serve_id);
            session()->flash('Deleted', 'Email has been deleted successfully');
            return redirect()->back();

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
