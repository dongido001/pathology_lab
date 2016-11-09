
<?php include("header.php"); ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            

                
            <div class="row">
                
                <div class="col-lg-12 col-md-12">   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong> <?= @$data[0]['report_name'] ?>  Report</strong></h2>
                            <div class="panel-actions">
                                <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                      <?php if($data != NULL):?>
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Test Result</th>
                                    </tr>
                                </thead>   
                                <tbody>

                            <?php foreach ($data as $rep): ?>

                                    <tr>
                                        <td><?= $rep['test_name'] ?></td>
                                        <td><?= $rep['test_result'] ?> </td>
                                    </tr>

                             <?php endforeach; ?>
                        <?php else: ?>
                           
                           <div class="text-center"> No Record Found</div>
                        <?php endif;?>
                                </tbody>
                            </table>
                        </div>
    
                    </div>  

                </div><!--/col-->

              </div>

          </section>
      </section>
      <!--main content end-->
 <?php include("footer.php"); ?>