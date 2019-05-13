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
define('DB_NAME', 'toowenvn');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'u;FWIKvTy4nJ%vaPuu{2waCb@Kt%|=9(E[_^=H:M-1ffAQJW5G/HCh$WNWv ^sU4');
define('SECURE_AUTH_KEY',  'W|L{5wJ8mxI_X8^[:%T}b0IH&lUQ3gbTw:}^o6|$9?ca[>o,)(i?13OnsAb<ue3m');
define('LOGGED_IN_KEY',    'UlDpqae~5VofYImvh)AaJBF -d:v1Ve#PDwUS%GbJQ!8Ofrr_5h2KP6q%I#+?R/3');
define('NONCE_KEY',        'c6 k.N%IXg]PF{!w1PT_,Du}dlG`zje[vG9>2DzGS+NHQCDll80Bh3^y04xAHN6g');
define('AUTH_SALT',        'iYGkN }21Va`A#CtIu<4Q2wM}EAEdRM4T#mOc9iq+dCD}cJHjMqR2qh,8 Gq~Aup');
define('SECURE_AUTH_SALT', '[Z[nq}o6X~U>KK/I}DODB*%dB-A{[9sP?GaVW:(_U+t`aDRbn#}SoSxwlTT/F>]Y');
define('LOGGED_IN_SALT',   'iB0Sc(cR ]Pg$m!0$]*g~m6t<SUyrBDx>Fn)Nia$Pc|]Gd*bgTY.LiL~;#_g(Eik');
define('NONCE_SALT',       'W7[0@<{4v@5j@@dyq%ze.CB}C=,/q0W{mx@[%P@OvpHK]zhri69X$m1@xD:KFt/2');


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
