<?php
    // UserController::logout();
    // Redirect::to('login');

    $logoutuser = new CodeControllers();
    $logoutuser->logout();
    unset($_SESSION["code"]);
    Redirect::to('../login/login');
?>
