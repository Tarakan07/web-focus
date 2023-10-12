<section class="section-std  contact-form-section">
  <div class="container">
    <div class="wow arrow-fall-down">
      <div class="arrow-fall"></div>
      <div class="arrow-fall"></div>
      <div class="arrow-fall"></div>
      <div class="arrow-fall"></div>
    </div>

    <form class="tmpl-contact-form" action="#">
      <fieldset>
        <legend>
          <h2 class="section-title">
            Поможем вам определиться!
          </h2>
          <p>
            Если у вас есть вопросы по формату, или вы не знаете, что выбрать, <br> заполните этот бриф, и мы перезвоним вам.
          </p>
        </legend>

        <div class="contact-form__inputs-wrp">
          <div class="check-box-wrp">
            <label>
              <input value='разработка' type="radio" name="format-kind" id="format-develop">
              <div class="format-kind">#разработка</div>
            </label>
            <label>
              <input value="дизайн" type="radio" name="format-kind" id="format-design">
              <div class="format-kind">#дизайн</div>
            </label>
            <label>
              <input value="копирайтинг" type="radio" name="format-kind" id="format-copyriting">
              <div class="format-kind">#копирайтинг</div>
            </label>

            <label>
              <input value="продвижение" type="radio" name="format-kind" id="format-movement">
              <div class="format-kind">#продвижение</div>
            </label>
          </div>
          <div class="inputs-wrp">

            <div class="format-input-wrp">
              <input pattern="[A-Za-zА-Яа-я0-9_\s+]{1,}" class="format-input" type="text" placeholder="Имя *">
              <span class="input-validate">Введите имя</span>
            </div>
            <div class="format-input-wrp">
              <input onkeyup="this.value = this.value.replace(/[^\d]/g,'');" pattern="[0-9]{9,}" maxlength="12" class="format-input" type="tel" placeholder="Телефон *">
              <span class="input-validate">Введите телефон</span>
            </div>
            <div class="format-input-wrp">
              <input pattern='^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' class="format-input" type="email" placeholder="E-mail *">
              <span class="input-validate">Введите email</span>
            </div>

          </div>
        </div>
        <div class="send-btn-wrp">
          <div class="linear-hover-border-btn ">
            <button aria-label="submit" type="submit" class="linear-link"><span>ОТПРАВИТЬ</span></button>
          </div>
          <p>Нажимая кнопку, я соглашаюсь <br>
            на обработку персональных данных</p>
        </div>

      </fieldset>
    </form>
  </div>
</section>