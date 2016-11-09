
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            

                
            <div class="row">
                
                <div class="col-lg-12 col-md-12">   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Reports</strong></h2>
                            <div class="panel-actions">
                                <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                    <tr>
                                        <th>Report</th>
                                        <th>No of tests</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>   
                                <tbody>
                            <?php foreach ($reports as $report): ?>

                                    <tr>
                                        <td><?= $report['report_name'] ?></td>
                                        <td>count</td>
                                        <td><a href="<?= base_url()?>user/report/<?= $report['report_id'] ?>"> View</a></td>
                                    </tr>

                            <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
    
                    </div>  

                </div><!--/col-->

              </div>


          </section>
      </section>
      <!--main content end-->
 