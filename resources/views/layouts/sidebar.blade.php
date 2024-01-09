        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'dashboard' )}}" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'profile' )}}" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'products' )}}" aria-expanded="false"><i class="me-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">Table</span></a></li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'users' )}}" aria-expanded="false"><i class="me-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">User</span></a></li>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false">
                                <img class="logout-icon" src="{{ asset('../assets/images/logout.png') }}" alt="Logout">
                                </i><span class="sidebar-link-text hide-menu">Logout</span></a></li>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
<style>
    .logout-icon {
        max-width: 20px; /* Set your desired maximum width */
        max-height: 20px; /* Set your desired maximum height */
        vertical-align: middle; /* Optional: Adjust vertical alignment */
    }
    .sidebar-link-text {
        margin-left: 20px; /* Adjust the left margin to add space */
    }
</style>