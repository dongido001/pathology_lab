      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i>Patients</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url()?>">Home</a></li>
						<li><i class="fa fa-table"></i>patients</li>
						<li><i class="fa fa-th-list"></i>list ptients</li>
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
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> Username</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_key"></i> Passcode</th>
                                 <th><i class="icon_calendar"></i> Date Added</th>
                                 <th><i class="icon_cogs"></i> Action</th>

                              </tr>
             <?php foreach($params as $patient): ?>
                              <tr>
                                 <td> <?= $patient['patient_fullname']?> </td>
                                 <td> <?= $patient['email']?>  </td>
                                 <td> <?= $patient['patient_username']?>  </td>
                                 <td> <?= $patient['phone']?>  </td>
                                 <td> <?= $patient['patient_passcode']?>  </td>
                                 <td><?= $patient['date_added']?> </td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>

              <?php endforeach; ?>
                           </tbody>
                        </table>
<?php else:?>
                       <h3 class="text-center"> No recored found </h3>
<?php endif; ?>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->