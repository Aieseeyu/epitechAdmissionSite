<?php /*if(!empty($_GET['id'])){
    $a = new User();
    $user=$a->login($_GET['id']);
}  
if(!$user) die('Identifiant ou mot de passe incorrect'); */?>
<h1>Connexion</h1>
<?= getFormErrors(); ?>
<!-- <form  method="post">
  <div class="imgcontainer">
    
  </div>

  <div class="container">
  <input type="hidden" name="c" value="user"><br> 
  <input type="hidden" name="m" value="login">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>

  </div>

  <small>Envie de nous rejoindre ?</small> 

  <a href="<?= URL_SITE ?>?p=register" class="w3-bar-item w3-button">Créer un compte</a> -->


  <!-- <form class="form-signin">
    
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

</form> -->

<div class="container">
  <form method="post">

    <input type="hidden" name="c" value="User"><br> 
    <input type="hidden" name="m" value="login">

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="text" name="login" id="form2Example1" class="form-control" />
      <label class="form-label" for="form2Example1">Login</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="password" id="form2Example2" class="form-control" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="<?= URL_SITE; ?>?p=register">Register</a></p>
    </div>
  </form>
</div>