    @component('partials.admin.header')
    @endcomponent

    <body >
    <!-- /.wrapper -->
    <div class="wrapper animsition has-footer">

        @component('partials.admin.topnav')
        @endcomponent

        @component('partials.admin.sidenav')
        @endcomponent

        <!-- Start Main Container -->
        <div class="main-container">
        <div class="page-header no-breadcrumb font-header">
            Dashboard
        </div>
        <div class="content-wrap">
            <div class="row">
            <div class="col-lg-7">
                <div class="panel">
                <div class="panel-body">
                    <div class="row font-12">
                    <div class="col-xs-9">
                        <span class="text-upper font-header">New Member</span>
                    </div>
                    <div class="col-xs-3 text-right">
                        <label class="switch-toggle m-l-5 switch-red"><input type="checkbox"></label>
                    </div>
                    </div>
                    <div class="chart-placeholder line-placeholder m-t-10"></div>
                </div>
                <div class="panel-footer bg-white">
                    <div class="row text-center">
                    <div class="col-xs-4">
                        <h4 class="no-m text-dark m-t-5 font-header">3,290</h4>
                        <div class="font-12 m-t-5 m-b-5">
                        Total Account
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h4 class="no-m text-dark m-t-5 font-header">187</h4>
                        <div class="font-12 m-t-5 m-b-5">
                        Facebook Account
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h4 class="no-m text-dark m-t-5 font-header">1,879</h4>
                        <div class="font-12 m-t-5 m-b-5">
                        Google Account
                        </div>
                    </div>
                    </div>
                </div>
                <div class="loading-wrap">
                    <div class="loading-dots">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                    <div class="panel-body p-20">
                        <div class="text-dark h4 no-m font-header">
                        3,189
                        </div>
                        <div class="font-12">
                        Total New Member
                        </div>
                        <div class="sparkbar m-t-5"></div>
                    </div>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="panel">
                    <div class="panel-body p-20">
                        <div class="text-dark h4 no-m font-header">
                        1,172
                        </div>
                        <div class="font-12">
                        Total Sales
                        </div>
                        <div class="sparkline m-t-5"></div>
                    </div>
                    </div>
                </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                    <div class="panel-body p-20 text-center">
                        <div class="text-dark h3 no-m font-header">
                        712
                        </div>
                        <div class="font-12 m-t-5">
                        New Items
                        </div>
                    </div>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="panel bg-main">
                    <div class="panel-body p-20 text-center">
                        <div class="h3 no-m font-header">
                        1,199
                        </div>
                        <div class="font-12 m-t-5">
                        Comments
                        </div>
                    </div>
                    </div>
                </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="panel">
                <div class="panel-body">
                    <div class="row font-12">
                    <div class="col-xs-6">
                        <span class="text-upper font-header">Follower</span>
                    </div><!-- /.col -->
                    <div class="col-xs-6 text-right"></div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="chart-placeholder area-placeholder m-t-10"></div>
                </div>
                <div class="loading-wrap">
                    <div class="loading-dots">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                    </div>
                </div>
                </div>
            </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
            <div class="col-lg-7">
                <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default panel-stat no-icon">
                    <div class="bg-main content-wrap b-b">
                        <div class="value">
                        <h2 class="font-header no-m">3,156</h2>
                        </div>
                        <div class="detail text-right">
                        <div class="text-upper">
                            Today Visited
                        </div><small class="text-muted m-d-2">5% increased</small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h5 class="font-header">WEEKLY STATS</h5>
                    </div>
                    <table class="table table-bordered font-12">
                        <tbody>
                        <tr>
                            <td>Monday</td>
                            <td class="text-success text-center">8.6%</td>
                            <td class="text-center">1745</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td class="text-success text-center">12.6%</td>
                            <td class="text-center">2,135</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td class="text-danger text-center">-2.6%</td>
                            <td class="text-center">1,632</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td class="text-danger text-center">-1.1%</td>
                            <td class="text-center">1567</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td class="text-success text-center">3.4%</td>
                            <td class="text-center">1902</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="panel panel-default panel-stat">
                    <div class="content-wrap b-b">
                        <div class="value stat-icon"></div>
                        <div class="detail text-right">
                        <h3 class="text-upper font-header no-m">$26,189</h3><small class="text-muted">Total Balance</small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h5 class="font-header">WEEKLY STATS</h5>
                    </div>
                    <table class="table table-bordered font-12">
                        <tbody>
                        <tr>
                            <td>Monday</td>
                            <td class="text-success text-center">8.6%</td>
                            <td class="text-center">$2,095</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td class="text-danger text-center">-8.0%</td>
                            <td class="text-center">$1,235</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td class="text-success text-center">4.8%</td>
                            <td class="text-center">$1,801</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td class="text-success text-center">7.5%</td>
                            <td class="text-center">$2,709</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td class="text-success text-center">11.4%</td>
                            <td class="text-center">$3,902</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.col -->
            <div class="col-lg-5">
                <div class="panel panel-white">
                <div class="panel-heading font-header font-header">
                    Inbox
                    <ul class="panel-toolbar list-unstyled">
                    <li class="dropdown collapse-option">
                        <a class="text-muted dropdown-toggle"
                            data-toggle="dropdown"
                            href="#"></a>
                        <ul class="dropdown-menu dropdown-animated fade-effect">
                        <li>
                            <a class="text-muted refresh-widget"
                                href="#"></a>
                        </li>
                        <li>
                            <a aria-expanded="true"
                                class="expand-widget"
                                data-toggle="collapse"
                                href="#collapsedPanel1"></a>
                        </li>
                        <li>
                            <a class="fullscreen-widget"
                                href="#"></a>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <div class="collapse in"
                    id="collapsedPanel1">
                    <div class="panel-body p-tb-15 no-p-lr">
                    <ul class="nav nav-tabs tabs-float font-12 p-l-10">
                        <li class="active"
                            role="presentation">
                        <a data-toggle="tab"
                            href="#inboxAllTab">All</a>
                        </li>
                        <li role="presentation">
                        <a data-toggle="tab"
                            href="#inboxUnreadTab">Unread</a>
                        </li>
                        <li role="presentation">
                        <a data-toggle="tab"
                            href="#inboxArchivedTab">Archived</a>
                        </li>
                    </ul>
                    </div>
                    <div class="tab-content">
                    <div class="tab-pane fade in active"
                        id="inboxAllTab">
                        <ul class="activity-widget no-icon list-unstyled">
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile7.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Katie Calhoun
                                </div>
                                <div class="font-10 text-ellipsis">
                                A wrap asserts a flashing asterisk.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            2 hrs ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile8.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Elvin Cueva
                                </div>
                                <div class="font-10 text-ellipsis">
                                The bullet couples a pursuing worry before the litter. A flesh rewrites a striking scanner before the peasant.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            yesterday
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile9.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Harris Wilson
                                </div>
                                <div class="font-10 text-ellipsis">
                                A rectangle accelerates the filter. A dry courtesy advances an apart conjecture.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            2 days ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile10.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Felicia Clancy
                                </div>
                                <div class="font-10 text-ellipsis">
                                A stare shines past another bull! A subjective candidate declines without the envelope.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            3 days ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile11.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Larry McCabe
                                </div>
                                <div class="font-10 text-ellipsis">
                                The guilt encourages this inverse opposite the horizontal gene. The college suspects behind the cell! The landlord hopes.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            1 week ago
                            </div></a>
                        </li>
                        </ul>
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade"
                        id="inboxUnreadTab">
                        <ul class="activity-widget no-icon list-unstyled">
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile7.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Katie Calhoun
                                </div>
                                <div class="font-10 text-ellipsis">
                                A wrap asserts a flashing asterisk.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            2 hrs ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile8.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Elvin Cueva
                                </div>
                                <div class="font-10 text-ellipsis">
                                The bullet couples a pursuing worry before the litter. A flesh rewrites a striking scanner before the peasant.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            yesterday
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile9.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Harris Wilson
                                </div>
                                <div class="font-10 text-ellipsis">
                                A rectangle accelerates the filter. A dry courtesy advances an apart conjecture.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            2 days ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile10.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Felicia Clancy
                                </div>
                                <div class="font-10 text-ellipsis">
                                A stare shines past another bull! A subjective candidate declines without the envelope.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            3 days ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile11.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Larry McCabe
                                </div>
                                <div class="font-10 text-ellipsis">
                                The guilt encourages this inverse opposite the horizontal gene. The college suspects behind the cell! The landlord hopes.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            1 week ago
                            </div></a>
                        </li>
                        </ul>
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade"
                        id="inboxArchivedTab">
                        <ul class="activity-widget no-icon list-unstyled">
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile7.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Katie Calhoun
                                </div>
                                <div class="font-10 text-ellipsis">
                                A wrap asserts a flashing asterisk.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            2 hrs ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile8.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Elvin Cueva
                                </div>
                                <div class="font-10 text-ellipsis">
                                The bullet couples a pursuing worry before the litter. A flesh rewrites a striking scanner before the peasant.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            yesterday
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile9.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Harris Wilson
                                </div>
                                <div class="font-10 text-ellipsis">
                                A rectangle accelerates the filter. A dry courtesy advances an apart conjecture.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            2 days ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile10.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Felicia Clancy
                                </div>
                                <div class="font-10 text-ellipsis">
                                A stare shines past another bull! A subjective candidate declines without the envelope.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            3 days ago
                            </div></a>
                        </li>
                        <li class="p-lr-10">
                            <a class="animsition-link"
                                href="inbox.html">
                            <div class="user-wrapper">
                            <div class="profile-pic"><img alt=""
                                class="img-circle"
                                src="../img/profile11.jpg"></div>
                            <div class="p-t-5">
                                <div class="font-12 text-dark">
                                Larry McCabe
                                </div>
                                <div class="font-10 text-ellipsis">
                                The guilt encourages this inverse opposite the horizontal gene. The college suspects behind the cell! The landlord hopes.
                                </div>
                            </div>
                            </div>
                            <div class="activity-time font-11 text-muted">
                            1 week ago
                            </div></a>
                        </li>
                        </ul>
                    </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
                </div><!-- /.panel -->
            </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
            <div class="col-md-4">
                <div class="panel">
                <div class="calendar-container">
                    <div class="calendar">
                    <header class="font-12 bg-main"></header>
                    <table class="table font-11">
                        <thead class="event-days">
                        <tr>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody class="event-calendar">
                        <tr class="1">
                            <td></td>
                        </tr>
                        <tr class="2">
                            <td></td>
                        </tr>
                        <tr class="3">
                            <td></td>
                        </tr>
                        <tr class="4">
                            <td></td>
                        </tr>
                        <tr class="5">
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="event-list">
                        <div class="day-event"
                            data-day="4"
                            data-month="12">
                        <div class="event-content">
                            <div class="event-item">
                            <div class="font-semi-bold text-dark">
                                Meeting
                            </div>
                            <div class="font-12">
                                10:00 AM - 12:00 AM
                            </div>
                            </div>
                            <hr class="line-dashed m-t-10 m-b-10">
                            <div class="event-item">
                            <div class="font-semi-bold text-dark">
                                Dinner with friends
                            </div>
                            <div class="font-12">
                                8:00 PM
                            </div>
                            </div>
                        </div>
                        </div><!-- /.day-event -->
                        <div class="day-event"
                            data-day="20"
                            data-month="12">
                        <div class="event-content">
                            <div class="event-item">
                            <div class="font-semi-bold text-dark">
                                Database Migration
                            </div>
                            <div class="font-12">
                                40% Completeness
                            </div>
                            </div>
                        </div>
                        </div><!-- /.day-event -->
                    </div><!-- /.event-list -->
                    </div><!-- /.calendar -->
                </div><!-- /.calendar-container -->
                </div>
            </div><!-- /.col -->
            <div class="col-md-8">
                <div class="panel">
                <div class="panel-heading font-header">
                    <span class="text-upper font-header">To do list</span><span class="font-11 text-muted m-l-10">4 tasks</span>
                    <ul class="panel-toolbar list-unstyled">
                    <li class="dropdown collapse-option">
                        <a class="text-muted dropdown-toggle"
                            data-toggle="dropdown"
                            href="#"></a>
                        <ul class="dropdown-menu dropdown-animated fade-effect">
                        <li>
                            <a class="text-muted refresh-widget"
                                href="#"></a>
                        </li>
                        <li>
                            <a aria-expanded="true"
                                class="expand-widget"
                                data-toggle="collapse"
                                href="#collapsedPanel2"></a>
                        </li>
                        <li>
                            <a class="fullscreen-widget"
                                href="#"></a>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <div class="collapse in"
                    id="collapsedPanel2">
                    <div class="panel-body no-p-t">
                    <ul class="list-group font-12 list-group-split no-m">
                        <li class="list-group-item has-toolbar">
                        <div class="checkbox-inline">
                            <div class="custom-checkbox font-12">
                            <input id="todo1"
                                name="todo1"
                                type="checkbox"> <label for="todo1">UX/UI Design</label>
                            </div>
                        </div>
                        <ul class="toolbar list-unstyled"></ul>
                        </li>
                        <li class="list-group-item has-toolbar">
                        <div class="checkbox-inline">
                            <div class="custom-checkbox font-12">
                            <input id="todo2"
                                name="todo2"
                                type="checkbox"> <label for="todo2">Wordpress Integration</label>
                            </div>
                        </div><span class="badge badge-orange font-12 m-d-2 m-r-10">13</span>
                        <ul class="toolbar list-unstyled"></ul>
                        </li>
                        <li class="list-group-item has-toolbar">
                        <div class="checkbox-inline">
                            <div class="custom-checkbox font-12">
                            <input id="todo4"
                                name="todo4"
                                type="checkbox"> <label for="todo4">Bootstrap Application</label>
                            </div>
                        </div>
                        <ul class="toolbar list-unstyled"></ul>
                        </li>
                        <li class="list-group-item has-toolbar">
                        <div class="checkbox-inline">
                            <div class="custom-checkbox font-12">
                            <input id="todo5"
                                name="todo5"
                                type="checkbox"> <label for="todo5">Mobile Development</label>
                            </div>
                        </div>
                        <ul class="toolbar list-unstyled"></ul>
                        </li>
                    </ul>
                    </div><!-- /.panel-body -->
                </div>
                </div>
            </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
            <div class="col-lg-4">
                <div class="panel">
                <div class="panel-heading font-header">
                    Recent Activities
                    <ul class="panel-toolbar list-unstyled">
                    <li class="dropdown collapse-option">
                        <a class="text-muted dropdown-toggle"
                            data-toggle="dropdown"
                            href="#"></a>
                        <ul class="dropdown-menu dropdown-animated fade-effect">
                        <li>
                            <a class="text-muted refresh-widget"
                                href="#"></a>
                        </li>
                        <li>
                            <a aria-expanded="true"
                                class="expand-widget"
                                data-toggle="collapse"
                                href="#collapsedPanel3"></a>
                        </li>
                        <li>
                            <a class="fullscreen-widget"
                                href="#"></a>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <div class="collapse in"
                    id="collapsedPanel3">
                    <div class="panel-body no-p-t">
                    <ul class="activity-widget list-unstyled no-m">
                        <li>
                        <a href="#">
                        <div class="activity-type"></div>
                        <div class="activity-detail">
                            <div class="text-dark font-12">
                            Benjamin Dean
                            </div>
                            <div class="font-11">
                            just purchased your item
                            </div>
                        </div>
                        <div class="activity-time font-11 text-muted">
                            12 hrs ago
                        </div></a>
                        </li>
                        <li>
                        <a href="#">
                        <div class="activity-type bg-purple"></div>
                        <div class="activity-detail">
                            <div class="text-dark font-12">
                            Sofia Lynch
                            </div>
                            <div class="font-11">
                            shared files on to do list
                            </div>
                        </div>
                        <div class="activity-time font-11 text-muted">
                            yesterday
                        </div></a>
                        </li>
                        <li>
                        <a href="#">
                        <div class="activity-type bg-orange"></div>
                        <div class="activity-detail">
                            <div class="text-dark font-12">
                            Victoria Hale
                            </div>
                            <div class="font-11">
                            uploaded project.zip to a server
                            </div>
                        </div>
                        <div class="activity-time font-11 text-muted">
                            2 days ago
                        </div></a>
                        </li>
                        <li>
                        <a href="#">
                        <div class="activity-type bg-success"></div>
                        <div class="activity-detail">
                            <div class="text-dark font-12">
                            John Knowles
                            </div>
                            <div class="font-11">
                            invited Sofia Lynch to join a secret group
                            </div>
                        </div>
                        <div class="activity-time font-11 text-muted">
                            3 days ago
                        </div></a>
                        </li>
                        <li>
                        <a href="#">
                        <div class="activity-type"></div>
                        <div class="activity-detail">
                            <div class="text-dark font-12">
                            Lucas Nicholls
                            </div>
                            <div class="font-11">
                            just purchased your item
                            </div>
                        </div>
                        <div class="activity-time font-11 text-muted">
                            1 week ago
                        </div></a>
                        </li>
                    </ul>
                    <hr class="m-t-10 m-b-5">
                    <div class="text-right">
                        <a class="font-10"
                            href="#">View All</a>
                    </div>
                    </div>
                </div>
                </div>
            </div><!-- /.col -->
            <div class="col-lg-4">
                <div class="panel panel-main">
                <div class="panel-heading font-header">
                    Irvine, CA
                </div>
                <div class="panel-body bg-main text-center">
                    <canvas height="70"
                            id="skycon1"
                            width="70"></canvas>
                    <div class="inline-block v-top m-l-10 m-t-10">
                    <h1 class="font-header no-m">21°</h1>
                    <div class="font-11">
                        SAT 07/18
                    </div>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-6">
                        <div class="font-11 m-t-5">
                            SUN 07/19
                        </div>
                        </div>
                        <div class="col-xs-6 text-right">
                        <canvas class="m-d-3"
                                height="17"
                                id="skycon2"
                                width="17"></canvas><span class="font-11 m-l-20">20°</span>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-6">
                        <div class="font-11 m-t-5">
                            MON 07/20
                        </div>
                        </div>
                        <div class="col-xs-6 text-right">
                        <canvas class="m-d-3"
                                height="17"
                                id="skycon3"
                                width="17"></canvas><span class="font-11 m-l-20">17°</span>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-6">
                        <div class="font-11 m-t-5">
                            TUE 07/21
                        </div>
                        </div>
                        <div class="col-xs-6 text-right">
                        <canvas class="m-d-3"
                                height="17"
                                id="skycon4"
                                width="17"></canvas><span class="font-11 m-l-20">14°</span>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-6">
                        <div class="font-11 m-t-5">
                            WED 07/22
                        </div>
                        </div>
                        <div class="col-xs-6 text-right">
                        <canvas class="m-d-3"
                                height="17"
                                id="skycon5"
                                width="17"></canvas><span class="font-11 m-l-20">23°</span>
                        </div>
                    </div>
                    </li>
                </ul>
                </div>
            </div><!-- /.col -->
            <div class="col-lg-4">
                <div class="panel panel-main">
                <div class="panel-heading font-header">
                    New Member
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                    <div class="user-wrapper">
                        <div class="profile-pic"><img alt=""
                            class="img-circle"
                            src="../img/profile3.jpg"></div>
                        <div class="p-t-5">
                        <div class="font-12 text-dark">
                            Edward Murphy
                        </div>
                        <div class="font-10">
                            edward@gmail.com
                        </div>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="user-wrapper">
                        <div class="profile-pic"><img alt=""
                            class="img-circle"
                            src="../img/profile7.jpg"></div>
                        <div class="p-t-5">
                        <div class="font-12 text-dark">
                            Anna Ross
                        </div>
                        <div class="font-10">
                            annaross@gmail.com
                        </div>
                        <p class="font-12 m-t-5">The shorthand textbook swims past the guard. Each difficult bite tempers a season.</p>
                        </div>
                        <hr class="m-t-5 m-b-10 line-dashed">
                        <div class="text-right">
                        <button class="btn btn-main btn-sm">Approve</button>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="user-wrapper">
                        <div class="profile-pic"><img alt=""
                            class="img-circle"
                            src="../img/profile12.jpg"></div>
                        <div class="p-t-5">
                        <div class="font-12 text-dark">
                            Jennifer Evans
                        </div>
                        <div class="font-10">
                            jennifer@gmail.com
                        </div>
                        </div>
                    </div>
                    </li>
                </ul>
                </div>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.content-wrap -->
        </div><!-- End Main Container -->

        <!-- Start Footer -->
        <footer class="footer">
        &copy; 2015. <b>Quantum Admin</b> by <b>Endless Theme</b>
        </footer>
        <!-- End Footer -->

    
        <!-- Start Modal -->
        <div class="modal modal-scale fade"
            id="themeSettingModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close"
                    class="close"
                    data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title font-header text-dark">Theme Setting</h4>
            </div>
            <div class="modal-body">
                <div class="font-12 text-upper">
                Primary Color
                </div>
                <ul class="color-list list-unstyled m-t-10 clearfix primary-color"></ul>
                <hr class="line-dashed">
                <div class="font-12 text-upper m-b-5">
                Navigation
                </div><a class="link-unstyled font-12 animsition-link"
                    href="index-2.html">Side</a> <a class="link-unstyled m-l-20 font-12 animsition-link"
                    href="../topmenu/index-2.html">Top</a>
                <hr class="line-dashed">
                <div class="checkbox">
                <div class="custom-checkbox font-12">
                    <input id="sidebarFixed"
                        name="sidebarFixed"
                        type="checkbox"> <label for="sidebarFixed">Fixed Side Navigation</label>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark"
                    data-dismiss="modal"
                    type="button">Close</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal modal-scale fade"
            id="showEventModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close"
                    class="close"
                    data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title font-header text-dark">All Event</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-main"
                    type="button">Add</button> <button class="btn btn-dark"
                    data-dismiss="modal"
                    type="button">Close</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Modal -->

      
    </div><!-- /.wrapper -->

    @component('partials.admin.footer')
    @endcomponent

    </body>
</html>