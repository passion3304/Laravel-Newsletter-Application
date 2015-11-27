<!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.html" class="logo-expanded">
                    <img src="assets/img/single-logo.png" alt="logo">
                    <span class="nav-label">Nasara Tech</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="active"><a href="{{URL::to('dashboard')}}"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li class=""><a href="{{URL::to('subscribers')}}"><i class="ion-flask"></i> <span class="nav-label">Subscribers</span></a>
                        {{-- <ul class="list-unstyled">
                            <li><a href="icons.html">View</a></li>
                            <li><a href="typography.html">Create</a></li>
                            <li><a href="buttons.html">Upload</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="/groups"><i class="ion-settings"></i> <span class="nav-label">Groups</span></a>
                        
                    </li>
                    <li><a href="/newsletters"><i class="ion-compose"></i> <span class="nav-label">Newsletters</span></a>
                    </li>
                    <li><a href="#"><i class="ion-grid"></i> <span class="nav-label">Templates</span></a>
                    </li>
                    <li><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">Campaigns</span></a>
                    </li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->