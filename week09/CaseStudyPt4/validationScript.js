function validateData()
{
    validateName();
    validateEmail();
    validateDate();
    validateExp();
}
function validateName()
{
    var name = document.getElementById("nameField");
    var regex = /^[a-zA-Z ]*$/;
    if((name.value == "") || (name.value== null))
    { 
        alert("You did not enter a name");
        name.focus();
        return false;
    }
    else if(regex.test(name.value))
    {
        return true;
    }
    else
    {
        alert("The name you entered is invalid, please try again");
        name.focus();
        return false;
    }
}
function validateEmail()
{
    var email = document.getElementById("emailField");
    var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if((email.value == "") || (email.value== null))
    {
        alert("You did not enter an email");
        email.focus();
        email.select();
        return false;
    }
    else if(regexEmail.test(email.value))
    {
        return true;
    }
    else
    {
        alert("The email you entered is invalid, please try again");
        email.focus();
        email.select();
        return false;
    }
}

function validateDate()
{
    var inputtedDate = document.getElementById("startDateField").value;
    var selectedDate = new Date(inputtedDate);
    var now = new Date();
    if(selectedDate < now)
    {
        alert("Error, Date is in the past. Please enter a valid date");
        date.focus();
        date.select();
        return false;
    }
    else
    {
        return true;
    }
}

function validateExp()
{
    var exp = document.getElementById("ExperienceField").value;
    if(exp ==  ''|| exp == null)
    {
        alert("Box is empty");
        exp.focus();
        exp.select();
        return false;
    }
}

