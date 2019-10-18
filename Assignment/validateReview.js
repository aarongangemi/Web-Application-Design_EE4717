function validateReviewForm()
{
    if(validateFullName() && validateRadioBtn())
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

function validateRadioBtn()
{
    var star1 =  document.getElementById("1Star");
    var star2 =  document.getElementById("2Star");
    var star3 =  document.getElementById("3Star");
    var star4 =  document.getElementById("4Star");
    var star5 =  document.getElementById("5Star");
    if(!star1.checked && !star2.checked && !star3.checked && !star4.checked && !star5.checked)
    {
        alert("Please select a radio button");
        return false;
    }
    return true;
}