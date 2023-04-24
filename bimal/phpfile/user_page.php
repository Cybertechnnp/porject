<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css.css">
    <title>student</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
  .full-page-bg-image {
    background-image: url(clon.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    width: 100vw;
  }

  @media (max-width: 1199px) {
    .full-page-bg-image {
      background-size: contain;
    }
  }

  @media (max-width: 767px) {
    .full-page-bg-image {
      background-position: top;
      height: 50vh;
    }
  }
</style>

<body>
  <div class="sidebar">
    <div class="logo-details">
   
        <div class="logo_name">Green Peace</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Student profile</span>
       </a>
       <span class="tooltip">Student profile</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Result</span>
       </a>
       <span class="tooltip">Result</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Note pdf</span>
       </a>
       <span class="tooltip">Note pdf</span>
     </li>
     <li>
       <a href="#">
         <i class='fa-sharp fa-solid fa-pen-to-square' ></i>
         <span class="links_name">Assignment</span>
       </a>
       <span class="tooltip">Assignment</span>
     </li>
     <li>
       <a href="#">
         <i class='fa-solid fa-upload' ></i>
         <span class="links_name">Upload homework</span>
       </a>
       <span class="tooltip">Upload homework</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           -<img src="logo.png" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['user_name'] ?></div>
             <div class="job">student</div>
           </div>
         </div>
         <a href="login_form.php"> <button class='bx bx-log-out' id="log_out" style="background-color: red; color: white;"></button>
</a>
     </li>
    </ul>
  </div>
  <div class="full-page-bg-image"></div>


</body>

<script src="app.js"></script>
  <script src="https://kit.fontawesome.com/0c2e283219.js" crossorigin="anonymous"></script>
</html>
