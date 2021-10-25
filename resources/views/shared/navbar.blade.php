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

                <!-- Dropdown -->
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

            </ul>

            <!-- Icons -->
            <ul class="navbar-nav d-flex flex-row me-1">
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>

            <!-- Search -->
            <form class="w-auto">
                <input type="search" class="form-control" placeholder="Type query" aria-label="Search">
            </form>

            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
