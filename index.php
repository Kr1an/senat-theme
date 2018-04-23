<?php get_header() ?>

<link rel="stylesheet" type="text/css" href=<?= get_template_directory_uri() . '/assets/css/header.css' ?> />

<main class="main">
  <div class="main-carousel">
    <div class="container main-carousel_container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item carousel-item_custom active">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/assets/images/1item.png'; ?>" alt="First slide">
          </div>
          <div class="carousel-item carousel-item_custom">
            <a target="_blank" href="http://sentex.by"><img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/assets/images/2item.png'; ?>" alt="Second slide"></a>
          </div>
          <div class="carousel-item carousel-item_custom">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/assets/images/3item.png'; ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev carousel-control_button carousel-control_button--prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon carousel-control-prev-icon--custom" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
        <a class="carousel-control-next carousel-control_button carousel-control_button--next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon carousel-control-next-icon--custom" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        <ol class="carousel-indicators carousel-indicators_custom">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </div>
  <div class="main-info">
    <div class="container">
      <div class="row">
          <?php echo do_shortcode( "[catalog_menu]" ); ?>
          <div class="col-md-9 all_news-block">
          <div class="news">
            <div class="news__caption">новости</div>
            <div class="row">
              <?php
                echo pods( 'event', array( 'limit' => 3, 'orderby' => 'date DESC' ) )->template('events-list-item-desktop');
              ?>
            </div>
            <div class="main-carousel_container">
              <div id="carousel_mobile_news" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item carousel-item_custom active">
                    <div class="news_item">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/news1.png'; ?>" alt="news1" class="news_item__img">
                      <div class="news_item__about">
                        <div class="news_item__date">02 мая 2017 года</div>
                        <div class="news_item__description">
                          Фирма JACK выпустила новый петельный полуавтомат челночного стежка с прямым приводом для выполнения прямой петли JK-Т781D. </div>
                        <a href="#" class="news_item__link">Читать полностью...</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item carousel-item_custom">
                    <div class="news_item">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/news1.png'; ?>" alt="news1" class="news_item__img">
                      <div class="news_item__about">
                        <div class="news_item__date">02 мая 2017 года</div>
                        <div class="news_item__description">
                          Фирма JACK выпустила новый петельный полуавтомат челночного стежка с прямым приводом для выполнения прямой петли JK-Т781D. </div>
                        <a href="#" class="news_item__link">Читать полностью...</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item carousel-item_custom">
                    <div class="news_item">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/news1.png'; ?>" alt="news1" class="news_item__img">
                      <div class="news_item__about">
                        <div class="news_item__date">02 мая 2017 года</div>
                        <div class="news_item__description">
                          Фирма JACK выпустила новый петельный полуавтомат челночного стежка с прямым приводом для выполнения прямой петли JK-Т781D. </div>
                        <a href="#" class="news_item__link">Читать полностью...</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev carousel-control_button carousel-control_button--prev" href="#carousel_mobile_news" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon carousel-control-prev-icon--custom" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carousel-control_button carousel-control_button--next" href="#carousel_mobile_news" role="button" data-slide="next">
                    <span class="carousel-control-next-icon carousel-control-next-icon--custom" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
            </div>


            <a href="news.html" class="btn btn_custom btn_custom_main">посмотреть все новости</a>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-popular">
    <div class="container">
      <div class="popular_caption">популярные товары</div>
      <div class="row">
        <?php
          echo pods( 'product', array( 'limit' => 4, 'where' => 'in_trend.meta_value = 1' ) )->template('product-in-trend-desktop');
        ?>
      </div>
      <div class="carousel_mobile_popular">
        <div class="carousel-item carousel-item_custom">
          <div class="popular_item">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sewing.png'; ?>" alt="sewing" class="popular_item__image">
            <div class="popular_item__footer">
              <div class="popular_item__caption">JUKI DDL - 5550N</div>
              <div class="popular_item__stars">
                <div id="rateYo"></div>
              </div>
              <div class="popular_item__description">
                1-игольная универсальная машина челночного стежка</div>
              <a href="#" class="popular_item__link">Перейти к товару</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-item_custom">
          <div class="popular_item">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sewing.png'; ?>" alt="sewing" class="popular_item__image">
            <div class="popular_item__footer">
              <div class="popular_item__caption">JUKI DDL - 5550N</div>
              <div class="popular_item__stars">
                <div id="rateYo"></div>
              </div>
              <div class="popular_item__description">
                1-игольная универсальная машина челночного стежка</div>
              <a href="#" class="popular_item__link">Перейти к товару</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-item_custom">
          <div class="popular_item">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sewing.png'; ?>" alt="sewing" class="popular_item__image">
            <div class="popular_item__footer">
              <div class="popular_item__caption">JUKI DDL - 5550N</div>
              <div class="popular_item__stars">
                <div id="rateYo"></div>
              </div>
              <div class="popular_item__description">
                1-игольная универсальная машина челночного стежка</div>
              <a href="#" class="popular_item__link">Перейти к товару</a>
            </div>
          </div>
        </div>

      </div>

      <a href="catalog.html" class="btn btn_custom btn_custom_main btn_custom_main--dark">перейти в каталог</a>
    </div>
  </div>
  <div class="main-carousel-certificates">
    <div class="container">
      <div class="main-carousel-certificates__caption">наши сертификаты</div>
      <div class="owl-carousel">
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate_change.png'; ?>" alt="certificate" class="carousel__img">
        </div>
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate.png'; ?>" alt="certificate" class="carousel__img">
        </div>
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate_change.png'; ?>" alt="certificate" class="carousel__img">
        </div>
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate.png'; ?>" alt="certificate" class="carousel__img">
        </div>
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate_change.png'; ?>" alt="certificate" class="carousel__img">
        </div>
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate.png'; ?>" alt="certificate" class="carousel__img">
        </div>
        <div class="clip">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/certificate_change.png'; ?>" alt="certificate" class="carousel__img">
        </div>
      </div>
    </div>
  </div>

  <div class="main-partners">
    <div class="container">
      <div class="partners-caption">наши партнеры</div>
      <div class="row">
        <div class="col-md-2">
          <a href="#" class="partner-link">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/partner1.png'; ?>" alt="partners-img" class="partners-img">
            </a>
        </div>
        <div class="col-md-2">
          <a href="#" class="partner-link">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/partner2.png'; ?>" alt="partners-img" class="partners-img">
            </a>
        </div>
        <div class="col-md-2">
          <a href="#" class="partner-link">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/partner3.png'; ?>" alt="partners-img" class="partners-img">
            </a>
        </div>
        <div class="col-md-2">
          <a href="#" class="partner-link">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/partner4.png'; ?>" alt="partners-img" class="partners-img">
            </a>
        </div>
        <div class="col-md-2">
          <a href="#" class="partner-link">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/partner5.png'; ?>" alt="partners-img" class="partners-img">
            </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main-contacts">
    <div class="container">
      <div class="contacts-caption">центральный офис</div>
      <div class="row">
        <div class="col-md-9">
          <div class="main-contacts__map" id="main-contacts__map"></div>
        </div>
        <div class="col-md-3">
          <address class="main-contacts__address">
              <div class="address-item">
                <div class="address-item__caption location"><i class="fas fa-map-marker-alt"></i> Офис ООО ПКФ “СЕНАТ”</div>
                <div class="address-item__description">г. Витебск, ул. Пушкина, д. 6</div>
              </div>
              <div class="address-item">
                <div class="address-item__caption"><i class="fas fa-clock"></i> Время работы офиса</div>
                <div class="address-item__description">понедельник-пятница <span>8.30 - 17.00</span></div>
              </div>
              <div class="address-item">
                <div class="address-item__caption"><i class="fas fa-mobile-alt"></i> Контактный телефон офиса</div>
                <div class="address-item__description">
                  <div class="address-item__phone">+375 (212) <span>35-97-34</span></div>
                  <div class="address-item__phone">+375 (212) <span>35-97-32</span></div>
                  <div class="address-item__phone">+375 (29) <span>662-48-46</span></div>
                </div>
              </div>
              <div class="address-item">
                <div class="address-item__caption"><i class="fas fa-envelope"></i> Наша электронная почта</div>
                <div class="address-item__description">senat@vitebsk.by</div>
              </div>
              <div class="row row-mobile">
                <div class="col-md-6">
                  <div class="address-item">
                    <div class="address-item__caption location"><i class="fas fa-map-marker-alt"></i> Офис ООО ПКФ “СЕНАТ”</div>
                    <div class="address-item__description">г. Витебск, ул. Пушкина, д. 6</div>
                  </div>
                  <div class="address-item">
                    <div class="address-item__caption"><i class="fas fa-clock"></i> Время работы офиса</div>
                    <div class="address-item__description">понедельник-пятница <span>8.30 - 17.00</span></div>
                  </div>
                  <div class="address-item">
                    <div class="address-item__caption"><i class="fas fa-envelope"></i> Наша электронная почта</div>
                    <div class="address-item__description">senat@vitebsk.by</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="address-item">
                    <div class="address-item__caption"><i class="fas fa-mobile-alt"></i> Контактный телефон офиса</div>
                    <div class="address-item__description">
                      <div class="address-item__phone">+375 (212) <span>35-97-34</span></div>
                      <div class="address-item__phone">+375 (212) <span>35-97-32</span></div>
                      <div class="address-item__phone">+375 (29) <span>662-48-46</span></div>
                    </div>
                  </div>
                </div>
              </div>
          </address>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    center:true,
    responsive: {
      0: {
        items: 3,
        nav: true
      },
      460: {
        items: 3,
        nav: true
      },
      768: {
        items: 5,
        nav: true
      },
      1000: {
        items: 5,
        nav: true
      }
    }
  })
</script>
    <script>
    $(document).ready(function() {
      $('.carousel_mobile_popular').slick({
        infinite: true,
        centerMode: true,
        variableWidth: true,
        responsive: [
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 690,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode: true
            }
          }
        ]
      });
    });
  </script>


<?php get_footer() ?>
