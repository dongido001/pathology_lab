
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Report [<?=$reports[0]['report_name'] ?>]</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url()?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Reports</li>
						<li><i class="fa fa-files-o"></i>Edit Report</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Patient information
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="POST" action="<?=base_url('admin')?>/edit_report_process">
                                      <!-- error display-->
                                      <div class="row">
                                        <?php if( isset($message) AND @$code == 1 ): ?>
                                           <div class="col-md-9 text-center pull-right-lg" >
                                             <div role="alert" class="alert alert-success"> <strong>Success</strong> <?= $message?> </div>
                                           </div>
                                        <?php elseif(isset($message) AND @$code == 0): ?>
                                           <div class="col-md-9 text-center pull-right-lg">
                                             <div role="alert" class="alert alert-danger"> <strong>Failed</strong> <?= $message?> </div>
                                           </div>
                                      <?php endif; ?>
                                    </div>
                                      <!-- END error display -->
                                      <div class="form-group "> 
                                          <label for="fullname" class="control-label col-lg-2">Report name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="reportname" value="<?= (set_value('reportname')) ? set_value('reportname') : $reports[0]['report_name'] ?>" type="text" required/>
                                              <input class=" form-control"  name="reportid" value="<?= (set_value('reportname')) ? set_value('reportname') : $reports[0]['report_id'] ?>" type="hidden" required/>
                                          </div>
                                      </div>

                                    <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Selects Patient</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="patient" required>
                                             <?php foreach($patients as $patient):?>
                                              <option > <?= $patient['patient_username'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                  </div>

                        <section class="panel col-md-10 col-lg-10 pull-right-lg">
                             <header class="panel-heading">
                                       <div class="row">
                                          <div class="col-md-4">
                                              <div class="col-lg-1 col-md-1 btn-group" id="add_field_button">
                                                   <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                              </div>
                                          </div>
                                       </div>
                               </header>
                                  <div class="panel-body">
                                    <span id="input_wrapper">
                                  <?php foreach($reports as $report): ?>
                                      <div class="row form-group"> 
                                          <label for="fullname" class="control-label col-lg-2">Test Name <span class="required">*</span></label>
                                          <div class="col-lg-3 col-md-3">
                                              <input class=" form-control" id="fullname" name="test_name[]" value="<?= (set_value('reportname')) ? set_value('reportname') : $report['test_name'] ?>" type="text" required/>
                                              <input class=" form-control"  name="patient_report_id[]" value="<?= (set_value('patient_report_id')) ? set_value('patient_report_id') : $report['id'] ?>" type="hidden" required/>
                                          </div>
                                           <label for="fullname" class="control-label col-lg-2">Test Result <span class="required">*</span></label>
                                           <div class="col-lg-4 col-md-4">
                                              <input class=" form-control" id="fullname" name="test_result[]" value="<?= (set_value('reportname')) ? set_value('reportname') : $report['test_result'] ?>" type="text" required/>
                                           </div>

                                          <div class="col-lg-1 col-md-1 btn-group">
                                               <a class="btn btn-primary" onClick="test_result_delete(<?= $report['id'] ?>)" id ="remove_field" >
                                                  <i id="close_icon" class="icon_close_alt2"></i>
                                                  <img src="dggddfgdf" class="img-reponsive" id="loading_image" style="display: none;"/>
                                               </a>
                                         </div>
                                      </div>
                                  <?php endforeach; ?>
                                 </span>
                                  </div>
                          </section>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->