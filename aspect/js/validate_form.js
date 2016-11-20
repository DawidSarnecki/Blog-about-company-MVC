//javascript functions 
//(according to Lerarning PHP, MySQL & JavaSript, 4th Edition, Robert Nixon, O'REILY 2015)
		function validateRegister(form)
		//vaildate inputed values and block sumbit to server
      {
        //fail  = validateForename(form.forename.value)
        //fail += validateSurname(form.surname.value)
        //fail += validateUsername(form.username.value)
        //fail += validatePassword(form.password.value)
        //fail += validateAge(form.age.value)
        //fail += validateEmail(form.email.value)
		//fail += validatePassword(form.pass.value)
		//fail += validateUsername(form.user.value)
		fail = validateEmail(document.getElementById("email").value)
		fail += validatePassword(document.getElementById("pass").value)
		fail += validateUsername(document.getElementById("user").value)
		
		if (fail == "") return true
        else { alert(fail); return false }
	  }
		
		//alert("Hello! I am an alert box!");
		
		function validateLoginForm(form)
      {
		fail = validatePass(document.getElementById("pass").value)
		fail += validateLogin(document.getElementById("user").value)

        if (fail == "") return true
        else { alert(fail); return false }
      }
	  
	  
	  function validateLogin(field)
      {
        return (field == "") ? "Nie wpisano Loginu.\n" : ""
      }
	  
	  function validatePass(field)
      {
        return (field == "") ? "Nie wpisano Hasła.\n" : ""
      }

      function validateForename(field)
      {
        return (field == "") ? "Nie wpisano imienia.\n" : ""
      }
      
      function validateSurname(field)
      {
        return (field == "") ? "Nie wpisano nazwiska.\n" : ""
      }

      function validateUsername(field)
      {
        if (field == "") return "Nie wpisano Loginu.\n"
        else if (field.length < 5)
          return "Login musi sie składać z co najmniej 5 znakóww.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Login nie może zwierać polskich znaków.\n"
        return ""
      }

      function validatePassword(field)
      {
        if (field == "") return "Nie wpisano Hasła.\n"
        else if (field.length < 6)
          return "Hasło musi mieć co najmniej 6 znaków.\n"
        else if (! /[a-z]/.test(field) ||
                 ! /[A-Z]/.test(field) ||
                 ! /[0-9]/.test(field))
          return "Hasło musi zawieraćconajmniej: jedną małą i jedną dużą literę oraz cyfrę. Hasło nie może zwierać polskich znaków.\n"
        return ""
      }

      function validateAge(field)
      {
        if (isNaN(field)) return "Nie podano wieku.\\n"
        else if (field < 18 || field > 110)
          return "Wiek musi się zawierać między 18 a 110.\n"
        return ""
      }

      function validateEmail(field)
      {
        if (field == "") return "Nie podano adresu e-mail.\n"
          else if (!((field.indexOf(".") > 0) &&
                     (field.indexOf("@") > 0)) ||
                     /[^a-zA-Z0-9.@_-]/.test(field))
            return "Nieprawidłowy adres email.\n"
        return ""
      }

	
	
	
	
	
	
	
	
	
	
	
