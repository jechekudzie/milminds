<ul class="navbar-nav {{--ml-auto--}}">
    <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">Mil-Minds Holdings</a>
    </li>
    <li class="nav-item {{ Request::routeIs('advisory') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('advisory') }}">Mil-Minds Advisory Services</a>
    </li>
    <li class="nav-item {{ Request::routeIs('cleaning-bees') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('cleaning-bees') }}">Cleaning Bees Cleaning Services</a>
    </li>

    <li class="nav-item {{ Request::routeIs('colorful-expressions') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('colorful-expressions') }}">
            Colourful Expressions
        </a>
    </li>

    <li class="nav-item {{ Request::routeIs('fly-express') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('fly-express') }}">Fly Express Courier Services</a>
    </li>

    <li class="nav-item {{ Request::routeIs('way-maker') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('way-maker') }}">Way-maker Travel & Tour </a>
    </li>
    <!-- More nav items here -->
</ul>
