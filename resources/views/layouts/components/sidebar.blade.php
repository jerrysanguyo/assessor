<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Assessor</span>
    </a>

    <div class="sidebar">
        <div class="user-panel d-flex mb-3 mt-3 pb-3">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Jerf Leo Carpio</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('search') }}" class="nav-link">
                        <i class="nav-icon fas fa-search fa-fw"></i>
                        <p>Search</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transaction') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Transaction Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>PIN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#trackingModal">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Tracking</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#reportModal">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#printingModal">
                        <i class="nav-icon fas fa-print"></i>
                        <p>Printing</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('validation') }}" class="nav-link">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Validation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#messageModal">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Messages</p>
                    </a>
                </li>
            </ul>
            <hr class="mt-4 mb-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Administrator Menu</li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#adminModal">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>Administrator Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#accountInfo">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Edit Account Info</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>Change Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

@include('component.modal.printing')
@include('component.modal.report')
@include('component.modal.tracking')
@include('component.modal.message')
@include('component.modal.administrator')
@include('component.modal.accountInfo')