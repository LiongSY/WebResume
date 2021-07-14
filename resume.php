<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume.css">
    <link rel="stylesheet" href="toggle.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Resume</title>
</head>
<body>
<nav>
    <div id="toggle">
        <i class="indicator"></i>
    </div>

    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="resume.php">Download CV</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
</nav>

    <div class="container">
        <div class="box">
          <span></span>
          <div class="content">
              <h1>LIONG</h1>
              <h2>Soon Yik</h2> 
              <p>Hire Me!</p>
              <a href="Liong Soon Yik.pdf" download>Download CV</a>
          </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h1>CHIN</h1>
                <h2>Poh Lian</h2> 
                <p>Hire Me!</p>
                <a href="Chin Poh Lian.pdf" download>Download CV</a>
            </div>
          </div>
    </div>
    <script>
        const body = document.querySelector('body');
        const toggle = document.getElementById('toggle');
        toggle.onclick =function(){
            toggle.classList.toggle ('active')
            body.classList.toggle('active');
        }
    </script> 
 </body>