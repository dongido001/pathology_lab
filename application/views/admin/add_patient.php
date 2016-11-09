
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Add New Patient</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>patents</li>
						<li><i class="fa fa-files-o"></i>Add patient</li>
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
                                  <form class="form-validate form-horizontal " id="register_form" method="POST" action="<?= base_url('admin/');?>add_patient_process">
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
                                          <label for="fullname" class="control-label col-lg-2">Full name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="fullname" value="<?= set_value('fullname'); ?>" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" value="<?= set_value('username'); ?>" name="username" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" required/>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" value="<?= set_value('email'); ?>" name="email" type="email" required/>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Phone <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" value="<?= set_value('phone'); ?>" name="phone" type="phone" required/>
                                          </div>
                                      </div>

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