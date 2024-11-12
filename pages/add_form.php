<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $student = [
        "name" => $_POST["name"],
        "age" => $_POST["age"],
        "gender" => $_POST["gender"],
        "college" => $_POST["college"],
        "course" => $_POST["course"],
        "campus" => $_POST["campus"]
    ];

    // Store student data in the session
    $_SESSION['students'][] = $student;

    // Redirect to showData.php to display the stored data
    header("Location: showData.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <?php include('../layout/style.php'); ?>
    <style>
    body {
        font-family: Cambria, serif;
        background-color: #FFF0F5; /* Light Pink Background */
        color: black; /* Pale Violet Red for text */
    }

    .card {
        border: 1px solid #FFC0CB; /* Light Pink Border */
    }

    .card-header {
        background-color: #FFB6C1; /* Soft Pink */
        color: #ffffff; /* White Text */
    }

    label {
        color: #DB7093; /* Pale Violet Red for labels */
        font-weight: bold;
        font-family: Cambria, serif;
    }

    .form-control {
        border: 1px solid #FFB6C1; /* Light Pink Border */
        border-radius: 4px;
        margin-bottom: 10px;
        font-family: Cambria, serif;
    }

    .btn-primary {
        background-color: #FFB6C1; /* Soft Pink Button */
        color: #ffffff; /* White Text */
        border: none;
        border-radius: 4px;
    }

    .btn-primary:hover {
        background-color: #FFC0CB; /* Lighter Pink on Hover */
    }

    footer {
        background-color: #FFB6C1; /* Soft Pink Footer */
        color: #ffffff; /* White Text */
        font-family: Cambria, serif;
        padding: 1rem;
        text-align: center;
    }

    footer a {
        color: #ffffff; /* White Links */
        text-decoration: none;
    }

    footer a:hover {
        color: #FFC0CB; /* Lighter Pink on Hover */
    }

    .form-container {
        width: 80%;
        max-width: 500px; /* Limit the form width */
        margin: 50px auto; /* Center the form horizontally and give some top margin */
        padding: 20px;
    }

    .button-container {
        text-align: center;
    }

    /* Center the form-container within the layout */
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-grow: 1;
    }
</style>
</head>
<body class="sb-nav-fixed">

    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>

        <div id="layoutSidenav_content">
            <main class="d-flex align-items-center justify-content-center">
                <div class="form-container">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-user-plus me-1"></i>
                            Fill Your Details
                        </div>
                        <div class="card-body">
                            <form action="show_details.php" method="POST">
                                <label for="name">Name:</label>
                                <input type="text" name="name" required class="form-control">

                                <label for="age">Age:</label>
                                <input type="number" name="age" required class="form-control">

                                <label for="gender">Gender:</label>
                                <select name="gender" required class="form-control">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Other">Other</option>
                                </select>

                                <label for="course">Course:</label>
                                <select name="course" required class="form-control">
                                    <option value="" disabled selected>Select Course</option>
                                    <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                                    <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                                    <option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
                                    <option value="Bachelor in Political Science">Bachelor in Political Science</option>
                                    <option value="Bachelor of Science in Accountancy and Information System">Bachelor of Science in Accountancy and Information System</option>
                                </select>

                                <label for="campus">Campus:</label>
                                <select name="campus" required class="form-control">
                                    <option value="" disabled selected>Select Campus</option>
                                    <option value="Santa Cruz Campus">Santa Cruz Campus</option>
                                    <option value="Torrijos Campus">Torrijos Campus</option>
                                    <option value="Gasan Campus">Gasan Campus</option>
                                    <option value="Boac Campus">Boac Campus</option>
                                </select>

                                <div class="button-container text-center">
                                    <button type="submit" name="submit" class="btn btn-primary mt-3 mx-2">Submit</button>
                                    <button type="reset" class="btn btn-secondary mt-3 mx-2">Clear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
