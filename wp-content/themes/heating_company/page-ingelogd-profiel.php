<?php get_header(); ?>
    <div class="container">
      <a class="o-button o-button-nav" href="http://localhost/afspraak-ingelogd">Onderhoud</a>
      <a class="o-button o-button-nav" href="http://localhost/ingelogd-installatie">Installatie</a>
      <a class="o-button o-button-nav-active" href="">Mijn profiel</a>
      <a class="o-button o-button-nav" href="http://localhost/wachtwoord-wijzigen">Wachtwoord wijzigen</a>
      <h1 class="c-login-titel">Jouw profiel</h1>
    </div>
    <section class="c-profielform">
      <div class="container">
        <form class="o-form" method="POST" action="<?php echo get_template_directory_uri() . "/update-profiel-verwerk.php" ?>">
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
                value="<?php echo $_SESSION["voornaam"]; ?>"
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
                value="<?php echo $_SESSION["naam"]; ?>"
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
                type="email"
                name="email"
                id="email"
                class="form-control c-form__input validate"
                placeholder="E-mail"
                minlength="2"
                value="<?php echo $_SESSION["email"]; ?>"
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
                name="telefoon"
                id="telefoon"
                pattern="((^[+\s0-9]{2,6}[\s\./0-9]*$))"
                class="form-control c-form__input validate"
                placeholder="Telefoonnummer"
                minlength="10"
                maxlength="11"
                min="0000000001"
                max="99999999999"
                value="<?php echo $_SESSION["telefoon"]; ?>"
                required
              />
              <label class="c-form__label" for="telefoon"> Telefoonnummer </label>
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
                value="<?php echo $_SESSION["straat"]; ?>"
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
                value="<?php echo $_SESSION["nummer"]; ?>"
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
                value="<?php echo $_SESSION["bus"]; ?>"
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
                value="<?php echo $_SESSION["postcode"]; ?>"
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
                class="form-control c-form__input validate"
                placeholder="Gemeente"
                minlength="2"
                value="<?php echo $_SESSION["gemeente"]; ?>"
                required
              />
              <label class="c-form__label" for="gemeente"> Gemeente </label>
              <span
                class="helper-text"
                data-error="Dit is geen geldige gemeente"
              ></span>
            </div>

            <?php
              $value_soortGebouw
            ?>
            <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
              <select class="form-control browser-default" name="soort_gebouw" style="margin-bottom: 20px;">
                <option value="" disabled>Soort gebouw</option>
                <?php
                
                  if($_SESSION["soort_gebouw"] == 'woning'){
                    echo "<option value='woning' selected>Woning</option>
                    <option value='residentie'>Residentie</option>";
                  }elseif($_SESSION["installatie"] == 'waterpomp'){
                    echo "<option value='woning'>Woning</option>
                    <option value='residentie' selected>Residentie</option>";
                  }
                
                ?>
              </select>
            </div>

            <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
              <select class="form-control browser-default" name="installatie" style="margin-bottom: 20px;">
                <option value="" disabled selected>Huidige installatie</option>
                <?php
                
                  if($_SESSION["installatie"] == 'condensatieketel'){
                    echo "<option value='condensatieketel' selected>Condensatieketel</option>
                    <option value='waterpomp'>Waterpomp</option>
                    <option value='zonneboiler'>Zonneboiler</option>";
                  }elseif($_SESSION["installatie"] == 'waterpomp'){
                    echo "<option value='condensatieketel'>Condensatieketel</option>
                    <option value='waterpomp' selected>Waterpomp</option>
                    <option value='zonneboiler'>Zonneboiler</option>";
                  }elseif($_SESSION["installatie"] == 'zonneboiler'){
                    echo "<option value='condensatieketel'>Condensatieketel</option>
                    <option value='waterpomp'>Waterpomp</option>
                    <option value='zonneboiler' selected>Zonneboiler</option>";
                  }
                
                ?>
              </select>
            </div>

            <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
              <input
                type="date"
                name="datum_installatie"
                id="datum_installatie"
                class="form-control c-form__input validate"
                placeholder="Datum installatie"
                value="<?php echo $_SESSION["datum_installatie"]; ?>"
                required
              />
              <label class="c-form__label" for="datum_installatie"> Datum installatie </label>
              <span class="helper-text" data-error="Dit is geen geldige datum"></span>
            </div>

            <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
              <input
                type="date"
                name="laatste_onderhoud"
                id="laatste_onderhoud"
                class="form-control c-form__input validate"
                placeholder="Laatste onderhoud"
                value="<?php echo $_SESSION["laatste_onderhoud"]; ?>"
                required
              />
              <label class="c-form__label" for="laatste_onderhoud"> Datum laatste onerhoud </label>
              <span class="helper-text" data-error="Dit is geen geldige datum"></span>
            </div>

            <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
                      <input
                        type="text"
                        name="staat"
                        id="staat"
                        class="form-control c-form__input validate"
                        placeholder="Staat"
                        value="<?php echo $_SESSION["staat"]; ?>"
                        required
                      />
                      <label class="c-form__label" for="staat"> Staat van de installatie </label>
                      <span class="helper-text" data-error="Dit is geen geldige datum"></span>
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
                        value="<?php echo $_SESSION["gebruikersnaam"]; ?>"
                        required
                      />
                      <label class="c-form__label" for="gebruikersnaam">
                        Gebruikersnaam
                      </label>
                      <span
                        class="helper-text"
                        data-error="Dit is geen geldige gebruikersnaam"
                      ></span>
              </div>

              <div
                      class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group"
                    >
                      <input
                        type="password"
                        name="wachtwoord"
                        id="wachtwoord"
                        class="form-control c-form__input validate"
                        placeholder="Wachtwoord"
                        minlength="2"
                        maxlength="8"
                        value="wachtwoord"
                        required
                        disabled
                      />
                      <label class="c-form__label" for="naam"> Wachtwoord </label>
                      <span
                        class="helper-text"
                        data-error="Dit is geen geldig password"
                      ></span>
              </div>


            <div class="col s12 m12 l3 xl3 offset-s0 offset-m4 offset-l4 offset-xl5 form-group c-form__group">
              <input class="o-button o-button-effect o-button-effect-1" type="submit" name="submit">
            </div>
          </div>
        </form>
      </div>
    </section>
<?php get_footer(); ?>