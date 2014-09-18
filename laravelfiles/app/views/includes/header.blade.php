<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Kreaktiv e.V. - Mitgliederverwaltung</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

						@if(isset($login_header_navigation))
                        <ul class="nav pull-right">
							<li><a href="{{ URL::to('/register') }}">Noch keinen Account?</a></li>
							<li><a href="{{ URL::to('/forgot-password') }}">Passwort vergessen?</a></li>
                        </ul>
						@else
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Einstellungen
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Allgemein</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">System</li>
                                    <li><a href="#">Datenbank</a></li>
                                    <li><a href="#">Cronjobs</a></li>
                                </ul>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dein Profil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
						@endif
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
