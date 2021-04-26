@extends('layouts.app')
@section('title')
    Find the best online Programming courses and tutorials
@endsection
@section('content')
    <div class="container">
        <h1 class="display-5 mt-5  text-center">Find the Best Programming Courses & Tutorials</h1>

        <div class="wrapper">
            <div class="search-input">
                <div class="icon"><i class="fas fa-search"></i></div>
                <a href="" target="_blank" hidden></a>
                <div class="search-body">
                    <input type="text" name="program_search" id="program_search" placeholder="Search for the language you want to learn: Python, Javascript,..">
                    <div class="autocom-box">
                </div>
                </div>

            </div>
        </div>
     
        <div class="row programming_records">


                
        </div>


    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        fetch_programming_data();
        function fetch_programming_data(query = '') 
{
    $.ajax({
        url:"{{ route('search.programming') }}",
        method: 'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
            console.log(data);
            $('.programming_records').html(data.category_data);
           
        }
    })

    $(document).on('keyup', '#program_search', function(){
        var query = $(this).val();
        fetch_programming_data(query);
    })
}
    });
</script>
    
@endsection
