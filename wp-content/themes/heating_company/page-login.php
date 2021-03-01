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
                <p>
                  Nog geen account?
                  <a class="c-registeerlink-opmaak" href="http://localhost/registratie/">
                    Registreer </a
                  >je dan nu!
                </p>
              </div>
              <div
              class="col s6 m3 l3 xl2 offset-s2 offset-m4 offset-l4 offset-xl5 form-group c-form__group"
              >
               <!-- <input class="o-button o-button-submit"  type="submit" value="Login"></input>  -->

              </div>
            </div>
            <input type="submit" name="submit">
          </form>
        </div>
      </section>
    </main>

<?php get_footer(); ?>