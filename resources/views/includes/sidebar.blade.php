<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::asset('assets/dist/img/user2-160x160.jpg') }}"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ URL::asset('/') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="{{ URL::asset('/ui') }}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>

            <li>
                <a href="/widget">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="assets/dist/js/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="assets/dist/js/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="assets/dist/js/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="assets/dist/js/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::asset('/ui') }}"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="{{ URL::asset('/uielement/icon') }}"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="{{ URL::asset('/uielement/icon') }}"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="{{ URL::asset('/uielement/slider') }}"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="{{ URL::asset('/uielement/timeline') }}"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="{{ URL::asset('/uielement/modal') }}"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::asset('/form/gform') }}"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="{{ URL::asset('/form/aform') }}"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="{{ URL::asset('/form/editor') }}"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::asset('/table/simple') }}"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="{{ URL::asset('/table/data') }}"><i class="fa fa-circle-o"></i> Data tables</a></li>


                </ul>
            </li>
            <li>
                <a href="{{ URL::asset('calendar') }}">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::asset('mailbox/inbox') }}"><i class="fa fa-circle-o"></i>Inbox</a></li>
                    <li><a href="{{ URL::asset('mailbox/compose') }}"><i class="fa fa-circle-o"></i>Compose</a></li>
                    <li><a href="{{ URL::asset('mailbox/read') }}"><i class="fa fa-circle-o"></i>Read</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::asset('example/invoice') }}"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="{{ URL::asset('example/login') }}"><i class="fa fa-circle-o"></i>Login </a></li>
                    <li><a href="{{ URL::asset('example/profile') }}"><i class="fa fa-circle-o"></i>Profile</a></li>
                    <li><a href="{{ URL::asset('example/register') }}"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="{{ URL::asset('example/lock') }}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="{{ URL::asset('example/404') }}"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="{{ URL::asset('example/500') }}"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="{{ URL::asset('example/blank') }}"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="{{ URL::asset('example/pace') }}"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>