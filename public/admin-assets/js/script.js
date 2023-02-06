// check box

window.onload = function load()
{
// sub_menu
$(document).ready(function(){

    // $('.sub_menu').hide();
    

    $('.sub_menu_arrow').click(function(){
        $(this).parent('.hedding_main').next('.sub_menu ').slideToggle();

    });
});
    

// slide bar menu
$(document).ready(function(){
    $('.menu_name').hide();
    $('.sub_menu_arrow').hide();
    $('.sub_menu').hide();

    
    
    $('.menu_arrow > img').click(function(){
      $('.sub_menu').removeClass('d-none');
      $('.menu_name').toggle().removeClass('d-none');
      $('.sub_menu_arrow').toggle().removeClass('d-none');

        $('.sidebar_left').toggleClass('sidebar_open sidebar_left_close');
        $('.menu_div').toggleClass('  dasshbord_close dasshbord_main');

        $('.sub_menu').fadeOut();
    });
});

$('#check_box').on('click',function(){
    if(this.checked){
        $('.checkbox').each(function(){
            this.checked = true;
        });
    }else{
         $('.checkbox').each(function(){
            this.checked = false;
        });
    }
});
$('#check_box').on('click',function(){
    if($('.checkbox:checked').length == $('.checkbox').length){
        $('.check_box').prop('checked',true);
    }else{
        $('.check_box').prop('checked',false);
    }
});

var chk = $('#check_box:checked').length;

}

// start category
$(document).ready(function(){
  $('.category_second_colum').hide();
  $('.category_third_colum').hide();

  $('.category_first_colum').click(function(){
      $('.category_second_colum').removeClass('d-none');
      $('.category_second_colum').slideToggle();
  });
  $('.category_second_colum').click(function(){
    $('.category_third_colum').removeClass('d-none');
    $('.category_third_colum').slideToggle();
});
  $('.category_first_colum').c
});

$(document).ready(function(){

// seller aprovel multiple select

     jQuery(function() {
  jQuery('.multiSelect').each(function(e) {
    var self = jQuery(this);
    var field = self.find('.multiSelect_field');
    var fieldOption = field.find('option');
    var placeholder = field.attr('data-placeholder');

    field.hide().after(`<div class="multiSelect_dropdown"></div>
                        <span class="multiSelect_placeholder">` + placeholder + `</span>
                        <ul class="multiSelect_list"></ul>
                        <span class="multiSelect_arrow"></span>`);
    
    fieldOption.each(function(e) {
      jQuery('.multiSelect_list').append(`<li class="multiSelect_option" data-value="`+jQuery(this).val()+`">
                                            <a class="multiSelect_text">`+jQuery(this).text()+`</a>
                                          </li>`);
    });
    
    var dropdown = self.find('.multiSelect_dropdown');
    var list = self.find('.multiSelect_list');
    var option = self.find('.multiSelect_option');
    var optionText = self.find('.multiSelect_text');
    
    dropdown.attr('data-multiple', 'true');
    list.css('top', dropdown.height() + 5);
    
    option.click(function(e) {
      var self = jQuery(this);
			e.stopPropagation();
	    self.addClass('-selected');
	    field.find('option:contains(' + self.children().text() + ')').prop('selected', true);
      dropdown.append(function(e) {
        return jQuery('<span class="multiSelect_choice">'+ self.children().text() +'<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>').click(function(e) {
          var self = jQuery(this);
          e.stopPropagation();
          self.remove();
          list.find('.multiSelect_option:contains(' + self.text() + ')').removeClass('-selected');
          list.css('top', dropdown.height() + 5).find('.multiSelect_noselections').remove();
          field.find('option:contains(' + self.text() + ')').prop('selected', false);
          if (dropdown.children(':visible').length === 0) {
            dropdown.removeClass('-hasValue');
          }
        });
      }).addClass('-hasValue');
	    list.css('top', dropdown.height() + 5);
	    if (!option.not('.-selected').length) {
	      list.append('<h5 class="multiSelect_noselections">No Selections</h5>');
	    }
    });
    
    dropdown.click(function(e) {
      e.stopPropagation();
      e.preventDefault();
      dropdown.toggleClass('-open');
      list.toggleClass('-open').scrollTop(0).css('top', dropdown.height() + 5);
    });
    
    jQuery(document).on('click touch', function(e) {
        if (dropdown.hasClass('-open')) {
            dropdown.toggleClass('-open');
            list.removeClass('-open');
        }
    });
  });
});
    
});


// slider
$(document).ready(function(){
     $('#dashbord_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})
});




// doughnut  chart
anychart.onDocumentReady(function () {
  
    // add data
    var data = anychart.data.set([
      [ 34],
      [ 21],
      [ 15],
      [11],
      
    ]);
    
    // create a pie chart with the data
    var chart = anychart.pie(data);
    
    // set the chart radius making a donut chart
    chart.innerRadius('55%')
  
    // create a color palette
    var palette = anychart.palettes.distinctColors();
   
    // set the colors according to the brands
    palette.items([
      { color: '#1dd05d' },
      { color: '#000000' },
      { color: '#00a3da' },
      { color: '#156ef2' },
     
    ]);
  
    // apply the donut chart color palette
    chart.palette(palette);
    
    // set the position of labels
    chart.labels().format('{%x} — {%y}%').fontSize(16);
    
    // disable the legend
    chart.legend(false);
    
    // format the donut chart tooltip
    chart.tooltip().format('Market share: {%PercentValue}%');
  
    // create a standalone label
    var label = anychart.standalones.label();
  
    // configure the label settings

    // set the label as the center content
    chart.center().content(label);
    
    // set container id for the chart
    chart.container('container');
    
    // initiate chart drawing
    chart.draw();


  
  });
 


