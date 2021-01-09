(function( $ ) {
    "use strict";
  
    $(function() {  
        
        $('#dateFormat_01').on('click', function(){
            toastr.success('Coppied!');
            alert('Coppied!');
            console.log('success');
        });
        console.log('debug end');
  
    });
  
  }(jQuery));