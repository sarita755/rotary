<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">
                <p>RCB</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a> <br> <br> <br>

            </div> <br> <br>
        </div>
        <!-- search form -->
        <br>
      
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="sidebar-menu" data-widget="tree">
                              

                    <li><a href=""><i class="fa fa-home text-yellow"></i> Dashboard </a> </li>

                    <li class="treeview">
                          <a href="#">
          
                          <span>Club Section</span>
                          <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                          </span>
                           </a>
                         <ul class="treeview-menu">
                    <li><a href="{{route('managebod')}}"><i class="fa fa-wrench text-red"></i> BOD Management </a></li>
                    <li><a href="{{route('managemember')}}"><i class="fa fa-users text-green"></i> Members Management</a></li>
                    <li><a href="{{route('managecouncil')}}"><i class="fa fa-group text-green"></i>Past Presidential Council </a></li>
                    <li><a href="{{route('managetheme')}}"><i class="fa fa-newspaper-o text-green"></i> Theme Management </a></li>
                    </ul>
                     </li>

                     <li class="treeview">
                          <a href="#">
          
                          <span>Info Section</span>
                          <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                          </span>
                           </a>
                         <ul class="treeview-menu">
                         <li ><a href="manageabout"><i class="fa fa-info-circle text-green"></i> About-Us Management </a></li>
                         <li><a href="{{route('viewnews')}}"><i class="fa fa-newspaper-o text-green"></i> News Management </a></li>
                         <li><a href="{{route('manageleadermessage')}}"><i class="fa fa-envelope text-red"></i>Leaders Message</a></li>
                    </ul>
                     </li>

                   
                    <li><a href="{{route('managearticle')}}"><i class="fa fa-pencil text-blue"></i> Article Management </a></li>
                    <li><a href="{{route('viewcontact')}}"><i class="fa fa-wrench text-red"></i> Contacts </a></li>
                    <li><a href="{{route('viewmessage')}}"><i class="fa fa-envelope text-red"></i> Message Management </a></li>
                    <li><a href="{{route('managemedia')}}"><i class="fa fa-picture-o text-yellow"></i> Media Management </a></li>
                    <li><a href="{{route('manageresource')}}"><i class="fa fa-newspaper-o text-green"></i> Resource Management </a></li>

                    <li><a href="{{route('managenotification')}}"><i class="fa fa-bell-o text-yellow"></i> Notification Management  </a></li>
                    <li><a href="{{route('manageorganization')}}"><i class="fa fa-building-o text-red"></i> Organization Management  </a></li>
                    <li><a href="{{route('manageprofile')}}"><i class="fa fa-group text-green"></i>Profile </a></li>

                     
                    <li><a href="{{route('manageproject')}}"><i class="fa fa-tasks text-blue"></i> Project Management  </a></li>
                         
                    <li><a href="{{route('managepesident')}}"><i class="fa fa-user-o text-blue"></i>Pesident Management  </a></li>
                    <li><a href="{{route('managecommitte')}}"><i class="fa fa-group text-green"></i>Committe </a></li>

                      <li><a href="{{route('managebusiness')}}"><i class="fa fa-building-o text-yellow"></i>Business Management</a></li>
                   
                    
                     <li><a href="{{route('setting')}}"><i class="fa fa-cog text-red"></i>Setting</a></li>
                     <li><a href="{{route('manageplanofaction')}}"><i class="fa fa-tasks text-green"></i>Plan Of Act</a></li>
                    
                    
                    

                    <li><a href="{{route('managefaq')}}"><i class="fa fa-question text-red"></i>FAQ </a></li>
                    
                    
                    
                       </ul>
        
        
       
        
        



    </section>
    <!-- /.sidebar -->
</aside>
