function validate()
{
    var name = document.getElementById('name').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    // var error = false;
    var flag = 0;

    // Validating name
    if(flag==0){
        if(name == "" || name == "null")
        {
            document.getElementById('name_error').innerHTML="Name is required"
            flag = 1;
            //return false;
        }
        else{
            document.getElementById('name_error').innerHTML=""
            //return error;
        }

        /*Validating email */
        var dotpos = email.lastIndexOf('.');
        var atpos = email.indexOf('@');
        if(email == '' || email==null){
            document.getElementById('email_error').innerHTML = 'Email is required';
            flag = 1;
            //return false;
        } else if(atpos <= 1 || dotpos<=4 || dotpos - atpos < 3){
            document.getElementById('email_error').innerHTML = 'Please enter a valid email address';
            flag = 1;
            //return false;
        } else {
            document.getElementById('email_error').innerHTML = '';
            //return error;
        }

        /* Validating mobile number */

        if(mobile == "" || mobile == "null")
        {
            document.getElementById('mobile_error').innerHTML="Mobile Number is required"
            flag = 1;
            //return false;
        }
        else if(mobile.length != 10 || isNaN(mobile))
        {
            document.getElementById('mobile_error').innerHTML="Enter a 10 digit valid mobile number"
            flag = 1;
            //return false;
        }
        else{
            document.getElementById('mobile_error').innerHTML=""
            //return error;
        }

        /*Validating Id*/
        
        
        /* Validating Password and Confirm Password */

        if(password == "" || password == "null")
        {
            document.getElementById('password_error').innerHTML="Password is required"
            flag = 1;
            //return false;
        }
        else if(password.length < 6 || password.length > 15)
        {
            document.getElementById("password_error").innerHTML="Password must be greater than 6 and less than 15."
            flag = 1;
        // return false;
        }
        else{
            document.getElementById('password_error').innerHTML=""
            //error = false;
        }

        /*Confirm Password */

        if(cpassword == "" || cpassword ==null)
        {
            document.getElementById('password2_error').innerHTML="Confirm Password is required"
            flag = 1;
            return false;
        }
        else if(cpassword != password)
        {
            document.getElementById('password2_error').innerHTML="Confirm Password and Password must be same."
            flag = 1;
            return false;
        }
        else{
            document.getElementById('password2_error').innerHTML=""
            //error = false;
        }
    }   
 if(flag==1){
      //  flag = 0;
        return false;
    }
    else
        return true;
    //else
      //  return false;

}

function login_validate(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var error = false;

    var dotpos = email.lastIndexOf('.');
    var atpos = email.indexOf('@');
    if(email == '' || email==null){
        document.getElementById('email_error').innerHTML = 'Email is required';
        error = true;
    } else if(atpos <= 1 || dotpos<=4 || dotpos - atpos < 3){
        document.getElementById('email_error').innerHTML = 'Please enter a valid email address';
        error = true;
    } else {
        document.getElementById('email_error').innerHTML = '';
        error = false;
    }

    if(password == '' || password==null){
        document.getElementById('password_error').innerHTML = 'Password is required';
        error = true;
    } else if(password.length <6 || password.length >15){
        document.getElementById('password_error').innerHTML = 'Password shoud be 6 - 15 character long';
        error = true;
    }else {
        document.getElementById('password_error').innerHTML = '';
        error = false;
    }
    
    if(error)
        return false;
    else
        return true;
}