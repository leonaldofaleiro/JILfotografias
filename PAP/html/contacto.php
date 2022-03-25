<?php require_once 'database.php'; ?>
<!DOCTYPE html>
<html>
<html lang="pt-pt">
<head>
  <meta charset>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contacto.css">
	  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" href="imagem/jil4.png" type="image/x-icon">
    <title>Contacto</title>
</head>


<body>


  <div class="navbar">

    <a href=""><img src="imagem/jil4.png" alt="">
      <!-- <div class="logo">
      <h1>JIL.Fotografia</h1>
    </div>-->

      <div class="icon-bar">
        <a href="index.html"><i class="fa fa-home">
            <div class="menu-itens">
              Home
            </div>
          </i></a>
        <a href="sobre.html"><i class="fa fa-info-circle">
            <div class="menu-itens">
              Sobre
            </div>
          </i></a>
        <a href="portfolio.html"><i class="fa fa-images">
            <div class="menu-itens">
              Portfólio
            </div>
          </i></a>
        <a href="servicos.html"><i class="fa fa-cogs">
            <div class="menu-itens">
              Serviços
            </div>
          </i></a>

        <a href="contacto.html"><i class="fa fa-id-badge">
            <div class="menu-itens">
              Contacto
            </div>
          </i></a>
      </div>
  </div>



  <div class = "info">
    <div class = "text" >
    
    <p>Tem alguma pergunta? <br>
    <br>

Está a pensar em marcar uma sessão ? <br>
<br>

Por favor não hesite em contactar por qualquer razão. <br>  <br> E-mail, telefone, texto, ou simplesmente preencha o formulário abaixo e clique em "submeter". <br> <br>

E-mail: jilfotografia@gmail.com <br> <br>

Telemóvel: (351) 935154615</p> 
    </div>
  </div>

  
  <div class="container">
    
            <div class="contact-box">
              
                <div class="left"></div>
                
                <div class="right">
                <h2>Contact Us</h2>
    <form action="" method="post">
        <label for="fname">First Name</label>
        <input class="field" type="text" id="fname" name="fname" placeholder="Your name..">
<br>
        <label for="lname">Last Name</label>
        <input class="field" type="text" id="lname" name="lname" placeholder="Your last name..">
        <br>
        <label for="email">Email</label>
        <input class="field" type="text" id="email" name="email" placeholder="Your Email Address..">
        <br>
        <label for="service">Service</label>
        <input class="field"  type="text" id="service" name="service" placeholder="Service...">
        <br>
        <label for="message">Message</label>
        <textarea class="field" id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input  type="submit" name="submit" value="Submit">
    </form>
    </div>

</div>
</div>
</body>

<footer id="myFooter">
  <div class="footer-social">
    <div class="cont">
      <ul>
        <li>
        <p><a href="http://epalmada.pt/" target="_blank">EPALMADA</p></a>
        </li>
        <li><a href="sobre.html">Company Information</a></li>
        <a href="https://www.facebook.com/LeonaldoFaleiro0" class="social-icons" target="_blank">
          <li class="fab fa-facebook fa-2x"></li>
        </a>

        <a href="https://www.instagram.com/leonaldofaleiro_photos/" class="social-icons" target="_blank">
          <li class="fab fa-instagram fa-2x"></li>
        </a>
        <a href="https://www.youtube.com/channel/UC0V1rqBUBWGXn9uOKAE8eWg" class="social-icons" target="_blank">
          <li class="fab fa-youtube fa-2x"></li>
        </a>
        <li><a href="contacto.html">Contact us</a></li>
        <li>&COPY;JILFOTOGRAFIAS2022</li>
      </ul>
    </div>

  </div>
</footer>
</html>

<?php
if (!empty($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacto (fname, lname, email, service, message) 
            values ('$fname', '$lname', '$email', '$service', '$message')";

    if (mysqli_query($conn, $sql)){
        echo "New record added successfully";
    }else{
        echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}


?>