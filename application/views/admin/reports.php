      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i>Reports</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url()?>">Home</a></li>
						<li><i class="fa fa-table"></i>Reports</li>
						<li><i class="fa fa-th-list"></i>list Reports</li>
					</ol>
				</div>
			</div> 
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Patients
                          </header>
<?php if( (count($params) > 0 ) ): ?>   
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Report Name</th>
                                 <th><i class="icon_mail_alt"></i>Patient Fullname</th>
                                 <th><i class="icon_pin_alt"></i>Owner Email</th>
                                 <th><i class="icon_calendar"></i> Date Added</th>
                                 <th><i class="icon_cogs"></i> Action</th>

                              </tr>
             <?php foreach($params as $report): ?>
                              <tr>
                                 <td> <?= $report['report_name']?> </td>
                                 <td> <?= $report['patient_fullname']?> </td>
                                 <td> <?= $report['email']?>  </td>
                                 <td> <?= $report['date_added']?> </td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo base_url('admin/edit_report/'),  $report['report_id']?>" title="edit report"><i class="icon_plus_alt2"></i></a>
                                      <!--<a class="btn btn-danger" onClick="confirm('are you sure you want to delete this?') = true" href="<?php echo base_url('admin/delete_report/'), $report['report_id']?>" title="delete report"><i class="icon_close_alt2"></i></a> -->
                                  </div>
                                  </td>
                              </tr>

              <?php endforeach; ?>
                           </tbody>
                        </table>
<?php else:?>
                       <h3 class="text-center"> No record found </h3>
<?php endif; ?>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->