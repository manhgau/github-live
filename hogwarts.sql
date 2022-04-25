-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 04:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogwarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(5) NOT NULL,
  `ad_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`) VALUES
(1, 'admin'),
(2, 'thường');

-- --------------------------------------------------------

--
-- Table structure for table `category_new`
--

CREATE TABLE `category_new` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_new`
--

INSERT INTO `category_new` (`id`, `name`) VALUES
(1, 'Tin nóng về COVID-19\r\n\r\n'),
(2, 'Bệnh thường gặp'),
(3, 'Gia đình & giới tính'),
(4, 'Làm đẹp'),
(5, 'Dinh dưỡng');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(5) NOT NULL,
  `phone` int(50) NOT NULL,
  `soluong` int(50) NOT NULL,
  `tongtien` int(255) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_payment` int(10) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `user_id`, `phone`, `soluong`, `tongtien`, `diachi`, `id_payment`, `created_at`) VALUES
(41, 'Nguyễn Văn Thuận', 'thuan123@gmail.com', 45, 329322538, 3, 2712000, 'Mỹ Đình/Hà Nội', 1, 1649408165),
(42, 'Nguyễn Văn Thuận', 'thuan123@gmail.com', 45, 329322538, 12, 11856960, 'Mỹ Đình/Hà Nội', 1, 1649471819),
(43, 'Nguyễn Văn Thuận', 'thuan123@gmail.com', 45, 329322538, 3, 1068600, 'Mỹ Đình/Hà Nội', 1, 1649472311),
(44, 'Nguyễn Quang Minh', 'minh@gmail.com', 46, 985843755, 3, 921760, 'Phú đô', 1, 1649608400),
(45, 'Nguyễn Quang Minh', 'minh@gmail.com', 46, 985843755, 2, 1209760, 'Mỹ Đình/Hà Nội', 1, 1649608447);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(10) NOT NULL,
  `prd_img` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(10) NOT NULL,
  `prd_id` int(10) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(50) NOT NULL,
  `giatien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `prd_img`, `order_id`, `prd_id`, `prd_name`, `soluong`, `giatien`) VALUES
(38, 'f1107ddbfd3bdb6b5e22d4720797013e.jpg', 41, 36, 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 1, 150000),
(39, '6f8abca13f7c727b98482011ec3ad625.jpg', 41, 37, 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 1, 162000),
(40, 'c8ac0a71ba411f151168346a049ce692.jpg', 41, 38, 'Viên Xương Khớp Hoàng Hường Hỗ Trợ Giảm TriệuChứng Do Viêm Khớp.Thoái Hóa Khớp', 1, 2400000),
(41, 'e8be3c8494cd5b62a3f3d0e4b735b8eb.jpg', 42, 35, 'Tinh dầu hoa anh thảo Blackmores 190 viên đẹp da, chống lão hóa, cải thiện nội tiết tố nữ', 3, 609760),
(42, 'c8ac0a71ba411f151168346a049ce692.jpg', 42, 38, 'Viên Xương Khớp Hoàng Hường Hỗ Trợ Giảm TriệuChứng Do Viêm Khớp.Thoái Hóa Khớp', 3, 2400000),
(43, '0636367fb242213a6e6419f1248f61ff.jpg', 42, 48, 'Combo 2 sản phẩm Sữa tắm gội xả 3 trong 1 | 18.21 Man Made Wash 3 in 1 - Chính hãng USA', 1, 1058400),
(44, '198a4bac3f2fcce2d4b8a0fb982b4f91.jpg', 42, 47, 'Sữa rửa mặt cho nam 30Shine phân phối chính hãng Skin&Dr Than Hoạt Tính 100g trắng da kiềm dầu cho da mụn', 1, 179280),
(45, '8472b95d516fb832b37c4f9e90fcb07e.jpg', 42, 46, 'Sữa Rửa Mặt Nam Ngăn Ngừa Mụn Ice Mud BLUEMAN - Làm Sạch Dầu Và Bã Nhờn 170ml', 1, 190000),
(46, '816fba2d6b371eb56f812307174017ae.jpg', 42, 45, 'Viên Uống Chống Lão Hoá CARELINE Bio Marine Collagen Giảm Nếp Nhăn, Chăm Sóc Da Cao Cấp 60 Viên', 1, 650000),
(47, '85cfa4140007478f87afcc9065352c58.jpg', 42, 34, 'Tinh dầu hoa anh thảo Evening Primrose Oil Blackmores Úc 190 viên, hỗ trợ cân bằng nội tiết tố, làm đẹp da, tóc, móng', 1, 600000),
(48, 'f1107ddbfd3bdb6b5e22d4720797013e.jpg', 42, 36, 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 1, 150000),
(49, '85cfa4140007478f87afcc9065352c58.jpg', 43, 34, 'Tinh dầu hoa anh thảo Evening Primrose Oil Blackmores Úc 190 viên, hỗ trợ cân bằng nội tiết tố, làm đẹp da, tóc, móng', 1, 600000),
(50, 'fb611733af51913003bb116d603acefa.jpg', 43, 40, 'Viên uống bổ não Healthy Care Ginkgo Biloba 100 viên', 1, 306600),
(51, '6f8abca13f7c727b98482011ec3ad625.jpg', 43, 37, 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 1, 162000),
(52, 'e8be3c8494cd5b62a3f3d0e4b735b8eb.jpg', 44, 35, 'Tinh dầu hoa anh thảo Blackmores 190 viên đẹp da, chống lão hóa, cải thiện nội tiết tố nữ', 1, 609760),
(53, 'f1107ddbfd3bdb6b5e22d4720797013e.jpg', 44, 36, 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 1, 150000),
(54, '6f8abca13f7c727b98482011ec3ad625.jpg', 44, 37, 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 1, 162000),
(55, '85cfa4140007478f87afcc9065352c58.jpg', 45, 34, 'Tinh dầu hoa anh thảo Evening Primrose Oil Blackmores Úc 190 viên, hỗ trợ cân bằng nội tiết tố, làm đẹp da, tóc, móng', 1, 600000),
(56, 'e8be3c8494cd5b62a3f3d0e4b735b8eb.jpg', 45, 35, 'Tinh dầu hoa anh thảo Blackmores 190 viên đẹp da, chống lão hóa, cải thiện nội tiết tố nữ', 1, 609760);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(5) NOT NULL,
  `partner_background` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `partner_img` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_background`, `partner_img`) VALUES
