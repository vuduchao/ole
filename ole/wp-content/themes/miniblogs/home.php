<?php get_header() ?>
<!-- Page Content -->
  <div class="container">
    
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8 content_left leftCol">
        	<!-- Slider bài viết nổi bật -->
        	<?php 
				$args = [
					'posts_per_page' => 1,
					'post__in'  => get_option( 'sticky_posts' ) 
				];

				$the_query = new WP_Query($args);
			?>

<!--        	<div id="demo" class="carousel slide my-4" data-ride="carousel">-->
<!---->
<!--        	  <div class="carousel-inner">-->
<!--				-->
<!--				--><?php //if ( $the_query->have_posts() ) : ?>
<!--					-->
<!--				  --><?php //while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<!--						-->
<!--						<div class="carousel-item --><?php //echo $the_query->current_post == 1 ? 'active' : ''  ?><!--">-->
<!--						  --><?php //the_post_thumbnail('blog-thumbnail',['class'=>'fuild-img']) ?>
<!--						  <div class="carousel-caption">-->
<!--						    <h3><a href="--><?php //the_permalink() ?><!--">--><?php //echo wp_trim_words( get_the_title() , 12 ) ?><!--</a></h3>-->
<!--						  </div>   -->
<!--						</div>-->
<!--				       -->
<!--				  --><?php //endwhile; ?>
<!---->
<!--				--><?php //endif; ?>
<!--        	  </div>-->
<!--        	  <a class="carousel-control-prev" href="#demo" data-slide="prev">-->
<!--        	    <span class="carousel-control-prev-icon"></span>-->
<!--        	  </a>-->
<!--        	  <a class="carousel-control-next" href="#demo" data-slide="next">-->
<!--        	    <span class="carousel-control-next-icon"></span>-->
<!--        	  </a>-->
<!--        	</div>-->
        	<?php wp_reset_postdata() ?>
            <?php  dynamic_sidebar('homepage'); ?>
			<?php wp_reset_postdata() ?>
            <div class="topHot my-4">
                <div class="slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><a href="http://ole.vn/cup-c1-c2-chau-au/lacazette-toa-sang-arsenal-de-dang-ha-guc-bay-doi-113592.html"><span class="wapImg"></span></a>
                                <a href="http://ole.vn/cup-c1-c2-chau-au/lacazette-toa-sang-arsenal-de-dang-ha-guc-bay-doi-113592.html"> <img src="http://ole.vn/media/k2/items/cache/865c0b5f55d655e2499e74343d52154a_L.jpg" alt="Lacazette tỏa sáng, Arsenal dễ dàng hạ gục bầy dơi"></a>
                                <p><a href="http://ole.vn/cup-c1-c2-chau-au/lacazette-toa-sang-arsenal-de-dang-ha-guc-bay-doi-113592.html">Lacazette tỏa sáng, Arsenal dễ dàng hạ gục bầy dơi</a></p>
                            </div>
                            <div class="item"><a href="http://ole.vn/bong-da-trong-nuoc/anh-duc-tu-choi-tro-lai-doi-tuyen-hang-cong-dt-viet-nam-du-king-s-cup-biet-trong-cay-vao-ai-113589.html"><span class="wapImg"></span></a>
                                <a href="http://ole.vn/bong-da-trong-nuoc/anh-duc-tu-choi-tro-lai-doi-tuyen-hang-cong-dt-viet-nam-du-king-s-cup-biet-trong-cay-vao-ai-113589.html"> <img src="http://ole.vn/media/k2/items/cache/2a9f2188d2c07129775cd8c9ca2393f6_L.jpg" alt="Anh Đức từ chối trở lại đội tuyển, hàng công ĐT Việt Nam dự King’s Cup biết trông cậy vào ai?"></a>
                                <p><a href="http://ole.vn/bong-da-trong-nuoc/anh-duc-tu-choi-tro-lai-doi-tuyen-hang-cong-dt-viet-nam-du-king-s-cup-biet-trong-cay-vao-ai-113589.html">Anh Đức từ chối trở lại đội tuyển, hàng công ĐT Việt Nam...</a></p>
                            </div>
                            <div class="item">
                                <a href="http://ole.vn/cup-c1-c2-chau-au/ket-qua-frankfurt-vs-chelsea-pedro-sam-vai-nguoi-hung-giu-lai-loi-the-cho-chelsea-113593.html"><span class="wapImg"></span></a>
                                <a href="http://ole.vn/cup-c1-c2-chau-au/ket-qua-frankfurt-vs-chelsea-pedro-sam-vai-nguoi-hung-giu-lai-loi-the-cho-chelsea-113593.html"> <img src="http://ole.vn/media/k2/items/cache/b422a9e6eea917b7d70b9825670a5ed1_L.jpg" alt="Kết quả Frankfurt vs Chelsea: Pedro sắm vai người hùng giữ lại  lợi thế cho Chelsea"></a>
                                <p><a href="http://ole.vn/cup-c1-c2-chau-au/ket-qua-frankfurt-vs-chelsea-pedro-sam-vai-nguoi-hung-giu-lai-loi-the-cho-chelsea-113593.html">Kết quả Frankfurt vs Chelsea: Pedro sắm vai người hùng giữ lại ...</a></p>
                            </div>
                            <div class="item"><a href="http://ole.vn/bong-da-trong-nuoc/van-thanh-tro-lai-thi-dau-cho-hagl-nong-long-cung-thay-park-chinh-phuc-vong-loai-world-cup-2022-113590.html"><span class="wapImg"></span></a>
                                <a href="http://ole.vn/bong-da-trong-nuoc/van-thanh-tro-lai-thi-dau-cho-hagl-nong-long-cung-thay-park-chinh-phuc-vong-loai-world-cup-2022-113590.html"> <img src="http://ole.vn/media/k2/items/cache/68c6874843d69058348bd2cb12858252_L.jpg" alt="Văn Thanh trở lại thi đấu cho HAGL, nóng lòng cùng thầy Park chinh phục vòng loại World Cup 2022"></a>
                                <p><a href="http://ole.vn/bong-da-trong-nuoc/van-thanh-tro-lai-thi-dau-cho-hagl-nong-long-cung-thay-park-chinh-phuc-vong-loai-world-cup-2022-113590.html">Văn Thanh trở lại thi đấu cho HAGL, nóng lòng cùng thầy Park chinh...</a></p>
                            </div>
                            <div class="item">
                                <a href="http://ole.vn/bong-da-trong-nuoc/hlv-park-hang-seo-chi-can-cau-thu-viet-kieu-dap-ung-duoc-2-dieu-kien-nay-ho-da-o-dau-toi-cung-se-di-xem-113591.html"><span class="wapImg"></span></a>
                                <a href="http://ole.vn/bong-da-trong-nuoc/hlv-park-hang-seo-chi-can-cau-thu-viet-kieu-dap-ung-duoc-2-dieu-kien-nay-ho-da-o-dau-toi-cung-se-di-xem-113591.html"> <img src="http://ole.vn/media/k2/items/cache/b4ae882f123eb1b8e1634b9b0fecddf4_L.jpg" alt="HLV Park Hang-seo: “Chỉ cần cầu thủ Việt Kiều đáp ứng được 2 điều kiện này, họ đá ở đâu tôi cũng sẽ đi xem”"></a>
                                <p><a href="http://ole.vn/bong-da-trong-nuoc/hlv-park-hang-seo-chi-can-cau-thu-viet-kieu-dap-ung-duoc-2-dieu-kien-nay-ho-da-o-dau-toi-cung-se-di-xem-113591.html">HLV Park Hang-seo: “Chỉ cần cầu thủ Việt Kiều đáp ứng...</a></p>
                            </div>
                        </div>
                </div>
                <div class="newsTop ps-container ps-active-y">
                    <ul>
                        <li><a href="http://ole.vn/bong-da-ngoai-hang-anh/man-utd-de-lo-ao-dau-moi-113577.html">  Man Utd để lộ áo đấu mới</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/cup-c1-c2-chau-au/tin-xau-cho-liverpool-khi-firmino-khong-the-co-mat-o-tran-dau-dem-nay-113579.html">  Tin xấu cho Liverpool khi Firmino không thể có mặt ở trận đấu...</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/bong-da-ngoai-hang-anh/mesut-ozil-mong-muon-duoc-gan-bo-voi-phao-thu-lau-dai-113578.html">  Mesut Ozil mong muốn được gắn bó với Pháo Thủ lâu dài</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/bong-da-ngoai-hang-anh/chelsea-sap-sua-co-ong-chu-moi-113576.html">  Chelsea sắp sửa có ông chủ mới</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/tin-chuyen-nhuong/real-madrid-co-mot-nua-chu-ki-voi-eriksen-113575.html">  Real Madrid có một nửa chữ kí với Eriksen</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/bong-da-giao-huu-quoc-te/thu-thanh-casillar-phai-nhap-vien-vi-dau-tim-113574.html">  Thủ thành Casillar phải nhập viện vì đau tim</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/cup-c1-c2-chau-au/ket-qua-tottenham-vs-ajax-ga-trong-guc-nga-ngay-tai-san-nha-113566.html">  Kết quả Tottenham vs Ajax: Gà Trống gục ngã ngay tại sân nhà</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/cup-c1-c2-chau-au/5-diem-nong-tran-tottenham-ajax-khi-toc-do-len-ngoi-113561.html">  5 điểm nóng trận Tottenham - Ajax: Khi tốc độ lên ngôi</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/bong-da-ngoai-hang-anh/ro-ri-ao-dau-moi-cua-chelsea-mua-giai-2019-2020-113560.html">  Rò rỉ áo đấu mới của Chelsea mùa giải 2019/2020</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                        <li><a href="http://ole.vn/tin-chuyen-nhuong/chuyen-nhuong-30-4-lindelof-dang-duoc-wolves-san-don-113559.html">  Chuyển nhượng 30/4: Lindelof đang được Wolves săn đón</a> <!-- <span class="hotIcon"> <img src="/themes/classic/images/star-blink-icon.gif"></span>--></li>
                    </ul>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 287px; right: 3px;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 166px;"></div>
                    </div>
                </div>
            </div>
            <div class="seagames">
                <h2 class="titBox"><a title="BÓNG ĐÁ ANH" href="http://ole.vn/bong-da-ngoai-hang-anh.html">BÓNG ĐÁ ANH</a></h2>
                <div class="col-xs-12 col-sm-6 sgNews">

                    <div class="mainNewsBox">
                        <a title=" Thất trận, fan Liverpool nổi khùng với 1 cái tên: “Biến đi đồ vô dụng”" href="http://ole.vn/bong-da-ngoai-hang-anh/that-tran-fan-liverpool-noi-khung-voi-1-cai-ten-bien-di-do-vo-dung-113587.html"><img alt="Thất trận, fan Liverpool nổi khùng với 1 cái tên: “Biến đi đồ vô dụng”" src="http://ole.vn/media/k2/items/cache/b25e10c4f62d3071485cfbdd0e3ca811_L.jpg" style="height: 195px;"></a>
                        <h3><a title=" Thất trận, fan Liverpool nổi khùng với 1 cái tên: “Biến đi đồ vô dụng”" href="http://ole.vn/bong-da-ngoai-hang-anh/that-tran-fan-liverpool-noi-khung-voi-1-cai-ten-bien-di-do-vo-dung-113587.html">Thất trận, fan Liverpool nổi khùng với 1 cái tên: “Biến đi đồ vô dụng”</a></h3>
                        <p>Người hâm mộ The Kop không giữ nổi bình tĩnh với 1 cái tên đá chính.
                            Tâm điểm bóng đá Châu Âu rạng sáng nay đổ dồn về Camp Nou, nơi diễn ra màn so tài giữa Barcelona và Liverpool. Hành quân đến Tây Ban Nha, đoàn quân do...</p>
                    </div>

                    <div class="subNewsBox">
                        <h4><a title=" Rio Ferdinand: " van="" dijk="" chính="" là="" tội="" đồ="" của="" pha="" bóng="" đó""="" href="http://ole.vn/bong-da-ngoai-hang-anh/rio-ferdinand-van-dijk-chinh-la-toi-do-cua-pha-bong-do-113584.html">Rio Ferdinand: "Van Dijk chính là tội đồ của pha bóng đó"</a></h4>
                        <div class="col-xs-12 col-sm-6"><a title=" Rio Ferdinand: " van="" dijk="" chính="" là="" tội="" đồ="" của="" pha="" bóng="" đó""="" href="http://ole.vn/bong-da-ngoai-hang-anh/rio-ferdinand-van-dijk-chinh-la-toi-do-cua-pha-bong-do-113584.html"><img alt="Rio Ferdinand: " van="" dijk="" chính="" là="" tội="" đồ="" của="" pha="" bóng="" đó""="" src="http://ole.vn/media/k2/items/cache/1fd214dfbfcf1853508eba4135e156bd_M.jpg" style="height: 88.8px;"></a></div>
                        <div class="col-xs-12 col-sm-6"><p style="height: 88.8px;">Hàng thủ của The Kop đã có ngày thi đấu thảm họa khiến đội nhà thất bại tại sân Camp Nou.
                                Trận đấu bán kết lượt đi Champions League giữa Barcelona và...</p></div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 sgDirect">
                    <div class="titImgNewsBox">
                        <a title="FAN Liverpool: " chúng="" tôi="" thua="" chỉ="" vì="" không="" may="" mắn""="" href="http://ole.vn/bong-da-ngoai-hang-anh/fan-liverpool-chung-toi-thua-chi-vi-khong-may-man-113583.html"><img alt="FAN Liverpool: " chúng="" tôi="" thua="" chỉ="" vì="" không="" may="" mắn""="" src="http://ole.vn/media/k2/items/cache/9f01d2f337b8dae374875fc151293cc7_M.jpg" style="height: 93.3px;"></a>
                        <h4><a title="FAN Liverpool: " chúng="" tôi="" thua="" chỉ="" vì="" không="" may="" mắn""="" href="http://ole.vn/bong-da-ngoai-hang-anh/fan-liverpool-chung-toi-thua-chi-vi-khong-may-man-113583.html">FAN Liverpool: "Chúng tôi thua chỉ vì không may mắn"</a><span class="newsTime">19 giờ trước</span></h4>
                    </div>
                    <div class="titImgNewsBox">
                        <a title="Liverpool 5-0 Huddersfield: Cơn điên của Jurgen Klopp" href="http://ole.vn/bong-da-ngoai-hang-anh/liverpool-5-0-huddersfield-con-dien-cua-jurgen-klopp-113502.html"><img alt="Liverpool 5-0 Huddersfield: Cơn điên của Jurgen Klopp" src="http://ole.vn/media/k2/items/cache/68b70fa03b3761da0c24bb0cb128b913_M.jpg" style="height: 93.3px;"></a>
                        <h4><a title="Liverpool 5-0 Huddersfield: Cơn điên của Jurgen Klopp" href="http://ole.vn/bong-da-ngoai-hang-anh/liverpool-5-0-huddersfield-con-dien-cua-jurgen-klopp-113502.html">Liverpool 5-0 Huddersfield: Cơn điên của Jurgen Klopp</a><span class="newsTime"> 10:00 27/04/2019 </span></h4>
                    </div>
                    <div class="titImgNewsBox">
                        <a title="M.U chọn Eriksen làm 'hạt nhân' cho cuộc tái thiết" href="http://ole.vn/bong-da-ngoai-hang-anh/m-u-chon-eriksen-lam-hat-nhan-cho-cuoc-tai-thiet-113501.html"><img alt="M.U chọn Eriksen làm 'hạt nhân' cho cuộc tái thiết" src="http://ole.vn/media/k2/items/cache/5992e7387b3f023c904c98cb198f8548_M.jpg" style="height: 93.3px;"></a>
                        <h4><a title="M.U chọn Eriksen làm 'hạt nhân' cho cuộc tái thiết" href="http://ole.vn/bong-da-ngoai-hang-anh/m-u-chon-eriksen-lam-hat-nhan-cho-cuoc-tai-thiet-113501.html">M.U chọn Eriksen làm 'hạt nhân' cho cuộc tái thiết</a><span class="newsTime"> 09:59 27/04/2019 </span></h4>
                    </div>
                    <div class="titNewsBox">
                        <a title="Đăng clip đánh bại Man City, M.U bị Fan đáp trả gay gắt" href="http://ole.vn/bong-da-ngoai-hang-anh/dang-clip-danh-bai-man-city-m-u-bi-fan-dap-tra-gay-gat-113440.html">Đăng clip đánh bại Man City, M.U bị Fan đáp trả gay gắt</a>
                        <a title="Đề phòng Hazard ra đi, Chelsea nhắm tới sao Ligue 1" href="http://ole.vn/bong-da-ngoai-hang-anh/de-phong-hazard-ra-di-chelsea-nham-toi-sao-ligue-1-113314.html">Đề phòng Hazard ra đi, Chelsea nhắm tới sao Ligue 1</a>
                        <a title="Tiền vệ Chelsea bị cảnh sát tóm cổ" href="http://ole.vn/bong-da-ngoai-hang-anh/tien-ve-chelsea-bi-canh-sat-tom-co-113309.html">Tiền vệ Chelsea bị cảnh sát tóm cổ</a>
                        <a title="Cardiff 1-2 Chelsea: Hazard dự bị, Chelsea nhọc nhằn giành 3 điểm" href="http://ole.vn/bong-da-ngoai-hang-anh/cardiff-1-2-chelsea-hazard-du-bi-chelsea-nhoc-nhan-gianh-3-diem-113294.html">Cardiff 1-2 Chelsea: Hazard dự bị, Chelsea nhọc nhằn giành 3 điểm</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 soccerVideo nd">
                <h2 class="titBox"><a title="THỂ THAO 24h" href="http://ole.vn/the-thao-24h.html">THỂ THAO 24h</a></h2>
                <div class="mainNewsBox mainNewsBox50">
                    <a title="Sao U23 Thái Lan CHÍNH THỨC bị treo giò 2 trận" href="http://ole.vn/the-thao-24h/sao-u23-thai-lan-chinh-thuc-bi-treo-gio-2-tran-113337.html"><img alt="Sao U23 Thái Lan CHÍNH THỨC bị treo giò 2 trận" src="http://ole.vn/media/k2/items/cache/4873b60dc6570b03170f8d33fa2602af_L.jpg" style="height: 195px;"></a>
                    <h3><a title="Sao U23 Thái Lan CHÍNH THỨC bị treo giò 2 trận" href="http://ole.vn/the-thao-24h/sao-u23-thai-lan-chinh-thuc-bi-treo-gio-2-tran-113337.html">Sao U23 Thái Lan CHÍNH THỨC bị treo giò 2 trận</a></h3>
                    <!--<span class="newsTime">03/05/2019</span>-->
                    <p>Trang chủ Liên đoàn Bóng đá Thái Lan xác nhận Supachai Jaided phải nhận án phạt từ AFC sau pha chơi xấu của mình tại vòng loại U23 châu Á 2020.Với hành động đánh nguội đối với Đình Trọng, đội trưởng của U23 Thái Lan nhận thẻ đỏ trực tiếp ở phút 57. Mới đây, Liên đoàn Bóng đá Thái Lan (Thai FA) đã xác nhận...</p>
                </div>
                <div class="subNewsBox">
                    <h4><a title="KẾT QUẢ Pháp - CH Ailen: Dấu ấn " vua="" bọ="" cạp",="" 3="" phút="" định="" đoạt"="" href="http://ole.vn/the-thao-24h/ket-qua-phap-ch-ailen-dau-an-vua-bo-cap-3-phut-dinh-doat-111406.html">KẾT QUẢ Pháp - CH Ailen: Dấu ấn "Vua bọ cạp", 3 phút định đoạt</a></h4>
                    <div class="col-xs-12 col-sm-6"><a title="KẾT QUẢ Pháp - CH Ailen: Dấu ấn " vua="" bọ="" cạp",="" 3="" phút="" định="" đoạt"="" href="http://ole.vn/the-thao-24h/ket-qua-phap-ch-ailen-dau-an-vua-bo-cap-3-phut-dinh-doat-111406.html"><img alt="KẾT QUẢ Pháp - CH Ailen: Dấu ấn " vua="" bọ="" cạp",="" 3="" phút="" định="" đoạt"="" src="http://ole.vn/media/k2/items/cache/43e0d57d64fbc41af20b80da2240878d_M.jpg" style="height: 88.8px;"></a></div>
                    <div class="col-xs-12 col-sm-6"><p style="height: 88.8px;">Trận làm nóng của dàn sao Pháp đã có kết cục nhanh không tưởng.
                        </p></div>
                </div>
                <div class="col-xs-12 col-sm-6 titSubNewsBox">
                    <h4><a title="KẾT QUẢ Italia - Saudi Arabia: Balotelli tái sinh, quân xanh dằn mặt" href="http://ole.vn/the-thao-24h/ket-qua-italia-saudi-arabia-balotelli-tai-sinh-quan-xanh-dan-mat-111407.html">KẾT QUẢ Italia - Saudi Arabia: Balotelli tái sinh, quân xanh dằn mặt</a></h4>
                    <p>Italia phải sắm vai quân xanh và đã dằn mặt Saudi Arabia trước thềm World Cup 2018.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 titNewsBox">
                    <a title="Huyền thoại Maradona nhập viện khẩn cấp do xuất huyết dạ dày" href="http://ole.vn/the-thao-24h/huyen-thoai-maradona-nhap-vien-khan-cap-do-xuat-huyet-da-day-113047.html">Huyền thoại Maradona nhập viện khẩn cấp do xuất huyết dạ dày</a>
                    <a title="Làm thế nào Quang Hải có thể hiện thực giấc mơ chơi bóng ở Ngoại Hạng Anh?" href="http://ole.vn/the-thao-24h/lam-the-nao-quang-hai-co-the-hien-thuc-giac-mo-choi-bong-o-ngoai-hang-anh-112955.html">Làm thế nào Quang Hải có thể hiện thực giấc mơ chơi bóng ở Ngoại Hạng Anh?</a>
                    <a title="Rời châu Âu, Torres tái ngộ cựu sao M.U?" href="http://ole.vn/the-thao-24h/roi-chau-au-torres-tai-ngo-cuu-sao-m-u-110062.html">Rời châu Âu, Torres tái ngộ cựu sao M.U?</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 englandFootball friends ">
                <h2 class="titBox"><a title="BÓNG ĐÁ TÂY BAN NHA" href="http://ole.vn/bong-da-tay-ban-nha.html">BÓNG ĐÁ TÂY BAN NHA</a></h2>
                <div class="mainNewsBox">
                    <a title="Zidane nổi khùng, chỉ trích thậm tệ 1 cầu thủ Real sau thất bại trước đội bét bảng" href="http://ole.vn/bong-da-tay-ban-nha/zidane-noi-khung-chi-trich-tham-te-1-cau-thu-real-sau-that-bai-truoc-doi-bet-bang-113545.html"><img alt="Zidane nổi khùng, chỉ trích thậm tệ 1 cầu thủ Real sau thất bại trước đội bét bảng" src="http://ole.vn/media/k2/items/cache/d1f8d660c463daaedccb91acbcf87418_L.jpg" style="height: 195px;"></a>
                    <h3><a title="Zidane nổi khùng, chỉ trích thậm tệ 1 cầu thủ Real sau thất bại trước đội bét bảng" href="http://ole.vn/bong-da-tay-ban-nha/zidane-noi-khung-chi-trich-tham-te-1-cau-thu-real-sau-that-bai-truoc-doi-bet-bang-113545.html">Zidane nổi khùng, chỉ trích thậm tệ 1 cầu thủ Real sau thất bại trước đội...</a></h3>
                    <p>
                        <!--<span class="newsTime">03/05/2019</span>-->
                        HLV Zidane đã tỏ ra vô cùng giận dữ khi nhìn cách Real thua bạc nhược trước đội thuộc nhóm “cầm đèn đỏ” tại La Liga, Rayo Vallecano.
                        “Tôi vẫn luôn bảo vệ các cầu thủ của mình, song hôm nay thì không thể. Chúng tôi...</p>
                </div>
                <div class="subNewsBox">
                    <h4><a title="" sốc"="" kền="" trắng="" bị="" bắn="" hạ="" bởi="" đội="" cuối="" bảng"="" href="http://ole.vn/bong-da-tay-ban-nha/soc-ken-ken-trang-bi-ban-ha-boi-doi-cuoi-bang-113532.html">"Sốc" Kền Kền Trắng bị bắn hạ bởi đội cuối bảng</a></h4>
                    <div class="col-xs-12 col-sm-6"><a title="" sốc"="" kền="" trắng="" bị="" bắn="" hạ="" bởi="" đội="" cuối="" bảng"="" href="http://ole.vn/bong-da-tay-ban-nha/soc-ken-ken-trang-bi-ban-ha-boi-doi-cuoi-bang-113532.html"><img alt="" sốc"="" kền="" trắng="" bị="" bắn="" hạ="" bởi="" đội="" cuối="" bảng"="" src="http://ole.vn/media/k2/items/cache/f9974149527da7ec3fb23eeddafd4b0a_M.jpg" style="height: 88.8px;"></a></div>
                    <div class="col-xs-12 col-sm-6"><p style="height: 88.8px;">Nếu như ở Ngoại hạng Anh có Man United thì tại La Liga, cũng có một đại gia đang lâm vào cơn khủng hoảng là Real Madrid sau thất bại đáng xấu hổ trước Vallecano.
                            Ghi bàn
                            Vallecano: Embarba (pen 23')
                            Dẫu biết mùa giải đã kết thúc từ...</p></div>
                </div>
                <div class="titNewsBox">
                    <a title="Một tay giúp Barca vô địch, Messi khiến các huyền thoại khóc thét với kỷ lục không ai làm nổi" href="http://ole.vn/bong-da-tay-ban-nha/mot-tay-giup-barca-vo-dich-messi-khien-cac-huyen-thoai-khoc-thet-voi-ky-luc-khong-ai-lam-noi-113517.html">Một tay giúp Barca vô địch, Messi khiến các huyền thoại khóc thét với kỷ lục...</a>
                    <a title="Không thể chịu nổi thói ngổ ngáo của Diego Costa, Atletico quyết tâm rao bán" href="http://ole.vn/bong-da-tay-ban-nha/khong-the-chiu-noi-thoi-ngo-ngao-cua-diego-costa-atletico-quyet-tam-rao-ban-113510.html">Không thể chịu nổi thói ngổ ngáo của Diego Costa, Atletico quyết tâm rao bán</a>
                    <a title="Valladolid 1-4 Real Madrid: Benzema lập cú đúp, Real ngược dòng giành 3 điểm" href="http://ole.vn/bong-da-tay-ban-nha/valladolid-1-4-real-madrid-benzema-lap-cu-dup-real-nguoc-dong-gianh-3-diem-113231.html">Valladolid 1-4 Real Madrid: Benzema lập cú đúp, Real ngược dòng giành 3 điểm</a>
                    <a title="Barca lại đề nghị Messi gia hạn hợp đồng" href="http://ole.vn/bong-da-tay-ban-nha/barca-lai-de-nghi-messi-gia-han-hop-dong-113159.html">Barca lại đề nghị Messi gia hạn hợp đồng</a>

                </div>

            </div>

            <div class="col-xs-12 col-sm-6 englandFootball  ">
                <h2 class="titBox"><a title="BÓNG ĐÁ QUỐC TẾ" href="http://ole.vn/bong-da-giao-huu-quoc-te.html">BÓNG ĐÁ QUỐC TẾ</a></h2>
                <div class="mainNewsBox">
                    <a title="Balotelli: Ronaldo không đủ đẳng cấp để mang ra so sánh với Messi" href="http://ole.vn/bong-da-giao-huu-quoc-te/balotelli-ronaldo-khong-du-dang-cap-de-mang-ra-so-sanh-voi-messi-113588.html"><img alt="Balotelli: Ronaldo không đủ đẳng cấp để mang ra so sánh với Messi" src="http://ole.vn/media/k2/items/cache/98e3295f2632598d014960ba04c6ae18_L.jpg" style="height: 195px;"></a>
                    <h3><a title="Balotelli: Ronaldo không đủ đẳng cấp để mang ra so sánh với Messi" href="http://ole.vn/bong-da-giao-huu-quoc-te/balotelli-ronaldo-khong-du-dang-cap-de-mang-ra-so-sanh-voi-messi-113588.html">Balotelli: Ronaldo không đủ đẳng cấp để mang ra so sánh với Messi</a></h3>
                    <p>
                        <!--<span class="newsTime">03/05/2019</span>-->
                        Mario Balotelli dành thời gian để theo dõi trận đấu giữa Barcelona và Liverpool trong khuôn khổ bán kết lượt đi Champions League. Đội bóng cũ của “Trai hư” đã để thua với tỷ số 0-3 và đứng trước nguy cơ cao phải nói...</p>
                </div>
                <div class="subNewsBox">
                    <h4><a title="M.U đại thắng ở cúp FA, báo Thái vẫn chấm Văn Lâm điểm số thấp không tưởng" href="http://ole.vn/bong-da-giao-huu-quoc-te/m-u-dai-thang-o-cup-fa-bao-thai-van-cham-van-lam-diem-so-thap-khong-tuong-113586.html">M.U đại thắng ở cúp FA, báo Thái vẫn chấm Văn Lâm điểm số thấp không...</a></h4>
                    <div class="col-xs-12 col-sm-6"><a title="M.U đại thắng ở cúp FA, báo Thái vẫn chấm Văn Lâm điểm số thấp không tưởng" href="http://ole.vn/bong-da-giao-huu-quoc-te/m-u-dai-thang-o-cup-fa-bao-thai-van-cham-van-lam-diem-so-thap-khong-tuong-113586.html"><img alt="M.U đại thắng ở cúp FA, báo Thái vẫn chấm Văn Lâm điểm số thấp không tưởng" src="http://ole.vn/media/k2/items/cache/3a4b3efe429f559c59d57553971cb7bb_M.jpg" style="height: 88.8px;"></a></div>
                    <div class="col-xs-12 col-sm-6"><p style="height: 88.8px;">Trang Siamsport (Thái Lan) đã dành số điểm thấp khá bất ngờ cho Văn Lâm trong ngày Muangthong giành chiến thắng 3 sao tại vòng sơ loại FA Cup 2019.
                            Muangthong United đã có chiến thắng đầu tiên dưới triều đại Yoon Jong-hwan trong trận đấu...</p></div>
                </div>
                <div class="titNewsBox">
                    <a title="Thủ thành Casillar phải nhập viện vì đau tim" href="http://ole.vn/bong-da-giao-huu-quoc-te/thu-thanh-casillar-phai-nhap-vien-vi-dau-tim-113574.html">Thủ thành Casillar phải nhập viện vì đau tim</a>
                    <a title="Ajax lại gây sốc cúp C1: Báo Anh bái phục, vô địch không phải chuyện đùa" href="http://ole.vn/bong-da-giao-huu-quoc-te/ajax-lai-gay-soc-cup-c1-bao-anh-bai-phuc-vo-dich-khong-phai-chuyen-dua-113565.html">Ajax lại gây sốc cúp C1: Báo Anh bái phục, vô địch không phải chuyện đùa</a>
                    <a title="Real là đội bóng số 1 hành tinh, Barca ngậm ngùi nhận số 2" href="http://ole.vn/bong-da-giao-huu-quoc-te/real-la-doi-bong-so-1-hanh-tinh-barca-ngam-ngui-nhan-so-2-113140.html">Real là đội bóng số 1 hành tinh, Barca ngậm ngùi nhận số 2</a>
                    <a title="Vì sao Liverpool 'phải' thắng?" href="http://ole.vn/bong-da-giao-huu-quoc-te/vi-sao-liverpool-phai-thang-113133.html">Vì sao Liverpool 'phải' thắng?</a>

                </div>

            </div>
        </div>
        <?php get_sidebar() ?>

      </div>
      <!-- /.row -->

  </div>
<!-- /.container -->
<?php get_footer() ?>