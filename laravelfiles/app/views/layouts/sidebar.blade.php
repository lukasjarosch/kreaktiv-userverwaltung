<?php 
/* 
 * That's a bit confusing, but else we'd have to set
 * $sidebar on every other site or pass it via controller
 *
 * If you set $no_sidebar in a view, the sidebar will be hidden
 */ ?>
@if((!isset($no_sidebar)))
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Übersicht
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>Änderungen <b class="label green pull-right">
                                    11</b> </a>
                                </li>
                            </ul>
                            <!--/.widget-nav-->                           
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-table">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Personen</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-table"></i>Alle Personen </a></li>
                                        <li><a href="other-login.html"><i class="icon-user"></i>Anwärter </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-user"></i>Mitglieder </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-user"></i>Alumni </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-user"></i>Ehemalige </a></li>
                                    </ul>
                                </li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Mitgliederzufriedenheit</a></li>
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-key"></i>Schlüsselliste </a></li>
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-phone"></i>Unternehmenskontakte </a></li>
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-star"></i>Positionen </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-money"></i>Bezahlinformationen </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-tasks"></i>Projekte</a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Statistiken</a></li>
                            </ul>                            
                        </div>
                        <!--/.sidebar-->
@endif
