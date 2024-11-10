<style>
    /* Style for the navbar */
    .sb-topnav {
        background-color: #ff69b4; /* Pink background */
        color: #ffffff; /* White text */
        font-family: Cambria, serif; /* Font family set to Cambria */
    }

    .sb-topnav .navbar-brand {
        color: #ffffff; /* White text for the brand name */
        font-weight: bold; /* Make the brand name bold */
    }

    .sb-topnav .navbar-brand:hover {
        color: #dda0dd; /* Light purple hover effect for the brand */
    }

    .sb-topnav .nav-link {
        color: #ffffff; /* White text for nav links */
    }

    .sb-topnav .nav-link:hover {
        color: #ff80bf; /* Lighter pink on hover */
    }

    .sb-topnav .navbar-nav .nav-item .dropdown-menu {
        background-color: #ff69b4; /* Pink background for dropdown */
        color: #ffffff; /* White text for dropdown items */
    }

    .sb-topnav .navbar-nav .nav-item .dropdown-menu .dropdown-item {
        color: #ffffff; /* White text for dropdown items */
    }

    .sb-topnav .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
        background-color: #dda0dd; /* Light purple hover effect for dropdown items */
    }

    .sb-topnav .input-group input {
        background-color: #f8f9fa; /* Light background for input */
        border-color: #ff69b4; /* Pink border for input */
    }

    .sb-topnav .input-group button {
        background-color: #ff69b4; /* Pink button */
        color: #ffffff; /* White text on button */
    }

    .sb-topnav .input-group button:hover {
        background-color: #ff80bf; /* Lighter pink on hover */
    }
</style>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
