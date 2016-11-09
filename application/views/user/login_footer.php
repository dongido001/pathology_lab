    <!-- javascripts -->
    <script src="<?= base_url('public/');?>js/jquery.js"></script>
	<script src="<?= base_url('public/');?>js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?= base_url('public/');?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url('public/');?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  /*
 ############################### Begin of Auto Complete Form ..###########################################
 */ 
$(function() {
    $("#username").autocomplete({
      source: "<?= base_url()?>home/search_username/",
      minLength: 1
    });

  });
 /*
 ############################### END OF Auto Complete Form... ###########################################
 */
</script>



  </body>
</html>
