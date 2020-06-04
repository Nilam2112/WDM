/*===============ContactMe================*/

function ValidateContact()
{
	var name = document.forms["ContactForm"]["Name"];
	var email = document.forms["ContactForm"]["Email"];
	var phone = document.forms["ContactForm"]["Phone"];
	var message = document.forms["ContactForm"]["Message"];

	if (name.value == "")
	{
		alert("Please enter a name.");
		return false;
	}
	if (email.value == "")
	{
		alert("Please enter email address.");
		return false;
	}
	if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(ContactForm.email.value))
	{
		alert("Please enter valid email address.");
	 	return false;
	}
	if (phone.value == "")
	{
		alert("Please enter a phone number.");
		return false;
	}
	if (! /^\d{10}$/.test(ContactForm.phone.value))
	{
		alert("Please enter a valid phone number.");
	 	return false;
	}
	if (message.value == "")
	{
		alert("Please enter Message.");
		return false;
	}
	return true;
}

/*===============Login================*/

function ValidateLogin()
{
	var user = document.forms["LoginForm"]["User"];
	var password = document.forms["LoginForm"]["Password"];

	if (user.value == "")
	{
		alert("Please enter a username.");
		return false;
	}
	if (password.value == "")
	{
		alert("Please enter a password.");
		return false;
	}
	if (! /^\w+(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}+$/.test(LoginForm.password.value))
	{
		alert("password is not in valid format");
	 	return false;
	}
	return true;
}


/*===============SignUp================*/

function ValidateSign()
{
	var fname = document.forms["SignForm"]["Firstname"];
	var lname = document.forms["SignForm"]["Listname"];
	var email = document.forms["SignForm"]["Email"];
	var user = document.forms["SignForm"]["User"];
	var password = document.forms["SignForm"]["Password"];
	var repeatpassword = document.forms["SignForm"]["Repeat Password"];

	if (fname.value == "")
	{
		alert("Please enter a firstname.");
		return false;
	}
	if (lname.value == "")
	{
		alert("Please enter a lastname.");
		return false;
	}
	if (email.value == "")
	{
		alert("Please enter email address.");
		return false;
	}
	if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(ContactForm.email.value))
	{
		alert("Please enter valid email address.");
	 	return false;
	}
	if (user.value == "")
	{
		alert("Please enter a username");
		return false;
	}
	if (password.value == "")
	{
		alert("Please enter a password");
		return false;
	}
	if (! /^\w+(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}+$/.test(SignForm.password.value))
	{
		alert("password is not in valid format");
	 	return false;
	}
	if (repeatpassword.value == "")
	{
		alert("Please repeat a password");
		return false;
	}
	if (! /^\w+(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}+$/.test(SignForm.repeatpassword.value))
	{
		alert("password is not in valid format or same");
	 	return false;
	}
	return true;
}

