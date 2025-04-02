@if (request()->is('dokter*'))
    <li class="nav-item">
        <a href="/dokter/periksa" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Periksa</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/dokter/obat" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Obat</p>
        </a>
    </li>
@else
    @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
@endif