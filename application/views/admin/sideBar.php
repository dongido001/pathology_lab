

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?= base_url()?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>    
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Patients</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?= base_url('admin');?>/patients">View patients</a></li>                          
                          <li><a class="" href="<?= base_url('admin');?>/add_patient">Add Patient</a></li>
                      </ul>
                  </li>    
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?= base_url('admin');?>/reports">View Reports</a></li>                          
                          <li><a class="" href="<?= base_url('admin');?>/add_report">Add Report</a></li>
                      </ul>
                    </li>                                         
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->