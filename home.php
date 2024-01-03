<?php
    /*
        Template Name: home  
    */
?>

<?php
        get_header();
      ?>
      <main class="main">
        <section class="order">
          <div class="container">
            <div class="order-box">
              <h2 class="order__title">
                <span>СТРОИМ НАДЁЖНЫЕ ЗАБОРЫ</span><br />
                ПОД КЛЮЧ ЗА 2 ДНЯ ОТ 750 р/м²
              </h2>
              <ul class="order-points">
                <li>Бесплатный замер</li>
                <li>Проект забора в подарок</li>
                <li>Бесплатная доставка 10км от Читы</li>
              </ul>
            </div>
            <button class="btn order-btn open-popup">
              Хочу забор под ключ
            </button>
          </div>
        </section>
        <section class="submit-app">
          <div class="container">
            <form action="" method="post" class="submit-app-form">
              <h2 class="submit-app-form__title">
                Выгодные цены От 750 руб/м²!
              </h2>
              <?php
                echo do_shortcode('[contact-form-7 id="d137b84" title="Заявка на звонок 2"]');
              ?>
            </form>
            <div class="submit-app-info">
              <div class="info-wrap">
                <div class="submit-app-info__title">
                  УСТАНОВИМ ЗАБОР <br /><span>ПОД КЛЮЧ ОТ 3 ДНЕЙ</span>
                </div>
                <div class="submit-app-info__subtitle">
                  В установку "под ключ" входит:
                </div>
                <div class="submit-app-icons">
                  <div class="box">
                    <div class="icon"></div>
                    <div class="box__title">Расчет сметы</div>
                  </div>
                  <div class="box">
                    <div class="icon"></div>
                    <div class="box__title">Бесплатный замер участка</div>
                  </div>
                  <div class="box">
                    <div class="icon"></div>
                    <div class="box__title">Гарантия на работы от года</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="types-of-fences">
          <div class="container">
            <h2 class="types__title">ВИДЫ ЗАБОРОВ, КОТОРЫЕ МЫ УСТАНАВЛИВАЕМ</h2>
            <div class="types__subtitle">
              Мы прилагаем все усилия, чтобы сделать для вас лучшие ограждения
              по приемлемой стоимости.
              <p>Звоните нам, выбирайте профессионалов.</p>
            </div>
            <div class="types-row">
              <div class="types-box">
                <div class="type__img"></div>
                <div class="type__title">Профлист</div>
              </div>
              <div class="types-box">
                <div class="type__img"></div>
                <div class="type__title">Деревянный штакетник</div>
              </div>
              <div class="types-box">
                <div class="type__img"></div>
                <div class="type__title">Австрийская плетенка</div>
              </div>
              <div class="types-box">
                <div class="type__img"></div>
                <div class="type__title">Габионы (пергоны)</div>
              </div>
              <div class="types-box">
                <div class="type__img"></div>
                <div class="type__title">3Д забор</div>
              </div>
              <div class="types-box">
                <div class="type__img"></div>
                <div class="type__title">Блоки</div>
              </div>
            </div>
          </div>
        </section>
        <div class="experience">
          <div class="container">
            <div class="experience-text">
              <p>
                За 11 лет мы накопили большой опыт и
                <span>можем гарантировать высокое качество работ</span>
              </p>
            </div>
          </div>
        </div>
        <section class="materials materials-first">
          <div class="container">
            <div class="materials__title">
              МАТЕРИАЛЫ ДЛЯ СТОЛБОВ
              <div class="materials__subtitle">
                Предлагаем <span>дилерские</span> цены на материалы
              </div>
            </div>

            <div class="materials-row">
              <div class="materials-card">
                <div class="card-img">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/materials/1.png"
                    alt="Картинка"
                    class="card__img"
                  />
                </div>
                <p class="card__title">Кирпичные столбы</p>
              </div>
              <div class="materials-card">
                <div class="card-img">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/materials/2.png"
                    alt="Картинка"
                    class="card__img"
                  />
                </div>
                <p class="card__title">Металлические столбы</p>
              </div>
            </div>
          </div>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/decor_lines.png" alt="" class="decor-lines" />
        </section>
        <section class="materials foundation">
          <div class="container">
            <div class="materials__title">ВАРИАНТЫ ФУНДАМЕНТА</div>
            <div class="materials-row">
              <div class="materials-card">
                <div class="card-img">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/foundations/1.png"
                    alt="Картинка"
                    class="card__img"
                  />
                </div>
                <p class="card__title">Ленточный фундамент</p>
              </div>
              <div class="materials-card">
                <div class="card-img">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/foundations/2.png"
                    alt="Картинка"
                    class="card__img"
                  />
                </div>
                <p class="card__title">Винтовой фундамент</p>
              </div>
            </div>
          </div>
        </section>
        <section class="info">
          <div class="container">
            <h2 class="info__title">ЧТО МЫ ДЕЛАЕМ</h2>
            <div class="info-row">
              <div class="info-box">
                <div class="info-box-name-wrap">
                  <div class="info-box-icon"></div>
                  <div class="info-box-title">
                    ВЫЕЗД НА УЧАСТОК ДЛЯ ИЗУЧЕНИЯ
                  </div>
                </div>
                <div class="info-box-text">
                  Наши специалисты определят тип грунта. Это необходимо для
                  того, что определить способ и необходимую глубину опорных
                  металлических столбов.
                </div>
              </div>
              <div class="info-box">
                <div class="info-box-name-wrap">
                  <div class="info-box-icon"></div>
                  <div class="info-box-title">ЗАКЛЮЧЕНИЕ ДОГОВОРА</div>
                </div>
                <div class="info-box-text">
                  Обговариваем все нюансы, рассчитываем смету изгороди,
                  заключаем договор, в котором указывается порядок работ и сроки
                  выполнения заказа.
                </div>
              </div>
              <div class="info-box">
                <div class="info-box-name-wrap">
                  <div class="info-box-icon"></div>
                  <div class="info-box-title">
                    ЗАКУПКА И ДОСТАВКА МАТЕРИАЛОВ
                  </div>
                </div>
                <div class="info-box-text">
                  Изготавливаем секции и модули, подготавливаем элементы
                  металлического каркаса, доставляем материалы и комплектующие
                  заказчику.
                </div>
              </div>
              <div class="info-box">
                <div class="info-box-name-wrap">
                  <div class="info-box-icon"></div>
                  <div class="info-box-title">МОНТАЖ ЗАБОРА</div>
                </div>
                <div class="info-box-text">
                  Бригада рабочих приступает к качественной сборке ограждения.
                  После окончания сборки вы принимаете работу, подписываете
                  приемочный акт, вносите плату.
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fence-view" id="color-pick">
          <div class="container">
            <h2 class="fence-view__title">
              ВИЗУАЛЬНОЕ ПРЕДСТАВЛЕНИЕ ЗАБОРА ИЗ ПРОФЛИСТА
            </h2>
            <div class="fence-view__subtitle">
              <span>Ваш забор может выглядеть так, как Вы захотите -</span>
              достаточно просто выбрать комплектацию и мы рассчитаем его
              стоимость.
            </div>
            <div class="fence-view__primaryimage">
              <img class="image" src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/1.png" alt="">
              <div class="primaryimage__color"></div>
            </div>
            <div class="fence-view-btns">
              <div class="view-fence view-fence-solid">
                <div class="view-fence__title">
                  Выберите цвет сплошного забора
                </div>
                <div class="fence-view-switch-color">
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="1"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/1.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="2"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/2.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="3"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/3.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="4"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/4.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="5"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/5.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="6"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/6.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="7"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/7.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="8"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/8.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="9"
                  >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/9.jpg" alt="" />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="10"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/10.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="11"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/11.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="12"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/12.jpg"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div class="view-fence view-fence-brick">
                <div class="view-fence__title">
                  Выберите цвет забора с кирпичными столбами
                </div>
                <div class="fence-view-switch-color">
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="1"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/13.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="2"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/14.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="3"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/15.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="4"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/16.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="5"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/17.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="6"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/18.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="7"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/19.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="8"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/20.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="9"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/21.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="10"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/22.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="11"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/23.jpg"
                      alt=""
                    />
                  </button>
                  <button
                    onclick=""
                    class="choose-btn"
                    data-color="12"
                    data-image="2"
                  >
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/fence-view/fence-view-icons/24.jpg"
                      alt=""
                    />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="steps" id="steps">
          <div class="container">
            <h2 class="steps__title">ЭТАПЫ УСТАНОВКИ ЗАБОРА</h2>
            <div class="steps__subtitle">
              Всего несколько шагов от заявки до идеального забора
            </div>
            <div class="steps-row">step 1</div>
          </div>
        </section>
        <section class="feedback">
          <div class="container">
            <div class="feedback-card">
              <div class="feedback-card__title">
                У ВАС ВСЕ ЕЩЕ ОСТАЛИСЬ ВОПРОСЫ?
              </div>
              <div class="feedback-card__subtitle">
                Задайте их нашим<br />
                специалистам
              </div>
              <button class="btn btn_blue open-popup open-message">
                ЗАДАТЬ ВОПРОС
              </button>
            </div>
            <div class="feedback-card">
              <div class="feedback-card__title">ВЫЗВАТЬ МАСТЕРА ДЛЯ ЗАМЕРА</div>
              <div class="feedback-card__subtitle">
                Вызвать мастера для замера участка и заключении договора
              </div>
              <button class="btn btn_blue open-popup">ВЫЗВАТЬ МАСТЕРА</button>
            </div>
          </div>
        </section>
        <section class="contacts" id="contacts">
          <div class="container">
            <h2 class="contact__title">КОНТАКТЫ</h2>
            <div class="contacts-row">
              <div class="contacts-column">
                <div class="column__title">ТЕЛЕФОН</div>
                <div class="column__text">+7 (302) 715-080</div>
              </div>
              <div class="contacts-column">
                <div class="column__title">АДРЕС</div>
                <div class="column__text">
                  Чита, Чкалова, 158, 201<br />
                  (левое крыло)
                </div>
              </div>
              <div class="contacts-column">
                <div class="column__title">E-MAIL</div>
                <div class="column__text">info@domocentr.com</div>
              </div>
              <div class="contacts-column">
                <div class="column__title">ВРЕМЯ РАБОТЫ</div>
                <div class="column__text">
                  Пн-Вс: c 9:00–19:00, без выходных
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2454.1866662122316!2d113.49595169999999!3d52.0399131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5dca35461aa4da13%3A0xeb23adff801f62!2z0YPQuy4g0KfQutCw0LvQvtCy0LAsIDE1OCwg0KfQuNGC0LAsINCX0LDQsdCw0LnQutCw0LvRjNGB0LrQuNC5INC60YDQsNC5LCA2NzIwMDA!5e0!3m2!1sru!2sru!4v1696340272061!5m2!1sru!2sru"
            width="100%"
            height="446"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </section>
      </main>
      <?php
        get_footer();
      ?>