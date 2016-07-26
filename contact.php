<?php
/* Set e-mail recipient */
$myemail  = "ramonacantu@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Nombre");
$email    = check_input($_POST['email']);
$country = check_input($_POST['country']);
$subject  = check_input($_POST['subject']);
$message = check_input($_POST['message'], "mensaje.");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("Olvidaste escribir tu correo.");
}

/* If URL is not valid set $website to empty */
if (preg_match("/\D/",$phone))
{
    die("Escribe solamente numeros, sin espacios.");
}

/* Let's prepare the message for the e-mail */
$message = "Mensaje nuevo de sitio web.

Info:

Nombre: $name
E-mail: $email
Pa&iacute;s: $country
Tema: $subject

Mensaje:
$message


";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: gracias.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body align="center" valign="middle" style="margin:10rem auto;">

        <img src="images/logo.svg" style="width:5%;" />

    <p style="font-family: 'Belwe', serif; color: #000; font-style: normal;"><b>Error</b><br />
        Parece que dejaste algunos campos sin completar.<br />Favor de regresar y llenar todos los campos antes de enviar el formulario.
    </p>
    <a href="contacto.html" style="  -webkit-appearance: none;
  -moz-appearance: none;
  border-radius: 0;
  border-style: solid;
  border-width: 3px;
  cursor: pointer;
  font-family: 'Helvetica Neue';
  font-weight: normal;
  line-height: normal;
  margin: 2rem 0 1.25rem;
  position: relative;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 1rem 2rem 1.0625rem 2rem;
  font-size: 1rem;
  background-color: transparent;
  border-color: #000;
  color: #000;
  transition: background-color 300ms ease-out;
}">Regresar</a>

    </body>
    </html>
<?php
exit();
}
?>