 </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?= base_url('public/');?>js/jquery.js"></script>
	<script src="<?= base_url('public/');?>js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?= base_url('public/');?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url('public/');?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url('public/');?>js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?= base_url('public/');?>js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url('public/');?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?= base_url('public/');?>assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?= base_url('public/');?>js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?= base_url('public/');?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?= base_url('public/');?>js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?= base_url('public/');?>js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?= base_url('public/');?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?= base_url('public/');?>js/calendar-custom.js"></script>
	<script src="<?= base_url('public/');?>js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?= base_url('public/');?>js/jquery.customSelect.min.js" ></script>
	<script src="<?= base_url('public/');?>assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?= base_url('public/');?>js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?= base_url('public/');?>js/sparkline-chart.js"></script>
    <script src="<?= base_url('public/');?>js/easy-pie-chart.js"></script>
	<script src="<?= base_url('public/');?>js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?= base_url('public/');?>js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= base_url('public/');?><?= base_url('public/');?>js/xcharts.min.js"></script>
	<script src="<?= base_url('public/');?>js/jquery.autosize.min.js"></script>
	<script src="<?= base_url('public/');?>js/jquery.placeholder.min.js"></script>
	<script src="<?= base_url('public/');?>js/gdp-data.js"></script>	
	<script src="<?= base_url('public/');?>js/morris.min.js"></script>
	<script src="<?= base_url('public/');?>js/sparklines.js"></script>	
	<script src="<?= base_url('public/');?>js/charts.js"></script>
	<script src="<?= base_url('public/');?>js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});
/*
 ############################### FOR Dynamic input generation ###########################################
 */
 $(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $("#input_wrapper"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row form-group" id="input_wrapper"> <label for="fullname" class="control-label col-lg-2">Test Name <span class="required">*</span></label><div class="col-lg-3 col-md-3"><input class=" form-control" id="fullname" name="test_name[]"  type="text" required/></div><label for="fullname" class="control-label col-lg-2">Test Result <span class="required">*</span></label><div class="col-lg-4 col-md-4"><input class=" form-control" id="fullname" name="test_result[]"  type="text" required/></div><div class="col-lg-1 col-md-1"><a id ="remove_field" class="btn btn-primary" href="#"><i class="icon_close_alt2"></i></a></div></div>'); //add input box
        }
    });
   
    $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
    })
});
/*
 ############################### END OF Dynamic input generation ###########################################
 */

 /*
 ############################### FOR Delete test result ###########################################
 */
    function test_result_delete(test_id)
    {
      if(test_id)
      {
        if(confirm("Are you sure you want to delete this Report?") == true)
        {
          //$("#loading_image").show();
           $.get( "<?= base_url()?>/admin/test/delete/" + test_id)
            .done(function(data) {
                alert( data );
           })
           .fail(function() {
                alert( "error deleting record, check your internet connection" );
           });
        }
      }
    }

 /*
 ############################### END OF Delete test result ###########################################
 */
  </script>

  </body>
</html>
