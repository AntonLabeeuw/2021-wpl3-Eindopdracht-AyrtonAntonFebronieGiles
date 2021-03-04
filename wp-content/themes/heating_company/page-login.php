<?php get_header(); ?>

    <!-- login form -->
    <main>
      <div class="container">
        <h1>Login</h1>
      </div>
      <section class="c-profielform">
        <div class="container">
          <form class="o-form" method="POST" action="<?php echo get_template_directory_uri() . "/verwerk-login.php" ?>">
            <div class="row">
              <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
                <input type="text" name="gebruikersnaam" id="gebruikersnaam" class="form-control c-form__input validate" placeholder="gebruikersnaam" minlength="2" required />
                <label class="c-form__label" for="gebruikersnaam"> Gebruikersnaam </label>
                <span class="helper-text" data-error="Dit is geen geldige voornaam" ></span>
              </div>

              <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
                <input type="password" name="wachtwoord" id="wachtwoord" class="form-control c-form__input validate" placeholder="wachtwoord" minlength="2" required/>
                <label class="c-form__label" for="naam"> Wachtwoord </label>
                <span class="helper-text" data-error="Foutief wachtwoord" ></span>
              </div>
              <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                <p>Nog geen account?<a class="c-registeerlink-opmaak" href="http://localhost/registratie/"> Registreer </a>je dan nu!</p>
              </div>
              <?php
              
              if ($_SESSION["login"] == "mislukt"){
                echo "<div class='col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3'>
                <p style='color: red;d'>Foutief wachtwoord of gebruikersnaam, probeer opnieuw!</p>
              </div>";
              }

              if ($_SESSION["login"] == "registratieGelukt"){
                echo "<div class='col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3'>
                <p style='color: green;d'>U bent geregistreerd, log in om uw profiel te bekijken!</p>
              </div>";
              }
              
              ?>
              <div class="col s6 m3 l3 xl2 offset-s2 offset-m4 offset-l4 offset-xl5 form-group c-form__group">
                  <input class="o-button o-button-form" type="submit" name="submit">
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>

<?php get_footer(); ?>