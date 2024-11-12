<?php
session_start();

$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$message = "";
if (isset($_GET['logout']) && $_GET['logout'] == true) {
    $message = "";
} else {
    if ($email == "sandradetayson@gmail.com" && $password == "dara1122") {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $message = "<div class='alert alert-success'>Login Successfully</div>";
        echo "<script>window.location.href='pages/dashboard.php';</script>";
    } elseif ($email == "" && $password == "") {
        $message = "<div class='alert alert-danger'>Please enter your email and password!</div>";
    } else {
        $message = "<div class='alert alert-danger'>Login Failed!</div>";
    }
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
    <title>Login Form</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #D291BC; /* Soft violet */
            font-family: 'Cambria', serif;
        }
        .bg-primary {
            background-color: #F4A2D8 !important; /* Pink background */
        }
        .card {
            background-color: #F6D8FF; /* Light violet */
            color: #5A0B56; /* Dark violet */
        }
        .card-header, .alert-danger, .alert-success {
            color: #5A0B56; /* Dark violet for contrast */
            font-weight: bold;
        }
        .form-control {
            background-color: #FAE3F0; /* Light pink */
            border: 1px solid #D291BC; /* Violet border */
            color: #5A0B56; /* Dark violet text */
        }
        .form-control:focus {
            border-color: #D291BC;
            box-shadow: 0 0 5px rgba(210, 145, 188, 0.5); /* Violet shadow */
        }
        .btn-primary {
            background-color: #F4A2D8; /* Pink button */
            border: none;
            color: white;
        }
        .btn-primary:hover {
            background-color: #D291BC; /* Violet on hover */
        }
        .small a {
            color: #5A0B56; /* Dark violet links */
        }
        .small a:hover {
            color: #D291BC;
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <?php echo $message; ?>
                                <div class="card-body">
                                    <form action="" method="post" onSubmit="return confirm('Do you really want to continue?');">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>

                            <table class="table table-striped mt-3">
                                <tr>
                                    <td><strong>Username:</strong></td>
                                    <td><?php echo htmlspecialchars($email); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Password:</strong></td>
                                    <td><?php echo htmlspecialchars($password); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
