<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Detec truth <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
@guest
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->

<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('login')}}" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Sign in</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{'register'}}" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Sign up</span>
    </a>
</li>
@endguest
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Charts -->
@auth
@if(Auth::user()->isAdmin())
<li class="nav-item">
    <a class="nav-link" href="{{route('crime.admin')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>ADMIN</span></a>
</li>
@endif
@endauth
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{route('crime.myReports')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>My reported crimes</span></a>
</li>
@auth
<li class="nav-item">
    <form action="/logout" class="dropdown-item" method="post">
        @csrf
        <button type="submit" class="fas fa-fw fa-table"> <i class="ft-power"></i>Log out</button>
    </form>
</li>
@endauth
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>Deteec truth</strong> SAY NO TO CRIME</p>
</div>

</ul>