<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Hadir</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-h-square"></i> <span>Home</span>              
                </a>
            </li>

            @if (auth()->user()->level == 1)
                <li class="header">MAIN NAVIGATION</li>                
            <li>
                <a href="{{ route('kategori.index') }}">
                    <i class="fa fa-list-ol"></i> <span>Kategori</span>              
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                    <i class="fa fa-archive"></i> <span>Produk</span>              
                </a>
            </li>
            <li>
                <a href="{{ route('member.index') }}">
                    <i class="fa fa-users"></i> <span>Pelanggan</span>              
                </a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}">
                    <i class="fa fa-truck"></i> <span>Stok</span>              
                </a>
            </li>
            <li class="header">Transaksi</li>
            <li>
                <a href="{{ route('pengeluaran.index') }}">
                    <i class="fa fa-area-chart"></i> <span>Pengeluaran</span>              
                </a>
            </li>
            <li>
                <a href="{{ route('pembelian.index') }}">
                    <i class="fa fa-money"></i> <span>Pembelian</span>              
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan.index') }}">
                    <i class="fa fa-line-chart"></i> <span>Penjualan</span>              
                </a>
            </li>            
            <li class="header">Report</li>
            <li>
                <a href="{{ route('laporan.index') }}">
                    <i class="fa fa-flag-checkered"></i> <span>Laporan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-user"></i> <span>Petugas</span>
                </a>
            </li>
            <li>
                <a href="{{ route("setting.index") }}">
                    <i class="fa fa-sliders"></i> <span>Perusahaan</span>              
                </a>
            </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>