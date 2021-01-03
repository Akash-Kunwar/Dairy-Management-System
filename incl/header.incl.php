<?php
define('PAGE_URL', 'http://localhost/Dairy/');
$current_user = array();

function Page_Url() {
    echo PAGE_URL;
}

if (file_exists('auth/auth.php')) {
    include 'auth/auth.php';
} elseif (file_exists('../auth/auth.php')) {
    include '../auth/auth.php';
} elseif (file_exists('../../auth/auth.php')) {
    include '../../auth/auth.php';
}
$log = new logmein();
$log->encrypt = true;
if (!isset($_SESSION['loggedin']) || !$log->logincheck($_SESSION['loggedin'], "employees", "e_pass", "e_mail")) {
    $log->loginform("login", "loginform", PAGE_URL . "auth/login.php");
    exit();
} else {
    $current_user['email'] = $_SESSION['username'];
    $current_user['name'] = $_SESSION['full_name'];
    $current_user['role'] = $_SESSION['userlevel'];
    list($singlename) = explode(' ', $current_user['name'], 3);
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- for faster page loads these should be on the footer, but careful on having jQuery code in your pages if you do -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <title>Dairy Record Manager</title>
    </head>
    <body style="background-color:#e3e3e3">
        <!--    The top of the page visible on all pages in the system-->

        <div id="top" class="page-header">
            
            <!--top logo-->	

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">DFSM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>farmers/index.php">Farmers</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>employees/index.php">Employees</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>delivery/index.php">Deliveries</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>payment/index.php">Payments</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>reports/index.php">Reports</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php Page_Url() ?>settings/index.php">Pricings</a>
                    </li>
                    </ul>
                    <span>
                    <div id="user">
                        <span style="color:#fff"><?php echo " $singlename [" . $current_user['role'] . "]" ?></span> 
                        <a style="color:#fff" class="btn btn-danger"  href="<?php Page_Url(); ?>auth/logout.php">Logout</a>      
                    </div>
                    </span>
                </div>
            </nav>
        </div>
        <!--beginning of the pages' body-->
        <div  id="main-content" class="modal-body" >
