<?php get_header(); ?>

    <!-- login form -->
    <main>
      <div class="container">
        <h1>Nieuw wachtwoord instellen
        </h1>
      </div>
      <section class="c-profielform">
        <div class="container">
          <form class="o-form" action="<?php echo get_template_directory_uri() . "/nieuw-wachtwoord-verwerk.php" ?>" method="POST">
            <div class="row">
              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="password"
                  name="oudWachtwoord"
                  id="oudWachtwoord"
                  class="form-control c-form__input validate"
                  placeholder="Oud wachtwoord"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="oudWachtwoord"> Oud wachtwoord </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig voornaam"
                ></span>
                <?php
                
                if($_SESSION["login"] == "foutOudWachtwoord"){
                  echo "<p style='color:red;'>Geef het correcte wachtwoord op</p>";
                }

              ?>
              </div>


              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="password"
                  name="nieuwWachtwoord"
                  id="nieuwWachtwoord"
                  class="form-control c-form__input validate"
                  placeholder="password"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="nieuwWachtwoord"> Nieuw wachtwoord </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig password"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="password"
                  name="nieuwWachtwoordBevestiging"
                  id="nieuwWachtwoordBevestiging"
                  class="form-control c-form__input validate"
                  placeholder="Bevestig nieuw wachtwoord"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="nieuwWachtwoord"> Bevestig nieuw wachtwoord </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig password"
                ></span>
                <?php
                
                if($_SESSION["login"] == "foutBevestiging"){
                  echo "<p style='color:red;'>Wachtwoorden komen niet overeen</p>";
                }

              ?>
              </div>


              <div
              class="col s6 m3 l3 xl2 offset-s2 offset-m4 offset-l4 offset-xl5 form-group c-form__group"
              >
              <!-- <input class="o-button o-button-submit"  type="submit" value="Login"></input> -->
              <input class="o-button o-button-form" type="submit" name="submit">
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>

 <?php get_footer(); ?>