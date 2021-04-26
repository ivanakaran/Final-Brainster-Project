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
                <div class="container">
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
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
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                        class="btn btn-sm btn-success float-right">Edit</a>

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



@endsection
