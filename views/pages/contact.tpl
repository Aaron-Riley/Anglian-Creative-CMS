{extends file="layouts/mainhome.tpl"}
{block name="content"}
    <section class="section section-md bg-default" id="contacts">
        <div class="container">
          <div class="row row-fix row-30 align-items-center justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-xl-5 col-lg-8 col-md-9 text-center text-xl-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <h6>Contact Our Team</h6>
              <h2>Get in touch with us</h2>
              <p class="big">If you have a question or a testimonial for us, feel free to contact us using the form on the right.</p>
            </div>
            <div class="col-xl-7 col-lg-9 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <!--RD Mailform-->
              <form class="rd-form rd-mailform rd-form-corporate" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                <div class="row row-fix row-20 row-narrow">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-name">Your name <span class="text-primary">*</span></label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-email">Your e-mail address <span class="text-primary">*</span></label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <textarea class="form-input" id="contact-message" name="message"></textarea>
                      <label class="form-label rd-input-label" for="contact-message">Your message</label>
                    </div>
                  </div>
                </div>
                <button class="button button-secondary button-nuka" type="submit">Send<span class="button-overlay"></span></button>
              </form>
            </div>
          </div>
        </div>
      </section>
{/block}