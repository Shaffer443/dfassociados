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
    
    // CODIFICAÇÃO
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    
    //Configurando o gmail como exemplo de uso, ams funcional.
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Desativa toda a saída de dados técnica
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contato@dfassociados.com.br';               //SMTP username
        $mail->Password   = '5HcAiq&2m5BHCvGD^ReXIq4m';                  //SMTP password(senhas de app)
        //Usando SMTPS
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        //$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Usando TLS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('contato@dfassociados.com.br', 'Mailer');          //Qual email estou enviando
        $mail->addAddress('contato@dfassociados.com.br', 'Contato do Domínio');     //Add a recipient, qual email vai receber, para qual vai ser enviado 
        $mail->addAddress('dfadvogados2@gmail.com', "Contato da Empresa Gmail");               //Name is optional, mais de um endereço de email para receber a msg.
        $mail->addReplyTo('rafaelgouveiamelo@gmail.com', 'Comprovante de informações no site');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //Utilizações de anexo no email
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem Via Site - DF Associados (www.dfassociados.com.br)';               // Assunto

        // Pegando as informações do formulário de contato:
        $corpo_da_mensagem = "<b>Mensagem enviada através do site. <br> Segue informações abaixo:</b> <br>
                                <b>Nome:</b> {$_POST['nome']} <br> 
                                <b>Email:</b> {$_POST['email']} <br>
                                <b>Mensagem:</b><br>
                                {$_POST['msg']}";
        
        $mail->Body    = $corpo_da_mensagem;
        //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';   //Usando html
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; //Sem usar html, texto limpo

    //     $mail->send();
    //     //echo 'Email enviado com sucesso';
    //     echo "<script>alert('E-mail enviado com sucesso.');location.href='index.php';</script>";
    // } catch (Exception $e) {
    //     //echo "Falha ao enviar mensagem: {$mail->ErrorInfo}";
    //     echo "<script>alert('Falha ao enviar mensagem: {$mail->ErrorInfo}');</script>";
    // }
    
    $mail->send();
    
        // Sucesso
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            window.onload = function() {
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'E-mail enviado com sucesso.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php';
                    }
                });
            };
        </script>";

    } catch (Exception $e) {
        // Falha
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            window.onload = function() {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Não foi possível enviar o e-mail.',
                    icon: 'error',
                    confirmButtonText: 'Tentar novamente'
                });
            };
        </script>";
    }
}