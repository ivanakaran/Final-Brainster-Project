@extends('layouts.app')

@section('content')
    <div class="container">
 <div class="row my-5">
     <div class="col-1">
         <img src="{{ $category->logo }}" width="60px" alt="">
     </div>
     <div class="col-7">
         <h2>{{ $category->name }} Tutorials and Courses</h2>
         <p class="text-muted font-weight-bold">Learn {{ $category->name }}  online from the best {{ $category->name }} tutorials submitted & voted by the programming community. </p>
     </div>
 </div>

 <div class="my-4 d-flex fil-wrapper"> 
     <div class="d-none  fil-header">
         <p class="font-weight-bold mt-3">Your filter selection:</p>
         </div>  
     <div id="filter_names" class="d-flex">
      
     </div>
 </div>


 <div class="row">
     <div class="col-md-4">
       <div class="card card-filter">
           <div class="card-header mx-2 py-2 font-weight-bold filter-header">Filter Courses</div>
           <div class="card-body">
               

               {{-- <form action="" method="POST" id="filter-form" > --}}
                 <div>
                       <p class="font-weight-bold py-0">Type of course</p>
                  
               
                       <div class="form-check mx-3 check-free">
                          <input class="form-check-input category_checkbox" type="checkbox" value="1" id="free" name="type" {{ (request()->input('filter.free') == '1') ? 'checked' : '' }}>
                            <label class="form-check-label ml-2" for="free">
                                Free</label>
                       <span>({{ $free_courses->count() }})</span>                
                      </div>
                     
                      <div class="form-check mx-3 check-paid">
                        <input class="form-check-input category_checkbox" type="checkbox" value="1" id="paid" name="type" {{ (request()->input('filter.paid') != null) ? 'checked' : '' }}>
                        <label class="form-check-label ml-2" for="paid">
                          Paid</label>
                         
                          <span>       
                            <span>({{ $paid_courses->count() }})</span>   
                      </span>                   
                      </div>
                 </div>
               
                 <div class="mt-3">
                    <p class="font-weight-bold py-0">Medium</p>
                    <div class="form-check mx-3">
                     <input class="form-check-input category_checkbox" type="checkbox" value="1" id="video" name="medium" @if (request()->input('filter.video') != null) checked  @endif>
                     <label class="form-check-label ml-2" for="video">
                       Video</label>
                    <span>({{ $video_courses->count() }})</span>                
                   </div>
                  
                   <div class="form-check mx-3">
                     <input class="form-check-input category_checkbox" type="checkbox" value="1" id="book" name="medium" @if (request()->input('filter.book') == '1') checked  @endif>
                     <label class="form-check-label ml-2" for="book">
                       Book</label>
                      
                       <span>       
                         <span>({{ $book_courses->count() }})</span>   
                   </span>                   
                   </div>
              </div>

              <div class="mt-3">
                <p class="font-weight-bold py-0">Level</p>
                <div class="form-check mx-3">
                 <input class="form-check-input category_checkbox" type="checkbox" value="beginner" id="beginner" name="beginner" @if (request()->input('filter.beginner') == 'beginner') checked  @endif>
                 <label class="form-check-label ml-2" for="beginner">
                   Beginner</label>
                <span>({{ $beginner_courses->count() }})</span>                
               </div>
              
              
               <div class="form-check mx-3">
                 <input class="form-check-input category_checkbox" type="checkbox" value="advanced" id="advanced" name="advanced" @if (request()->input('filter.advanced') == 'advanced') checked  @endif>
                 <label class="form-check-label ml-2" for="advanced">
                   Advanced</label>
                  
                   <span>       
                     <span>({{ $advanced_courses->count() }})</span>   
               </span>                   
               </div>
          </div>

          <div class="mt-3">
            <p class="font-weight-bold py-0">Language</p>
            <div class="form-check mx-3">
             <input class="form-check-input category_checkbox" type="checkbox" value="english" id="english" name="english" @if (request()->input('filter.english') == 'english') checked  @endif>
             <label class="form-check-label ml-2" for="english">
               English</label>
            <span>({{ $english_courses->count() }})</span>                
           </div>
          
           <div class="form-check mx-3">
             <input class="form-check-input category_checkbox" type="checkbox" value="macedonian" id="macedonian" name="macedonian" @if (request()->input('filter.macedonian') == 'macedonian') checked  @endif>
             <label class="form-check-label ml-2" for="macedonian" >
               Macedonian</label>
              
               <span>       
                 <span>({{ $macedonian_courses->count() }})</span>   
           </span>                   
           </div>
      </div>

               {{-- </form> --}}
           </div>
       </div>
