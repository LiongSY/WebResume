<!DOCTYPE html>
<html LANG="en" dir="Itr">
    <head>
     <link rel ="stylesheet" href="nav.css">
     <link rel ="stylesheet" href="toggle.css">
     <link rel ="stylesheet" href="front.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name ="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="wrapper">
    <div class="static-txt">THIS IS OUR</div>
    <ul class="dynamic-txts">
      <li><span>Website</span></li>
    </ul>
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







</html>


    