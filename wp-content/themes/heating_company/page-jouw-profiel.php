
<?php get_header(); ?>
    <main>
      <div class="container">
        <a class="o-button o-button-nav" href="">Onderhoud</a>
        <a class="o-button o-button-nav" href="">Installatie</a>
        <a class="o-button o-button-nav-active" href="">Mijn profiel</a>
        <h1 class="c-login-titel"><?php echo get_theme_mod('setting-jouw-profiel-h1'); ?></h1>
      </div>
      <section class="c-profielform">
        <div class="container">
          <form class="o-form">
            <div class="row">
              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="text"
                  name="voornaam"
                  id="voornaam"
                  class="form-control c-form__input validate"
                  placeholder="Voornaam"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="voornaam"> Voornaam </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig voornaam"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="text"
                  name="naam"
                  id="naam"
                  class="form-control c-form__input validate"
                  placeholder="Naam"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="naam"> Naam </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig naam"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="text"
                  name="gebruikersnaam"
                  id="gebruikersnaam"
                  class="form-control c-form__input validate"
                  placeholder="Gebruikersnaam"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="gebruikersnaam">
                  Gebruikersnaam
                </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig gebruikersnaam"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control c-form__input validate"
                  placeholder="E-mail"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="email"> E-mail </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig e-mailadres"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="tel"
                  name="tel"
                  id="tel"
                  pattern="((^[+\s0-9]{2,6}[\s\./0-9]*$))"
                  class="form-control c-form__input validate"
                  placeholder="Telefoonnummer"
                  minlength="10"
                  maxlength="11"
                  min="0000000001"
                  max="99999999999"
                  required
                />
                <label class="c-form__label" for="tel"> Telefoonnummer </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig telefoonnummer"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl4 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="text"
                  name="straat"
                  id="straat"
                  class="form-control c-form__input validate"
                  placeholder="straat"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="straat"> Straat </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig straat naam"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl1 offset-s0 offset-m0 offset-l3 form-group c-form__group"
              >
                <input
                  type="number"
                  name="nummer"
                  id="nummer"
                  class="form-control c-form__input validate"
                  data-length="4"
                  placeholder="Nr"
                  minlength="1"
                  maxlength="4"
                  min="1"
                  max="1000"
                  required
                />
                <label class="c-form__label" for="nummer"> Nr </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig nummer"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl1 offset-s0 offset-m0 offset-l3 form-group c-form__group"
              >
                <input
                  type="text"
                  name="bus"
                  id="bus"
                  class="form-control c-form__input validate"
                  placeholder="bus"
                  minlength="2"
                  maxlength="2"
                  required
                />
                <label class="c-form__label" for="bus"> Bus </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig bus"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl2 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
                <input
                  type="number"
                  name="postcode"
                  id="postcode"
                  class="form-control c-form__input validate"
                  placeholder="Postcode"
                  data-length="4"
                  minlength="4"
                  maxlength="4"
                  min="1000"
                  max="9999"
                  required
                />
                <label class="c-form__label" for="Postcode"> Postcode </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig postcode"
                ></span>
              </div>

              <div
                class="col s12 m12 l6 xl4 offset-s0 offset-m0 offset-l3 form-group c-form__group"
              >
                <input
                  type="text"
                  name="gemeente"
                  id="gemeente"
                  class="form-control c-form__input"
                  placeholder="Gemeente"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="gemeente"> Gemeente </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldige gemeente"
                ></span>
              </div>

              <div
              class="col s12 m12 l6 xl4 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
              >
              <a type="submit" class="o-button col-2 offset-5">Verander</a>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>

    <?php get_footer( );?>

