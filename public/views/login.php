<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href="public/css/login.css" />
  <title>LOGIN PAGE</title>
</head>

<body>
  <div class="container">
    <div class="login-container">
      <form class="login" action="login" method="POST" >
        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <div class="logo-login">
          <img src="public/img/logo.svg" />
        </div>
        <input name="email" type="text" placeholder="email@email.com" />
        <input name="password" type="password" placeholder="password" />
        <button class="sign-in">Sign in</button>
        <button class="forgot-or-sign-up">Forgot password?</button>
        <button class="forgot-or-sign-up">Sign up</button>
      </form>
    </div>
  </div>
</body>
>