<?php get_header(); ?>
    <main>
        <section class="c-contactform">
          <div class="container">
            <h1>Offerte nieuwe verwarmingsketel</h1>
            <h2 class="c-offerte-h2">
              Vertel ons wat meer over uw woonsituatie.
            </h2>
            <?php echo do_shortcode('[wpforms id="442"]')?>
            <!-- <form class="o-form" action="/create-offerte-verwerk.php" method="POST">
              <div class="row">
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">Bent u:</p>
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  <label>
                    <input name="eigenaar" type="radio" checked />
                    <span>Eigenaar</span>
                  </label>
                  <label>
                    <input name="eigenaar" type="radio" checked />
                    <span>Huurder</span>
                  </label>
                </div>
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">Je wil een nieuwe ketel voor:</p>
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  <select class="form-control browser-default" name="soort_woning">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Huis</option>
                    <option value="2">Een appartement</option>
                    <option value="3">Meerdere huizen</option>
                    <option value="4">Residentie</option>
                  </select>
                </div>
  
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">Uw woning is:</p>
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  <label>
                    <input name="woning" type="radio" checked />
                    <span>Een bestaande woning</span>
                  </label>
                  <br>
                  <label>
                    <input name="woning" type="radio" checked />
                    <span>Een nieuwbouw (1e bewoning)</span>
                  </label>
                </div>
              </div>
                <h2 class="c-offerte-h2">
                  Vertel ons wat meer over je verwarmingssituatie en –wensen.
                </h2>
              <div class="row">
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">Huidig verwarmingstype:</p>
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  <select class="form-control browser-default" name="huidig_verwarmingstype">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Gas</option>
                    <option value="2">Gas met warme lucht</option>
                    <option value="3">Stookolie</option>
                    <option value="4">Elektrisch</option>
                    <option value="5">Warmtepomp</option>
                    <option value="6">Ander of niet zeker</option>
                  </select>
                </div>
  
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">Gewenst verwarmingstype:</p>
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  <select class="form-control browser-default" name="gewenst_verwarmingstype">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Gas</option>
                    <option value="2">Gas met warme lucht</option>
                    <option value="3">Stookolie</option>
                    <option value="4">Elektrisch</option>
                    <option value="5">Warmtepomp</option>
                    <option value="6">Ander of niet zeker</option>
                  </select>
                </div>
  
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  Wanneer wil je je ketel laten vervangen?
                </p>
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  <select class="form-control browser-default" name="wanneer">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">
                      Het is niet dringend: ik kan nog wachten tot de zomer
                    </option>
                    <option value="2">
                      Het is niet dringend: in de komende weken/maanden
                    </option>
                    <option value="3">
                      Zo snel mogelijk – ik zit zonder verwarming
                    </option>
                    <option value="4">
                      Zo snel mogelijk – ik zit zonder verwarming en warm water
                    </option>
                  </select>
                </div>
              </div>
                <h2 class="c-offerte-h2">Je contactgegevens</h2>
              <div class="row">
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  Vertel ons waar we je overdag kunnen bereiken zodat we jouw
                  aanvraag kunnen behandelen.
                </p>
  
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig voornaam"></span>
                </div>
  
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig naam"></span>
                </div>
  
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig e-mailadres"></span>
                </div>
  
                <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
                  <input
                    type="tel"
                    name="tel"
                    id="tel"
                    pattern="((^[+\s0-9]{2,6}[\s\./0-9]*$))"
                    class="form-control c-form__input validate"
                    placeholder="Telefoonnummer"
                    minlength="10"
                    maxlength=11
                    min="0000000001"
                    max="99999999999"
                    required
                  />
                  <label class="c-form__label" for="tel"> Telefoonnummer </label>
                  <span class="helper-text" data-error="Dit is geen geldig telefoonnummer"></span>
                </div>
              </div>
                <h2 class="c-offerte-h2">
                  Adres waar je oude ketel wordt vervangen door een nieuwe.
                </h2>
              <div class="row">
                <p class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3">
                  Onze technieker zal vrijblijvend bij je langskomen om te
                  bekijken welke verwarmingsketels geschikt zijn voor jouw woning.
                </p>
  
                <div class="col s12 m12 l6 xl4 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig straat naam"></span>
                </div>
  
                <div class="col s12 m12 l6 xl1 offset-s0 offset-m0 offset-l3  form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig nummer"></span>
                </div>
  
                <div class="col s12 m12 l6 xl1 offset-s0 offset-m0 offset-l3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig bus"></span>
                </div>
  
                <div class="col s12 m12 l6 xl2 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldig postcode"></span>
                </div>
  
                <div class="col s12 m12 l6 xl4 offset-s0 offset-m0 offset-l3 form-group c-form__group">
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
                  <span class="helper-text" data-error="Dit is geen geldige gemeente"></span>
                </div>
              </div>
                <h2 class="c-offerte-h2">Heb je nog opmerkingen?</h2>
              <div class="row">
                  <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
                    <textarea                   
                    type="text"
                    name="opmerkingen"
                    id="opmerkingen"
                    class="materialize-textarea"
                    placeholder="Opmerkingen?"
                    minlength="2"
                    required>
                    </textarea>
                    <label class="c-form__label" for="opmerkingen"> Opmerkingen </label>
                  </div>
                  <input type="submit" name="submit">
              </div>
            </form> -->
          </div>
        </section>
      </main>
<?php get_footer(); ?>