<div class="sidebar" data-color="green" data-background-color="black" data-image="/img/sidebar.jpg">
    <div class="logo">
        <a href="/" class="simple-text logo-normal">Silohon</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#write" aria-expanded="true">
                    <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                    <p>Write Article <b class="caret"></b></p>
                </a>
                <div style="margin-left:15px;font-size:12px;" class="collapse {{ Request::is('write*') ? 'show' : '' }}" id="write">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('write/id') ? 'active' : '' }}">
                            <a class="nav-link" href="/write/id">
                                <span class="sidebar-mini">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">ID Article</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('write/en') ? 'active' : '' }}">
                            <a class="nav-link" href="/write/en">
                                <span class="sidebar-mini">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">EN Article</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#key" aria-expanded="true">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <p>Keyword <b class="caret"></b></p>
                </a>
                <div style="margin-left:15px;font-size:12px;"
                    class="collapse {{ Request::is('keyword*') ? 'show' : '' }}" id="key">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('keyword/scrape') ? 'active' : '' }}">
                            <a class="nav-link" href="/keyword/scrape">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">Scrape Keyword</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('keyword/riset') ? 'active' : '' }}">
                            <a class="nav-link" href="/keyword/riset">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">Riset Keyword</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('keyword/difficulity') ? 'active' : '' }}">
                            <a class="nav-link" href="/keyword/difficulity">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">Keyword Difficulty</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('keyword/allintitle') ? 'active' : '' }}">
                            <a class="nav-link" href="/keyword/allintitle">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">Cek Allintitle</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#gen" aria-expanded="true">
                    <i class="fa fa-bullseye" aria-hidden="true"></i>
                    <p>Generate Content <b class="caret"></b></p>
                </a>
                <div style="margin-left:15px;font-size:12px;"
                    class="collapse {{ Request::is('generateContent*') ? 'show' : '' }}" id="gen">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('generateContent/indonesia') ? 'active' : '' }}">
                            <a class="nav-link" href="/generateContent/indonesia">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">ID</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('generateContent/english') ? 'active' : '' }}">
                            <a class="nav-link" href="/generateContent/english">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">EN</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#seo" aria-expanded="true">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <p>SEO <b class="caret"></b></p>
                </a>
                <div style="margin-left:15px;font-size:12px;"
                    class="collapse {{ Request::is('seo*') ? 'show' : '' }}" id="seo">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('seo/onpage') ? 'active' : '' }}">
                            <a class="nav-link" href="/seo/onpage">
                                <span class="sidebar-mini">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                </span>
                                <span class="sidebar-normal">On Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <p>Doc</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('user*', 'profile*') ? 'active' : '' }}">
                <a class="nav-link" href="/user/profile">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p>Profile</p>
                </a>
            </li>
            @if (auth()->user()->is_admin)
            <li class="nav-item {{ Request::is('manageUser*') ? 'active' : '' }}">
                <a class="nav-link" href="/manageUser">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <p>Manage User</p>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>