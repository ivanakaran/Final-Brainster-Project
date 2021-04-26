@extends('layouts.app')
@section('title')
    Find the best online Programming courses and tutorials
@endsection
@section('content')
    <div class="container">
        <h1 class="display-5 mt-5  text-center">Find the Best Data Science Courses & Tutorials</h1>
        <div class="wrapper">
            <div class="search-input">
                <div class="icon"><i class="fas fa-search"></i></div>
                <a href="" target="_blank" hidden></a>
                <input type="text" name="data_science_search" id="data_science_search" placeholder="Search for the technology you want to learn: ML, Data Science...">
                <div class="autocom-box">
                </div>
            </div>
        </div>

        <div class="row data_science_records">
            
        </div>
        @section('scripts')
        <script>
            $(document).ready(function () {
                fetch_data_science_data();
                function fetch_data_science_data(query = '') 
        {
            $.ajax({
                url:"{{ route('search.data-science') }}",
                method: 'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    console.log(data);
                    $('.data_science_records').html(data.category_data);
                   
                }
            })
        
            $(document).on('keyup', '#data_science_search', function(){
                var query = $(this).val();
                fetch_data_science_data(query);
            })
        }
            });
        </script>
            
        @endsection

    </div>
@endsection
