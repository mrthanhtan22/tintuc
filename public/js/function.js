/*Jquery */
$(document).ready(function(){
	/* slider gia ve khuyen mai */
  $('.bxslider1').bxSlider({
    mode: 'vertical',
    minSlides: 2,
    slideMargin: 10,
    auto: true
  });

  	$('.slide2').bxSlider({
    slideWidth: 900,
    minSlides: 3,
    maxSlides: 3,
    moveSlides: 3,
    slideMargin: 0,
    auto: true,
   	padding: 10,
   	slideMargin: 10
  });
/*End ket thucSlider*/
      /*backtop top nav*/
      $(".navbar a, footer a[href='#myPage']").on('click',function(event) {
        if (this.hash !== "") {
          event.preventDefault();
        /* Act on the event */
        var hash =this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top,
          },
          900, function() {
          /* stuff to do after animation is complete */
          window.location.hash = hash;
        });
        }
        
      });
/*backtotop may bay*/
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100 && $(window).width() > 800 ) {
          $('.scrollToTop').fadeIn();
           /*$('#bg-search').addClass('fixed');*/

        } else{
          $('.scrollToTop').fadeOut();
          /*$('#bg-search').removeClass('fixed');*/
        }
      });
      $('.scrollToTop').click(function() {
        $('html,body').animate({scrollTop: 0}, 800);
        return false;
      });
/*end backtotop may bay*/

  /*--AutoComplete --*/
  var options = {
        url: "json/sanbay.json",

        getValue: "label",

        list: {
          maxNumberOfElements: 5,
          match: {
              enabled: true
            },
          showAnimation: {
            type: "fade", 
            time: 400,
            callback: function() {}
          },

          hideAnimation: {
            type: "slide", 
            time: 400,
            callback: function() {}
          },
          onSelectItemEvent: function() {
          var value = $("#modaldsanbay").getSelectedItemData().label;

          $("#inputDiemden").val(value).trigger("change");
            }
        }
      };
      $("#modaldsanbay").easyAutocomplete(options);
  /* end auto */

   /*input text form modal to text*/
   $("#noidi a[href='javascript:;']").one('click', function() {
        var value = $(this).text();
        $('#inputDiemdi').val(value);
         $('#noidi').modal('toggle');
        
      });
      $("#noiden a[href='javascript:;']").one('click', function() {
        var value = $(this).text();
         $('#inputDiemden').val(value);
          $('#noiden').modal('toggle');
      });   
   /* end text modal*/

   /*Số khách modal*/
   
   /*end số khách modal*/

   /*radio input*/
   $('input[value="motchieu"]:radio').change(function() {
        $('#inputNgayve').hide();
      });
      $('input[value="khuhoi"]:radio').change(function() {
        $('#inputNgayve').show();
      });
   /*end radio input*/

   /*datepicker*/
   $('#inputNgaydi').datepicker({
          format: "dd-mm-yyyy"
        });
        $('#inputNgayve').datepicker({
          format: "dd-mm-yyyy"
        });
   /*end datepicker*/
})
