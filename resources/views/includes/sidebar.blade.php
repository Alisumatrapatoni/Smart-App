<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">

                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <span class="user-level">My Group</span>
                            <span class="caret"></span>
                        </span>
                    </a>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href=" {{ route('group') }}">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <ul class="nav nav-item">
                <li class=" nav-item {{ Request::is('dashboard') ? 'bg-primary' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item {{ Request::is('kategori') ? 'bg-primary' : '' }}">
                    <a href=" {{ route('kategori.index') }}">
                    <i class="fas fa-desktop"></i>
                    <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('artikel') ? 'bg-primary' : '' }}">
                    <a href=" {{ route('artikel.index') }}">
                    <i class="fas fa-newspaper"></i>
                    <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('playlist') ? 'bg-primary' : '' }}">
                    <a href=" {{ route('playlist.index') }}">
                    <i class="fas fa-video"></i>
                    <p>Playlist Video</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('materi') ? 'bg-primary' : '' }}">
                    <a href=" {{ route('materi.index') }}">
                    <i class="fas fa-film"></i>
                    <p>Materi Video</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('slide') ? 'bg-primary' : '' }}">
                    <a href=" {{ route('slide.index') }}">
                    <i class="fas fa-sliders"></i>
                    <p>Slide Banner</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('iklan') ? 'bg-primary' : '' }}">
                    <a href=" {{ route('iklan.index') }}">
                    <i class="fas fa-id-card"></i>
                    <p>Iklan</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
