<?php get_header(); ?>
      <main>
            <section class="c-contactform">
                <div class="container">
                    <h1>Contacteer ons</h1>
                    <p>We helpen graag met al je wensen en vragen. Vul hieronder je bericht in en je krijgt antwoord binnen de 24 uur.</p>

                    <form class="col-6 offset-3 o-form" action="/create-bericht-verwerk.php" method="POST">
                      <div class="row">
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
                        <label class="c-form__label" for="opmerkingen"> Hoe kunnen wij u helpen </label>
                      </div>

                      <div class="col s12 m12 l6 xl6 offset-s0 offset-m0 offset-l3 offset-xl3 form-group c-form__group">
                        <label>
                          <input type="checkbox" name="privacy" class="filled-in" />
                          <span class="c-form-span">Ik ga akkoord met hetd <a class="c-privacy-link" href="policy.html">privacy statement</a> </span>
                        </label>
                      </div>

                      </div>
                      <input type="submit" name="submit">
                      <!-- <a class="o-button o-button-effect o-button-effect-1 center" name="submit" href="">Stel je vraag</a> -->
                    </form>
                </div>
            </section>
            <section class="c-contactgegevens">
                <div class="container">
                    <h2>The Heating Company</h2>
                    <p>Industriestraat 15</br>8500 Kortrijk</br>België</p>
                    <p>Tel. +32 56 56 16</br><a href="mailto:info@theheatingcompany.be">info@theheatingcompany.be</a></p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.5254682850923!2d3.106184815641067!3d51.098764479570015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c34dab7d28055b%3A0x2b312375b141287e!2sIndustriestraat%2015%2C%208211%20Zedelgem!5e0!3m2!1snl!2sbe!4v1613140814831!5m2!1snl!2sbe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>
        
      </main>
<?php get_footer(); ?>