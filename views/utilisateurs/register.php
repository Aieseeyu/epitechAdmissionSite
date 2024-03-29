<h1>Inscription</h1>
<?= getFormErrors(); ?>

<div class="container col-4">

  <form method="post">

    <input type="hidden" name="c" value="User"><br> 
    <input type="hidden" name="m" value="register">

    <!-- Prenom input -->
    <div class="form-floating mb-4">
      <input type="text" name="firstName" id="firstName" class="form-control" placeholder=""/>
      <label class="floatingInput" for="firstName">First Name</label>
    </div>

    <!-- Nom input -->
    <div class="form-floating mb-4">
      <input type="text" name="lastName" id="lastName" class="form-control" placeholder=""/>
      <label class="floatingInput" for="lastName">Last Name</label>
    </div>

    <!-- Email input -->
    <div class="form-floating mb-4">
      <input type="email" name="email" id="email" class="form-control" placeholder=""/>
      <label class="floatingInput" for="email">Mail</label>
    </div>

    <!-- Identifiant input -->
    <div class="form-floating mb-4">
      <input type="text" name="login" id="login" class="form-control" placeholder=""/>
      <label class="floatingInput" for="login">Login</label>
    </div>

    <!-- Password input -->
    <div class="form-floating mb-4">
      <input type="password" name="password" id="password" class="form-control" placeholder=""/>
      <label class="floatingInput" for="password">Password</label>
    </div>

    <!-- Confirm Password input -->
    <div class="form-floating mb-4">
      <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder=""/>
      <label class="floatingInput" for="passwordConfirm">Confirm Password</label>
    </div>

    <!-- Submit button -->
    <div class="text-center ">
      <button type="submit" class="btn btn-primary btn-block mb-4 col-4">Register</button>
    </div>

    <!-- Register buttons -->
    <div class="text-center ">
      <p>Already a member? <a href="<?= URL_SITE; ?>?p=login">Log in</a></p>
    </div>

  </form>

</div>
