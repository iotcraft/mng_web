<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="blockly.css">
    <script src="https://unpkg.com/blockly/blockly.min.js"></script>
    <script src="https://unpkg.com/blockly/blocks/logic.js"></script>
    <script src="https://unpkg.com/blockly/blocks/loops.js"></script>
    <script src="https://unpkg.com/blockly/blocks/math.js"></script>
    <script src="https://unpkg.com/blockly/blocks/text.js"></script>
    <script src="https://unpkg.com/blockly/blocks/lists.js"></script>
    <script src="https://unpkg.com/blockly/blocks/colour.js"></script>
    <script src="https://unpkg.com/blockly/blocks/variables.js"></script>
    <script src="https://unpkg.com/blockly/blocks/procedures.js"></script>
    <script src="https://unpkg.com/blockly/generators/lua.js"></script>
    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
    
  <style>
    .site {
      position: absolute;
      top: 56px;
      left: 0;
      right: 0;
      bottom: 0;
      transition: transform 0.3s ease;
    }

    .site-hidden {
      transform: translateX(-100%);
    }
    .btn-primary{
      margin-top: 0px;
      }
      .container-fluid{
        margin-top: 0px 0px 0px;
        padding-right: 600px ;
      }
      .rounded-circle{
        width: 35px;
        height: 35px ;
      }
      .site{
        margin-top: 6%;
      }

      #ul-slider{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      display: flex;
      background: #000;
      border-radius: 30px;
      overflow: hidden;
      margin: 0;
      padding: 0;
      width: 255px;   
      height: 50px;
    }
    #ul-slider #li-slider{
      list-style: none;
      width: 85px;
    }

    #ul-slider #li-slider #a-slider{
      display: block;
      padding: 13px;
      text-align: center;
      color: #fff;
      transition: 0.5s;
      text-decoration: none;
    }
    #ul-slider #li-slider.active #a-slider{
      color: #262626;
    }
    .slide{
      position: absolute;
      width: 150px;
      height: 100px;
      top: 0;
      left: 0;
      background: #fff;
      z-index: -1;
      transition: 0.5s;
      opacity: 0;
    }
    #ul-slider #li-slider:nth-child(1).active ~ .slide{
      left: 0;
      opacity: 1;
    }
    #ul-slider #li-slider:nth-child(2).active ~ .slide{
      left: 85px;
      opacity: 1;
    }

    #ul-slider #li-slider:nth-child(3).active ~ .slide{
      left: 170px;
      opacity: 1;
    }


  </style>
</head>

<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <div class="container-fluid mt-3">
      
      <button class="btn btn-primary btn-dark btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo"> Guest</button>
    </div>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul id="ul-slider">
          <li class="active" id="li-slider">
            <a class="nav-link" href="#site1" class="tab" for="radio-1" id="a-slider">Simple</a>
          </li>
          <li id="li-slider">
            <a class="nav-link"  for="radio-2" class="tab" href="#site2" id="a-slider">Blockly</a>
          </li>
          <li id="li-slider">
            <a class="nav-link" href="#site3" class="tab" for="radio-3" id="a-slider">Lua</a>
          </li>
          <li class="slide" id="li-slider"></li>
        </ul>
      </div>
    </div>
  </nav>

   <div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
        <h1  class="offcanvas-title">Settings</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <p> <a href="register.php">register</a></p>
        <p>  <a href="login.php">login</a></p>
    </div>

</div>
  <div id="site1" class="site">
    <div class="container">
      <h1>Site 1</h1>
      <p>This is the content of Site 1.</p>
    </div>
  </div>

  <div id="site2" class="site site-hidden">
      <div class="container">
        
        <div id="blocklyDiv"></div>
  
        <pre id="codeArea"></pre>
        <button onclick="runCode()" id="generateCodeButton">Generate Code</button>

        <button id="sendCodeButton">Send Code via MQTT</button>


      </div>
    </div>
  </div>

  <div id="site3" class="site site-hidden">
    <div class="container">
      <h1>Site 3</h1>
      <p>This is the content of Site 3.</p>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
  <script>
    $(document).ready(function() {
      $('.nav-link').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('.site').addClass('site-hidden');
        $(target).removeClass('site-hidden');
      });
    });

    
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('li').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
      })
    })
  </script>
  <script src="blockly.js"></script>
</body>

</html>