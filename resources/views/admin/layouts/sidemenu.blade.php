<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>

        <li>
            <a href="{{ route('dashboard.home') }}" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-chat">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ route('dashboard.contact.all') }}" class="waves-effect">
                <i class="bx bx-message"></i>
                <span key="t-chat">Contact</span>
            </a>
        </li>

        <li class="mm-active">
            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                <i class="bx bx-user-pin"></i>
                <span key="t-ecommerce">User</span>
            </a>
            <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                <li><a href="{{ route('dashboard.user.all') }}" key="t-products">all</a></li>
                <li><a href="{{ route('dashboard.user.create') }}" key="t-products">create</a></li>
            </ul>
        </li>

        <li class="mm-active">
            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                <i class="bx bx-store"></i>
                <span key="t-ecommerce">Common pages</span>
            </a>
            <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                <li><a href="{{ route('dashboard.common.all') }}" key="t-products">all</a></li>
                <li><a href="{{ route('dashboard.common.create') }}" key="t-products">create</a></li>
                <li><a href="{{ route('dashboard.common.show') }}" key="t-products">show</a></li>
            </ul>
        </li>
    </ul>
</div>
