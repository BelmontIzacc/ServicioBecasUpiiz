<html>
     <head>
        <title>Restablece tu contraseña</title>
     </head>
     <body align="center">
     <p align="center"><img src="https://i.imgur.com/YwPNafet.jpg" title="BecasUpiiz"/></img></p>
       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
       <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
       <p>
         <strong>Enlace para restablecer tu contraseña</strong><br>
         <a href="{{ url('password/reset/'.$token) }}"> Restablecer contraseña </a><br><br><br>
         <strong>O copia y pega el siguiente link en tu navegador : </strong><br> 
         <p>{{ url('password/reset/'.$token)}}</p>
       </p>
     </body>
</html>