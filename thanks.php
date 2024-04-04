<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Remerciements</title>
</head>
<body>

  <?php
  
  $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = ""; 
  $firstName = $lastName = $email = $phone = $subject =$message = "";
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["firstName"])) {
            $firstNameErr = "Ton prénom doit être renseigné";
        }
        else {
            $firstName = test_input($_POST["firstName"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
                $firstNameErr = "Caractères non authorisés";
            }
        }


        if (empty($_POST["lastName"])) {
            $lastNameErr = "Ton nom doit être renseigné";
        }
        else {
            $lastName = test_input($_POST["lastName"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
            $lastNameErr = "Caractères non autorisés";
            }
        }


        if (empty($_POST["email"])) {
            $emailErr = "Ton adresse Email doit être renseigné";
        }
        else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Ton Email n'est pas valide";
            }
        }


        if(empty($_POST["phone"])) {
            $phoneErr = "Ton téléphone doit être renseigné";
        }
        else {
            $phone = test_input($_POST["phone"]);
            if (preg_match("/^[0-9]{10}$/", $phone)) {
                $phoneErr = "Téléphone non valide";
            }
        }

        if (empty($_POST["subject"])) {
            $subjectErr = "Ton message doit être renseigné";
        }
        else {
            $subject = test_input($_POST["subject"]);    
        }


        if (empty($_POST["message"])) {
            $messageErr = "Ton message doit être renseigné";
        }
        else {
            $message = test_input($_POST["message"]);    
        }
    }


    if ( empty($firstNameErr) && empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($messageErr) ) {

        echo "<h2> Merci $firstname $name de nous avoir contacté à propos de \"$subject\". </h2>" ;
        echo "<p> Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :</p> " ;
        echo "<p> $message </p>" ;
    }

     
  ?>

</body>
</html>