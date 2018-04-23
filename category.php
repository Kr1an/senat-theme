<?php
/**
 *
 * Template Name: Employees
 *
 */
?>

<?php get_header(); ?>


<?php
  $slugs = explode('/', get_query_var('category_name'));
  $currentCategory = get_category_by_slug('/'.end($slugs));
  $currentCategoryId = $currentCategory->term_id;
  // print_r($currentCategory);
?>

<main class="main">
      <div class="main-info">
        <div class="container">



          <div class="row">



<?php echo do_shortcode( '[catalog_menu]' ); ?>

            <div class="col-lg-9 popular-block">
              <div class="main-popular">
                <div class="container" style="flex-direction: column">
                <div class="main-popular__caption">Промышленные швейные машины</div>
                  <div class="main-popular__description">1-игольные машины челночного
                     стежка с нижним транспортером</div>
                     <div class="row" style="padding: 0">
                    <div class="sort">
                      <div id="sort_by_producer" class="sort__item">
                        <div class="sort__caption">Производитель:</div>
                        <div class="sort_list dropdown">
                          <a href="#" class="dropdown-toggle sort_list__caption dropdown-toggle--custom" data-toggle="dropdown">Все</a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu" >
                              <a tabindex="-1" href="#" class="dropdown-item">Все</a>
                            </li>
                            <li class="dropdown-submenu" >
                              <a tabindex="-1" href="#" class="dropdown-item">По названию от Z-A</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a tabindex="-1" href="#" class="dropdown-item">По названию от А-Z</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="sort__item" by="">
                        <div class="sort__caption">Сортировать по:</div>
                        <div class="sort_list dropdown">
                          <a href="#" class="dropdown-toggle sort_list__caption dropdown-toggle--custom" data-toggle="dropdown">Популярности</a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu">
                              <a tabindex="-1" href="#" class="dropdown-item">По названию от Z-A</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a tabindex="-1" href="#" class="dropdown-item">По названию от А-Z</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-popular">

                  <?php echo pods( 'product', array( 'orderby' => 'rating DESC' ) )->template('product-in-trend-catalog'); ?>


                  </div>
                </div>
              </div>
              <!-- <a href="catalog.html" class="btn btn_custom btn_custom_main btn_custom_main--dark">показать все</a> -->
            </div>
          </div>
        </div>
      </div>
    </main>
    <script>

    </script>


<?php get_footer(); ?>
