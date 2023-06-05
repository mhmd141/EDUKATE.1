<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attachments = Attachment::paginate(10);

        return view('admin.attachments.index', compact('attachments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();
        return view('admin.attachments.create', compact('course'));
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
            'file' => 'required',
            'type' => 'required',
            'course_id' => 'required',


        ]);
        $attachments = Attachment::create($formFields);
        return redirect()->route('attachments.index')->with('success', 'Lesson created successfully.');
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
        $attachments = Attachment::findOrFail($id);
        return view('admin.attachments.edit', compact('attachments'));
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

            'file' => 'required',
            'type' => 'required',
            'course_id' => 'required',

        ]);
        $attachments = Attachment::findOrFail($id);
        $attachments->update($formFields);
        return redirect()->route('attachments.index')->with('success', 'Attachment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attachments = Attachment::findOrFail($id);
        $attachments->delete();
        return redirect()->route('attachments.index')->with('success', 'Attachment deleted successfully!');
    }
}
