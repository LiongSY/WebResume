
 <?php

 try{
     $conn = mysqli_connect("localhost","id17233628_resume","Lsycpl201225@","id17233628_contactus");
  
 } catch (mysqli_sql_Exception $ex) {
     echo("error in connection");
 }
     if(isset($_GET['submit'])){
         $name=$_GET['name'];
         $contact=$_GET['contact'];
         $email=$_GET['email'];
         $messages=$_GET['messages'];
         $resume_query="INSERT INTO `resume`(`name`, `contact`, `email`, `messages`) VALUES ('$name','$contact','$email','$messages');";
     
         try{
             $resume_result = mysqli_query($conn,$resume_query);
             if($resume_result){
                 if(mysqli_affected_rows($conn)>0){
                   
                 }else{
                     echo("Error in sending information");
                 }
             } 
         } catch (Exception $ex) {
          echo("error".$ex->getMessage());
         }
     }
 
 ?> 
 <html lang="en" dir="ltr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="contact.css">
     <link rel="stylesheet" href="toggle.css">
     <link rel="stylesheet" href="nav.css">
     <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <title>Form</title>
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
     
         <div class = "back">
  <div id = "open_button">
                 Contact Us
             </div>
              <div class = "contact_form">
                 <form method="GET" >
                     <input type="text" name="name" id="name" placeholder=" Name " required>
             
                     <input type="email" name="email" id="email" placeholder=" Email " required >
                 
                     <input type="text" name="contact" id="phone" placeholder=" Phone " autofocus> 
                 
                     <textarea name="messages" id="message_area" placeholder=" Message " required></textarea>
             
                     <input type="submit" value="Send" name="submit" id="send">
                 </form>  
             </div>
              <div class = "bottom"></div>			
             <div class = "left"></div>
             <div class = "right"></div>
             <div class = "top"></div> 
             <script src="contact.js"></script>  
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