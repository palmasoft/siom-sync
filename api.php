<?php
include 'config.php';
$login_user = false;
$login_pass = false;
if (isset($_POST)):
    if (isset($_POST['operacion']) and $_POST['operacion'] == 'login'):
        switch ($_POST['email']) {
            case 'sync@oximeiser.com':
            case 'ing.llinasramirez@gmail.com':
                $login_user = true;
                break;
            default:
                $login_user = false;
                break;
        }
        switch ($_POST['pass']) {
            case 'p4lm4s0ft':
            case '4dm1n':
                $login_pass = true;
                break;
            default:
                $login_pass = false;
                break;
        }
        session_start();
        if ($login_user and $login_pass):
            $_SESSION['SYNC_ADMIN'] = $_POST;
        else:
            session_start();
            $_SESSION = array();
            session_destroy();
        endif;
        session_write_close();
    endif;
    if (isset($_POST['operacion']) and $_POST['operacion'] == 'logout'):  
        session_start();
        $_SESSION = array();
        session_destroy();
        session_write_close();
    endif;
endif;