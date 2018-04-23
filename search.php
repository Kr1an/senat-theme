<?php
/**
 *
 * Template Name: Search
 *
 */
?>

<?php get_header(); ?>

<?php
  $value = get_query_var( 'search', '' );

  $result = pods('product', array('where' => 'post_title LIKE "%' . $value . '%"'));
  $has_elements = $result->total();

  // echo $results->total();
?>


<main class="main results">
      <div class="container" style="min-height: 600px">
        <div class="caption">Результаты поиска по запросу <span>- <?php echo $value; ?></span></div>
        <div class="row" >
          <?php
            echo $result->template('product-result');
          ?>
          <?php
            if (!$has_elements) {
              ?>
              <div class="result">
              <p class="paragraph">
                Nothing found
              </p>
            </div>
            <?php
            }
          ?>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
