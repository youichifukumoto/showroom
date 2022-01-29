-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 1 月 29 日 20:18
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `TooL`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `item_table`
--

CREATE TABLE `item_table` (
  `id` int(12) NOT NULL,
  `style` int(12) NOT NULL,
  `item` varchar(64) NOT NULL,
  `value` int(6) NOT NULL,
  `fabric` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL,
  `color_a` varchar(64) DEFAULT NULL,
  `color_b` varchar(64) DEFAULT NULL,
  `color_c` varchar(64) DEFAULT NULL,
  `color_d` varchar(64) DEFAULT NULL,
  `color_e` varchar(64) DEFAULT NULL,
  `order_a` int(12) DEFAULT NULL,
  `order_b` int(12) DEFAULT NULL,
  `order_c` int(12) DEFAULT NULL,
  `order_d` int(12) DEFAULT NULL,
  `order_e` int(12) DEFAULT NULL,
  `movie` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_a` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_b` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_c` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_d` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_color_a` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_color_b` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_color_c` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_color_d` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_color_e` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `item_table`
--

INSERT INTO `item_table` (`id`, `style`, `item`, `value`, `fabric`, `size`, `color_a`, `color_b`, `color_c`, `color_d`, `color_e`, `order_a`, `order_b`, `order_c`, `order_d`, `order_e`, `movie`, `detail_a`, `detail_b`, `detail_c`, `detail_d`, `item_color_a`, `item_color_b`, `item_color_c`, `item_color_d`, `item_color_e`) VALUES
(51, 2223012, 'Linen Crewneek Open OP', 12000, '麻　100％', '着丈116㎝ . 袖丈 36㎝ . 肩幅 60㎝ . 身幅 60㎝ . 裾幅 70㎝', 'BLK', 'RED', 'GRN', 'RED', 'WHT', NULL, NULL, NULL, NULL, NULL, 'upload/2705713_l.mov', 'upload/DSC00032.jpg', 'upload/DSC00026.jpg', 'upload/DSC00028.jpg', 'upload/DSC00030.jpg', 'upload/DSC09447.jpg', 'upload/DSC09441.jpg', 'upload/DSC09439.jpg', 'upload/DSC09437.jpg', 'upload/DSC09434.jpg'),
(52, 2223041, 'Linen Opencollar ALL in One', 13500, '麻 100％ .   (裏地) 綿 100%', '着丈130㎝ . 袖丈 23㎝ . 肩幅 50㎝ . 身幅 53㎝ . 裾幅 47㎝', 'BLK', 'BRN', 'Mocha', '', '', NULL, NULL, NULL, NULL, NULL, 'upload/2705714_l.mov', 'upload/DSC00056.jpg', 'upload/DSC00058.jpg', 'upload/DSC00054.jpg', 'upload/DSC00050.jpg', 'upload/DSC09569.jpg', 'upload/DSC09567.jpg', 'upload/DSC09565.jpg', NULL, NULL),
(53, 2224032, 'Linen Pullover', 8900, '麻　100％', '着丈60㎝ . 袖丈 24㎝ . 肩幅 58㎝ . 身幅 60㎝ . 裾幅 61㎝', 'BEG', 'GRY', 'GRN', 'WHT', 'PNK', NULL, NULL, NULL, NULL, NULL, 'upload/2709702_l.mov', 'upload/DSC09945.jpg', 'upload/DSC09947.jpg', 'upload/DSC09949.jpg', 'upload/DSC09943.jpg', 'upload/DSC09529.jpg', 'upload/DSC09523.jpg', 'upload/DSC09535.jpg', 'upload/DSC09526.jpg', 'upload/DSC09532.jpg'),
(54, 2224091, 'Linen Check Gather Skirt1200', 12000, '麻　100％', 'ウエスト幅：34〜50㎝ , 総丈：87㎝ , 裾幅：51㎝', 'BLK', 'MALT', 'NAVY', '', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709815_l.mov', 'upload/DSC00494.jpg', 'upload/DSC00496.jpg', 'upload/DSC00498.jpg', 'upload/DSC00500.jpg', 'upload/DSC09614.jpg', 'upload/DSC09616.jpg', 'upload/DSC09611.jpg', NULL, NULL),
(55, 2224012, 'Linen Wide Shirt Onepiece', 15800, '麻　100％', '着丈：115㎝ . 袖丈：10㎝ . 肩幅：77㎝ . 身幅：73㎝ . 裾幅：87㎝', 'BEG', 'GRY', 'GRN', 'WHT', 'PNK', NULL, NULL, NULL, NULL, NULL, 'upload/2709812_l.mov', 'upload/DSC00163.jpg', 'upload/DSC00161.jpg', 'upload/DSC00159.jpg', 'upload/DSC00165.jpg', 'upload/DSC09551.jpg', 'upload/DSC09547.jpg', 'upload/DSC09554.jpg', 'upload/DSC09561.jpg', 'upload/DSC09557.jpg'),
(56, 2224131, 'cotton Linen Pants', 9800, '麻　100％', 'ウエスト幅：34〜52㎝　ヒップ幅：64㎝　総丈：91㎝　', 'BLK', 'L/BEG', 'OLIVE', '', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709813_l.mov', 'upload/DSC00520.jpg', 'upload/DSC00516.jpg', 'upload/DSC00518.jpg', 'upload/DSC00524.jpg', 'upload/DSC09629.jpg', 'upload/DSC09634.jpg', 'upload/DSC09631.jpg', NULL, NULL),
(57, 2224184, 'Sleeve T-shirt', 5500, '綿 100％', '着丈：60㎝ . 肩幅：49㎝ . 身幅：50㎝ . 裾幅：52㎝', 'BLK', 'CHL', 'GRN', 'WHT', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709703_l.mov', 'upload/DSC00073.jpg', 'upload/DSC00075.jpg', 'upload/DSC00082.jpg', 'upload/DSC00214.jpg', 'upload/DSC09383.jpg', 'upload/DSC09380.jpg', 'upload/DSC09377.jpg', 'upload/DSC09375.jpg', NULL),
(58, 2223144, 'Wide Cardigan', 9800, '麻：61％ , レーヨン：30％ , ポリエステル：8％　', '着丈：66㎝ . 袖丈： 41㎝ . 肩幅 ：65㎝ . 身幅 ：60㎝ . 裾幅：66㎝', 'BLK', 'GRY', 'NAT', '', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709811_l.mov', 'upload/DSC00246.jpg', 'upload/DSC00244.jpg', 'upload/DSC00242.jpg', 'upload/DSC00247.jpg', 'upload/DSC09412.jpg', 'upload/DSC09410.jpg', 'upload/DSC09407.jpg', NULL, NULL),
(59, 2223174, 'Organic Cotton CS Tunic', 6200, '綿：100％', '着丈：76㎝ . 袖丈 ：34㎝ . 肩幅 ：53㎝ . 身幅： 60㎝ . 裾幅 ：62㎝', 'BLK', 'BRN', 'PNK', 'WHT', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709703_l.mov', 'upload/DSC09889.jpg', 'upload/DSC09887.jpg', 'upload/DSC09891.jpg', 'upload/DSC09894.jpg', 'upload/DSC09308.jpg', 'upload/DSC09305.jpg', 'upload/DSC09302.jpg', 'upload/DSC09298.jpg', NULL),
(60, 2224102, 'Open Tunic', 10500, 'ラミー：50％ , セルロース：50％', '着丈：111㎝ . 袖丈：40㎝ . 肩幅：61㎝ . 身幅 ：69㎝ . 裾幅：78㎝', 'BLK', 'IVY', 'PNK', '', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709812_l.mov', 'upload/DSC09969.jpg', 'upload/DSC09967.jpg', 'upload/DSC09964.jpg', 'upload/DSC09970.jpg', 'upload/DSC09584.jpg', 'upload/DSC09590.jpg', 'upload/DSC09587.jpg', NULL, NULL),
(62, 2223131, 'Pants', 7900, '綿100％', '着丈：91㎝   股上：36 ㎝  　股下：60㎝　裾幅：16㎝', 'WHT', 'L/BEG', 'NAVY', '', '', NULL, NULL, NULL, NULL, NULL, 'upload/2709813_l.mov', 'upload/DSC00424.jpg', 'upload/DSC00427.jpg', 'upload/DSC00428.jpg', 'upload/DSC00433.jpg', 'upload/DSC09665.jpg', 'upload/DSC09668.jpg', 'upload/DSC09671.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `order_table`
--

CREATE TABLE `order_table` (
  `id` int(12) NOT NULL,
  `order_a` varchar(12) DEFAULT NULL,
  `order_b` varchar(12) DEFAULT NULL,
  `order_c` varchar(12) DEFAULT NULL,
  `order_d` varchar(12) DEFAULT NULL,
  `order_e` varchar(12) DEFAULT NULL,
  `record_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `order_table`
--

INSERT INTO `order_table` (`id`, `order_a`, `order_b`, `order_c`, `order_d`, `order_e`, `record_id`, `user_id`, `created_at`) VALUES
(100, '', '2', '2', '', '', 54, 1, '2022-01-27 23:14:15'),
(101, '1', '1', '1', '1', '1', 51, 2, '2022-01-28 02:15:56');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `email`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '福本　陽一', 'fuku@gmail.com', 'fuku', 1, 0, '2022-01-07 03:15:43', '2022-01-07 03:15:43'),
(2, 'G’s ACADEMY', 'gs', 'gs', 1, 0, '2022-01-07 03:26:46', '2022-01-07 03:26:46'),
(3, 'USER', 'aaa', 'aaa', 0, 0, '2022-01-07 03:48:06', '2022-01-07 03:48:06'),
(14, 'fine', 'fine@gmail.com', 'fine', 0, 0, '2022-01-26 22:17:33', '2022-01-26 22:17:33');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `item_table`
--
ALTER TABLE `item_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `item_table`
--
ALTER TABLE `item_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- テーブルの AUTO_INCREMENT `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
