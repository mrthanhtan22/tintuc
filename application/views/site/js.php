<script src="<?php echo public_url()?>/lib/jquery.easy-autocomplete.js"></script>
		<script>
			function hanhkhach() {
      var _nguoilon = $('#inputNguoilon').val();
      var _treem  = $('#inputTreem').val();
      var _tresosinh = $('#inputTresosinh').val();
      num1 = parseInt(_nguoilon);
      num2 = parseInt(_treem);
      num3 = parseInt(_tresosinh);
       var tong = num1 + num2 + num3;
       var tong_tresosinh = num1 + num2;
       $('#nguoilon').val(_nguoilon);
       $('#treem').val(_tresosinh);
       $('#tresosinh').val(_tresosinh);
       $('#inputSonguoi').val(tong);
       if (num3 > tong_tresosinh) {
        alert("Số trẻ sơ sinh vượt quá mức cho phép");
        return false;
       } else {
         $('#soluong').modal('toggle');

       }
      }
		
		function xong(){
			$('#noiden').modal('toggle');
		}
			
				 
			
		</script>