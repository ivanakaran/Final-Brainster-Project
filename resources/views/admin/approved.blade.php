@extends('layouts.app')
@section('content')
    <main class="py-4">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">

                    <li class="list-group-item">
                        <a href="{{ route('admins.index') }}">All Courses and tutrorials</a>
                    </li>

                    <li class="list-group-item">
                        <a href="{{ route('admin.unapproved') }}"> Unapproved Courses and tutorials</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('admin.approved') }}"> Approved Courses and Tutorials</a>
                    </li>

                </ul>

            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <ol class="list-group">
                            @foreach ($courses as $course)
                                <li class="list-group-item">
                                    <a href="{{ $course->link }}">
                                        @if ($course->categories->count() > 0)
                                            @foreach ($course->categories as $category)
                                                {{ $category->name }}
                                            @endforeach
                                        @else
                                            {{ $course->link }}
                                        @endif
                                    </a>
                                    <div class="d-flex float-right">
                                        <button type="button" class="btn btn-sm mr-2 btn-danger" data-toggle="modal" data-target="#rejectModal">
                                         Reject Course
                                          </button>
                                        <a href="{{ route('courses.edit', $course->id) }}"
                                            class="btn btn-sm btn-success ">Edit</a>
                                    </div>

                                </li>
                            @endforeach
                        </ol>
                    </div>

                </div>
                <div class="my-4">
                    {{ $courses->links('pagination::bootstrap-4') }}
                </div>
            </div>
           
        </div>

    </main>


    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Reject the course</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Due to lack of time I will do the mail functionality later and the ones I am missing as well. 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="{{ route('reject', $course->id) }}" method="post">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-danger  mr-2" >Reject</button>
      </form>
            </div>
          </div>
        </div>
      </div>
      
   
@endsection
