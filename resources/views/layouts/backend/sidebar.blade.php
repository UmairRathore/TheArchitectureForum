<!-- Sidebar Navigation Left -->

<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
<!-- Sidebar Navigation Left -->

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="ps-0 ms-0 text-center" href="{{route('backend.index')}}"> <img src="{{asset('/backend/assets/img/medboard-logo-216x62.png')}}" alt="logo"> </a>

    </div>
    <!-- Navigation -->

    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">

        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{route('backend.index')}}">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
        </li>


        <!-- User -->
        <li class="menu-item">
            <a href="{{route('backend.list-user')}}">
                <span><i class="far fa-user-circle"></i>User </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.tags-list')}}">
                <span><i class="far fa-user-circle"></i>Tag </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.aboutus-list')}}">
                <span><i class="far fa-user-circle"></i>About US </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.content-policy-list')}}">
                <span><i class="far fa-user-circle"></i>Content Policy </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.privacy-policy-list')}}">
                <span><i class="far fa-user-circle"></i>Privacy Policy </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.user-agreement-list')}}">
                <span><i class="far fa-user-circle"></i>User Agreement </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.topics-list')}}">
                <span><i class="far fa-user-circle"></i>Topic </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.badge-list')}}">
                <span><i class="far fa-user-circle"></i>Badge </span>
            </a>
        </li>

        <!-- Roles -->
        <li class="menu-item">
            <a href="{{route('backend.faq-list')}}">
                <span><i class="material-icons">group</i>Faq </span>
            </a>
        </li>

    </ul>
</aside>
