<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Notifications\ApprovedCourse;
use Symfony\Component\Console\Input\Input;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['edit', 'update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(CreateCourseRequest $request)
    {

        
        $course = Course::create([
            'link' => $request->link,
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'free' => $request->has('free'),
            'paid' => $request->has('paid'), 
            'video' => $request->has('video'), 
            'book' => $request->has('book'), 
            'level' => $request->level,
            'language' => $request->language,
        ]);


        if ($request->categories) {
            $course->categories()->attach($request->categories);
        }
        
        $request->session()->flash('success', 'Thanks! Your submission will be reviewed shortly. Submit again?');
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

     
 
    
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
         $course->update([
             'title' => $request->title,
             'status' => $request->status, 
             'link' => $request->link,
             'free' => $request->has('free'),
             'paid' => $request->has('paid'), 
             'video' => $request->has('video'), 
             'book' => $request->has('book'), 
             'level' => $request->level, 
             'language' => $request->language,
             ]);
      
    
         if ($request->categories) {
            $course->categories()->sync($request->categories);
        }

       
         return redirect()->route('admins.index')->with('status', 'Course updated successfully');
        
    }

    public function approve($id)
    {

        $course = Course::find($id);
        $course->status = '1';
        $course->save();

        $course->user->notify(new ApprovedCourse($course));

        return redirect()->route('admins.index')->with('status', 'Course approved successfully');
    }

    public function reject($id)
    {

        $course = Course::find($id);
        $course->status = '0';
        $course->save();

      

        return redirect()->route('admins.index')->with('status', 'Course rejected successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}