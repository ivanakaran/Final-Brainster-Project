 $(document).ready(function() {

  // select menu with select 2
    $(".categories-selector").select2({
        placeholder: "Python, Angular, etc",
        allowClear: true,
        minimumInputLength: 1,
        maximumSelectionSize: 1,
        width: '100%',
    });

    function addToQueryString(param, value) {
      if ('URLSearchParams' in window) {
          var searchParams = new URLSearchParams(window.location.search);
          searchParams.set(param, value);
          window.location.search = searchParams.toString();
      
      }
  }
 
  $('.category_checkbox').on('change', function () {
    
    
      let value = $(this).attr('value');
      // let id = $(this).attr('id');
      
    
      if ($(this).is(':checked') == false) {
          value = "";
      }
           
        addToQueryString(`filter[${$(this).attr('id')}]`, value);
       
        
  })


  });

  

  




