function validateSignup()
{
    if(!(validateFullName() && validatePassword() && validateDate() && validateStreetName() && validateSuburb() && validateSuburb() && validatePostCode()))
    {
        return false;
    }
    else
    {
        return true;
    }
}

function validateLogin()
{
    if(validateLoginPassword())
    {
        return true;
    }
    else
    {
        return false;
    }

}

function validateFullName()
{
    var fullname = document.getElementById("fullname");
    fullname = fullname.value.trim();
    var nameRegex = /[a-zA-Z]+\s+[a-zA-Z]+/g;
    if(nameRegex.test(fullname))
    {
        return true;
    }
    else
    {
        alert("Invalid Fullname, please try again");
        return false;
    }
}

function validatePassword()
{
    var password = document.getElementById("password");
    password = password.value.trim();
    var capitalRgx = /^[A-Z]/;
    if(password.length >= 8  && capitalRgx.test(password))
    {
        return true;
    }
    else
    {
        alert("Invalid Password, must be 8 characters or more and start wit capital letter");
        return false;
    }
}

function validateDate()
{
    var inputtedDate = document.getElementById("dateofbirth").value;
    var selectedDate = new Date(inputtedDate);
    var now = new Date();
    if(selectedDate < now)
    {
        return true;
    }
    else
    {
        alert("Invalid date, must be in past");
        return false;
    }
}

function validateStreetName()
{
    var streetName = document.getElementById("frm1")[5].value;
    streetName = streetName.trim();
    if(streetName.length > 0)
    {
        if(/^[A-z]+/.test(streetName))
        {
            return true;
        }
        else
        {
            alert("Invalid Street name, please try again");
            return false;
        }
    }
}

function validateSuburb()
{
    var suburb = document.getElementById("frm1")[6].value;
    suburb = suburb.trim();
    if(suburb.length > 0)
    {
        if(/^[A-z]+/.test(suburb))
        {
            return true;
        }
        else
        {
            alert("Invalid Suburb, please try again");
            return false;
        }
    }
     
}

function validatePostCode()
{
    var postcode = document.getElementById("frm1")[7].value;
    postcode = postcode.trim();
    if(postcode.length == 6 && !isNaN(postcode))
    {
        return true;
    }
    else
    {
        alert("Invalid postcode, please try again");
        return false;
    }
}

function validateLoginPassword()
{
    var password = document.getElementById("passwordLogin");
    password = password.value.trim();
    var capitalRgx = /^[A-Z]/;
    if(password.length >= 8  && capitalRgx.test(password))
    {
        return true;
    }
    else
    {
        alert("Invalid Password, must be 8 characters or more and start wit capital letter");
        return false;
    }
}
