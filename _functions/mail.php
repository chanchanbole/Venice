<?php

error_reporting( E_ALL );

//$to = 'capponi.agostina@gmail.com';
$to = 'ventas@tglt.com';

$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <style type="text/css">

            .wrapper-cols{
                overflow: hidden;
            }

            .col{
                width: 100%;
                max-width: 48%;
                margin: 0 auto;
                margin-bottom: 40px;
                float: left;
                padding-left:2%;
            }

            .col:first-child{
                padding-left:0;
                padding-right:2%;
            }


            @media only screen and (max-width: 620px) {

              .col {
                max-width: 100% !important;
                width: 100% !important;
                  padding:0!important;
              }
            }

        </style>

    </head>
    <body style="margin: 0;padding: 0;font-family: Arial, Helvetica, Helvetica Neue, sans-serif;font-size: 16px;min-width: 100%!important;">
               <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="color: #505050;padding: 20px 0;font-size: 16px; width:100%;">
    <tr>
    <td class="logo" style="padding-bottom: 10px;">
		<h2 style="margin:0;">Astor</h2>
		<h3 style="margin:0;">Solicitud de entrevista</h3>
	</td>
    </tr>
    <tr>
    <td>
    <table class="box-content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 100%;background-color: #ffffff;padding: 10px 0;">
    <tr>
    <td>
    <div class="content-text" style="line-height: 1.5em;width: 100%;margin: 0 auto;">';

  
	foreach ($_POST as $key => $value) {
		if ($key != 'invisibleCaptcha' ){
			$body .= "<strong>" . $key . ":</strong> " . $value . "<br>";
		}
	}


  $body .= '</div></td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </body>
	</html>';

	
if($_POST["invisibleCaptcha"] == "human"){
	
	require 'PHPMailerAutoload.php';

	
	$mail = new PHPMailer;
	
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 0; //1 muestra errores y mensajes, 2 solo mensajes
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "a2plcpnl0658.prod.iad2.secureserver.net";
	$mail->Port = 465; 
	$mail->Username = 'webservices@acapponi.me';  
	$mail->Password = 'z03vVWNasI';  
	$mail->IsHTML(true);
	
	$mail->CharSet = 'UTF-8';
	$mail->setFrom('no-reply@tglt.com', 'Astor');
	$mail->AddAddress($to);
	$mail->Subject = "Solicitud de turno para entrevista - Astor";
	$mail->msgHTML($body);
	
	
	$exito = $mail->Send();
	
	if($exito){

		$echoV["result"] = true;
		$echoV["mensaje"] = '<strong>MENSAJE ENVIADO</strong> <br><br>El turno por tu entrevista fue solicitado.<br><br>Nos contactaremos a la brevedad.';

	} else {

		$echoV["result"] = false;
		$echoV["mensaje"]= 'Ocurrió un error. <r><br>Intente nuevamente más tarde';
		
	}


} else {

	$echoV["result"] = false;
	$echoV["mensaje"]= 'Sospecho que sos un robot.<br><br>Intentalo nuevamente.';

}

echo json_encode($echoV);
