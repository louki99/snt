<div class="app-sidebar__inner">
    <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading">ENS</li>
        <li>
            <a href="#" class="mm-active">
                <i class="metismenu-icon pe-7s-rocket"></i>
                Dashboard
            </a>
        </li>
        <li class="app-sidebar__heading">Components</li>
        <li>
            <a href="#">
                <i class="metismenu-icon pe-7s-car"></i>
                Pages
                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
                <li>
                    <a href="{{ route("list.pages") }}">
                        <i class="metismenu-icon">
                        </i>List pages
                    </a>
                </li>
                <li>
                    <a href="{{ route("pages.add") }}">
                        <i class="metismenu-icon">
                        </i>Add Page
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
