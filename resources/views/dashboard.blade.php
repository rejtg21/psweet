@extends('layouts/main')

@section('title')
  Dashboard
@endsection

@section('css')
{!! Html::style('css/font-awesome.min.css') !!}
{!! Html::style('css/simple-line-icons.css') !!}
{!! Html::style('css/animate.css') !!}
{!! Html::style('plugins/switchery/switchery.min.css') !!}
<!-- Template style -->
{!! Html::style('css/main.css') !!}
@endsection

@section('body')

<div id="container">
    <header id="header">
        <!--logo start-->
        <div class="brand">
            <a href="index.html" class="logo"><h4>Perfectly Sweets</h4></a>
        </div>
        <!--logo end-->
        <div class="toggle-navigation toggle-left">
            <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="user-nav">
            <ul>
                <li class="dropdown messages">
                    <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                    <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                    </button>
                    <ul class="dropdown-menu alert animated fadeInDown">
                        <li>
                            <h1>You have <strong>5</strong> new messages</h1>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="assets/img/avatar.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">James Bagian</span>
                                    <span class="time">30 mins</span>
                                    <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="assets/img/avatar1.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">Jeffrey Ashby</span>
                                    <span class="time">2 hour</span>
                                    <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="assets/img/avatar2.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">John Douey</span>
                                    <span class="time">3 hours</span>
                                    <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="assets/img/avatar3.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">Ellen Baker</span>
                                    <span class="time">7 hours</span>
                                    <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile-photo">
                                    <img src="assets/img/avatar4.gif" alt="" class="img-circle">
                                </div>
                                <div class="message-info">
                                    <span class="sender">Ivan Bella</span>
                                    <span class="time">6 hours</span>
                                    <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                                </div>
                            </a>
                        </li>
                        <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>

                </li>
                <li class="profile-photo">
                    <img src="assets/img/avatar.png" alt="" class="img-circle">
                </li>
                <li class="dropdown settings">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Mike Adams <i class="fa fa-angle-down"></i>
                </a>
                    <ul class="dropdown-menu animated fadeInDown">
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-danager" id="user-inbox">5</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="toggle-navigation toggle-right">
                        <a href="javascript:void(0)" class="btn btn-default" id="toggle-right">
                            <i class="fa fa-comment"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!--sidebar left start-->
    <nav class="sidebar sidebar-left">
        <h5 class="sidebar-header">Navigation</h5>
        <ul class="nav nav-pills nav-stacked">
            <li class="active">
                <a href="index.html" title="Dashboard">
                    <i class="icon-speedometer"></i> Dashboard
                </a>
            </li>
            <!-- <li class="nav-dropdown"> -->
            <li>
              <a href="#" title="UI Elements">
                  <i class="fa fa-shopping-cart"></i> Products
              </a>
              <!-- <ul class="nav-sub">
                  <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
                  </li>
              </ul> -->
          </li>

          <li>
            <a href="#" title="Orders">
                <i class="fa fa-exchange"></i> Orders
            </a>
          </li>
          <li>
            <a href="#" title="News">
                <i class="fa fa-newspaper-o"></i> News
            </a>
          </li>
          <li>
            <a href="#" title="News">
                <i class="fa fa-user"></i> Accounts
            </a>
          </li>
          <li>
            <a href="#" title="UI Elements">
                <i class="fa fa-table"></i> System Parameters
            </a>
          </li>
        </ul>
    </nav>
    <!--sidebar left end-->
    <!--main content start-->
    <section class="main-content-wrapper">
        <section id="main-content">
          @yield('content')
        </section>
    </section>
</div>
<!--main content end-->

@endsection

@section('script')
<!-- Global JS -->
{!! Html::script('js/jquery-1.10.2.min.js') !!}
{!! Html::script('../node_modules/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('plugins/navgoco/jquery.navgoco.min.js') !!}
{!! Html::script('plugins/waypoints/waypoints.min.js') !!}
{!! Html::script('plugins/switchery/switchery.min.js') !!}
{!! Html::script('js/application.js') !!}
@endsection
