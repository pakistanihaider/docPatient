
{{--

    Ok. We will be Developing this as a Static for now, But we can make it more dynamic later on depending on the needs.

    Currently we have 4 different Roles in our System.
        - Admin
        - Doctor
        - Patient
        - Guardian

        So Every Role will gonna have their own Menu Structure layout
 --}}


<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="admin-image"> <img src="{{url('/')}}/assets/admin/images/random-avatar7.jpg" alt=""> </div>
        <div class="admin-action-info"> <span>Welcome</span>
            <h3>Dr. John</h3>
            <ul>
                <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
                <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                <li>
                    <a data-placement="bottom" title="Logout" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="zmdi zmdi-sign-in"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <div class="quick-stats">
            <h5>Today Report</h5>
            <ul>
                <li><span>16<i>Patient</i></span></li>
                <li><span>20<i>Panding</i></span></li>
                <li><span>04<i>Visit</i></span></li>
            </ul>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">

        {{--For Admin--}}
        @hasrole('admin')
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active open"><a href="index-2.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                <ul class="ml-menu">
                    <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
                    <li><a href="book-appointment.html">Book Appointment</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('doctors')}}">All Doctors</a></li>
                    <li><a href="add-doctor.html">Add Doctor</a></li>
                    <li><a href="profile.html">Doctor Profile</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('patients')}}">All Patients</a></li>
                    <li><a href="add-patient.html">Add Patient</a></li>
                    <li><a href="patient-profile.html">Patient Profile</a></li>
                    <li><a href="patient-invoice.html">Patient Invoice</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                <ul class="ml-menu">
                    <li> <a href="payments.html">Payments</a></li>
                    <li> <a href="add-payments.html">Add Payment</a></li>
                    <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                </ul>
            </li>
            <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
            <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                <ul class="ml-menu">
                    <li> <a href="sign-in.html">Sign In</a> </li>
                    <li> <a href="sign-up.html">Sign Up</a> </li>
                    <li> <a href="forgot-password.html">Forgot Password</a> </li>
                    <li> <a href="404.html">Page 404</a> </li>
                    <li> <a href="500.html">Page 500</a> </li>
                    <li> <a href="page-offline.html">Page Offline</a> </li>
                    <li> <a href="locked.html">Locked Screen</a> </li>
                    <li> <a href="blank.html">Blank Page</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li> <a href="typography.html">Typography</a> </li>
                    <li> <a href="helper-classes.html">Helper Classes</a></li>
                    <li> <a href="alerts.html">Alerts</a> </li>
                    <li> <a href="animations.html">Animations</a> </li>
                    <li> <a href="badges.html">Badges</a> </li>
                    <li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
                    <li> <a href="buttons.html">Buttons</a> </li>
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>
                    <li> <a href="labels.html">Labels</a> </li>
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a> </li>
                    <li> <a href="pagination.html">Pagination</a> </li>
                    <li> <a href="preloaders.html">Preloaders</a> </li>
                    <li> <a href="progressbars.html">Progress Bars</a> </li>
                    <li> <a href="range-sliders.html">Range Sliders</a> </li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                    <li> <a href="tabs.html">Tabs</a> </li>
                    <li> <a href="thumbnails.html">Thumbnails</a> </li>
                    <li> <a href="tooltips-popovers.html">Tooltips & Popovers</a> </li>
                    <li> <a href="waves.html">Waves</a> </li>
                </ul>
            </li>
            <li class="header">LABELS</li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
        </ul>
        @endhasrole

        {{--For Doctor--}}
        @hasrole('doctor')
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active open"><a href="index-2.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                <ul class="ml-menu">
                    <li><a href="doctor-schedule.html">My Schedule</a></li>
                    <li><a href="book-appointment.html">Book Appointment</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span></a>
                <ul class="ml-menu">
                    <li><a href="patients.html">All Patients</a></li>
                    <li><a href="add-patient.html">Add Patient</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Children</span></a>
                <ul class="ml-menu">
                    <li><a href="patients.html">Child List</a></li>
                    <li><a href="add-patient.html">Add Child</a></li>
                    <li><a href="patient-invoice.html">Share Child</a></li>
                </ul>
            </li>
            <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Ask Doctor</span></a></li>



            <li class="header">SYSTEM</li>
            <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
            <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Settings</span></a></li>
        </ul>
        @endhasrole

        {{--For Patient--}}
        @hasrole('patient')
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active open"><a href="index-2.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                <ul class="ml-menu">
                    <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
                    <li><a href="book-appointment.html">Book Appointment</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                <ul class="ml-menu">
                    <li><a href="doctors.html">All Doctors</a></li>
                    <li><a href="add-doctor.html">Add Doctor</a></li>
                    <li><a href="profile.html">Doctor Profile</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                <ul class="ml-menu">
                    <li><a href="patients.html">All Patients</a></li>
                    <li><a href="add-patient.html">Add Patient</a></li>
                    <li><a href="patient-profile.html">Patient Profile</a></li>
                    <li><a href="patient-invoice.html">Patient Invoice</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                <ul class="ml-menu">
                    <li> <a href="payments.html">Payments</a></li>
                    <li> <a href="add-payments.html">Add Payment</a></li>
                    <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                </ul>
            </li>
            <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
            <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                <ul class="ml-menu">
                    <li> <a href="sign-in.html">Sign In</a> </li>
                    <li> <a href="sign-up.html">Sign Up</a> </li>
                    <li> <a href="forgot-password.html">Forgot Password</a> </li>
                    <li> <a href="404.html">Page 404</a> </li>
                    <li> <a href="500.html">Page 500</a> </li>
                    <li> <a href="page-offline.html">Page Offline</a> </li>
                    <li> <a href="locked.html">Locked Screen</a> </li>
                    <li> <a href="blank.html">Blank Page</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li> <a href="typography.html">Typography</a> </li>
                    <li> <a href="helper-classes.html">Helper Classes</a></li>
                    <li> <a href="alerts.html">Alerts</a> </li>
                    <li> <a href="animations.html">Animations</a> </li>
                    <li> <a href="badges.html">Badges</a> </li>
                    <li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
                    <li> <a href="buttons.html">Buttons</a> </li>
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>
                    <li> <a href="labels.html">Labels</a> </li>
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a> </li>
                    <li> <a href="pagination.html">Pagination</a> </li>
                    <li> <a href="preloaders.html">Preloaders</a> </li>
                    <li> <a href="progressbars.html">Progress Bars</a> </li>
                    <li> <a href="range-sliders.html">Range Sliders</a> </li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                    <li> <a href="tabs.html">Tabs</a> </li>
                    <li> <a href="thumbnails.html">Thumbnails</a> </li>
                    <li> <a href="tooltips-popovers.html">Tooltips & Popovers</a> </li>
                    <li> <a href="waves.html">Waves</a> </li>
                </ul>
            </li>
            <li class="header">LABELS</li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
        </ul>
        @endhasrole
        {{--For Guardian--}}
    </div>
    <!-- #Menu -->
</aside>


