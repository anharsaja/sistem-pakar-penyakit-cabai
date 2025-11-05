<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="topbar-left">
        <div class="text-center">
            <a href="{{ route('dashboard.index') }}" class="logo">
                <i class="mdi mdi-assistant"></i> Annex
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('calculate.index') }}" class="waves-effect">
                        <i class="mdi mdi-gauge"></i>
                        <span>Calculate Penyakit </span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-table"></i><span> Data Terkait </span>
                        <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('penyakit.index') }}">Data Penyakit</a></li>
                        <li><a href="{{ route('penyakit.bobot') }}">Bobot Penyakit Pakar</a></li>
                        <li><a href="{{ route('gejala.index') }}">Data Gejala</a></li>
                        <li><a href="{{ route('gejala.bobot') }}">Bobot Gejala</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
