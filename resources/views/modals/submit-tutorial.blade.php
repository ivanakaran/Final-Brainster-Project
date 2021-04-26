 {{-- Submit Tutorial Modal --}}
 <div class="modal fade" id="tutorialModal">
     <div class="modal-dialog login animated">
         <div class="modal-content">
             <div class="modal-header border-bottom-0">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             </div>
             <div class="text-center">
                 <h1 class="">Submit a Tutorial/Course</h1>
                 <p class="">Feel free to submit tutorials in any language.
                 </p>
                 <small class="d-block mx-5 border-bottom text-uppercase text-muted ">Paste the link below:</small>
             </div>
             <div class="container">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
             </div>
             <div class="modal-body">
                 <form method="POST" action="{{ route('courses.store') }}" id="submit-form">
                     @csrf
                     <div class="form-group input-group">
                         <div class="input-group-prepend">
                             <span class="input-group-text"> <i class="fa fa-link"></i> </span>
                         </div>
                         <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                             placeholder="URL of the tutorial" autocomplete="off" value="">
                         @error('link')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                     </div>

                     <div class="form-group">
                         <p class="tut-info-title">Tell us more about this 'tutorial/course' (optional) </p>
                     </div>

                     @if ($categories->count() > 0)
                         <div class="form-group">
                             <label for="categories">Category:</label>
                             <select name="categories[]" id="categories" class="form-control categories-selector"
                                 multiple="multiple">

                                 @foreach ($categories as $category)
                                     <option value="{{ $category->id }}" )>{{ $category->name }}</option>
                                 @endforeach
                             </select>
                         </div>
                     @endif

                     <div class="d-flex d-flex justify-content-between">

                         <div>
                             <span>Tags:</span>
                         </div>

                         <div class="">
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="free" name="free">
                                 <label class="form-check-label" for="free" value="free">Free</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="paid" name="paid">
                                 <label class="form-check-label" for="paid" value="paid">Paid</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="video" name="video">
                                 <label class="form-check-label" for="video" value="video">Video</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="book" name="book">
                                 <label class="form-check-label" for="book" value="book">Book</label>
                             </div>
                         </div>
                     </div>


                     <div class="d-flex d-flex justify-content-between my-3">

                         <div>
                             <span>This course is for:</span>
                         </div>

                         <div class="">
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" id="advanced" name="level" value="advanced">
                                 <label class="form-check-label" for="advanced">Advanced</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" id="beginner" name="level" value="beginner">
                                 <label class="form-check-label" for="beginner">Begginer</label>
                             </div>
                         </div>
                     </div>



                     <div class="form-group mb-0">
                         <button type="submit" class="btn btn-primary btn-block">
                             Submit
                         </button>

                     </div>
                 </form>
             </div>
             <div class="pb-4">
                 <div class="text-center">
                     <span>Have you read our submission
                         <a href="https://hackr.io/submission-criteria">guidelines</a>?</span>
                 </div>
             </div>
         </div>
     </div>
 </div>




