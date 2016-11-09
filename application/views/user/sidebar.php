

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
                          <span>Reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?= base_url('user');?>/reports">View Reports</a></li>                          
                          <li><a class="" href="<?= base_url('user');?>/report/pdf">Download Reports</a></li>                          
                      </ul>
                    </li>                                         
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->