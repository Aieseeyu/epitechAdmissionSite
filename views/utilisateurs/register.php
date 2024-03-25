<h1>Inscription</h1>
<?= getFormErrors(); ?>

<!-- <form method="POST">
    <div class="input">
<label for="login">Identifiant:</label>
<input type="text" name="login" placeholder="Pseudo"><br>
<label for="email">Email:</label>
<input type="email" name="email" placeholder="Votre email"><br>
<label for="password">Mot de passe:</label>
<input type="password" name="password" placeholder="Votre mot de passe"><br>
<label for="password">Répetez votre mot de passe:</label>
<input type="password" name="password_verify" placeholder="Répetez votre mot de passe"><br>
<label for="nom">Nom:</label>
<input type="text" name="nom" placeholder="Votre nom"><br>
<label for="prenom">Votre prénom:</label>
<input type="text" name="prenom" placeholder="Votre prénom"><br>
<label for="date_naissance">Date de naissance:</label>
<input type="date" name="naissance" pattern="\d{2}-\d{2}-\d{4}" placeholder="Date de naissance sous le format jj//mm//aaaa"><br>
<label for="num_telephone">Numéro de téléphone:</label>
<input type="text" name="tel" placeholder="Numéro de téléphone sous le format 06..."><br>
<label for="sexe">Votre sexe:</label>
</div>
<div class="select">
    <select name="sexe">
        <option value="">Séléctionner</option>
        <option value="1">Femme</option>
        <option value="0">Homme</option>
     </select><br>
</div>

     <label for="adresse_postale">Adresse:</label>
     <div class="textarea">
		<textarea name="adresse" id="adresse_postale" rows="5" max lenght="255" cols="10" placeholder="adresse">Adresse</textarea>
<br>
<div>
<label for="code_postal">Code postal:</label>
<input type="code_postal" name="postal" placeholder="Code postal"><br>
<label for="ville">Ville:</label>
<input type="ville" name="ville" placeholder="Ville"><br>
<input type="hidden" name="c" value="User"><br> 
<input type="hidden" name="m" value="register">
<div class="submit">    
<input type="submit" name="Register" value="S'inscrire">
</div>
</form> -->


<div class="container">
  <form method="post">

    <input type="hidden" name="c" value="User"><br> 
    <input type="hidden" name="m" value="register">

    <!-- Prenom input -->
    <div class="form-outline mb-4">
      <input type="text" name="firstName" id="form2Example1" class="form-control" />
      <label class="form-label" for="form2Example1">First Name</label>
    </div>

    <!-- Nom input -->
    <div class="form-outline mb-4">
      <input type="text" name="lastName" id="form2Example2" class="form-control" />
      <label class="form-label" for="form2Example2">Last Name</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" name="email" id="form2Example4" class="form-control" />
      <label class="form-label" for="form2Example4">Mail</label>
    </div>

    <!-- Identifiant input -->
    <div class="form-outline mb-4">
      <input type="text" name="login" id="form2Example5" class="form-control" />
      <label class="form-label" for="form2Example5">Login</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="password" id="form2Example6" class="form-control" />
      <label class="form-label" for="form2Example6">Password</label>
    </div>

    <!-- Confirm Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="passwordConfirm" id="form2Example7" class="form-control" />
      <label class="form-label" for="form2Example7">Confirm Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Already a member? <a href="<?= URL_SITE; ?>?p=login">Log in</a></p>
    </div>
  </form>
</div>
