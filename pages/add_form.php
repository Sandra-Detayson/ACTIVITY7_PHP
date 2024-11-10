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
        /* Simplified styling */
        body {
            font-family: Cambria, serif;
            background-color: #ffffff;
            color: #800080;
        }

        .card {
            border: 1px solid #e0e0e0;
        }

        .card-header {
            background-color: #800080;
            color: #ffffff;
        }

        label {
            color: #800080;
            font-weight: bold;
            font-family: Cambria, serif;
        }

        .form-control {
            border: 1px solid #800080;
            border-radius: 4px;
            margin-bottom: 15px;
            font-family: Cambria, serif;
        }

        .btn-primary {
            background-color: #ff69b4;
            color: #ffffff;
            border: none;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: #dda0dd;
        }

        footer {
            background-color: #800080;
            color: #ffffff;
            font-family: Cambria, serif;
            padding: 1rem;
            text-align: center;
        }

        footer a {
            color: #ff69b4;
            text-decoration: none;
        }

        footer a:hover {
            color: #dda0dd;
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
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>

                                <label for="course">Course:</label>
                                <select name="course" required class="form-control">
                                    <option value="BSIS">BSIS</option>
                                    <option value="BSTM">BSTM</option>
                                    <option value="BEED">BEED</option>
                                    <option value="POLSCI">POLSCI</option>
                                    <option value="BSAIS">BSAIS</option>
                                </select>

                                <label for="campus">Campus:</label>
                                <select name="campus" required class="form-control">
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
