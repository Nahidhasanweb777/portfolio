alert("This is Nahid Hasan. My id 173462096");
function validationform() {
    var fname = document.forms["myform"]["fname"];
    var lname = document.forms["myform"]["Lname"];
    var email = document.forms["myform"]["EMail"];
    var phone = document.forms["myform"]["phone"];
    var password = document.forms["myform"]["Password"];
    var mas = document.forms["myform"]["mas"];


    if (fname.value == "") {
        window.alert("Please enter your first name.");
        fname.focus();
        return false;
    }
    if (lname.value == "") {
        window.alert("Please enter your last name.");
        lname.focus();
        return false;
    }


    if (email.value == "") {
        window.alert(
          "Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (phone.value == "") {
        window.alert(
          "Please enter your phone number.");
        phone.focus();
        return false;
    }

    if (password.value == "") {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }

    if (mas.value == "") {
        window.alert("Please enter your massage");
        password.focus();
        return false;
    }


    return true;
}