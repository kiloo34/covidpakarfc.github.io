<li class="menu-header">{{__("Menu")}}</li>
@if (auth()->user()->role->id == 1)
<li class="{{ $active == 'disease' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.penyakit.index') }}">
        <i class="far fa-tag"></i>
        <span>{{__('Penyakit')}}</span>
    </a>
</li>
@elseif (auth()->user()->role->id == 2)
<li class="nav-item dropdown {{ $active == 'diseaseCategory' || $active == 'symptom' ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Penyakit</span></a>
    <ul class="dropdown-menu">
        <li class="{{ $active == 'diseaseCategory' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pakar.penyakit.index') }}">{{ __('Kategori Penyakit') }}</a>
        </li>
        <li class="{{ $active == 'symptom' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pakar.gejala.index') }}">{{ __('Gejala') }}</a>
        </li>
    </ul>
</li>
<li class="{{ $active == 'diagnose' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pakar.diagnosa.index') }}">
        <i class="far fa-pills"></i>
        <span>{{__('Diagnosa')}}</span>
    </a>
</li>
@endif
{{-- <li class="nav-item dropdown {{ $active == 'produksi' || $active == 'permintaan' ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-seedling"></i><span>Buah Naga</span></a>
    <ul class="dropdown-menu">
        <li class="{{ $active == 'produksi' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('produksi.index') }}">{{__('Produksi')}}</a>
        </li>
        <li class="{{ $active == 'permintaan' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('permintaan.index') }}">{{__('Permintaan')}}</a>
        </li>
    </ul>
</li> --}}
{{-- <li class="{{ $active == 'obat' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('obat.index') }}">
        <i class="far fa-pills"></i>
        <span>{{__('Obat')}}</span>
    </a>
</li> --}}
{{-- <li class="menu-header">{{__("Transaksi")}}</li> --}}
{{-- <li class="{{ $active == 'order' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('order.index') }}">
        <i class="far fa-tag"></i>
        <span>{{__('Stok Obat')}}</span>
    </a>
</li> --}}
{{-- <li class="nav-item dropdown {{ $active == 'outgoing' || $active == 'permintaan' ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-tag"></i><span>{{__('Stok Obat')}}</span></a>
    <ul class="dropdown-menu">
        <li class="{{ $active == 'permintaan' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('ingoing.index') }}">{{__('Obat Masuk')}}</a>
        </li>
        <li class="{{ $active == 'outgoing' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('outgoing.index') }}">{{__('Obat Keluar')}}</a>
        </li>
    </ul>
</li> --}}
{{-- <li class="{{ $active == 'peramalan' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.forecasting') }}">
        <i class="far fa-bullseye"></i>
        <span>{{__('Peramalan')}}</span>
    </a>
</li>
<li class="{{ $active == 'rekap' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rekap.index') }}">
        <i class="far fa-seedling"></i>
        <span>{{__('Rekap Data')}}</span>
    </a>
</li> --}}
{{-- <li class="nav-item dropdown {{ $active == '' || $active == 'permintaan' ? '' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-seedling"></i><span>{{__('Rekap Data')}}</span></a>
    <ul class="dropdown-menu">
        <li class="{{ $active == '' ? 'active' : '' }}">
            <a class="nav-link" href="#">{{__('Masuk')}}</a>
        </li>
        <li class="{{ $active == 'permintaan' ? 'active' : '' }}">
            <a class="nav-link" href="#">{{__('Keluar')}}</a>
        </li>
    </ul>
</li> --}}
{{-- <li class="nav-item dropdown {{ $active == 'forePro' || $active == 'forePer' ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Peramalan</span></a>
    <ul class="dropdown-menu">
        <li class="{{ $active == 'forePro' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('forecast.produksi.index') }}">Produksi</a>
        </li>
        <li class="{{ $active == 'forePer' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('forecast.permintaan.index') }}">Permintaan</a>
        </li>
    </ul>
</li>
<li class="menu-header">{{__("Pengaturan")}}</li>
<li class="nav-item dropdown {{ $active == 'profil' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('mantri.index') }}">
        <i class="far fa-cogs"></i>
        <span>{{__('Profil')}}</span>
    </a>
</li> --}}