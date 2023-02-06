$(document).ready(function(){
   $('#min-range').val(35);
   $('#max-range').val(2000);
    getProducts();

   // START :: Price slider
   $(function() {
      $( "#slider-3" ).slider({
         range:true,
         min: 0,
         max: 2000,
         values: [ 35, 2000 ],
         slide: function( event, ui ) {
         $('#min-range').val(ui.values[0]);
         $('#max-range').val(ui.values[1]);
         },
         change: function(event, ui){
         getProducts();
         }
      });
      $('#min-range').val($( "#slider-3" ).slider( "values", 0 ));
      $('#max-range').val($( "#slider-3" ).slider( "values", 1 ));
   });

    // END :: Price slider

   // START :: Other filters
      $('.other-filter').on('change', function() {
         getProducts();
      });
   // END :: Other filters
})