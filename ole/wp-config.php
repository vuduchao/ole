<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt,
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'ole.vn' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zFTRE)4=FBU*qmV:YPDO%=FZd4sG?jn+tw<=we2{zRU|&!,Ef?NJ3IaQe@i%I*`L' );
define( 'SECURE_AUTH_KEY',  '9 [y6Y37Rb3NNVBg3J/}d!k7yxC^C4Y|_f9eK[xWm3:wls^My[}k~}cAa1cuq8M ' );
define( 'LOGGED_IN_KEY',    ',1fh:P(0LBvaIp$.0z*l8i705A`@&zC<s}sGe`{GA&n!ZzFEnC?B)BZ.Sre~H(Sm' );
define( 'NONCE_KEY',        'X3vj%^5#!c $EM}ak1GK0sy/DT|(I#vyL^kcd`r|Kn$cI,$E[&MpP].[:}(;YCX)' );
define( 'AUTH_SALT',        '>?4t[l7}T,x!RjkvP<HD$8@OX9IHdt>q?Rfz8%8#Q#u(DDKm`C2BL^GAD!;!Tr(M' );
define( 'SECURE_AUTH_SALT', 'yZjqQJ!iWly6,J sGuEWsLJ`4@?r:eB}yIMtAxd{pm~,3[/xTH?+B.+y0B,M,>!Z' );
define( 'LOGGED_IN_SALT',   '></@{o1T3Xp?ql.kRpOD3lL#Mec,XBN_Ilp/[g!PxR$cW511CsB9RXoJL$otddm$' );
define( 'NONCE_SALT',       'Urx_F(($a~EN/}*u|[F/y(`l9/9<vZy;HJ:7vLpk7fMjog@.!`Ro3Pk1*{KH@J1e' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
