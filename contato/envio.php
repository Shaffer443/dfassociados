<?php

set_time_limit(60); // Aumenta o limite para 1 minuto

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

// Verificar se o botão pressionar foi enviar foi prescionado
// name="enviar", na tag do botton

if (isset($_POST['enviar'])){

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Configurando o gmail como exemplo de uso, ams funcional.
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rafaelgouveiamelo@gmail.com';                     //SMTP username
        $mail->Password   = 'atli xyjn dydo ljmv';                               //SMTP password(senhas de app)
        //Usando SMTPS
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        //$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Usando TLS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('rafaelgouveiamelo@gmail.com', 'Mailer');          //Qual email estou enviando
        $mail->addAddress('rafaelgouveiamelo@gmail.com', 'RG SHaffer443');     //Add a recipient, qual email vai receber, para qual vai ser enviado 
        $mail->addAddress('shaffer443@gmail.com');               //Name is optional, mais de um endereço de email para receber a msg.
        $mail->addReplyTo('rafaelgouveiamelo@gmail.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //Utilizações de anexo no email
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem via site - DF Associados';               // Assunto

        // Pegando as informações do formulário de contato:
        $corpo_da_mensagem = "Mensagem enviada através da site. Segue informações abaixo: <br>
                                Nome: {$_POST['nome']} <br> 
                                Email: {$_POST['email']} <br>
                                Mensagem:<br>
                                {$_POST['msg']}";
        
        $mail->Body    = $corpo_da_mensagem;
        //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';   //Usando html
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; //Sem usar html, texto limpo

        $mail->send();
        //echo 'Email enviado com sucesso';
        echo "<script>alert('E-mail enviado com sucesso.');location.href='index.php';</script>";
    } catch (Exception $e) {
        //echo "Falha ao enviar mensagem: {$mail->ErrorInfo}";
        echo "<script>alert('Falha ao enviar mensagem: {$mail->ErrorInfo}');</script>";
    }
}