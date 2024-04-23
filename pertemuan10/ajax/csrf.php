<?php
    header('Content-Type: application/json');

    // mengirimkan tooken keamanan
    if (empty($_SESSION['csrf_token'])){
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    $header = apache_request_headers();
    if (isset($header['csrf_token'])){
        if ($header['csrf_token'] !== $_SESSION['csrf_token']){
            exit(json_encode(['error' => 'Wrong CSRF token.']));
        }
    } else {
        exit(json_encode(['error' => 'No CSRF token.']));
    }
?>