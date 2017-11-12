<div class="sidebar" data-background-color="brown" data-active-color="danger">
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-mini">
            SH
        </a>

        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ config('app.name', 'AlSharQ') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                @role('owner')
                <img src="../assets/img/sharq/super.png" />
                @endrole
                @role('admin')
                <img src="../assets/img/sharq/admin.png" />
                @endrole
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								{{ Auth::user()->name }}
		                        <b class="caret"></b>
							</span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        {{--<li>--}}
                            {{--<a href="#profile">--}}
                                {{--<span class="sidebar-mini">Mp</span>--}}
                                {{--<span class="sidebar-normal">My Profile</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a data-toggle="collapse" href="#dashboardOverview">
                    <i class="ti-panel"></i>
                    <p>
                        Clients <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="dashboardOverview">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('admin.showJoinRequest') }}">
                                <span class="sidebar-mini"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                <span class="sidebar-normal">Join Requests</span>
                            </a>
                        </li>
                        <li>
                            <span class="sidebar-mini">C2</span>
                            <span class="sidebar-normal">Collapse 2</span>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="calendar.html">
                    <i class="ti-calendar"></i>
                    <p>Simple Link</p>
                </a>
            </li>

        </ul>
    </div>
</div>