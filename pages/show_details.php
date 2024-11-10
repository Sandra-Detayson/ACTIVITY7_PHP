<?php
session_start();

// Initialize the students session array if it doesn't exist
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

// Check if form data was submitted and store it in the session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Add new student details to the students session array
    $_SESSION['students'][] = [
        'name' => $_POST['name'] ?? 'Not provided',
        'age' => $_POST['age'] ?? 'Not provided',
        'gender' => $_POST['gender'] ?? 'Not provided',
        'college' => $_POST['college'] ?? 'Not provided',  // Make sure the form has a 'college' input
        'course' => $_POST['course'] ?? 'Not provided',
        'campus' => $_POST['campus'] ?? 'Not provided',
    ];

    // Redirect to prevent form resubmission on page reload
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Submitted Details</title>
    <?php include('../layout/style.php'); ?>
    <style>
        body {
            font-family: 'Cambria', serif;
        }
        #datatablesSimple {
            background-color: violet;
            color: white;
            border: 1px solid pink;
        }
        #datatablesSimple th, #datatablesSimple td {
            border: 1px solid pink;
            text-align: center;
        }
        #datatablesSimple th {
            background-color: pink;
            color: black;
        }
        #datatablesSimple tr:nth-child(even) {
            background-color: #d291bc; /* Light violet */
        }
        #datatablesSimple tr:hover {
            background-color: #f4a2d8; /* Light pink */
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Show Details</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Show Data</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Student Information Table
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>College</th>
                                        <th>Course</th>
                                        <th>Campus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['students']) && count($_SESSION['students']) > 0) {
                                        foreach ($_SESSION['students'] as $student) {
                                            echo "<tr>";
                                            echo "<td>" . htmlspecialchars($student['name']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['age']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['gender']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['college']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['course']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['campus']) . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No data available.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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
