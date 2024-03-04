<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/img/logo/ej-architects-logo.svg"  alt="EJ Logo"  height="50" width="100">
               
            </span> <h4>Ej Architects</h4>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'cms_home' ? 'active' : '' }}">
            <a href="{{route('cms_home')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Home Page Content">Home Page Content</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'cms_sliders' ? 'active' : '' }}">
            <a href="{{route('cms_sliders')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Sliders">Sliders</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'cms_about' ? 'active' : '' }}">
            <a href="{{route('cms_about')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Section About">Section About</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'cms_services' ? 'active' : '' }}">
            <a href="{{route('cms_services')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Services">Services</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'cms_projects'  || Route::currentRouteName() == 'cms_project_create' || Route::currentRouteName() == 'cms_project_edit' 
            | Route::currentRouteName() == 'cms_project_images' | Route::currentRouteName() == 'cms_project_image_create' | Route::currentRouteName() == 'cms_project_image_edit' ? 'active' : '' }}">
            <a href="{{route('cms_projects')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Projects">Projects</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'cms_team' || Route::currentRouteName() == 'cms_team_create' || Route::currentRouteName() == 'cms_team_edit' ? 'active' : '' }}">
            <a href="{{route('cms_team')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Team">Team</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'cms_reviews' || Route::currentRouteName() == 'cms_review_create' || Route::currentRouteName() == 'cms_review_edit' ? 'active' : '' }}">
            <a href="{{route('cms_reviews')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Reviews">Reviews</div>
            </a>
        </li>


    
    <!-- Contact -->
    <li class="menu-item {{ Route::currentRouteName() == 'cms_contact' ? 'active' : '' }}">
        <a href="{{route('cms_contact')}}" class="menu-link">
            <i class='bx bxs-dock-top me-2'></i>
            <div data-i18n="Contact">Contact</div>
        </a>
    </li>


    <!-- Components -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Components</span>
    </li>

    <!-- Settings -->
    <li class="menu-item {{ Route::currentRouteName() == 'cms_settings' ? 'active' : '' }}">
        <a href="{{route('cms_settings')}}" class="menu-link">
            <i class="bx bx-cog me-2"></i>
            <div data-i18n="Settings">Settings</div>
        </a>
    </li>

    <!-- SEO -->
    <li class="menu-item {{ Route::currentRouteName() == 'seoCms' || Route::currentRouteName() == 'seoEdit' ? 'active' : '' }}">
        <a href="{{ route('seoCms') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Seo">Seo</div>
        </a>
    </li>

    <!-- Logout -->
    <li class="menu-item">
        <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bx bx-power-off me-2"></i>
            <div data-i18n="Logout">Logout</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
    </ul>
</aside>