
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vedlejšák.css">
    <script src="vedlejšák.js"></script>
    <title>IoT Craft</title>
</head>
<body>
  <div class >
    <header></header>
  </div>
  
  <div class="wrapper">
    <!-- Black bar container -->
  <div class="black-bar">
    
    
    <nav class="navbar">
      <!-- User label -->
      <div class="user-label">User</div>
      <!-- Popup menu -->
        <div class="popup-menu">
        <div class="menu-item">Profile</div>
        <div class="menu-item">Settings</div>
        <div class="menu-item">Logout</div>
      </div>
        <ul>
        
          <li><a href="#">Simple</a></li>
          <li><a href="#">Blockly</a></li>
          <li><a href="#">Lua</a><bgg/li>
        
        </ul>
      
    </nav>
   

    
  
  </div>
  </div>


</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>IoT Craft</title>
</head>
<body>
  <div class >
    <header></header>
  </div>
  
  <div class="wrapper">
    <!-- Black bar container -->
  <div class="black-bar">
    
    
    <nav class="navbar">
      <!-- User label -->
      <div class="user-label">User</div>
      <!-- Popup menu -->
      <div class="popup-menu">
        <div class="menu-item">Profile</div>
        <div class="menu-item"><a href="register_form.php">Register</a> 
      </div>
        <div class="menu-item"><a href="login_form.php">Login</a></div>
      </div>
        <ul>
        
          <li><a href="Simple.html">Simple</a></li>
          <li><a href="Začínáme.html">Blockly</a></li>
          <li><a href="#">Lua</a><bgg/li>
        
        </ul>
      
    </nav>
   

    
  
  </div>
  </div>
  <?php
  session_start();
  
  // Check if user is logged in
  $loggedIn = isset($_SESSION['user_id']);
  
  // Function to display the popup menu
  function displayPopupMenu($loggedIn)
  {
      if ($loggedIn) {
          // Display menu options for logged-in users
          echo '
          <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
          </ul>';
      } else {
          // Display menu options for non-logged-in users
          echo '
          <ul>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
          </ul>';
      }
  }
  
  // Example usage:
  displayPopupMenu($loggedIn);
  ?>

</div>
</body>
</html>
</body>
</html>