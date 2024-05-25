<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-heading">Customer</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('transaction.create') }}">
                        <i class="bi bi-circle"></i><span>Buat Data</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Riwayat Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Poin Transaksi (Pelanggan)</span>
                    </a>
                </li>
                <li>
                    <a href="../create.blade.php">
                        <i class="bi bi-circle"></i><span>Pertukaran Poin (Pelanggan)</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Items</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Barang</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/create.blade.php">
                        <i class="bi bi-circle"></i><span>Data Barang</span>
                    </a>
                </li>
                <li>
                    <a href="../create.blade.php">
                        <i class="bi bi-circle"></i><span>Data Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="../create.blade.php">
                        <i class="bi bi-circle"></i><span>Data Harga (Harga Umum)</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-heading">Logout</li>
        <li class="nav-item">
            <a class="nav-link" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>
