<aside id="sidebar">
  <section id="categories" class="widget">
    <h3 class="widget-title"> Categories </h3>
    <ul>
      <?php
      //show the 15 most common categories, in a flat list
      wp_list_categories( array(
        'depth'      => -1,
        'title_li'   => '',
        'number'     => 15,
        'orderby'    => 'count', //order by  number of posts
        'order'      => 'DESC', //high numbers first
        'show_count' => true,
      ) ); ?>
    </ul>
  </section>
  <section id="archives" class="widget">
    <h3 class="widget-title"> Archives </h3>
    <ul>
      <?php //list of all archives, by month ?>
    </ul>
  </section>
  <section id="tags" class="widget">
    <h3 class="widget-title"> Tags </h3>
    <?php //tag cloud?>
  </section>
  <section id="meta" class="widget">
    <h3 class="widget-title"> Meta </h3>
    <ul>
      <li><a href="#">Site Admin</a></li>
      <li><a href="#">Log out</a> </li>
    </ul>
  </section>
</aside>
<!-- end #sidebar -->
