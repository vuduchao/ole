<?php get_header() ?>
<!-- Page Content -->
  <div class="container">
    
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
<!--          <h1 class="my-2 mb-4 page-header">-->
<!--            Danh mục:-->
<!--            <small>--><?php //single_cat_title() ?><!--</small>-->
<!--          </h1>-->
            <div class="topHot clearfix">
                <div class="topHotImg col-sm-8">
                    <a title="Nhận định Everton vs Burnley, 02h00 ngày 04/5: Đối thủ khó nhằn" href="http://ole.vn/nhan-dinh-bong-da/nhan-dinh-everton-vs-burnley-02h00-ngay-04-5-doi-thu-kho-nhan-113594.html">
                        <img alt="Nhận định Everton vs Burnley, 02h00 ngày 04/5: Đối thủ khó nhằn" src="http://ole.vn/media/k2/items/cache/275219b33ba128f0f7e2b83ee0860d73_L.jpg"></a>
                </div>
                <div class="cateNewsTop col-sm-4"><h2><a title="Nhận định Everton vs Burnley, 02h00 ngày 04/5: Đối thủ khó nhằn" href="http://ole.vn/nhan-dinh-bong-da/nhan-dinh-everton-vs-burnley-02h00-ngay-04-5-doi-thu-kho-nhan-113594.html">Nhận định Everton vs Burnley, 02h00 ngày 04/5: Đối thủ khó nhằn</a></h2>
                    <p><span class="newsTime">7 giờ trước</span>
                        Ở giai đoạn hạ màn Premier League mùa này, Everton đang thể hiện phong độ rất...
                    </p>
                    <div class="titNewsBox"><a class="hot_cate_bold" title="Nhận định Juventus vs Torino, 01h30 ngày 04/5: Quà cho đội khách" href="http://ole.vn/nhan-dinh-bong-da/nhan-dinh-juventus-vs-torino-01h30-ngay-04-5-qua-cho-doi-khach-113595.html">Nhận định Juventus vs Torino, 01h30 ngày 04/5: Quà cho đội...</a>
                        <a class="hot_cate_bold" title="Nhận định Mainz vs RB Leipzig, 01h30 ngày 04/05: Tiếp đà thăng hoa" href="http://ole.vn/nhan-dinh-bong-da/nhan-dinh-mainz-vs-rb-leipzig-01h30-ngay-04-05-tiep-da-thang-hoa-113596.html">Nhận định Mainz vs RB Leipzig, 01h30 ngày 04/05: Tiếp đà...</a>
                    </div>
                </div>
            </div>
            <div class="wrapcate clearfix">
                  <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                          <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                    <?php endwhile; ?>

                  <?php endif; ?>
            </div>
            <!-- Pagination -->
            <?php mini_blog_pagination() ?>
        </div>
        <?php get_sidebar() ?>

      </div>
      <!-- /.row -->

  </div>
<!-- /.container -->
<?php get_footer() ?>
