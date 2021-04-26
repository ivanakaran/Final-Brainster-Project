@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div class="text-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Course or Tutorial</div>
                <div class="card-body">

                    <form action="{{ route('courses.update', $course->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $course->title }}">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-link"></i> </span>
                            </div>
                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                                placeholder="URL of the tutorial" autocomplete="off" value="{{ $course->link }}">
                        </div>

                        @if ($categories->count() > 0)
                            <div class="form-group">
                                <label for="categories">Category:</label>
                                <select name="categories[]" id="categories" class="form-control categories-selector"
                                    multiple="multiple">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" ) @if ($course->hasCategory($category->id)) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <div class="d-flex d-flex justify-content-between my-4">

                            <div>
                                <p>Tags:</p>
                            </div>

                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="free" name="free"
                                    @if($course->free == '1') checked @endif>
                                    <label class="form-check-label" for="free">Free</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="paid" name="paid"
                                    @if($course->paid == '1') checked @endif>
                                    <label class="form-check-label" for="paid">Paid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="video" name="video" @if($course->video == '1') checked @endif>
                                    <label class="form-check-label" for="video" >Video</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="book" name="book" @if($course->book == '1') checked @endif>
                                    <label class="form-check-label" for="book">Book</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex d-flex justify-content-between my-4">

                            <div>
                                <span>This course is for:</span>
                            </div>
   
                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="advanced" name="level" value="advanced" @if($course->level == 'advanced') checked @endif>
                                    <label class="form-check-label" for="advanced">Advanced</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="beginner" name="level" value="beginner" @if($course->level == 'beginner') checked @endif >
                                    <label class="form-check-label" for="beginner">Begginer</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="language">Language</label>
                            <select name="language" id="language" class="custom-select">
                                <option value="english">English</option>
                                <option value="macedonian">Macedonian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="custom-select">
                                <option value="1">Approved</option>
                                <option value="0">Not Approved</option>
                            </select>
                        </div>

                      

                        <button type="submit" class="btn btn-success">Update Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
