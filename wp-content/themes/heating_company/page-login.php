<?php get_header(); ?>

    <!-- login form -->
    <main>
      <div class="container">
        <h1>Login</h1>
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
                  type="password"
                  name="password"
                  id="password"
                  class="form-control c-form__input validate"
                  placeholder="password"
                  minlength="2"
                  required
                />
                <label class="c-form__label" for="naam"> Wachtwoord </label>
                <span
                  class="helper-text"
                  data-error="Dit is geen geldig password"
                ></span>
              </div>
              <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                <p>
                  Nog geen account?
                  <a class="c-registeerlink-opmaak" href="registeer.html">
                    Registreer </a
                  >je dan nu!
                </p>
              </div>
              <div
              class="col s6 m3 l3 xl2 offset-s2 offset-m4 offset-l4 offset-xl5 form-group c-form__group"
              >
              <!-- <input class="o-button o-button-submit"  type="submit" value="Login"></input> -->
              <input type="submit" name="submit">
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>

<?php get_footer(); ?>