(1, 'home_brand_image_1.jpg', 'home_brand_logo_1.jpg'),
(2, 'home_brand_image_2.jpg', 'home_brand_logo_2.jpg'),
(3, 'home_brand_image_3.jpg', 'home_brand_logo_3.jpg'),
(4, 'home_brand_image_4.jpg', 'home_brand_logo_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `img` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `prd_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `price_old` int(10) NOT NULL,
  `discount` int(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `sold` int(10) NOT NULL,
  `category_id` int(5) NOT NULL,
  `hot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `prd_name`, `price`, `price_old`, `discount`, `quantity`, `description`, `sold`, `category_id`, `hot`) VALUES
(34, '85cfa4140007478f87afcc9065352c58.jpg', 'Tinh dầu hoa anh thảo Evening Primrose Oil Blackmores Úc 190 viên, hỗ trợ cân bằng nội tiết tố, làm đẹp da, tóc, móng', 600000, 800000, 25, 2364, ' Thông tin sản phẩm Tinh dầu hoa anh thảo Evening Primrose Oil Blackmores <br>\r\n- Số lượng: 190 viên/lọ <br>\r\n- Liều dùng: <br>\r\nNgười lớn: 2-3 lần/ngày, mỗi lần 1 viên trong bữa ăn hoặc ngay sau ăn <br>\r\n- Xuất xứ: Úc <br>\r\n- Ngày sản xuất: Năm 2021 <br>\r\n- Hạn sử dụng: 2024 <br>\r\n- Thành phần mỗi viên uống: <br>\r\n• Mỗi viên Blackmores Evening Primrose Oil chứa: Evening Primrose oil (EPO) 1g(1000mg) Providing: gamma-Linolenic acid (GLA) 100mg <br>\r\n• Sản phẩm không chứa men, Gluten, lúa mì, các', 2700, 5, 1),
(35, 'e8be3c8494cd5b62a3f3d0e4b735b8eb.jpg', 'Tinh dầu hoa anh thảo Blackmores 190 viên đẹp da, chống lão hóa, cải thiện nội tiết tố nữ', 609760, 824000, 26, 2348, '1. THÔNG TIN SẢN PHẨM TINH DẦU HOA ANH THẢO <br>\r\n-  Sản phẩm: Tinh dầu hoa anh thảo <br>\r\n- Xuất xứ: Úc <br>\r\n- Thành phần chính: Gamma-Linolenic Acid(GLA), Omega-6, Vitamin E <br>\r\n- Công dụng: Cải thiện nội tiết tố phụ nữ <br>\r\n- Quy cách: Hộp 190 viên nang <br>\r\n- NSX: 2021 <br>\r\n- HSD: 2024 <br>\r\n2. ƯU ĐIỂM VƯỢT TRỘI TINH DẦU HOA ANH THẢO <br>\r\n- Làm đẹp da, ngừa mụn nội tiết <br>\r\n- Ngăn ngừa lão hóa, duy trì vóc dáng thon gọn <br>\r\n- Giảm các triệu chứng khó chịu ở thời kì tiền kinh nguy', 5670, 8, 1),
(36, 'f1107ddbfd3bdb6b5e22d4720797013e.jpg', 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 150000, 0, 0, 2575, 'THÔNG TIN CHUNG: <br>\r\nBiotin là một loại chất dinh dưỡng thiết yếu được phân loại vào nhóm vitamin B và còn được gọi là \"vitamin H\" hoặc \"vitamin B7\", đóng các vai trò khác nhau trong cơ thể như chuyển hóa đường, lipid và axit amin. Đặc biệt, biotin tham gia sâu vào việc duy trì sức khỏe làn da, niêm mạc, sự phát triển của móng tay và tóc. Nếu thiếu biotin thì cơ thể sẽ xuất hiện các triệu chứng về da như viêm da dị ứng và rụng tóc.<br>\r\n<br>\r\nVì biotin có trong nhiều loại thực phẩm và cũng được tạo ra bởi vi khuẩn đường ruột nên về cơ bản đây là một chất dinh dưỡng hiếm khi bị thiếu hụt. Tuy nhiên, lối sống không đều đặn, thói quen ăn uống không cân bằng, uống rượu sẽ làm lượng biotin giảm đi. Ngoài ra, vì biotin tan trong nước nên nó sẽ nhanh chóng được đào thải ra khỏi cơ thể sau khi uống.<br>\r\n<br>\r\nViên uống bổ sung biotin của DHC Biotin sử dụng thành phần hydroxypropyl methylcellulose (HPMC), tạo thành cấu trúc giống như gel khi hòa tan và được tạo thành công thức giải phóng bền vững (giải phóng dần dần theo thời gian *). Trong đó các thành phần được phân tán trong cơ sở (HPMC) và giải phóng từ từ. Các thành phần hữu ích dần dần được giải phóng, tính bền vững trong cơ thể có thể được nâng cao so với các sản phẩm thông thường. Sản phẩm bổ sung 500μg* biotin mỗi ngày giúp bạn có mái tóc và làn da khỏe đẹp. <br>', 1265, 6, 0),
(37, '6f8abca13f7c727b98482011ec3ad625.jpg', 'Thực phẩm bảo vệ sức khỏe giúp da sáng đẹp và dạ dày khỏe Rohto Blossomy lốc 03 chai x 50ml', 162000, 162000, 0, 5489, 'Thực phẩm bảo vệ sức khỏe Blossomy (3 chai x 50ml) <br>\r\n<br>\r\n *Bao bì có thay đổi theo từng đợt nhập hàng <br>\r\nGiúp da sáng đẹp và dạ dày khỏe <br>\r\n<br>\r\n*Chú ý: Thực phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh. Không sử dụng nếu mẫn cảm với bất kì thành phần nào của sản phẩm. <br>\r\n<br>\r\nBlossomy là thực phẩm bảo vệ sức khỏe, phối hợp Curcumin tự nhiên từ nghệ vàng với Collagen cùng các chất Lactium, Vitamin B1, Vitamin B6 và Mật Ong hình thành nên công thức giúp da sáng đẹp, căng mịn, trẻ trung và làm lành giảm viêm loét dạ dày. <br>\r\n<br>\r\nSử dụng Blossomy mỗi ngày giúp nữ giới duy trì sự xinh đẹp, tự tin, năng động để đáp ứng cuộc sống công việc và gia đình bận rộn. \r\nSản phẩm có dạng nước uống tiện lợi và hấp thụ tốt vào cơ thể cũng như làn da. <br>\r\n<br>\r\nHàm lượng Curcumin có mặt trong Blossomy đạt trên 90% tinh khiết về hàm lượng, không pha trộn, đảm bảo chất lượng. <br>\r\n<br>\r\nSản phẩm có hương vị dưa lưới thơm mát, dễ sử dụng hằng ngày.', 3476, 8, 1),
(38, 'c8ac0a71ba411f151168346a049ce692.jpg', 'Viên Xương Khớp Hoàng Hường Hỗ Trợ Giảm TriệuChứng Do Viêm Khớp.Thoái Hóa Khớp', 2400000, 4000000, 40, 2346, '-Nguyên nhân gây đau xương khớp <br>\r\nĐau xương khớp có thể gặp ở mọi độ tuổi. Nhưng nhiều hơn cả là những người cao tuổi. Bệnh gây cho người bệnh thấy đau đớn, khó chịu. Bất tiện trong việc đi lại, sinh hoạt hàng ngày <br>\r\n<br>\r\n-Có thể khẳng định rằng có rất nhiều nguyên nhân gây đau xương khớp ở người bệnh.Trong đó chúng ta phải kể đến những nguyên nhân sau: <br>\r\n<br>\r\nTuổi tác cao là nguyên nhân khiến cho khả năng tổng hợp tế bào mới trong cấu trúc xương, đĩa đệm, sụn và bao màng hoạt dịch suy giảm\r\nChấn thương do nhiều nguyên nhân gây viêm tại xương, sụn khớp. <br>\r\nRối loạn chuyển hóa sinh ra do cơ thể thiếu hụt canxi, bệnh đái tháo đường, thừa cân, bệnh gút <br>\r\nMắc các bệnh lý về xương khớp như thoái hóa khớp, viêm khớp, thoát vị đĩa đệm, loãng xương <br>\r\nThời tiết thay đổi đột ngột ảnh hưởng đến tuần hoàn máu, xương khớp. <br>\r\nSự ảnh hưởng của bia rượu, chất kích thích tới quá trình trao đổi chất trong cơ thể <br>', 1245, 5, 0),
(39, '31795f21c1ef2e1392490c662a74a383.jpg', 'Thực phẩm chức năng đẹp da, Thực phẩm bảo vệ sức khỏe ProCumin-Collagen Hộp 30 viên', 175000, 250000, 30, 4899, 'Collage, Thực phẩm chức năng đẹp da, Thực phẩm bảo vệ sức khỏe ProCumin Collagen hộp 30 viên <br>\r\n<br>\r\nCông ty TNHH Dược phẩm Pro Cuộc sống xanh (Pro Green Life) được thành lập vào năm 2016, là 1 doanh nghiệp sản xuất, kinh doanh mặt hàng dược phẩm và thực phẩm bảo vệ sức khỏe. Pro Green Life với sứ mệnh cung cấp những sản phẩm bảo vệ sức khỏe có nguồn gốc thiên nhiên từ những thảo dược quý, do người Việt trồng trên đất Việt đã và đang là người bạn đồng hành đáng tin cậy của mọi gia đình Việt Nam. <br>\r\nPro Green Life là thương hiệu uy tín được Pharmacity và FPT Long Châu tin tưởng lựa chọn phân phối trên toàn quốc. <br>\r\n<br>\r\n- THỒNG TIN SẢN PHẨM Thực phẩm bảo vệ sức khỏe ProCumin Collagen: <br>\r\n<br>\r\n- THÀNH PHẦN: <br>\r\n+ Collagen peptide: 150mg <br>\r\n+ Nano curcumin 20%: 150mg <br>\r\n+ Bột sữa ong chúa: 100mg <br>\r\n+ Chiết xuất mầm đậu nành (isoflavone 40%): 10mg\r\n+ Các chất khác: L- CystineGlutathione; Kẽm gluconat; Vitamin A - E - C; Biotin; Selen từ nấm men. <br>\r\n+ Phụ liệu: Sáp ong trắng, Dầu cọ, Dầu đậu nành, Lecithin, Gelatin, Sorbitol, Glycerin, Vanillin, Nipazil, Nipazol vừa đủ 01 viên nang mềm. <br>\r\n<br>\r\n- CÔNG DỤNG: <br>\r\n+ Hỗ trợ chống oxy hóa và cải thiện tình trạng suy giam nội tiết tố nữ. <br>\r\n+ Giúp hạn chế lão hóa da, giảm vết nhăn, sạm da, giúp làm đẹp da. <br>\r\n<br>\r\n- ĐỐI TƯỢNG SỬ DỤNG Thực phẩm chức năng ProCumin Collagen: <br>\r\n+ Người bị sạm da, người bị lão hóa da, nhăn da, người cần chăm sóc làm đẹp da. <br>\r\n+ Phụ nữ tiền mãn kinh, mãn kinh, suy giảm nội tiết tốt nữ có các dấu hiệu: bốc hỏa, dễ cáu gắt, mất ngủ, khả năng sinh lý giảm sút. <br>\r\n', 2340, 5, 0),
(40, 'fb611733af51913003bb116d603acefa.jpg', 'Viên uống bổ não Healthy Care Ginkgo Biloba 100 viên', 306600, 365000, 16, 938, 'VIÊN UỐNG BỔ NÃO HEALTHY CARE GINKGO BILOBA 100 VIÊN <br>\r\n<br>\r\nViên bổ não Healthy Care Ginkgo Biloba 2000mg hộp 100 viên được chiết xuất từ quả bạch quả mang lại cho bạn rất nhiều tác dụng hữu ích giúp giảm cảm giác đau đầu, chóng mặt, suy giảm trí nhớ <br>\r\n* Thương hiệu: Healthy Care <br>\r\n* Xuất xứ: Úc <br>\r\n* Quy cách: Hộp 100 viên <br>\r\n* Hạn sử dụng: 2024 <br>\r\n* Ngày sản xuất và hạn sử dụng được in trên bao bì sản phẩm <br>\r\n<br>\r\nTHÀNH PHẦN CỦA VIÊN UỐNG BỔ NÃO HEALTHY CARE GINKGO BILOBA <br>\r\nTrong mỗi viên Ginkgo Biloba Úc chứa: <br>\r\n- Chiết xuất từ thảo dược khô: Ginkgo biloba lá 2000mg(2g). <br>\r\n- Chuẩn hóa để chứa flavonglycosides Ginkgo 9,6mg. <br>\r\n<br>\r\nCÔNG DỤNG CỦA VIÊN UỐNG BỔ NÃO HEALTHY CARE GINKGO BILOBA <br>\r\n- Giúp cải thiện sự nhận thức và tinh thần được minh mẫn hơn <br>\r\n- Tuần hoàn lưu thông máu trong não bộ được triệt tiêu sự ứ động, tắc nghẽn các mạch máu não gây nguy cơ giảm trí nhớ ở người già <br>\r\n- Giúp giảm stress cho công việc hàng ngày và những lo âu phiền toái trong cuộc sống của bạn. <br>\r\n- Giảm các cơn đau liên quan đến tiền đình, chóng mặt, rối loạn cảm xúc, đau đầu không rõ nguyên nhân. <br>', 2700, 5, 0),
(41, '945d56810b5c91b1b8ca97ff7f53e362.jpg', 'Thuốc nhỏ mắt V RHOTO Chăm sóc đôi mắt của bạn không lo mệt mỏi.', 52200, 60000, 13, 345, 'Đóng gói: Hộp 1 lọ <br>\r\nDạng thuốc: Nhỏ mắt <br>\r\nĐơn vị đăng ký: Công Ty TNHH Rohto Mentholatum (Việt Nam) <br>\r\nThành phần: <br>\r\nPotassium L-Aspartate, Pyridoxine Hydrochloride, Sodium Chondroitin Sulfate, d-α-Tocopherol Acetate, Chlorpheniramine Maleate. <br>\r\nBoric Acid, Polyoxyethylene Hydrogenated Castor Oil 60, Sodium Borate, l-Menthol, d-Borneol, Disodium Edetate, Eucalyptus Oil, nước tinh khiết. <br>\r\nChỉ định: <br>\r\nHỗ trợ cải thiện tình trạng giảm thị lực, mắt mờ (do tiết dịch), mắt mỏi mệt, xung huyết kết mạc, ngứa mắt, phòng ngừa các bệnh về mắt (do bơi lội hoặc bụi, mồ hơi rơi vào mắt), viêm mắt do tia tử ngoại hoặc do các tia sáng khác (như mù tuyết), viêm mí mắt, cảm giác khó chịu khi sử dụng kính tiếp xúc cứng. <br>\r\nChống chỉ định: <br>\r\nKhông dùng cho người bị tăng nhãn áp và mẫn cảm với các thành phần của thuốc. <br>\r\nLiều dùng và cách dùng: <br>\r\nNhỏ mắt 2-3 giọt/lần, 5-6 lần/ngày.', 79, 11, 1),
(42, 'fd81f1f84f928cecfcd81306fc156b95.jpg', 'Máy xông hơi Hero/ nồi xông hơi Hero hàng chuẩn, bảo hành 6 tháng, hình ảnh thực tế sản phẩm', 65450, 85000, 23, 247, 'Nồii xông hơi Hero dung tích 2lít - 2,6lít - 3lít - 4lít , hàng chuẩn, bảo hành 6 tháng. <br>\r\nHiện nay xông hơi dần trở nên phổ biến, lợi ích của việc xông hơi không chỉ giới hạn ở việc giải cảm, phục hồi sức khoẻ mà còn nhiều lợi ích khác, như tốt cho mẹ bầu sau sinh, giảm mỡ... <br>\r\nĐối với xông hơi truyền thống thì việc xông hơi khá phiền toái, tuy nhiên ngày nay với bộ nồi lều xông hơi, bạn có thể xông hơi mọi lúc mọi nơi. <br>\r\nNồi xông hơi chúng tôi cung cấp hiện nay thuộc dòng nồi xông hơi Hero với đặc tính mau sôi, khả năng tạo hơi tốt, máy bền , mẫu mã đẹp đã được kiểm chứng cực kì hiệu quả trên thị trường. <br>\r\nThương hiệu và Thông số kĩ thuật: <br>\r\nThương hiệu: HERO <br>\r\nMàu: thân màu trắng, nắp nồi màu đen. <br>\r\nCông suất 1000W - 1000W - 1500W - 2000W <br>\r\nDung tích 2lít - 2,6lít - 3lít - 4lít <br>\r\nCó 9 tốc độ xông hơi <br>\r\nRiêng dòng 4lít có 15 tốc độ xông hơi <br>\r\nSử dụng chế độ hẹn giờ <br>\r\nThời gian sôi nhanh từ 5-10 phút tùy thuộc vào lượng nước và thời gian cần xông hơi. <br>\r\nThời gian xông lên đến 90 phút, tùy chỉnh lượng hơi. <br>\r\nNgoài cách tuỳ chỉnh trực tiếp trên nồi, thì khi mua nồi xông hơi Hero có kèm sẵn điều khiển bạn có thể ngồi trực tiếp trong lều xông để tự điều chỉnh lượng hơi trong nồi. <br>\r\nDây dẫn hơi dài, bằng nhựa dẻo chịu nhiệt khoảng 60cm <br>\r\n-Nhựa PP bền đẹp an toàn với người sử dụng, lòng nồi bằng inox <br>\r\nNồi xông hơi Hero là thương hiệu đã được nhiều người tiêu dùng tin tưởng lựa chọn bởi độ bền, tính năng tiện lợi và sự hiệu quả của nó, với nhiều dung tích phù hợp cá nhân hay cho các trung tâm Spa, các trung tâm chăm sóc sắc đẹp. <br>\r\nKết hợp với lều xông tự bung là sự lựa chọn tốt nhất nếu bạn sử dụng nồi xông hơi để đạt hiệu quả tối ưu, bởi sử dụng các lều truyền thống sẽ làm lãng phí lượng hơi khi xông, không thể đạt đến hiệu quả tối đa. <br>\r\nSP Shop cam kết nếu bị lỗi sẽ 1 đổi 1 và chịu hoàn toàn phí hoàn  trong vòng 7 ngày đầu khách mua hàng và đổi sản phẩm mới cho khách. ', 77, 11, 1),
(43, '4ebfba448a664a07f04b1aad02e60981.jpg', '[Mã COSDAY -50K đơn 150K] Bưởi đỏ Nano Hera siêu phẩm chăm sóc sức khoẻ và làm đẹp [Rẻ nhất shopee]', 185000, 185000, 0, 457, 'Nano bưởi đỏ Hera với thành phần Bưởi đỏ kết hợp Việt Quất, Vitamin C và Sữa Gầy,... nước uống Nano bưởi đỏ thương hiệu Việt vì sức khỏe cộng đồng đặc biệt lần đầu tiên và duy nhất đã xuất hiện tại Việt Nam. <br>\r\n<br>\r\nCÔNG DỤNG: Nước uống nano bưởi đỏ Hera giúp: <br>\r\n- Cung cấp Vitamin C, tăng cường sức đề kháng. <br>\r\n- Hạn chế hấp thụ chất béo vào cơ thể. <br>\r\n- Thanh lọc cơ thể, làm đẹp da. <br>\r\n<br>\r\nSẢN PHẨM KHÔNG PHẢI LÀ THUỐC, KHÔNG CÓ TÁC DỤNG THAY THẾ THUỐC CHỮA BỆNH <br>\r\n<br>\r\nXUẤT XỨ: Việt Nam <br>\r\n<br>\r\nNGUỒN GỐC: phân phối bởi công ty cổ phần Healthy Vina', 54, 9, 0),
(44, '294e5d1b6ede75b5789ee0c154038c10.jpg', 'Combo Viên Uống DHC Viatmin C, DHC Kẽm Zin C Và DHC Perfect Vegetable Ngăn Mụn Hiệu Quả, Chăm Sóc Da Sáng Mịn 30 Ngày', 381800, 460000, 17, 679, 'Combo Viên Uống DHC Viatmin C, DHC Kẽm Zin C Và DHC Perfect Vegetable Ngăn Mụn Hiệu Quả, Chăm Sóc Da Sáng Mịn 30 Ngày <br>\r\n<br>\r\n???? THÔNG TIN SẢN PHẨM: <br>\r\n- Combo Ngăn Mụn Hiệu Quả, Chăm Sóc Da Sáng Mịn - 30 Ngày Gồm: <br>\r\n+ Viên Uống DHC Vitamin C: 60 viên/30 ngày <br>\r\n+ Viên Uống DHC Zin C: 30 viên/30 ngày <br>\r\n+ Viên Uống DHC Perfect Vegetable: 120 viên/30 ngày <br>\r\n- Thương hiệu: DHC <br>\r\n- Xuất xứ: Nhật Bản <br>\r\n- Ngày sản xuất: Xem trên bao bì sản phẩm. <br>\r\n- Thời hạn sử dụng: 3 năm kể từ ngày sản xuất <br>\r\n<br>\r\n???? ĐẶC ĐIỂM NỔI BẬT: <br>\r\n- Vitamin C, Perfect Vegetable và Kẽm Zin C là sản phẩm của DHC - Thương hiệu chiếm thị phần số 1 Nhật Bản về dòng thực phẩm chức năng <br>\r\n- Viên uống vitamin C DHC cung cấp cho cơ thể 1000mg Vitamin C mỗi ngày, bổ sung các dưỡng chất thiết yếu và nhiều thành phần quan trọng khác như: vitamin B2, gelatin...với hàm lượng vừa đủ, đáp ứng nhu cầu mà cơ thể cần <br>\r\n- Kẽm có trong viên uống DHC ZinC là thành phần hỗ trợ tích cực cho sự sản sinh collagen tự nhiên của cơ thể, giúp điều hoà và cân bằng nội tiết tố <br>\r\n- Viên uống DHC Perfect Vegetable chiết xuất từ 32 loại rau củ tự nhiên được trồng 100% tại Nhật, bổ sung chất xơ, giúp tiêu hoá tốt và nâng cao sức khoẻ, giảm cân <br>\r\n- Combo 2 sản phẩm DHC cung cấp hàm lượng chất xơ lớn cho thể, viên uống rau củ mang đến tác động thanh lọc, giảm nóng trong hiệu quả. Bên cạnh đó, viên uống kẽm tác động mạnh mẽ đến nguyên nhân gây mụn, kiểm soát bã nhờn tối ưu, giúp da luôn sáng mịn, mềm mại. <br>\r\n<br>\r\n???? CÔNG DỤNG:  <br>\r\n- Hỗ trợ giảm thâm da; giúp da sáng mịn <br>\r\n- Hỗ trợ duy trì sức khỏe của da, giúp làn da luôn tràn đầy sức sống <br>\r\n- Giúp bảo vệ da khỏi tác động tiêu cực của môi trường và tia cực tím, giữ ẩm, làm mềm da, giảm đỏ da, khô và thô da hiệu quả. <br>\r\n- Sản phẩm hỗ trợ ức chế quá trình tiết bã nhờn và sừng hoá nang lông, cải thiện tình trạng da mụn, giúp duy trì làn da mịn màng và cải thiện tình trạng rụng tóc, tóc xơ c', 457, 12, 0),
(45, '816fba2d6b371eb56f812307174017ae.jpg', 'Viên Uống Chống Lão Hoá CARELINE Bio Marine Collagen Giảm Nếp Nhăn, Chăm Sóc Da Cao Cấp 60 Viên', 650000, 650000, 0, 235, 'Viên Uống Chống Lão Hoá Careline Bio Marine Collagen Giảm Nếp Nhăn, Chăm Sóc Da Cao Cấp <br>\r\n<br>\r\n???? THÔNG TIN SẢN PHẨM: <br>\r\n- Mã sản phẩm: 9334518005884 <br>\r\n- Dung tích: Hộp 1 lọ x 60 viên <br>\r\n- Thương hiệu: Careline <br>\r\n- Xuất xứ: Úc <br>\r\n<br>\r\n???? ĐẶC ĐIỂM NỔI BẬT: <br>\r\n- Được sản xuất bằng công nghệ sinh học Bio <br>\r\n- Được chiết xuất 100% từ vẩy và da cá sinh sống tự nhiên ở các  đại dương sâu <br>\r\n- Không chứa chất béo, do đó những người mắc phải các vấn đề về mỡ  máu hay các bệnh liên quan hoàn toàn yên tâm khi sử dụng <br>\r\n- Đem lại hiệu quả nhanh chóng, không gây tác dụng phụ <br>\r\n<br>\r\n???? CÔNG DỤNG: <br>\r\n- Chăm sóc da từ sâu bên trong, ngăn ngừa sự hình thành và phát triển trở lại của các dấu hiệu lão hóa da do tuổi tác, giúp da hồng hào, mịn màng, sáng bóng, xóa mờ nếp nhăn, nám má, sạm da, tàn nhang.... <br>\r\n- Tăng sản sinh lượng collagen trong cơ thể, tái tạo da, tăng độ đàn hồi độ dẻo dai của làn da, làm căng và săn chắc da cũng như các mô cơ, chống lại hiện tượng chảy xệ\r\n- Làm sạch và se nhỏ lỗ chân lông, điều tiết lượng chất nhờn, hồi phục làn da trẻ đẹp <br>\r\n- Tăng độ ẩm cho da, tăng sự miễn dịch và sức khỏe cho da, bảo vệ da dưới những tác động xấu từ môi trường. <br>\r\n- Hỗ trợ xoá mờ sẹo lõm, da tổn thương sau mụn. <br>\r\n- Tăng cường sức đề kháng, giúp cơ thể khỏe mạnh, giảm nguy cơ mắc các chứng bệnh về xương khớp. <br>\r\n<br>\r\n???? THÀNH PHẦN CHÍNH: <br>\r\n- Marine Collagen <br>\r\n- Ascorbic acid (Vitamin C) <br>\r\n- Zinc gluconate trihydrate (kẽm sinh học)', 57, 11, 1),
(46, '8472b95d516fb832b37c4f9e90fcb07e.jpg', 'Sữa Rửa Mặt Nam Ngăn Ngừa Mụn Ice Mud BLUEMAN - Làm Sạch Dầu Và Bã Nhờn 170ml', 190000, 380000, 50, 2236, 'Sữa Rửa Mặt Nam Ngăn Ngừa Mụn Ice Mud BLUEMAN - Làm Sạch Dầu Và Bã Nhờn 170ml <br>\r\n<br>\r\nSữa rửa mặt nam là một trong những sản phẩm thuộc dòng skincare dành cho phái mạnh. Sử dụng đúng cách sẽ giúp làm sạch da, loại bỏ khuẩn mụn, se khít lỗ chân lông, đem đến làn da săn chắc, sáng khỏe. Sản phẩm Sữa Rửa Mặt Nam Ngăn Ngừa Mụn Ice Mud BLUEMAN tự hào là sản phẩm giúp loại bỏ vi khuẩn trên da hiệu quả đến 100%, được đông đảo nam giới yêu thích và tin dùng. <br>\r\n<br>\r\n Công Dụng: <br>\r\nSữa rửa mặt giúp ngừa mụn, làm sạch sâu loại bỏ khuẩn trên da. <br>\r\nKiểm soát dầu nhờn hiệu quả, giữ da luôn căng mịn và khô thoáng. <br>\r\nSe khít lỗ chân lông, ngăn chặn quá trình lão hóa da ở Nam giới. <br>\r\nDưỡng ẩm,khóa nước và làm dịu, không gây khô căng da. <br>\r\nĐặc biệt thích hợp dùng cho da có mụn ẩn, da thâm, dầu nhờn nhiều. <br>\r\nĐem đến làn da sáng bóng, săn chắc và thần thái tự tin, nam tính. <br>\r\n<br>\r\n Ưu Điểm Nổi Bật: <br>\r\n- Thành phần bùn biển Glacier nhập khẩu từ Canada, mang lực hút từ tính, tối ưu khả năng kiểm soát dầu. <br>\r\n- Kết cấu bọt mịn, hạt nhỏ li ti giúp sữa rửa mặt vào sâu trong da, nhờ đó sữa rửa mặt phát huy triệt để công dụng làm sạch sâu của sản phẩm. <br>\r\n<br>\r\n Thành Phần: <br>\r\nBùn biển hoạt tính, rong biển Jeju, rau má, glycine, cacbonhydrat, Axit hyaluronic <br>\r\n<br>\r\n Hướng dẫn sử dụng: <br>\r\nLàm ướt mặt, cho một lượng vừa đủ sữa rửa mặt ngừa mụn ICEMUD vào lòng bàn tay, xoay tròn tạo bọt, sau đó nhẹ nhàng xoa lên vùng da mặt, massage trong khoảng 2 phút. Cuối cùng rửa lại với nước sạch. ', 3000, 16, 1),
(47, '198a4bac3f2fcce2d4b8a0fb982b4f91.jpg', 'Sữa rửa mặt cho nam 30Shine phân phối chính hãng Skin&Dr Than Hoạt Tính 100g trắng da kiềm dầu cho da mụn', 179280, 249000, 28, 982, 'Sữa rửa mặt cho nam Skin&Dr Than Hoạt Tính 100g trắng da kiềm dầu - 30Shine phân phối chính hãng <br>\r\n<br>\r\nThông tin chi tiết của sản phẩm sữa rửa mặt nam giới than hoạt tính Skin&Dr <br>\r\n- Thương hiệu: Skin&Dr <br>\r\n- Dung tích: 100g <br>\r\n- Xuất xứ: Hàn Quốc <br>\r\n- Hạn sử dụng: 2 năm kể từ ngày sản xuất <br>\r\n- Nhà nhập khẩu và phân phối: Công ty TNHH Thương mại và Dịch vụ Thiên Uy <br>\r\n- Địa chỉ: 50 Nguyễn Văn Vĩ, Phường 12, Quận Tân Bình, TP Hồ Chí Minh <br>\r\n<br>\r\nCông dụng của sản phẩm sữa rửa mặt trắng da nam than hoạt tính Skin&Dr <br>\r\n- Sữa rửa mặt than hoạt tính Skin&Dr với thành phần thiên nhiên, công nghệ lên men hiện đại giúp đánh bay mọi bụi bẩn, dưỡng chất thẩm thấu sâu giúp làn da trắng sáng, khoẻ mạnh, không còn dấu hiệu của mụn. <br>\r\n- Loại bỏ tế bào chết hiệu quả <br>\r\n- Làm sạch sâu <br>\r\n- Thẩm thấu dưỡng da sâu <br>\r\n- Kiềm dầu, ngừa mụn <br>\r\n<br>\r\nThành phần của sản phẩm sửa rửa mặt cho nam than hoạt tính Skin&Dr <br>\r\n- Than hoạt tính kết hợp với  Salicylic Acid, Quả Lựu, Rau Sam, Bí đỏ, gạo, yến mạch. <br>\r\n- Sữa rửa mặt Skin&dr có nguồn gốc từ bột than có khả năng hấp thụ mạnh hút các tạp chất cũng như khả năng làm sạch tuyệt vời giúp chăm sóc da. <br> \r\n- Chiết xuất lên men từ thực vật, kết hợp với thành phần lên men từ ngô và các thảo dược, sản phẩm có nhiểu vitamin A và các vitamin làm mềm mịn da.', 6325, 15, 1),
(48, '0636367fb242213a6e6419f1248f61ff.jpg', 'Combo 2 sản phẩm Sữa tắm gội xả 3 trong 1 | 18.21 Man Made Wash 3 in 1 - Chính hãng USA', 1058400, 1960000, 46, 79, 'Chào mừng đến với Unique Hair - Gôm Sáp Vuốt Tóc & Mỹ Phẩm Nam Chính Hãng <br>\r\n<br>\r\n• Sản phẩm cao cấp 3 trong 1 có thể dùng để tắm, gội, xả. <br>\r\n• Công dụng: Làm sạch, dưỡng ẩm cho da và tóc khỏe mạnh, cung cấp dưỡng chất. <br>\r\n• Mùi: Sweet Tobaco, Spiced Vanilla <br>\r\n• Hương thơm bám lâu và tỏa. <br>\r\n• Không chứa paraben, không chứa sulfate. cân bằng PH để cho làn da khỏe mạnh. <br>\r\n• Phù hợp cho tóc thẳng hoặc xoăn, dày, khô hoặc mỏng. Gel tắm thậm chí còn tuyệt vời cho các loại da khô hoặc da dầu. <br>\r\n• Dung tích: 500ml & 950ml <br>\r\n• Thương hiệu: 18.21 Man Made <br>\r\n• Xuất sứ: Mỹ <br>\r\n<br>\r\nSản phẩm chăm sóc da cao cấp 3 trong 1 - Sữa tắm, Dầu gội và Dầu xả dành cho Nam giới được lấy cảm hứng từ những quầy bar sang trọng những năm 1920–1933. Đắm mình trong hương thơm nam tính của thuốc l.á Virginia ngọt ngào trong khi tận hưởng loại bọt dưỡng ẩm hoàn hảo cho mọi loại da và tóc.', 35, 16, 0),
(49, '43da942b701002eff23076c623aca0fe.jpg', 'Bộ sản phẩm chăm sóc da cho bé cao cấp Noodle & Boo - Mĩ dành cho da nhạy cảm [OH BABIES]', 750000, 750000, 0, 3457, 'THÔNG TIN SẢN PHẨM: <br>\r\n- Thương hiệu: Noodle & Boo <br>\r\n- Quy cách: Lọ 473ml <br>\r\n- Xuất xứ: Mỹ <br>\r\n- Hạn sử dụng: xem trên bao bì sản phẩm <br>\r\n<br>\r\nĐẶC ĐIỂM CỦA SẢN PHẨM: <br>\r\n100% thành phần có nguồn gốc hoàn toàn từ thiên nhiên (plant based), không gây kích ứng, không thí nghiệm trên động vật, non-toxic, gluten-free, không làm cay mắt (tear-free), 100% Satisfaction Guarantee. <br>\r\nGiúp làm sạch tóc & cơ thể mà không làm tước đi độ ẩm tự nhiên của em bé. <br>\r\nCó Provitamin B & Vitamin E giúp cung cấp độ ẩm cho da bé. <br>\r\nGiữ cho làn da luôn dịu nhẹ, thoải mái và tóc bé luôn khỏe, bóng, mượt. <br>\r\nKhông chứa xà phòng và không gây kích ứng, ngay cả da nhạy cảm. <br>\r\n<br>\r\nHƯỚNG DẪN SỬ DỤNG VÀ BẢO QUẢN <br>\r\nDùng tắm gội hàng ngày cho bé. <br>\r\nDùng cho bé từ sơ sinh đến lớn. <br>\r\nBảo quản nơi khô ráo, thoáng mát, tránh xa ánh nắng mặt trời.', 698, 13, 0),
(50, '22cf3dcafef3eac35ec49d8a66d79195.jpg', 'Sữa tắm gội cho bé pigeon trẻ em dịu nhẹ cấp ẩm sua tắm gội cho em be bé sơ sinh 2 in 1 hoa hướng dương / Jojoba 700ml', 147000, 175000, 16, 532, 'Với hơn 40 năm kinh nghiệm trong ngành chăm sóc da, thấu hiểu nỗi trăn trở của mẹ. Pigeon đã không ngừng nghiên cứu, cải tiến thành công dòng sản phẩm chăm sóc da bé một cách toàn diện với công thức dịu nhẹ từ Nhật Bản. <br>\r\nSữa tắm gội dịu nhẹ Pigeon 200ml 2in1 Hoa hướng dương / Jojoba là sự kết hợp của dầu gội và sữa tắm trong cùng một hợp chất giúp nhẹ nhàng làm sạch tóc, da đầu và toàn thân bé mà không làm mất các chất nhờn sinh lý tự nhiên trên da. <br>\r\n<br>\r\nĐẶC ĐIỂM CỦA Sữa tắm gội cho bé pigeon trẻ em dịu nhẹ cấp ẩm sua tắm gội cho em be bé sơ sinh 2 in 1 hoa hướng dương / Jojoba 700ml. <br>\r\n- Với công thức cải tiến thành phần chất bảo quản (không chứa Paraben) dùng hoạt chất Hydroxyacetophenone (tương tự với hoạt chất chiết xuất từ cây Lampaya hieronymi – một loại thảo mộc từ châu Mỹ Latin), giúp chống oxi hóa, chống kích ứng da và đặc biệt là giúp ổn định nhũ tương, cân bằng độ PH và bảo vệ lớp biểu bì cho da bé. <br>\r\n- Hoạt chất Ethylhexylglycerin giúp cải thiện hiệu quả kháng khuẩn, làm giảm sự mất nước và tạo cảm giác mịn màng cho da bé. <br>\r\n- Đặc Biệt tinh dầu Jojoba giữ ẩm rất nhạy, dễ dàng hấp thụ vào da, giúp nuôi dưỡng làn da và làm se khít lỗ chân lông rất hiệu quả và không gây kích ứng da. Chất giữ ẩm da có trong tinh dầu jojoba tạo ra rào cản chống lại sự mất nước và các tác động hủy hoại của nắng, gió, môi trường xung quanh. <br>\r\n<br>\r\n- Dầu ép từ hạt hoa hướng dương có hàm lượng vitamin A, D, C và E cao, có tác dụng dưỡng ẩm tuyệt vời cho làn da. Tinh dầu hoa hướng dương thật sự là một loại tinh dầu có thể sử dụng một cách rất linh hoạt do đặc tính nhanh chóng thẩm thấu vào da, không dị ứng với bất kỳ loại da nào ngay cả đối với da nhạy cảm. Ngoài ra, tinh dầu Hoa Hướng Dương tác động tích cực lên giác quan giúp cho bé cảm giác dễ chịu và có giấc ngủ ngon. <br>', 231, 13, 0),
(51, '9b3dac3605872a21728cb19bfe1dd1c6.jpg', 'Kem chống nắng dưỡng da dưỡng trắng Seimy - Sunscreen 24h da mặt', 108420, 139000, 22, 321, 'Kem chống nắng vật lý SUNSCREEN 24H bảo vệ làn da, các tia cực tím UVA, UVB. <br>\r\nSở hữu chỉ số SPF 50 ++ <br>\r\n<br>\r\n Kem chống nắng vật lý SUNSCREEN 24H là kem chống nắng chứa thành phần Titanium Dioxide. Titanium dioxide là thành phần có tác dụng chính có khả năng phản xạ lại các tia UV, ngăn cản không cho tia UV xuyên đến da làm đen da, sạm da. <br>\r\n<br>\r\n Kem chống nắng DUY NHẤT chứa thành phần VÀNG 24K(GOLD) khả năng ngăn ngừa lão hóa cao, tác dụng giảm viêm, ngăn ngừa vi khuẩn hình thành mụn. Tinh chất vàng có chứa ion truyền nhiệt tuyệt vời, giúp các dưỡng chất dễ thẩm thấu vào da hơn, các hạt phân tử vàng còn giúp điều hòa máu mang lại vẻ hồng hào, tươi sáng cho da. <br>\r\n Với khả năng sản xuất melanin bảo vệ da dưới các tia UV, bảo vệ da trước ánh nắng mặt trời, làm chậm quá trình thoái hóa collagen, từ đó giúp da luôn giữ được vẻ tươi trẻ rạng ngời. <br>\r\n<br>\r\n Có tính năng make up nhẹ dưỡng trắng bằng thành phần bột ngọc trai khi sử dụng. Nâng tông sau 10-15 ngày sử dụng. Có thể sử dụng thay thế kem lót khi đi ra ngoài. <br>\r\n<br>\r\n DNA Cá Hồi là thành phần vô cùng đắt đỏ hảo hạng cũng có mặt trong Kem chống nắng SEIMY giúp bổ trợ tăng hấp thụ dưỡng chất làm chậm quá trình lão hoá da, giúp da luôn căng bóng, phục hồi da, tăng đề kháng cho da, tăng độ đàn hồi. <br>\r\n<br>\r\n Bổ sung Collagen ngăn lão hoá da, giảm quầng thâm và nếp nhăn, cấp ẩm thu nhỏ lỗ chân lông. <br>\r\n<br>\r\n Tảo Biển giúp dưỡng ẩm và chống nắng tự nhiên tự nhiên nhờ thành phần hoạt tính polysaccharide. Làm mềm mịn, khôi phục sức sống da với hiệu quả lâu dài nhờ sức thẩm thấu mạnh và khả năng bài tiết độc tố dưới da. Giảm nhờn, giảm bài tiết chất nhờn quá mức. Khiến độc tố dưới da bị bài tiết ra, loại bỏ chất sừng, thu nhỏ lỗ chân lông, cải thiện rõ rệt tính đàn hồi của da, đồng thời có thể dưỡng ẩm phục hồi hữu hiệu làn da một cách tự nhiên.', 121, 18, 1),
(52, 'ce14f18a414c8d15c9225c110e52516c.jpg', 'Bộ 6 cọ trang điểm Focallure 100g', 126575, 162276, 22, 541, 'Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày <br>\r\n  <br>\r\n  <br>\r\n  <br>\r\n  Thành phần: <br>\r\n  <br>\r\n  Lông cọ được làm bằng sợi tổng hợp, sản phẩm không sử dụng bất kỳ loại lông động vật nào, xin đừng lo lắng. <br>\r\n  <br>\r\n  Do sự khác biệt do đo lường thủ công, có thể có một chút khác biệt về chiều dài, nhưng sẽ không ảnh hưởng đến chất lượng sản phẩm, xin cảm ơn sự thông cảm của bạn. <br>\r\n  <br>\r\n  <br>\r\n  <br>\r\n  Bộ 6 cọ trang điểm <br>\r\n  <br>\r\n  Đầu cọ dạng sợi / kết cấu ống nhôm kim loại <br>\r\n  <br>\r\n  Một bộ cọ đủ để trang điểm dễ dàng hàng ngày', 121, 19, 0),
(53, '7d01c8b1d467256e80f4530aaa189935.jpg', 'Bộ 10 Mỹ Phẩm Trang Điểm PINKFLASH Kèm Túi Đựng Dùng Làm Quà Tặng Độc Đáo', 162000, 225000, 28, 125, 'Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày <br>\r\n<br>\r\n  2*Son môi (P01, O03）<br>\r\n<br>\r\n  2*Son bóng (G03, S03）<br>\r\n<br>\r\n  1*Kẻ mắt <br>\r\n<br>\r\n  1*Chì kẻ mày <br>\r\n<br>\r\n  1*Mascara <br>\r\n<br>\r\n  1*Kem nền <br>\r\n<br>\r\n  1*Phấn má hồng <br>\r\n<br>\r\n  1*Bông phấn hình quả trứng <br>\r\n<br>\r\n  1*Túi đựng mỹ phẩm <br>\r\n<br>\r\n  HDSD: <br>\r\n<br>\r\n  Son bóng: Lót môi: mềm mại và ẩm mượt. Son bóng: dùng trên môi trần hoặc phủ lên lớp son màu.  <br>\r\n<br>\r\n  Son môi: Thoa từ giữa môi trên về các góc <br>\r\n<br>\r\n  Má hồng: Đánh và tán đều trên cơ quả táo <br>\r\n<br>\r\n  Mút tán: <br>\r\n<br>\r\n  1.Làm ướt. <br>\r\n<br>\r\n  2.Dùng đầu tròn tán trên các vùng khó tiếp cận <br>\r\n<br>\r\n  3.Dùng đầu nhọn cho vùng khó tiếp cận như dưới mắt, gần mũi/miệng. <br>\r\n<br>\r\n  Chì kẻ mày: Kẻ từ đầu về phía đuôi theo khuôn chân mày của bạn <br>\r\n<br>\r\n  Mascara: Chải từ gốc đến ngọn lông mi. <br>\r\n<br>\r\n  Kem nền: Sử dụng cọ hoặc miếng bọt biển để tán kem nền.<br>\r\n<br>\r\n  Bạn có thể: Thoa Kem Lót Dưỡng Ẩm Trước Khi Trang Điểm/Thêm 1-2 Giọt Tinh Dầu Trước Khi Sử Dụng. <br>\r\n<br>\r\n  Kẻ mắt: Lắc đều, kẻ từ viền mí trong dần ra phía đuôi mắt', 99, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `name`, `parent_id`) VALUES
(1, 'Thực phẩm chức năng', 0),
(2, 'Chăm sóc sức khỏe', 0),
(3, 'Chăm sóc cá nhân', 0),
(4, 'Chăm sóc sắc đẹp', 0),
(5, 'Nhóm hô hấp', 1),
(6, 'Nhóm thần kinh', 1),
(7, 'Nhóm tiêu hóa', 1),
(8, 'Giảm cân', 1),
(9, 'Dược mỹ phẩm', 2),
(10, 'Thực phẩm dinh dưỡng', 2),
(11, 'Kế hoạch gia đình', 2),
(12, 'Khẩu trang', 2),
(13, 'Chăm sóc em bé', 3),
(14, 'Vệ sinh phụ nữ', 3),
(15, 'Chăm sóc nam giới', 3),
(16, 'Sản phẩm phòng tắm', 3),
(17, 'Chăm sóc mặt', 4),
(18, 'Sản phẩm chống nắng', 4),
(19, 'Dụng cụ trang điểm', 4),
(20, 'Mỹ phẩm', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(50) NOT NULL,
  `addres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `addres`, `ad_id`) VALUES
(44, 'Nguyễn Bá Mạnh', 'manh123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 329322538, 'Mỹ Đình/Hà Nội', 1),
(45, 'Nguyễn Văn Thuận', 'thuan123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 329322538, 'Mỹ Đình/Hà Nội', 2),
(46, 'Nguyễn Quang Minh', 'minh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 985843755, 'Mỹ Đình/Hà Nội', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category_new`
--
ALTER TABLE `category_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_new`
--
ALTER TABLE `category_new`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`ad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
