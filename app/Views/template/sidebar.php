<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <?php if (in_groups('admin')) : ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-users"></i>
            <span>Users List</span></a>
    </li>
    <?php endif ?>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Profile
    </div>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>