		</div>

	</div>

	<script>
	(function($) {

		"use strict";
		
		$(document).ready(function() {
			$('#editor1').summernote({
				height: 300
			});
		});

	    $(".select2").select2();

	    $("#datemask").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yyyy"});
	    $("#datemask2").inputmask("mm-dd-yyyy", {"placeholder": "mm-dd-yyyy"});
	    $("[data-mask]").inputmask();

	    $('#datepicker').datepicker({
	      autoclose: true,
	      format: 'dd-mm-yyyy',
	      todayBtn: 'linked',
	    });

	    $('#datepicker1').datepicker({
	      autoclose: true,
	      format: 'dd-mm-yyyy',
	      todayBtn: 'linked',
	    });

	    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	      checkboxClass: 'icheckbox_minimal-blue',
	      radioClass: 'iradio_minimal-blue'
	    });
	    //Red color scheme for iCheck
	    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
	      checkboxClass: 'icheckbox_minimal-red',
	      radioClass: 'iradio_minimal-red'
	    });
	    //Flat red color scheme for iCheck
	    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
	      checkboxClass: 'icheckbox_flat-green',
	      radioClass: 'iradio_flat-green'
	    });

	    $("#example1").DataTable();
	    $('#example2').DataTable({
	        "paging": true,
	        "lengthChange": false,
	        "searching": false,
	        "ordering": true,
	        "info": true,
	        "autoWidth": false
	    });

	    $('#confirm-delete').on('show.bs.modal', function(e) {
	      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	    });

 
	})(jQuery);
	</script>

	<script type="text/javascript">
		function showDiv(elem){
			if(elem.value == 0) {
		      	document.getElementById('photo_div').style.display = "none";
		      	document.getElementById('icon_div').style.display = "none";
		   	}
		   	if(elem.value == 1) {
		      	document.getElementById('photo_div').style.display = "block";
		      	document.getElementById('photo_div_existing').style.display = "block";
		      	document.getElementById('icon_div').style.display = "none";
		   	}
		   	if(elem.value == 2) {
		      	document.getElementById('photo_div').style.display = "none";
		      	document.getElementById('photo_div_existing').style.display = "none";
		      	document.getElementById('icon_div').style.display = "block";
		   	}
		}
		function showContentInputArea(elem){
		   if(elem.value == 'Full Width Page Layout') {
		      	document.getElementById('showPageContent').style.display = "block";
		   } else {
		   		document.getElementById('showPageContent').style.display = "none";
		   }
		}
	</script>

	<script type="text/javascript">

        $(document).ready(function () {

            $("#btnAddFaq").click(function () {

                var trNew1 = "";

                var fqTitle = '<input autocomplete="off" type="text" class="form-control" name="fq_title[]" style="width:100%">';
				
				var fqContent = '<textarea class="form-control" cols="30" rows="10" name="fq_content[]" style="width:100%;height:50px;"></textarea>';

                var fqDelete = '<a href="javascript:void()" class="Delete1 btn btn-danger btn-xs">X</a>';

                trNew1 = trNew1 + '<tr> ';

                trNew1 += '<td>' + fqTitle + '</td>';
                trNew1 += '<td>' + fqContent + '</td>';
                trNew1 += '<td>' + fqDelete + '</td>';

                trNew1 = trNew1 + ' </tr>';

                $("#fqSection tbody").append(trNew1);

            });

            $('#fqSection').delegate('a.Delete1', 'click', function () {
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });

        });


        $(document).ready(function () {

            $("#btnAddOpenningHour").click(function () {

                var trNew1 = "";

                var fqTitle = '<input autocomplete="off" type="text" class="form-control" name="oh_day[]" style="width:100%">';
				
				var fqContent = '<input autocomplete="off" type="text" class="form-control" name="oh_time[]" style="width:100%">';

                var fqDelete = '<a href="javascript:void()" class="Delete1 btn btn-danger btn-xs">X</a>';

                trNew1 = trNew1 + '<tr> ';

                trNew1 += '<td>' + fqTitle + '</td>';
                trNew1 += '<td>' + fqContent + '</td>';
                trNew1 += '<td>' + fqDelete + '</td>';

                trNew1 = trNew1 + ' </tr>';

                $("#ohSection tbody").append(trNew1);

            });

            $('#ohSection').delegate('a.Delete1', 'click', function () {
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });

        });

        
    </script>

</body>
</html>