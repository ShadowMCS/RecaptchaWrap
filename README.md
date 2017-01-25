# RecaptchaWrap
Simple PHP Wrapper for Recaptcha Validation.

Example usage:

    verifyCaptcha($_FORM['g-recaptcha-response'], 'YOUR RECAPTCHASECRET');
    
    
    if (verifyCaptcha()){
    echo "validated"
    }else{
    echo "not validated"
    }
