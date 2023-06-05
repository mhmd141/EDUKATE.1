<?php

namespace App\Http\Controllers\website;
use App\Models\Page;

use App\Models\Course;
use App\Models\Feature;
use App\Models\Setting;
use App\Models\Static1;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Help;
use App\Models\Testimonial;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->settings = Setting::query()->first();
        view()->share([
            'settings' => $this->settings,
        ]);

    }

    public function home(){
        $page = Page::get()->where('slug','about')->first();
        $courses = Course::take(10)->latest()->get();
        $feature=Feature::get()->first();
        $course = Course::get();
        $testimonial =Testimonial::get()->first();
        $comments = Comment::all();
        $instructors=Instructor::get();
        return view('website/index',compact('page','courses','feature','course','testimonial','instructors','comments'));
    }

    public function courses(){
    $courses = Course::take(9)->latest()->get();
    return view('website/course', compact('courses',));
    }
    public function contact(){
        $settings = Setting::get()->first();
    return view('website/contact',compact('settings'));
    }
    public function instructor(){
    $instructors=Instructor::get();
    return view('website/instructor',compact('instructors'));
    }

    public function testimonial(){
        $comments = Comment::all();
        $testimonial =Testimonial::get()->first();
        return view('website/testimonial',compact('comments','testimonial'));


    return view('website/testimonial');
    }
    public function feature(){
    $feature=Feature::get()->first();
    return view('website/feature',compact('feature'));
    }

    public function search(Request $request)
    {
        $courses = Course::where('title', 'like', '%'.$request->q.'%')->get();

        dd($courses);
    }

    public function pages($slug){

        $page = Page::get()->where('slug',$slug)->first();
        return view('website/page',['page'=> $page] );
    }
    public function course($id){

        $course = Course::where('id',$id)->first();
        $relatedCourses = Course::where('id', '!=', $course->id) // Exclude the current course
                                ->where('category_id',$course->category_id)
                                ->take(5)
                                ->latest()
                                ->get();
        $recentCourses = Course::where('id', '!=', $course->id) // Exclude the current course
                                ->latest()
                                ->take(5)
                                ->get();

        // Retrieve all categories
         $categories = Category::get();

        // Sort the categories in descending order based on the 'courses_count' appended value
        $categories = $categories->sortByDesc(function ($category) {
            return $category->courses_count;
        });

        // Take only the top 5 categories after sorting
        $categories = $categories->take(5);

  return view('website/detail',[ 'course'=> $course , 'relatedCourses'=>$relatedCourses,'categories'=>$categories , 'recentCourses'=>$recentCourses] );
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);
        $helps = Help::create($formFields);
        return redirect()->route('/')->with('you will get help soon.');
    }

}
