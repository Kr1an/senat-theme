<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?= get_template_directory_uri() . '/assets/css/header.css' ?> />
  <?php wp_head(); ?>
</head>
<body>
<header class="header">
  <div class="container container-header">
    <div class="row header_row">
      <div class="col-md-6 mobile-left">
        <div class="col-lg-12">
          <div class="header__wrapper">
            <a href="" title="logo" class="header__logo img-fluid"></a>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="header__description">
            <span class="header__description--caption">Ведущий поставщик</span> технологического оборудования для лёгкой провышленности в СНГ
          </div>
        </div>
      </div>
      <div class="col-md-6 mobile-right">
        <div class="col-md-12 mobile-contacts">
          <div class="contacts">
            <div class="phones">
              <div class="phones__phone"><i class="fas fa-mobile-alt"></i> +375 (212) <strong>35-97-34</strong></div>
              <div class="phones__phone"><i class="fas fa-mobile-alt"></i> +375 (212) <strong>35-97-32</strong></div>
              <div class="phones__phone"><i class="fas fa-mobile-alt"></i> +375 (29) <strong>662-48-46</strong></div>
            </div>
            <div class="urls">
              <div class="urls__url"><i class="fas fa-globe"></i> http://senat.by</div>
              <div class="urls__url urls__url--mail"><i class="fas fa-envelope"></i> senat@vitebsk.by</div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div id="translater-mobile-container" class="header__lang_changer btn-group google-translate-holder">
              <img src="<? echo get_template_directory_uri() . '/assets/images/google-translate-icon.png'; ?>" alt="translate-icon" class="btn__image" height="20px" width="20px">
          </div>
        </div>
      </div>
      <div class="col-md-6 col_header_logo">
        <div class="header__wrapper">
          <a href="index.html" title="logo" class="header__logo img-fluid"></a>
        </div>
      </div>
      <div class="col-md-4 description_block">
        <div class="header__description">
          <span class="header__description--caption">Ведущий поставщик</span> технологического оборудования для лёгкой провышленности в СНГ
        </div>
        <div id="translater-desktop-container" class="header__lang_changer btn-group google-translate-holder">
          <img src="<? echo get_template_directory_uri() . '/assets/images/google-translate-icon.png'; ?>" alt="translate-icon" class="btn__image" height="20px" width="20px">
          <div id="google_translate_element"></div>
        </div>
      </div>
      <div class="col-md-2 col-contacts">
        <div class="contacts">
          <div class="phones">
            <div class="phones__phone"><i class="fas fa-mobile-alt"></i> +375 (212) <strong>35-97-34</strong></div>
            <div class="phones__phone"><i class="fas fa-mobile-alt"></i> +375 (212) <strong>35-97-32</strong></div>
            <div class="phones__phone"><i class="fas fa-mobile-alt"></i> +375 (29) <strong>662-48-46</strong></div>
          </div>
          <div class="urls">
            <div class="urls__url"><i class="fas fa-globe"></i> http://senat.by</div>
            <div class="urls__url urls__url--mail"><i class="fas fa-envelope"></i> senat@vitebsk.by</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<nav class="nav navbar-nav-scroll navbar-expand-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-2 nav-header">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
          </button>
          <a class="navbar-brand" href="#">МЕНЮ</a>
        </div>
      </div>
      <div class="col-md-3 logo-mini-block">
        <a href="index.html" class="navbar__logo-mini">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-mini.png'; ?>" alt="logo-mini" class="logo-mini-img">
          </a>
      </div>

        <?php
          function generate_menu_item($menu_item_obj) {
            $menu_item = (array)$menu_item_obj;
            $menu_item['childs'] = array();
            return $menu_item;
          }

          function append_menu_item(&$parent_links, $menu_item) {
            if (!count($parent_links)) {
              return;
            }
            foreach($parent_links as &$parent_link) {
              append_menu_item($parent_link['childs'], $menu_item, 'childs');
              if ($parent_link['db_id'] == $menu_item['menu_item_parent']) {
                      array_push($parent_link['childs'], $menu_item);
              }
            }
          }

          function get_tree_from_flat_menu($menu_name) {
                  $parent_links = array(generate_menu_item(array('db_id' => 0), 'childs'));

                  $locations = get_nav_menu_locations();

                  if(!isset($locations[$menu_name])) return;

                  $menu_id = wp_get_nav_menu_object($locations[$menu_name])->term_id;
                  $menu_items = wp_get_nav_menu_items($menu_id);

                  foreach((array)$menu_items as $key => $menu_item) {
                          append_menu_item($parent_links, generate_menu_item($menu_item, 'childs'), 'childs');
                  }
                  return $parent_links[0]['childs'];
          }
        ?>

        <?php
          function renderMenu($menu) {
            foreach($menu as $menu_item) {
              $has_submenu = count($menu_item['childs']);
              $is_parent_menu = $menu_item['menu_item_parent'] == 0;
              ?>
              <li
                class="<?php echo $is_parent_menu ? 'nav-item' : 'dropdown-item'; ?> <?php echo $has_submenu ? $is_parent_menu ? 'dropdown' : 'dropdown-submenu dropdown-item' : ''; ?>">
                <script>
                  function onEvent(e) {

                  }
                </script>
                <a
                  style="color: <?= $is_parent_menu ? 'white' : 'null' ?>"
                  onclick="(function() { var target = this.event.target;
                    console.log(target);
                    window.location = '<?php echo $menu_item['url']; ?>'; })()"
                  class="<?php echo $is_parent_menu ? 'nav-link' : ''; ?> <?php echo $has_submenu ? 'dropdown-toggle dropdown-toggle--custom' : ''; ?>"
                  role="button"
                  data-toggle="<?php echo $has_submenu ? 'dropdown' : ''; ?>"
                >
                  <?php echo $menu_item['title']; ?>
                </a>
                <?php
                  if (count($menu_item['childs'])) {
                    ?>
                      <ul
                        class="dropdown-menu"
                        role="menu"
                        aria-labelledby="navbarDropdown"
                      ><?php renderMenu($menu_item['childs']); ?></ul>
                    <?php
                  }
                ?>
              </li>
              <?php
            }
          }
          ?>


          <?php
          function renderMenuMobile($menu) {
            foreach($menu as $menu_item) {
              $has_submenu = count($menu_item['childs']);
              $is_parent_menu = $menu_item['menu_item_parent'] == 0;
              ?>
              <li
                class="<?php echo $is_parent_menu ? 'nav-item' : 'dropdown-item'; ?> <?php echo $has_submenu ? $is_parent_menu ? 'dropdown' : 'dropdown-submenu dropdown-item' : ''; ?>">
                <a
                  href="<?php echo $menu_item['url'];?>"
                  class="<?php echo $is_parent_menu ? 'nav-link' : ''; ?> <?php echo $has_submenu ? 'dropdown-toggle dropdown-toggle--custom' : ''; ?>"
                  role="button"
                  data-toggle="<?php echo $has_submenu ? 'dropdown' : ''; ?>"
                >
                  <?php echo $menu_item['title']; ?>
                </a>
                <?php
                  if (count($menu_item['childs'])) {
                    ?>
                      <ul
                        class="dropdown-menu"
                        role="menu"
                        aria-labelledby="navbarDropdown"
                      ><?php renderMenu($menu_item['childs']); ?></ul>
                    <?php
                  }
                ?>
              </li>
              <?php
            }
          }
        ?>



      <div class="col-md-9 nav-block" id="nav-collapse">
        <ul class="navbar-nav navbar_custom">
          <?php
            $menu = get_tree_from_flat_menu('header');
            echo renderMenu($menu);
          ?>
        </ul>

        <ul class="collapse navbar-nav navbar_custom nav-collapse" id="nav-collapse">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle dropdown-toggle--custom" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Новости</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="#">Акции</a>
              <a class="dropdown-item" href="news.html">Новости</a>
              <a class="dropdown-item" href="#">Статьи</a>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle dropdown-toggle--custom" role="button" data-toggle="dropdown">Информация</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Прайс-листы на продукцию</a>
              <li class="dropdown-submenu dropdown-item">
                <a tabindex="-1" href="#">Видео по оборудованию</a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">Инструкции для оборудования</a>
                </ul>
              </li>
              <a class="dropdown-item" href="#">Инструкции для оборудования</a>
              <a class="dropdown-item" href="#">Применение по пошиву</a>
              <a class="dropdown-item" href="#">Деталировки оборудования</a>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle dropdown-toggle--custom" role="button" data-toggle="dropdown">Помощь</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Гарантия</a>
              <a class="dropdown-item" href="#">Доставка</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle dropdown-toggle--custom" role="button" data-toggle="dropdown">Сервис</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="repairs.html">Ремонт оборудования</a>
              <a class="dropdown-item" href="#">Сборка и наладка оборудования</a>
              <a class="dropdown-item" href="#">Настройка оборудования</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle dropdown-toggle--custom" role="button" data-toggle="dropdown">О компании</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="employees.html">Наши сотрудники</a>
              <a class="dropdown-item" href="certificates.html">Сертификаты и награды</a>
              <a class="dropdown-item" href="#">Предложения дилерам</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="contacts.html" class="nav-link">Контакты</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 search-block">
        <form class="form-inline my-2 my-lg-0 search-form" method="get" action="/search/">
          <input class="form-control mr-sm-2 search-input" name="search" type="search" placeholder="Поиск" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 search-button  search-button--custom" type="submit"></button>
        </form>
      </div>
    </div>
  </div>
</nav>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
  $(window).scroll(function() {
    if (screen.width > 1000) {
      if ($(this).scrollTop() > 200) {
        $('.nav').addClass('nav-fixed');
      } else {
        $('.nav').removeClass('nav-fixed');
      }
    }
  });
</script>
<script>
  $(window).resize(() => {
    if ($(window).width() > 1280) {
      $('#google_translate_element').appendTo('#translater-desktop-container');
    } else {
      $('#google_translate_element').appendTo('#translater-mobile-container');
    }
  })
  $(document).ready(() => {
    if ($(window).width() > 1280) {
      $('#google_translate_element').appendTo('#translater-desktop-container');
    } else {
      $('#google_translate_element').appendTo('#translater-mobile-container');
    }
  })

</script>
