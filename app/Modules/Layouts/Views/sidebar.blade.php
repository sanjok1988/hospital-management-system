<?php $menu = new \App\Http\Traits\ActiveMenu; ?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('cms/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

 

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">EMS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview {{ ($menu->isAttendanceActive())?'menu-open':''}}">
            <a href="#"><i class="fa fa-link"></i> <span>Attendance</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu {{ ($menu->isAttendanceActive())?'active':''}}">
              @role('admin')  
              <li class="{{ (Request::is('employee'))?'active':''}} "><a href="{{ url(route('attendance.index')) }}">View List</a></li>
             @endrole
             @role('employee')  
             <li><a href="{{ url(route('attendance.my')) }}">My Attendance</a></li>
             <li><a href="{{ url(route('employee.profile')) }}">My Profile</a></li>
             @endrole
            </ul>
          </li>
          @permission('company-list')
        <li class="treeview {{ ($menu->isCompanyActive())?'menu-open':''}}">
            <a href="#"><i class="fa fa-link"></i> <span>Company</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu {{ ($menu->isCompanyActive())?'active':''}}">
                
              <li class="{{ (Request::is('admin/company'))?'active':''}} "><a href="{{ url(route('company.index')) }}">View List</a></li>
             
              <li class="{{ (Request::is('admin/company/create'))?'active':''}} "><a href="{{ url(route('company.create')) }}">Add New</a></li>
             
            </ul>
          </li>
          @endpermission
          @permission('employee-list') 
          <li class="treeview {{ ($menu->isEmployeeActive())?'menu-open':''}} ">
              <a href="#"><i class="fa fa-link"></i> <span>Employees</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu {{ ($menu->isEmployeeActive())?'active':''}} ">
                 
                <li class="{{ (Request::is('admin/employees'))?'active':''}} "><a href="{{ url(route('employees.index')) }}">View List</a></li>
               
                <li class="{{ (Request::is('admin/employees/create'))?'active':''}} "><a href="{{ url(route('employees.create')) }}">Add New</a></li>
               
              </ul>
            </li>
            @endpermission
           
          <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Performance Review</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                 
                <li><a href="{{ url(route('review.show.form')) }}">Review Form</a></li>
                <li><a href="{{ url(route('review.select.candidate')) }}">Select Candidate For Review</a></li>
               
               
               
              </ul>
            </li>
          

            @permission('employee-list') 
          <li class="treeview {{ ($menu->isDynamicFormActive())?'menu-open':''}} ">
              <a href="#"><i class="fa fa-link"></i> <span>Dynamic Form</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu {{ ($menu->isDynamicFormActive())?'active':''}} ">
                 
                <li class="{{ (Request::is('form/questionnaire'))?'active':''}}">
                  <a href="{{ url(route('questionnaire.index')) }}">View Questionnaire List</a></li>
               
                <li class="{{ (Request::is('form/questionnaire/create'))?'active':''}}"><a href="{{ url(route('questionnaire.create')) }}">Create Questionnaire</a></li>
                <li class="{{ (Request::is('form/create'))?'active':''}}"><a href="{{ url(route('form.create')) }}">Build Form</a></li>
                <li class="{{ (Request::is('form'))?'active':''}}"><a href="{{ url(route('form.index')) }}">Form List</a></li>
               
              </ul>
            </li>
            @endpermission

        @permission('role-list')   
        <li class="treeview {{ ($menu->isRolesActive())?'menu-open':''}}">
          <a href="#"><i class="fa fa-link"></i> <span>Roles</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu {{ ($menu->isRolesActive())?'active':''}}">
            <li class="{{ (Request::is('admin/roles'))?'active':''}} "><a href="{{ url(route('roles.index')) }}">View List</a></li>
            <li class="{{ (Request::is('admin/roles/create'))?'active':''}} "><a href="{{ url(route('roles.create')) }}">Add New</a></li>
          </ul>
        </li>
        @endpermission
        
        @permission('user-list')
        <li class="treeview {{ (Request::is('admin/users'))?'menu-open':''}}" >
          <a href="#"><i class="fa fa-link"></i> <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu {{ (Request::is('admin/users'))?'active':''}}">
            <li class="{{ (Request::is('admin/users'))?'active':''}} "><a href="{{ url(route('users.index')) }}">View List</a></li>
            
          </ul>
        </li>
        @endpermission
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>