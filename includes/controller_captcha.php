<?php // Check if form was submitted:
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Build POST request:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = 'SECRET_KEY';
        $recaptcha_response = $_POST['recaptcha_response'];
        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        if($recaptcha->success==true){
            // Take action based on the score returned:
            if ($recaptcha->score >= 0.5) {
                echo '<pre>';
                print_r("Verified - send email");
                echo '</pre>';
                exit;
                // Verified - send email
            } else {
                echo '<pre>';
                print_r("Not verified - show form error");
                echo '</pre>';
                exit;
                // Not verified - show form error
            }
        }else{ // there is an error /
            ///  timeout-or-duplicate meaning you are submit the  form
            echo '<pre>';
            print_r($recaptcha);
            echo '</pre>';
            exit;
        }
    }
