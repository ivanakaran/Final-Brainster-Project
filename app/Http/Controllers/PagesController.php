<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilderRequest;

class PagesController extends Controller
{

    public function programming()
    {
      return view('index');
    }

   


    public function dataScience()
    {
   
        return view('channels.data-science');
    }

    public function devOps()
    {
        $dev_ops = Category::where('channel_id', '3')->get();
        return view('channels.dev-ops', compact('dev_ops'));
    }

    public function design()
    {
        $design_courses = Category::where('channel_id', '4')->get();
        return view('channels.design', compact('design_courses'));
    }

    public function show(Category $category, Request $request){
        $path = $request->path();
        $lastWord = substr($path, strrpos($path, '/') + 1); 
        $category = Category::where('slug', $lastWord)->first();
        $category_id =$category->courses->pluck('id')->toArray(); 
        $related_categories = Category::all()->random(6);
    

  
      
   

    $courses = QueryBuilder::for(Course::class)
    ->allowedFilters([
        AllowedFilter::scope('free'),
        AllowedFilter::scope('paid'),
        AllowedFilter::scope('video'),
        AllowedFilter::scope('book'),
        AllowedFilter::scope('advanced'),
        AllowedFilter::scope('beginner'),
        AllowedFilter::scope('english'),
        AllowedFilter::scope('macedonian'),
    ])
    ->where('status', '1')->withCount('likes')->orderByDesc('likes_count')->with('categories')->whereIn('id', $category_id)->paginate(6);
        
   
       
        $free_courses = $category->courses->where('free', '1');
      
        $paid_courses = $category->courses->where('paid', '1');
        $video_courses = $category->courses->where('video', '1');
        $book_courses = $category->courses->where('book', '1');
        $beginner_courses = $category->courses->where('level', 'beginner');
        $advanced_courses = $category->courses->where('level', 'advanced');
        $macedonian_courses = $category->courses->where('language', 'macedonian');
        $english_courses = $category->courses->where('language', 'english');

  
        return view('course-tutorial', compact('courses', 'category', 'category_id', 'free_courses', 'paid_courses', 'video_courses', 'book_courses', 'beginner_courses', 'advanced_courses', 'macedonian_courses', 'english_courses', 'related_categories'));
    }

    // public function filterCourses(Category $category, $id){
      
    // $category_id =$category->courses->pluck('id')->toArray();

    // $data = QueryBuilder::for(Course::class)
    // ->allowedFilters([
    //     AllowedFilter::scope('free'),
    //     AllowedFilter::scope('paid'),
    //     AllowedFilter::scope('video'),
    //     AllowedFilter::scope('book'),
    //     AllowedFilter::scope('advanced'),
    //     AllowedFilter::scope('beginner'),
    //     AllowedFilter::scope('english'),
    //     AllowedFilter::scope('macedonian'),
    // ])
    // ->where('status', '1')->withCount('likes')->orderByDesc('likes_count')->with('categories')->whereIn('id', $category_id)->get();
        

    //  return response()->json($data);
//    }
}