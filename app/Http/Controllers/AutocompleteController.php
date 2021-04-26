<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutocompleteController extends Controller
{
    function fetch(Request $request){
       
        if($request->get('query'))
        {
            $query = $request->get('query');

            $data = DB::table('categories')
                    ->where('name', 'like', '%'.$query.'%')
                    ->get();
                   
             $total_rows = $data->count();
             $output = '<ul class="dropdown-menu mt-0"
                         style = "display:block; top: 30px; right: 0">';
            if($total_rows > 0){
                foreach($data as $row)
                {
                  
                   $output .= '<li class="category-link"><a href="' . route('tutorials.show', $row->slug).'" class="nav-link">'.$row->name.'</a></li>';
                  
                }
            } else {
                $output .= '<li class="category-link"><a href="#" class="nav-link">No results found</a></li>' ;
            }
           
            $output .= '</ul>';
            echo $output;
        }
    }

    function searchProgramming(Request $request){
        if($request->ajax())
        {
           $query = $request->get('query');
           if($query != '')
           {
               $data = DB::table('categories')
                        ->where('channel_id', '1')
                        ->where('name', 'like', '%'.$query.'%')
                        ->get();
           }
           else
           {
             $data = DB::table('categories')
                         ->where('channel_id', '1')
                         ->get();
                      
           }
           $output = '';
           $total_categories = $data->count();
           if($total_categories > 0)
           {
               foreach($data as $programming_course)
               {
                  $output .= '
                  <div class="col-md-4 mb-3 ">
                    <div class="card shadow-sm course-card">
                        <a href="' . route('tutorials.show', $programming_course->slug). '" class="card-link">
                            <div class="card-body">
                                <img src=" ' .$programming_course->logo . '" alt="" class="float-left" width="40px" height="40px">
                                <p class="ml-5 mt-3">' . $programming_course->name.' </p>
                            </div>
                        </a>
                    </div>
                </div>
                  
                  ';

               }

           }
           else
           {
               $output = '
               <div class="container text-center"> 
               <h3>No Data found</h3>
               </div>
               ';

           }

           $data = array(
               'category_data' => $output
           );

           echo json_encode($data);
        }
    }

    function searchDataScience(Request $request){
        if($request->ajax())
        {
           $query = $request->get('query');
           if($query != '')
           {
               $data = DB::table('categories')
                        ->where('channel_id', '2')
                        ->where('name', 'like', '%'.$query.'%')
                        ->get();
           }
           else
           {
             $data = DB::table('categories')
                         ->where('channel_id', '2')
                         ->get();
                      
           }
           $output = '';
           $total_categories = $data->count();
           if($total_categories > 0)
           {
               foreach($data as $programming_course)
               {
                  $output .= '
                  <div class="col-md-4 mb-3 ">
                    <div class="card shadow-sm course-card">
                        <a href="' . route('tutorials.show', $programming_course->slug). '" class="card-link">
                            <div class="card-body">
                                <img src=" ' .$programming_course->logo . '" alt="" class="float-left" width="40px" height="40px">
                                <p class="ml-5 mt-3">' . $programming_course->name.' </p>
                            </div>
                        </a>
                    </div>
                </div>
                  
                  ';

               }

           }
           else
           {
               $output = '
               <div class="container text-center"> 
               <h3>No Data found</h3>
               </div>
               ';

           }

           $data = array(
               'category_data' => $output
           );

           echo json_encode($data);
        }
    }

    function searchDevOps(Request $request){
        if($request->ajax())
        {
           $query = $request->get('query');
           if($query != '')
           {
               $data = DB::table('categories')
                        ->where('channel_id', '3')
                        ->where('name', 'like', '%'.$query.'%')
                        ->get();
           }
           else
           {
             $data = DB::table('categories')
                         ->where('channel_id', '3')
                         ->get();
                      
           }
           $output = '';
           $total_categories = $data->count();
           if($total_categories > 0)
           {
               foreach($data as $programming_course)
               {
                  $output .= '
                  <div class="col-md-4 mb-3 ">
                    <div class="card shadow-sm course-card">
                        <a href="' . route('tutorials.show', $programming_course->slug). '" class="card-link">
                            <div class="card-body">
                                <img src=" ' .$programming_course->logo . '" alt="" class="float-left" width="40px" height="40px">
                                <p class="ml-5 mt-3">' . $programming_course->name.' </p>
                            </div>
                        </a>
                    </div>
                </div>
                  
                  ';

               }

           }
           else
           {
               $output = '
               <div class="container text-center"> 
               <h3>No Data found</h3>
               </div>
               ';

           }

           $data = array(
               'category_data' => $output
           );

           echo json_encode($data);
        }
    }

    function searchDesign(Request $request){
        if($request->ajax())
        {
           $query = $request->get('query');
           if($query != '')
           {
               $data = DB::table('categories')
                        ->where('channel_id', '4')
                        ->where('name', 'like', '%'.$query.'%')
                        ->get();
           }
           else
           {
             $data = DB::table('categories')
                         ->where('channel_id', '4')
                         ->get();
                      
           }
           $output = '';
           $total_categories = $data->count();
           if($total_categories > 0)
           {
               foreach($data as $programming_course)
               {
                  $output .= '
                  <div class="col-md-4 mb-3 ">
                    <div class="card shadow-sm course-card">
                        <a href="' . route('tutorials.show', $programming_course->slug). '" class="card-link">
                            <div class="card-body">
                                <img src=" ' .$programming_course->logo . '" alt="" class="float-left" width="40px" height="40px">
                                <p class="ml-5 mt-3">' . $programming_course->name.' </p>
                            </div>
                        </a>
                    </div>
                </div>
                  
                  ';

               }

           }
           else
           {
               $output = '
               <div class="container text-center"> 
               <h3>No Data found</h3>
               </div>
               ';

           }

           $data = array(
               'category_data' => $output
           );

           echo json_encode($data);
        }
    }
   
}
