<!DOCTYPE html>
<html>
<head>
    <title>Recuperar palavra-passe</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        #recuperar-pass {
            text-decoration: none;
            display: inline-block;
            margin-left: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <h1>Recuperar palavra-passe</h1>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require __DIR__ . "/lib/vendor/autoload.php";
    $mail = new PHPMailer(true);

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);

    if (!empty($dados['SendRecupPass'])) {

        /* var_dump($dados); */

        $mysqli = require __DIR__ . "/database.php";
    
        $sql = sprintf("SELECT * FROM user
                        WHERE email = '%s'",
                       $mysqli->real_escape_string($_POST["email"]));
        
        $result = $mysqli->query($sql);
        
        $user = $result->fetch_assoc();
        //var_dump($user);
        if ($user) {
            $chave_recup_pass = password_hash($user['id'], PASSWORD_DEFAULT);
            $id = $user['id'];
        
            $stmt = $mysqli->prepare("UPDATE user SET recovery_password = ? WHERE id = ? LIMIT 1");
            $stmt->bind_param("si", $chave_recup_pass, $id);
            $stmt->execute();
        
            if ($stmt->affected_rows > 0) {
                $link = "<a href='http://localhost:81/atualizarpass.php?chave=$chave_recup_pass'>Clique aqui</a>";
                try {
                    $mail->CharSet = 'UTF-8';
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'da2fe0e98d2ba1';                     //SMTP username
                    $mail->Password   = 'ff601ec116bab0';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                    $mail->Port       = 2525;

                    $mail->setFrom('goncalomata@estagio.pt', 'Goncalo');
                    $mail->addAddress($user['email'], $user['name']);     //Add a recipient

                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperar password';
                    $mail->Body    = 'Olá ' . $user['name'] .", foi solicitada uma recuperação de password em seu nome. <br><br> Caso não tenha solicitado, ignore este e-mail, caso tenha solicitado, para prosseguir então, com este processo, clique no link abaixo <br><br><a href='" .$link . "</a>";
                    $mail->AltBody = 'Olá ' . $user['name'] .", foi solicitada uma recuperação de password em seu nome. \n\nCaso não tenha solicitado, ignore este e-mail, caso tenha solicitado, para prosseguir então, com este processo, clique no link abaixo \n\n http://localhost:81/atualizarpass.php?chave=" . $chave_recup_pass;

                    $mail->send();

                    $_SESSION["msg"] = "<p style='color:green;'>Foi lhe enviado um email com as instruções para realizar a recuperação de password, acesse á sua caixa de email para prosseguir.</p>";
                    header("Location: index.php");
                }catch (Exception $e) {
                echo "Email não enviado com sucesso. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                echo "<p style='color:red;'>Tente outra vez!</p>";
            }
        }
        else {
            echo "<p style='color:red;'>O utilizador não existe!</p>";
        }

        /*if(isset($_SESSION["msg"])){
            echo  $_SESSION["msg"];
            unset( $_SESSION["msg"]);
        }*/
    }
    ?>

    <form method="post" action="">
    <?php
    $user = "";
    if(isset($dados['email'])){echo $dados['email']; }
    ?>
        <br>
        <label for="email">Insira o email:</label>
        <input type="text" name="email" placeholder="Escrever o email"
               value="<?php echo $user; ?> ">
        
        <input type="submit" value="Recuperar" name="SendRecupPass">
    </form>

    <br>
    Lembrou-se da Password? <a href="index.php">Fazer login</a>
    
</body>
</html>