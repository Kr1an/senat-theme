<?php

function template_style_insertion() {
  // $template_name = preg_replace( '/\\.[^.\\s]{3,4}$/', '', basename( get_page_template() ) );
  // $css_path = get_template_directory() . '/assets/css/' . $template_name . '.css';
  // $css_uri = get_template_directory_uri() . '/assets/css/' . $template_name . '.css';
  // if ( file_exists( $css_path ) ) {
  //   wp_enqueue_style( $template_name . ' styles', $css_uri );
  // }
}

function libraries_style_insertion() {
  // Owl
  wp_enqueue_style( 'owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.carousel.min.css' );
  wp_enqueue_style( 'owl-theme-default-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.theme.default.min.css' );

  // Slick
  wp_enqueue_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
  wp_enqueue_style( 'slick-theme-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );

  // Bootstrap
  wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

  // RateYo
  wp_enqueue_style( 'rate-yo', 'https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css' );

  // FontAwesome
  wp_enqueue_style( 'solid-style', 'https://use.fontawesome.com/releases/v5.0.10/css/solid.css' );
  wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.0.10/css/fontawesome.css' );
  wp_enqueue_style( 'brands-style', 'https://use.fontawesome.com/releases/v5.0.10/css/brands.css' );

  // Fira-sans font
  wp_enqueue_style( 'fira-sans-style', 'https://fonts.googleapis.com/css?family=Fira+Sans' );

  // Pritty photo
  wp_enqueue_style( 'pritty-photo', 'https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css' );
}

function libraries_script_insertion() {
  // $
  wp_enqueue_script( 'jquery-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', NULL, '', false );

  // Owl carousel
  wp_enqueue_script( 'owl.carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js', array('jquery-script'), '', false );

  // Yandex map
  wp_enqueue_script( 'yandex-map-script', 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3354de46ba73d9143a1a6196eef7932cf9195fdf5962f486d64365bda9ce35c1&amp;width=100%25&amp;lang=ru_RU&amp;id=main-contacts__map', NULL, '', true );

  // Bootstrap
  wp_enqueue_script( 'bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery-script', 'popper-script'), '', false );

  // Popper
  wp_enqueue_script( 'popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery-script'), '', false );

  // moment
  wp_enqueue_script( 'moment-script', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js', NULL, '', false );
  wp_enqueue_script( 'moment-ru-script', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/locale/ru.js', NULL, '', false );

  // currency-exchange
  wp_enqueue_script('currency-exchange', get_template_directory_uri() . '/assets/js/currency-exchange.js', array('jquery-script', 'moment-script'), '', true);

  // Rate YO
  wp_enqueue_script( 'rate-yo', 'https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js', array('jquery-script'), '', false );

  // Slick
  wp_enqueue_script( 'slick-skript', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery-script', ), '', false );

  // Pritty photo
  wp_enqueue_script( 'pritty-photo', 'https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js', array('jquery-script'), '', false );
}

function common_style_insertion() {
  // Footer
  // wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/assets/css/footer.css' );

  // Header
  // wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/header.css' );

  // Global
  wp_enqueue_style( 'global-style', get_template_directory_uri() . '/assets/css/global.css' );
  // wp_enqueue_style( 'results-style', get_template_directory_uri() . '/assets/css/results.css' );
  // wp_enqueue_style( 'results-style', get_template_directory_uri() . '/assets/css/about.css' );
  // wp_enqueue_style( 'certificates-style', get_template_directory_uri() . '/assets/css/certificates.css' );
  // wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/css/contacts.css' );
  // wp_enqueue_style( 'typical-style', get_template_directory_uri() . '/assets/css/typical.css' );
}

function enqueue_resources() {
  template_style_insertion();
  libraries_style_insertion();
  common_style_insertion();
  libraries_script_insertion();
}

function theme_initialization() {
  add_theme_support( 'menu' );
  register_nav_menus( array(
      'header' => __('Header Navigation'),
    // 'footer' => __('Footer Navigation'),
      'sidebar' => __('Sidebar Navigation'),
  ) );
}

add_action( 'wp_enqueue_scripts', 'enqueue_resources' );
add_action( 'init', 'theme_initialization' );


//[currency]
function render_currency( $atts ){
  ob_start();
  ?>
	<div class="exchange_rates">
    <table class="table table_custom">
      <thead>
        <tr>
          <th scope="col">Курсы валют</th>
          <th scope="col">Продажа</th>
          <th scope="col">Покупка</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>USD</td>
          <td id="usd-sell"></td>
          <td id="usd-buy"></td>
        </tr>
        <tr>
          <td>EUR</td>
          <td id="eur-sell"></td>
          <td id="eur-buy"></td>
        </tr>
        <tr>
          <td>RUB<sup>100</sup></td>
          <td id="rub-sell"></td>
          <td id="rub-buy"></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td id='exchange-date' class="exchange_rates__date"></td>
        </tr>
      </tfoot>
    </table>
  </div>
  <?php
	return ob_get_clean();
}
add_shortcode( 'currency', 'render_currency' );

//[catalog_menu]
function add_catalog_nav() {
  ob_start();
  ?>
  <div class="col-md-3 catalog-block">

<div class="catalog">
  <div class="catalog__caption">Каталог продукции</div>
  <div class="catalog-list">
    <div class="catalog__head">Швейное производство</div>


    <div class="dropdown">
      <?php
        function renderCategories($category) {
          $args = array(
            'parent' => $category->term_id
          );
          $sub_categories = get_categories( $args );
          $has_categories = count($sub_categories);
          if (!$has_categories) {
            return;
          }

          foreach($sub_categories as $sub_categorie) {
            $sub_categorie_has_childs = count(get_categories( array('parent' => $sub_categorie->term_id) ));
            ?>
            <li class="catalog-main__item <?php echo $sub_categorie_has_childs ? 'dropdown-submenu' : ''; ?>">
              <?php
                if ($sub_categorie_has_childs) {
                  ?>
                    <a class="catalog__link" tabindex="-1"><?php echo $sub_categorie->name; ?></a>
                  <?php
                } else {
                  ?>
                    <a class="catalog__link" tabindex="-1" href=<?php echo '/category/' . $category->slug ?>><?php echo $sub_categorie->name; ?></a>
                  <?php
                }

              ?>

              <?php
                if ($sub_categorie_has_childs) {
                  ?>
                  <ul class="dropdown-menu">
                    <?php echo renderCategories($sub_categorie); ?>
                  </ul>
                  <?php
                }
              ?>
            </li>
            <?php
          }
        }
      ?>
  <ul class="сatalog-main dropdown-menu">
    <?php
      function isUncategoriezed($var) {
        return $var->name != 'Uncategorized';
      }
      $args = array(
        'parent' => 0
      );
      $root_category = array_values( array_filter( get_categories( $args ), 'isUncategoriezed' ) )[0];
      echo renderCategories($root_category);
    ?>
  </ul>
    </div>
  </div>
  <?php echo do_shortcode( '[currency]' ); ?>
</div>
    </div>

  <?php
  return ob_get_clean();
}

// assets_uri
function get_assets_uri() {
  return get_template_directory_uri() . '/assets';
}


add_shortcode( 'catalog_menu', 'add_catalog_nav' );
add_shortcode('assets_uri', 'get_assets_uri');
