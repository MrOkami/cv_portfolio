<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    $destinataire="gdf38@live.fr";

    $to = $destinataire;
    $subject = $name;
    $headers= $email;
    $message = $comment;
    mail($to, $subject,$headers, $message);
    $msg =  "<p class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'>Votre message a bien été envoyé ! Une réponse vous sera rapidement envoyé.</p>";
}else{
    $msg =  "<p class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative'>Erreur lors de l'envois de email</p>";
}

if (isset($msg)) {
    echo $msg;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


header("Location:http://localhost/cv_portfolio/index.php#about");
exit();
?>
