
<div id="anim"></div>

<script>
      function validate__register(form)
      {
        fail  = validateForename(form.forename.value)
        fail += validateSurname(form.surname.value)
        fail += validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        fail += validateAge(form.age.value)
        fail += validateEmail(form.email.value)

        if   (fail == "")   return true
        else { alert(fail); return false }
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
        if (field == "") return "Nie wpisano nazwy użytkownika.\n"
        else if (field.length < 5)
          return "Nazwa użytkownika musi się składać z co najmniej 5 znaków.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Tylko znaki a-z, A-Z, 0-9, - oraz _ dopuszcza się w nazwie użytkownika.\n"
        return ""
      }

      function validatePassword(field)
      {
        if (field == "") return "Nie wpisano hasła.\n"
        else if (field.length < 6)
          return "Hasło musi mieć co najmniej 6 znaków.\n"
        else if (! /[a-z]/.test(field) ||
                 ! /[A-Z]/.test(field) ||
                 ! /[0-9]/.test(field))
          return "W hale musi się znaleć co najmniej jeden znak z zakresów a-z, A-Z oraz 0-9.\n"
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
            return "Podany adres e-mail jest nieprawidłowy.\n"
        return ""
      }
    </script>


    <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee" class="signup">
      <th colspan="2" align="center">Formularz rejestracji</th>
      <form method="post" action="" onsubmit="validate__register(this)">
        <tr><td>Imię</td>
          <td><input type="text" maxlength="32" name="forename"></td></tr>
        <tr><td>Nazwisko</td>
          <td><input type="text" maxlength="32" name="surname"></td></tr>
        <tr><td>Nazwa użytkownika</td>
          <td><input type="text" maxlength="16" name="username"></td></tr>
        <tr><td>Hasło</td>
          <td><input type="text" maxlength="12" name="password"></td></tr>
        <tr><td>Wiek</td>
          <td><input type="text" maxlength="3"  name="age"></td></tr>
        <tr><td>E-mail</td>
          <td><input type="text" maxlength="64" name="email"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Zarejestruj się"></td></tr>
      </form>
    </table>