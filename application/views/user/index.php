
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?= base_url()?>">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>                          
                    </ol>
                </div>
            </div>
              
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count"><?= $result_count?></div>
                        <div class="title">Total Number of Results Done</div>                       
                    </div><!--/.info-box-->         
                </div><!--/.col-->
                
            </div><!--/.row-->

        <div class="row">
            <div class="col-md-6 portlets">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h2><strong>User Details</strong></h2>
                <div class="panel-actions">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>  

                </div><br><br><br>
                <div class="panel-body">

                    <div class="row text-center" style="font-weight: bolder;">
                       <div class="col-md-6 text-left"> Full Name</div>    <div class="col-md-6"> <?= $patients->patient_fullname ?> </div>
                       <div class="col-md-6 text-left" >Username</div>    <div class="col-md-6"> <?= $patients->patient_username ?> </div>
                       <div class="col-md-6 text-left"> passcode</div>    <div class="col-md-6"> <?= $patients->patient_passcode ?> </div>
                       <div class="col-md-6 text-left"> Email</div>        <div class="col-md-6"> <?= $patients->email ?> </div>
                       <div class="col-md-6 text-left"> Phone</div>       <div class="col-md-6"> <?= $patients->phone ?> </div>
                       <div class="col-md-6 text-left"> Date Added</div>       <div class="col-md-6"> <?= $patients->date_added ?> </div>
                    </div>
                  
                </div>
              </div> 
               
            </div>
     
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
 