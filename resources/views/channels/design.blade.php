@extends('layouts.app')
@section('title')
    Find the best online Programming courses and tutorials
@endsection
@section('content')
    <div class="container">
        <h1 class="display-5 mt-5  text-center">Find the Best Design Courses & Tutorials</h1>
        <div class="wrapper">
            <div class="search-input">
                <div class="icon"><i class="fas fa-search"></i></div>
                <a href=""  target="_blank" hidden></a>
                <input type="text" name="design_search" id="design_search" placeholder="Search for the design tools you want to learn: Photoshop, Sketch,..">
              
            </div>
        </div>




        <div class="row design_records">
      


    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        fetch_design_data();
        function fetch_design_data(query = '') 
{
    $.ajax({
        url:"{{ route('search.design') }}",
        method: 'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
            
            $('.design_records').html(data.category_data);
           
        }
    })

    $(document).on('keyup', '#design_search', function(){
        var query = $(this).val();
        fetch_design_data(query);
    })
}
    });
</script>
    
@endsection