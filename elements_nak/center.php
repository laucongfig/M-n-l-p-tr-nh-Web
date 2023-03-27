<?php
    if (isset($_REQUEST['req'])) {
        $request = $_REQUEST['req'];
        switch ($request) {
            case 'userview':
                require './elements_nak/myUsers/userView.php';
                break;
            case 'exjs02':
                require './pageJS/exjs02.php';
                break;
            default:
                require './elements_nak/default.php';
        }
    }
?>