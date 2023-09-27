<?php
    require '../include/config.php';

    $database = new Database();

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM fw.login WHERE username = ? AND password = ?";
        $params = [$username, $password];

        $user = $database->select($query, $params);

        if (!empty($user)){
            session_start();
            if ($user[0]['status'] === '0'){
                $_SESSION['user_id'] = $user[0]['username'];
                echo json_encode( [ 'message' => 'Login Successfully!', 'url' => './pages/users/index.php','status' => '0' ] );
            } else if ( $user[0]['status'] === '1' ) {
                $_SESSION['user_id'] = 'admin';
                echo json_encode( [ 'message' => 'Login Successfully!', 'url' => './pages/admin/index.php', 'status' => '0' ] );
            }
        } else {
            echo json_encode( [ 'message' => 'Login Failed! Please try again Later!', 'status' => '1' ] );
        }

    }