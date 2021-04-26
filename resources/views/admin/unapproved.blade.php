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
                                        <form action="{{ route('approve', $course->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success btn-sm mr-2">Approve</button>
                                        </form>
                                        <a href="{{ route('courses.edit', $course->id) }}"
                                            class="btn btn-sm btn-info "> Edit</a>
                                            <a href="{{ route('admin.delete', $course->id) }}"
                                                class="btn btn-sm btn-danger  ml-2">Delete</a>
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



@endsection
