@extends('layouts.app')
@section('title')
    Find the best online Programming courses and tutorials
@endsection
@section('content')
    <div class="container">
        <h1 class="display-5 mt-5  text-center">Find the Best DevOps Courses & Tutorials</h1>
        <div class="wrapper">
            <div class="search-input">
                <div class="icon"><i class="fas fa-search"></i></div>
                <a href="" target="_blank" hidden></a>
                <input type="text" name="devops_search" id="devops_search" placeholder="Search for the technology you would like to learn: AWS, Docker...">
                <div class="autocom-box">
                </div>
            </div>
        </div>

        <div class="row devops_records">

            

        </div>


    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        fetch_devops_data();
        function fetch_devops_data(query = '') 
{
    $.ajax({
        url:"{{ route('search.devops') }}",
        method: 'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
            
            $('.devops_records').html(data.category_data);
           
        }
    })

    $(document).on('keyup', '#devops_search', function(){
        var query = $(this).val();
        fetch_devops_data(query);
    })
}
    });
</script>
    
@endsection
