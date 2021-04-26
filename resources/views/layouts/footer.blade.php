<script src="https://kit.fontawesome.com/8f040a946e.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')

@if ($errors->has('link') || Session::has('success'))
    <script>
        $(function() {
            $('#tutorialModal').modal({
                show: true
          });
           
        });
           
    </script>
@endif

@if ($errors->has('email') || $errors->has('password'))
      <script>
          $(function() {
              $('#loginModal').modal({
                  show: true
            });
             
          });
        
      </script>
  @endif


  
  <script>
    $('#category_name').keyup(function () {
          var query =$(this).val();
           if(query != '')
          {
            var _token = $('input[name="_token"]').val();
            
            $.ajax({
              url:'{{ route("autocomplete.fetch")}}',
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data)
              {
                $('#categoryList').fadeIn();
                $('#categoryList').html(data);
              }
            })
          }
    })

    $(document).on('click', '.category-link', function(){
      
      $link =  $('#category_name').val($(this).text());
    
        $('#categoryList').fadeOut();

    })

</script>
</body>

</html>
