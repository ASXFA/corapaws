<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <img class="img-profile rounded-circle w-100" src="<?= base_url() ?>assets/logo/logo_p1.png" > </img>
  </div>
  <div class="sidebar-brand-text mx-3 text-gray-400">Corapaws Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.html">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  MENU
</div>

<!-- Clothing ALL -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url() ?>admin/clothing">
    <i class="fas fa-tshirt"></i>
    <span>Clothing</span></a>
</li>

<!-- custom socks -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url() ?>admin/custom">
    <i class="fas fa-socks"></i>
    <span>Custom</span></a>
</li>

<!-- Transcation -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url() ?>admin/transaction">
    <i class="fas fa-money-bill"></i>
    <span>Transaction</span></a>
</li>


<!-- Nav Item - setting for Front End -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Setting Up</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Setting :</h6>
      <a class="collapse-item" href="utilities-color.html">Banner</a>
      <a class="collapse-item" href="utilities-border.html">Headline</a>
      <a class="collapse-item" href="utilities-animation.html">Animations</a>
      <a class="collapse-item" href="utilities-other.html">Other</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->