</div>
    


     <div class="col-md-8 courses_div">
       <div class="row">
      @if ($courses->count() > 0)
        
    
        @foreach ($courses as $course)
 @if (in_array($course->id, $category_id))
 <div class="col-md-4 mb-3">
   <div class="card">
     <div class="hard-header m-2 shadow-sm d-flex">
      <div>
         <p class=" p-2">{{ $course->title }}</p>
      </div>
      <div>
         <a href="{{ $course->link }}" target="_blank" class="btn btn-info  btn-sm m-2">view</a>
      </div>
     </div>
     <div class="card-body">
     <div class="d-flex justify-content-between">
       <div class="span">
         @if($course->video == 1)
        video
        @else
        book
        @endif
       </div>
       <div class="span">
        @if($course->free == 1)
       free
       @endif
      </div>
     </div>

     <div class="d-flex justify-content-between">
      <div class="span">
        @if($course->language == 'english')
       English
       @else
       Macedonian
       @endif
      </div>
      <div class="span">
       @if($course->level == 'beginner')
      Beginner
      @else
      Advanced
      @endif
     </div>
    </div>

    <p class="my-4">By: {{ $course->user->name }}</p>
    <p class="font-italic">{{ $course->created_at->format('F d Y H:i') }}</p>
     </div>
     <div class="card-footer">
       <div class="d-flex justify-content-between">
        @auth 
        @if($course->is_liked_by_auth_user())  
     <div class="unlike-link">
        <a href=" {{ route('course.unlike', $course->id) }}" class=" float-left text-decoration-none text-success"><span class="mr-1">{{ $course->likes->count() }}</span>Likes<i class="far fa-thumbs-up ml-2 "></i></a>
     </div>
        @else
       
          <div>
            <a href="{{ route('course.like', $course->id) }}" class="float-left text-decoration-none text-dark"><span class="mr-1">{{ $course->likes->count() }}</span>Likes<i class="far fa-thumbs-up ml-2 "></i></a>
          </div>
     
        @endif
        @endauth

      @guest
      <div class="">
        <a href="#" class=" float-left text-decoration-none text-dark" data-toggle="modal" data-target="#registerTutorialModal"><span class="mr-1">{{ $course->likes->count() }}</span>Likes<i class="far fa-thumbs-up ml-2 "></i></a>
     </div>
      @endguest
      
      <p class="float-right text-success"><i class="far fa-check-circle"></i>by</p>
     </div>
   </div>
 </div>
 </div>
     @endif 
     @endforeach 

@else
<div class="container">
  <h3 class="text-center">There are no courses availabe</h3>
</div>
   
     @endif

  </div>
  {{$courses->links()}}  
 </div>

                
   
     
   
</div>

<div class="row container my-5">
<div class="col-md-12 my-3">
    <h4>You might also be interested in:</h4>
</div>

  @foreach ($related_categories as $category)
  <div class="col-md-4 mb-3 ">
    <div class="card shadow-sm course-card">
        <a href="{{ route('tutorials.show', $category->slug) }}" class="card-link">
            <div class="card-body">
                <img src="{{ $category->logo }}" alt="" class="float-left" width="40px" height="40px">
                <p class="ml-5 mt-3">{{ $category->name }}</p>
            </div>
        </a>
    </div>
</div>
  @endforeach
</div>
    
@endsection


    
