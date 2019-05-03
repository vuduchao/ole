<!DOCTYPE html>
<html <?php language_attributes() ?> >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--faicon-->
      <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/icon-web.ico" type="image/icon">
      <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri() ?>/css/blog-home.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/perfect-scrollbar.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">

    <?php wp_head() ?>
  </head>

  <body style="padding-top: 0" <?php body_class() ?> >
    <!--top header-->
    <div class="topHeader">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a class="navbar-brand" href="<?php echo home_url() ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo-web2.png">
                    </a>
                </div>
                <div class="topHeader_right">
                <div class="hdrRight">
                    <div class="hdrNav">
                        <ul>
                            <li><a href="/">Giới thiệu</a></li>
                            <li><a href="/">Góp ý</a></li>
                            <li><a href="http://ole.vn/lien-he.html">Liên hệ quảng cáo</a></li>
                            <li><a href="http://ole.vn/rss.html">RSS</a></li>
                            <li id="dk"><a onclick="window.open(this.href, 'windowName', 'width=800, height=400, left=24, top=24, scrollbars, resizable'); return false;" href="http://ole.vn/dang-ky.html">Đăng ký</a></li>
                            <!--li id="dn"><a onclick="window.open(this.href, 'windowName', 'width=440, height=200, left=24, top=24, scrollbars, resizable'); return false;" href="http://ole.vn/dang-nhap.html">Đăng Nhập</a></li-->
                        </ul>
                    </div>
                </div>
                <form action="/search/search.html" class="form_s" method="GET">
                    <input type="text" class="key_home" id="key" name="key" value="Tìm kiếm tin tức..." autocomplete="off" onfocus="if (this.value = 'Tìm kiếm') this.value = ''" onblur="if (!this.value) this.value = 'Tìm kiếm bài viết...'">
                    <input type="submit" id="search_home" name="submit" value="Tìm kiếm">
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--end top header-->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark <?php echo is_home() ? 'mb-3' : '' ?>">
      <div class="container">
        <a style="line-height: 0px;" class="navbar-brand" href="<?php echo home_url() ?>">
            <img src="http://localhost/ole/wp-content/themes/miniblogs/images/home-icon.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <?php
            wp_nav_menu( array(
                'theme_location'  => 'header-menu', // Gọi menu đã đăng ký trong function
                'depth'           => 2,     // Cấu hình dropdown 2 cấp
                'container'       => false, // Thẻ div bọc menu
                'menu_class'      => 'navbar-nav ml-auto', // Class của nav bootstrap
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
            ) );
          ?>

        </div>
      </div>
    </nav>

    <?php mini_blog_breadcrumbs() ?>



