@extends('backend.layouts.master')


@section('content')
<div class="page-inner no-page-title">
                    
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Notifications<span class="panel-title-small">today</span></h4>
                        </div>
                        <div class="panel-body dashboard-panel">
                            <p>Sales Ipsum is simply dummy text of the printing and typesetting industry scrambled it to make text of the printing and typesetting industry</p>
                            <p class="dashboard-main-notifications"><b class="dashboard-not-profit">+$17,300</b> profit this week</p>
                            <button type="button" class="btn btn-default btn-rounded">Update</button>
                            <button type="button" class="btn btn-info btn-rounded">See more</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Tasks<span class="panel-title-small">in 30 days</span></h4>
                        </div>
                        <div class="panel-body dashboard-panel dashboard-task-panel">
                            <div id="flot1"><svg></svg></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Server Status</h4>
                        </div>
                        <div class="panel-body dashboard-panel">
                            <div class="container-fluid">
                                <div class="server-load row">
                                    <div class="server-stat col-sm-4">
                                        <p>167GB</p>
                                        <span>Usage</span>
                                    </div>
                                    <div class="server-stat col-sm-4">
                                        <p>320GB</p>
                                        <span>Space</span>
                                    </div>
                                    <div class="server-stat col-sm-4">
                                        <p>57.4%</p>
                                        <span>CPU</span>
                                    </div>
                                </div>
                            </div>
                            <div id="chart1"><svg></svg></div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Activity</h4>
                        </div>
                        <div class="panel-body dashboard-panel">
                            <div class="user-activity">
                                <ul class="list-unstyled">
                                        <li>
                                            <div>
                                                <img src="{{asset('ui/backend/images/avatars/avatar3.png')}}" alt="">
                                                <span class="notification-info">
                                                    <span class="notification-info"><b>Bob</b> sent you a friend request on Facebook</span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="{{asset('ui/backend/images/avatars/avatar5.png')}}" alt="">
                                                <span class="notification-info">
                                                    <span class="notification-info"><b>Noah</b> sent you 9 new messages</span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="notification-badge bg-success"><b>T</b></span>
                                                <span class="notification-info">
                                                    <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!</span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                <button type="button" class="btn btn-default btn-rounded dashboard-activity-loadmore">Load more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Browser Stats<span class="panel-title-small">this week</span></h4>
                        </div>
                        <div class="panel-body dashboard-panel">
                            <div class="browser-stats">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-chrome"></i>Chrome<div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-firefox"></i>Firefox<div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-edge"></i>Edge<div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-safari"></i>Safari<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-info btn-rounded dashboard-browsers-showall">Show all</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Sales<span class="panel-title-small">in 7 days</span></h4>
                        </div>
                        <div class="panel-body dashboard-panel">
                            <canvas id="chart2" height="240"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
            <div class="row">
                
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        
    {{-- <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by stacks</p>
    </div> --}}
    </div><!-- /Page Inner -->

@endsection