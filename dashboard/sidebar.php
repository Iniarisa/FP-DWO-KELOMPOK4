<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-orange sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
    <div class="sidebar-brand-text mx-3">Adventureworks</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="home.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Penjualan
</div>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Grafik Data Penjualan</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Grafik Penjualan:</h6>
            <a class="collapse-item" href="salesproduct.php">Product Penjualan</a>
            <a class="collapse-item" href="customer.php">Customer</a>
            <a class="collapse-item" href="total.php">Total Pendapatan</a>
            <a class="collapse-item" href="territory.php">Wilayah</a>
            <a class="collapse-item" href="shipmethod.php">Metode Pengiriman</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Pembelian
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Grafik Data Pembelian</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Grafik Pembelian:</h6>
            <a class="collapse-item" href="productpurchase.php">Produk Pembelian</a>
            <a class="collapse-item" href="vendor.php">Vendor</a>
            <a class="collapse-item" href="employee.php">Employee</a>
            <a class="collapse-item" href="ship.php">Metode Pembelian</a>
            <a class="collapse-item" href="subtotal.php">Total Pembelian</a>
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