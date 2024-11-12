<style>
/* Navbar */
.navbar {
    background-color: #FFB6C1; /* Light pink background for the navbar */
    padding: 10px 20px; /* Adjust spacing around the navbar */
}

.navbar .form-inline .form-control {
    border: 1px solid #FF69B4; /* Pink border for input */
    border-radius: 4px 0 0 4px; /* Rounded corners on the left side */
    padding: 8px;
    font-family: Cambria, serif;
}

.navbar .input-group .btn {
    background-color: #FF69B4; /* Pink background for search button */
    color: #ffffff; /* White color for button text and icon */
    border: none;
    border-radius: 0 4px 4px 0; /* Rounded corners on the right side */
}

.navbar .input-group .btn:hover {
    background-color: #FFC0CB; /* Lighter pink on hover */
    color: #ffffff;
}

/* Adjust spacing in larger screens */
@media (min-width: 768px) {
    .navbar .form-inline {
        margin-right: 20px; /* Space between search bar and right edge */
    }
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
