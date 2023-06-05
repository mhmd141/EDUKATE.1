<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::paginate(10);
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'slug'=>'required',
            'title'=>'required',
            'sub_title'=>'required',
            'des'=>'required',
            'image'=>'required',
            'statice1',
            'statice1_title',
            'statice2',
            'statice2_title',
            'statice3',
            'statice3_title',
            'statice4',
            'statice4_title',

            ]);
            $pages=Page::create($formFields);
            return redirect()->route('pages.index')->with('success', 'Page created successfully.');
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
        $pages=Page::findOrFail($id);
        return view('admin.pages.edit',compact('pages'));
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
        $formFields = $request->validate([
            'slug'=>'required',
            'title'=>'required',
            'sub_title'=>'required',
            'statice1'=>'required',
            'des'=>'required',
            'image'=>'required',
            'statice1',
            'statice1_title',
            'statice2',
            'statice2_title',
            'statice3',
            'statice3_title',
            'statice4',
            'statice4_title',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extention = $image->getClientOriginalExtension();
                $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
                $image->move(public_path('uploads/images/course'),$file_name);
                $formFields['image'] = $file_name;
            }
            $pages=Page::findOrFail($id);
            $pages->update($formFields);
            return redirect()->route('pages.index')->with('success', 'Page updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages=Page::findOrFail($id);
        $pages->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}
