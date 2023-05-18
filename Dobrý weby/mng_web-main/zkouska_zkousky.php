<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zkoska_zkousky.css">
    <link rel="stylesheet" href="profilovka.css">
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
<div class="profile-pic-div">
    <img src="image.jpg" id="photo">
    <input type="file" id="file">
    <label for="file" id="uploadBtn">Choose Photo</label>
</div>
      <div class="user-label">
        
        <h1 id="user" onclick="toggleMenu()">User</h1></div>
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
        <hr>
   <a href="settings.php" class="menu-item" id="profil">
      <p>Settings</p>
    </a>
    <hr>
    <a href="#" class="menu-item" >
      <p>Profile</p>
    </a>
    <hr>
    <a href="zkouska_zkousky_guest.php" class="menu-item" id="logout">
      <p>Logout</p>
    </a>
    <hr>
        </div>
      </div>
      
 
        <ul>
          <li><a href="Simple.html">Simple</a></li>
          <li><a href="Začínáme.html">Blockly</a></li>
          <li><a href="#">Lua</a><bgg/li>
        </ul>
      
    </nav>
  <a href="https://i.ytimg.com/vi/6SKmcvz1pos/maxresdefault.jpg"></a>

    
  
  </div>
  </div>


</div>
<script>
let subMenu = document.getElementById("subMenu");
 function toggleMenu(){
  subMenu.classList.toggle("open-menu");
 }
 
</script>
<script src="profilovka.js"></script>
</body>
</html>