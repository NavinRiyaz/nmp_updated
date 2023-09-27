<?php
    session_start();
    if (isset($_SESSION["user_id"])){
        if ($_SESSION['user_id'] === 'admin'){
            header("Location: ./pages/admin/index.php");
        } else{
            header("Location: ./pages/users/index.php");
        }
        exit();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NMP / ICDS Dashboard | Government of TamilNadu</title>
    <link rel="shortcut icon" type="image/png" href="./images/logos/logo.png" />
    <link rel="stylesheet" href="./css/styles.min.css" />
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="./images/logos/logo-full.png" width="500" alt="NMP Logo">
                            </a>
                            <p class="text-center">Department Login</p>
                            <form name="login_form" id="login_form" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed top-0 end-0 p-3">
        <div id="toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body"></div>
        </div>
    </div>
</div>
<script src="./libs/jquery/dist/jquery.min.js"></script>
<script src="./libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>