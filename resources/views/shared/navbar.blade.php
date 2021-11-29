<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark ">
    <!-- Container wrapper -->
    <div class="container-fluid">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="http://learninglaravelcookbook.test">Learning Laravel Cookbook</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Link -->
                <li class="nav-item">
                    <a class="nav-link" href="http://learninglaravelcookbook.test/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://learninglaravelcookbook.test/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://learninglaravelcookbook.test/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://learninglaravelcookbook.test/welcome">Welcome</a>
                </li>

                <!-- Dropdown Tickets-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Tickets
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            {!! link_to_route('tickets.create', 'Create', [], ['class' => 'dropdown-item']) !!}
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            {!! link_to_route('tickets.index', 'Index', [], ['class' => 'dropdown-item']) !!}
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Users-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Users
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            {!! link_to_route('users.create', 'Create', [], ['class' => 'dropdown-item']) !!}
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            {!! link_to_route('users.index', 'Index', [], ['class' => 'dropdown-item']) !!}
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Posts-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Posts
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            {!! link_to_route('posts.create', 'Create', [], ['class' => 'dropdown-item']) !!}
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            {!! link_to_route('posts.index', 'Index', [], ['class' => 'dropdown-item']) !!}
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Managers-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Managers
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            {!! link_to_route('managers.create', 'Create', [], ['class' => 'dropdown-item']) !!}
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            {!! link_to_route('managers.index', 'Index', [], ['class' => 'dropdown-item']) !!}
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Pages-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            {!! link_to_route('pages.create', 'Create', [], ['class' => 'dropdown-item']) !!}
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            {!! link_to_route('pages.index', 'Index', [], ['class' => 'dropdown-item']) !!}
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Categories-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            {!! link_to_route('categories.create', 'Create', [], ['class' => 'dropdown-item']) !!}
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            {!! link_to_route('categories.index', 'Index', [], ['class' => 'dropdown-item']) !!}
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    {!! link_to('dashboard', 'Dashboard', ['class' => 'nav-link']) !!}
                </li>
                <li class="nav-item">
                    {!! link_to('boards.show', 'Show Board', ['class' => 'nav-link']) !!}
                </li>
                <li class="nav-item">
                    {!! link_to('manager/pages', 'Manager Area', ['class' => 'nav-link']) !!}
                </li>

            </ul>

        </div>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
