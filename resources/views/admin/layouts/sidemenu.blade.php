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
            <a href="{{ route('dashboard.contact.index') }}" class="waves-effect">
                <i class="bx bx-message"></i>
                <span key="t-chat">Contacts</span>
            </a>
        </li>
        <li class="mm-active">
            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                <i class="bx bx-store"></i>
                <span key="t-ecommerce">Common Pages</span>
            </a>
            <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                <li><a href="{{ route('dashboard.common.all') }}" key="t-products">All</a></li>
                <li><a href="{{ route('dashboard.common.show') }}" key="t-products">Show</a></li>
                <li><a href="{{ route('dashboard.common.create') }}" key="t-products">Create</a></li>

            </ul>
        </li>

        <li class="mm-active">
            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                <i class="bx bx-user-voice"></i>
                <span key="t-ecommerce">Users Pages</span>
            </a>
            <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                <li><a href="{{ route('dashboard.user.all') }}" key="t-products">All</a></li>
                <li><a href="{{ route('dashboard.user.show') }}" key="t-products">Show</a></li>
                <li><a href="{{ route('dashboard.user.create') }}" key="t-products">Create</a></li>

            </ul>
        </li>
    </ul>
</div>
