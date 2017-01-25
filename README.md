# RecaptchaWrap
Simple PHP Wrapper for Recaptcha Validation.

Usage:
    verifyCaptcha($response, $secret); 

Example usage:


    verifyCaptcha($_POST['g-recaptcha-response'], 'YOUR RECAPTCHASECRET');
    
    
    if (verifyCaptcha()){
    echo "validated"
    }else{
    echo "not validated"
    }
