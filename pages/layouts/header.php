<?php
    include ('../../include/config.php');
    session_start();

    if (!isset($_SESSION["user_id"])) {
        header("Location: ../../index.php");
        exit();
    }
    $object = new Database();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NMP / ICDS Department Login | Government of TamilNadu</title>
    <link rel="shortcut icon" type="image/png" href="../../images/logos/logo.png" />
    <link rel="stylesheet" href="../../css/styles.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>