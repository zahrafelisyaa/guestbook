<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class="sidebar-item  ">
                    <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.institution.index') }}" class='sidebar-link'>
                        <i class="bi bi-building"></i>
                        <span>Institution</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.guests.index') }}" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                        <span>Guest Lists</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.reports.index') }}" class='sidebar-link'>
                        <i class="bi bi-bar-chart"></i>
                        <span>Report</span>
                    </a>
                </li>






            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
