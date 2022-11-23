-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 02:58 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct275_locationtour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(12) UNSIGNED NOT NULL,
  `category_id` int(12) UNSIGNED NOT NULL,
  `tour_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tour_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tour_description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `tour_map` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tour_image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`tour_id`, `category_id`, `tour_name`, `tour_title`, `tour_description`, `tour_map`, `tour_image`, `created_at`, `updated_at`) VALUES
(1, 21, 'Hà Nội', 'Hà Nội, thủ đô của Việt Nam, nổi tiếng với kiến trúc trăm tuổi và nền văn hóa phong phú với sự ảnh hưởng của khu vực Đông Nam Á', 'Hà Nội đã sớm trở thành một trung tâm chính trị, kinh tế và văn hóa ngay từ những buổi đầu của lịch sử Việt Nam. Với vai trò thủ đô, Hà Nội là nơi tập trung nhiều địa điểm văn hóa giải trí, công trình thể thao quan trọng của đất nước, đồng thời cũng là địa điểm được lựa chọn để tổ chức nhiều sự kiện chính trị và thể thao quốc tế. Đây là nơi tập trung nhiều làng nghề truyền thống, đồng thời cũng là một trong ba vùng tập trung nhiều hội lễ của miền Bắc Việt Nam. Nền ẩm thực Hà Nội với nhiều nét riêng biệt cũng là một trong những yếu tố thu hút khách du lịch tới thành phố. Năm 2019, Hà Nội là đơn vị hành chính Việt Nam xếp thứ 2 về tổng sản phẩm trên địa bàn (GRDP), xếp thứ 8 về GRDP bình quân đầu người và đứng thứ 41 về tốc độ tăng trưởng GRDP. Thành phố được UNESCO trao tặng danh hiệu \"Thành phố vì hòa bình\" vào ngày 16 tháng 7 năm 1999', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.94583115664!2d105.80194400045045!3d21.02281613564099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669134273925!5m2!1svi!2s', 'https://cdn3.ivivu.com/2022/07/h%E1%BB%93-g%C6%B0%C6%A1m-du-l%E1%BB%8Bch-H%C3%A0-N%E1%BB%99i-ivivu.jpg', '2022-11-22 16:27:33', '2022-11-23 13:10:17'),
(2, 21, 'Sapa', 'Săn mây thành phố mờ sương', 'Không khí hoàn toàn trong lành nhưng nhiệt độ khá lạnh cũng sẽ là một trải nghiệm khá tuyệt vời cho du khách trong và ngoài nước.\r\n\r\nNếu bạn có điều kiện, nhất định hãy đến đây một lần trong đời để cảm nhận và tận mắt chứng kiến nơi cao nhất và vẻ đẹp hùng vĩ của đỉnh Fansipan.\r\n\r\nĐỉnh Fansipan không chỉ là nóc nhà của Việt Nam mà còn của cả Đông Dương. Độ cao đồ sộ của nó đã tạo nên một khung cảnh hùng vĩ. Khi đến đây bạn gần như là chạm được vào mây. Một vài địa điểm khác tại Sapa như: Nhà thờ đá, núi Hàm Rồng, thung lũng Mường Hoa, bãi đá cổ,...mà bạn không nên bỏ lỡ.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59042.517615881145!2d103.78191870637013!3d22.347686722392197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd416833ee9ad5%3A0xe1f42da2bbc76727!2zdHQuIFNhIFBhLCBTYSBQYSwgTMOgbyBDYWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1669134626521!5m2!1svi!2s', 'https://cdn.tgdd.vn/Files/2022/01/18/1411528/10-dia-diem-du-lich-mien-bac-phai-den-1-lan-trong-doi-202202161011139046.jpg', '2022-11-22 16:31:34', '2022-11-23 13:10:11'),
(3, 21, 'Vịnh Hạ Long Quảng Ninh', 'Vẻ đẹp kỳ quan thiên nhiên Thế giới', 'Là một trong các hang động nổi tiếng nằm trong khu vực vịnh Hạ Long. Hang nằm trên Đảo Bồ Hòn và được người Pháp tìm thấy vào năm 1901. Nghe cái tên động chúng ta cũng biết được vẻ đẹp hùng vĩ, tráng lệ của nó khiến cho ai đến đây đều phải sửng sốt.\r\n\r\nNếu đã đến vịnh Hạ Long nhất định bạn phải một lần tham quan Hang Sửng Sốt để thấy được hết vẻ đẹp của nơi đây.\r\n\r\nNgoài ra còn có các địa điểm đẹp và nổi tiếng khác như: Hòn Ti Tóp, chùa Ba Vàng, Vịnh Lan Hạ,...', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238636.93987927926!2d107.00953987912597!3d20.843729233918097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5796518cee87%3A0x55c6b0bcc85478db!2zVuG7i25oIEjhuqEgTG9uZw!5e0!3m2!1svi!2s!4v1669134852009!5m2!1svi!2s', 'https://cdn.tgdd.vn/Files/2022/01/18/1411528/10-dia-diem-du-lich-mien-bac-phai-den-1-lan-trong-doi-202202161018332538.jpg', '2022-11-22 16:34:46', '2022-11-23 13:10:04'),
(4, 23, 'Bà Nà Hills (Đà Nẵng)', 'chốn tiên cảnh bồng lai', 'khu du lịch này còn mang kiểu thời tiết rất đặc trưng, trải qua một ngày ở đây, bạn có thể tận hưởng đủ kiểu khí hậu của bốn mùa (buổi sáng mùa xuân, buổi trưa của mùa hè, buổi chiều của mùa thu và đêm đến là mùa đông). Với tour Bà Nà Hills 1 ngày bạn còn được trải nghiệm tuyến cáp treo giữ nhiều kỷ lục thế giới xuyên qua những đám mây, ngắm nhìn toàn bộ phong cảnh kỳ vĩ và rất nhiều điều thú vị khác.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8026926.362162015!2d98.21334699999998!3d10.780826100000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f54161d08e9%3A0xcbbaf3aec970d892!2zVG91ciBCw6AgTsOgIEhpbGxz!5e0!3m2!1svi!2s!4v1669135037650!5m2!1svi!2s', 'https://cdn.tgdd.vn/Files/2021/11/06/1396186/cam-nang-du-lich-mien-trung-top-10-dia-diem-khong-the-bo-qua-202202221330232695.jpg', '2022-11-22 16:38:03', '2022-11-23 13:09:57'),
(5, 23, 'Quảng Bình', ' Khu du lịch sinh thái Sao Biển nhộn nhịp, Suối nước Moọc, Biển Nhật Lệ, Bãi Đá Nhảy', 'Quảng Bình là tỉnh có địa hình đặc trưng chủ yếu là hẹp và dốc của các đồi núi, và bị chia cắt mạnh. Tuy nhiên, ở Quảng Bình luôn nổi bật với du khách bởi các hang động kì bí, hoang sơ cùng với đặc điểm địa hình kết hợp núi và biển, khiến Quảng Bình luôn thu hút về cho mình hàng ngàn khách du lịch mỗi năm.\r\n\r\nNhắc đến địa điểm du lịch Quảng Bình, bạn sẽ cực kì hối tiếc nếu không tới du lịch những địa điểm như Động Phong Nha - là hang động đá vôi vĩ đại, hùng vĩ được bao quanh bởi những cánh rừng xanh mướt. Hay là Khu du lịch sinh thái Sao Biển nhộn nhịp, Suối nước Moọc, Biển Nhật Lệ, Bãi Đá Nhảy,...\r\n\r\nCùng thuộc miền Trung, nên những món ăn ở Quảng Bình không khác quá nhiều về hương vị, nhưng bên cạnh đó vẫn có những món ăn mang đậm vị thơm ngon đặc trưng của Quảng Bình như cháo cá Bàu Sen, cá Sông Son, lẩu cá khoai, đẻn biển, mực khô bóp xoài, cháo hàu, cháo sát cá lóc, cháo canh…', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974089.8392229006!2d105.7418207362913!3d17.505678632502814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3138b0f638296f2d%3A0x901f872e6223598f!2zUXXhuqNuZyBCw6xuaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669135181001!5m2!1svi!2s', 'https://cdn.tgdd.vn/Files/2021/11/06/1396186/cam-nang-du-lich-mien-trung-top-10-dia-diem-khong-the-bo-qua-202202221319038679.jpg', '2022-11-22 16:40:08', '2022-11-23 13:09:48'),
(6, 23, 'Nghệ An', 'Thành cổ Vinh, Khu di tích lịch sử Kim Liên quê Bác Hồ', 'Nghệ An là tỉnh có diện tích lớn nhất Việt Nam, thuộc vùng Bắc Trung Bộ với địa hình núi cao, trung du, đồng bằng và ven biển.\r\n\r\nNghệ An là một địa điểm du lịch miền Trung nổi bật với những sắc thái lịch sử chẳng hạn như Thành cổ Vinh, Khu di tích lịch sử Kim Liên quê Bác Hồ, Vườn quốc gia Pù Mát,... Bên cạnh đó, Nghệ An cũng có những nơi vui chơi du lịch với phong cảnh đẹp, trữ tình khác như biển Cửa Lò, Biển Cửa Hội, Bãi Lữ...\r\n\r\nNét ẩm thực của xứ Nghệ rất dân dã, nhưng mang đậm những hương vị tinh hoa nhất của miền đất này như Lươn xứ Nghệ, hến xúc bánh đa, bánh mướt, bánh ngào, mực nháy Cửa Lò…', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964139.1779943642!2d104.28016841795291!3d19.2750301460571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce640b5a1dad%3A0x5c61bf7cd719a519!2zTmdo4buHIEFuLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1669135298284!5m2!1svi!2s', 'https://cdn.tgdd.vn/Files/2021/11/06/1396186/cam-nang-du-lich-mien-trung-top-10-dia-diem-khong-the-bo-qua-202202221320249618.jpg', '2022-11-22 16:42:15', '2022-11-23 13:09:42'),
(7, 22, 'TP. Hồ Chí Minh (Sài Gòn)', 'Thành phố Hồ Chí Minh là thành phố đông đúc, sầm uất nhất miền Nam', 'Thành phố Hồ Chí Minh là thành phố đông đúc, sầm uất nhất miền Nam nói riêng và cả nước nói chung. Thành phố Hồ Chí Minh ở trung tâm Đông Nam Bộ, nơi đây lưu giữ nhiều công trình kiến trúc độc đáo, khu vui chơi, trung tâm mua sắm sầm uất. Do vậy, Thành phố Hồ Chí Minh luôn là sự lựa chọn hàng đầu của du khách đến tham quan.\r\nThời điểm lý tưởng tham quan Thành phố Hồ Chí Minh là vào mùa khô từ tháng 12 đến tháng 4 năm sau. Bạn có thể đến tham quan những địa điểm nổi tiếng như: Nhà thờ Đức Bà, Dinh Độc Lập, Nhà hát Lớn,...\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003454.2587224715!2d105.61153519813142!3d10.754264224544293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669135541280!5m2!1svi!2s', 'https://vcdn1-vnexpress.vnecdn.net/2022/11/17/Ve-may-bay-di-sai-gon-600x399-4356-2813-1668672299.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=8All1Mq-so56XkVbZXvdFA', '2022-11-22 16:46:03', '2022-11-23 13:09:33'),
(8, 22, 'Tây Ninh', 'Tây Ninh tuy là vùng đất khô cằn nhưng lại không thiếu các điểm tham quan lý thú. Các điểm đến tâm linh thích hợp cho những du khách yêu thích du lịch hành hương hoặc các danh lam thắng cảnh nổi tiếng khác.', 'Cách trung tâm Thành phố Hồ Chí Minh 100km, Tây Ninh có nhiều địa điểm tham quan hấp dẫn như: Núi Bà Đen, Hồ Dầu Tiếng, Tòa Thánh Tây Ninh,... Cũng như thành phố Hồ Chí Minh, thời điểm thích hợp tham quan Tây Ninh là vào mùa khô từ tháng 12 đến tháng 4 năm sau', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125170.26754180797!2d106.05961251470657!3d11.366023081146553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b6aeab90d3fc5%3A0xa059d1214008df15!2zVHAuIFTDonkgTmluaCwgVMOieSBOaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1669135714329!5m2!1svi!2s', 'https://upload.wikimedia.org/wikipedia/commons/6/6a/CaoDaiMain.jpg', '2022-11-22 16:48:51', '2022-11-23 13:09:27'),
(9, 22, ' Bình Dương', 'Bình Dương nằm trong vùng trọng điểm phát triển kinh tế phía Nam, là đô thị vệ tinh của thành phố Hồ Chí Minh', 'Bình Dương cách Sài Gòn chỉ khoảng 30 phút đi xe và đặc biệt Bình Dương cũng không thua kém Sài Gòn với nhiều địa điểm tham quan hấp dẫn, khu vui chơi nhộn nhịp như: Phố đêm Bạch Đằng, chợ đêm Thủ Dầu Một, hồ Bình An, công viên Thành Phố Mới Bình Dương, chùa Bà Thiên Hậu, chùa Hội Khánh,...\r\n\r\nNếu cuối tuần bạn muốn tìm những địa điểm mới để tham quan thì chắc chắn bạn sẽ không thể bỏ qua Bình Dương được.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501000.48739150004!2d106.3707869561009!3d11.1827264317742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174b66a8ef92879%3A0x339fda891c8d1473!2zQsOsbmggRMawxqFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669135820040!5m2!1svi!2s', 'https://file4.batdongsan.com.vn/2021/10/11/PHJN6Zw0/20211011141504-3ca0.jpg', '2022-11-22 16:50:58', '2022-11-23 13:09:20'),
(10, 24, 'TP. Cần Thơ', 'Cần Thơ là một thành phố trực thuộc trung ương của Việt Nam, là thành phố sầm uất và phát triển nhất ở Đồng bằng sông Cửu Long.', 'Thành phố Cần Thơ là thành phố trực thuộc trung ương. Đến với Cần Thơ các bạn sẽ bị thu hút bởi con người thân thiện, mến khách. Thành phố còn chiếm được được tình cảm của du khách bởi sự yên bình và hiện đại, cùng với một số địa điểm văn hóa lâu đời tại đây.\r\n\r\nNếu có dịp đến đây bạn hãy trải nghiệm Chợ nổi Cái Răng, Bến Ninh Kiều, Khám Lớn Cần Thơ, nhà cổ Bình Thủy, vườn sinh thái Lữ Gia Xẻo Nhum, cầu tình yêu Cần Thơ,...', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.62274099136!2d105.72255061782703!3d10.034269633567952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1669135944512!5m2!1svi!2s', 'https://baocantho.com.vn/imagetsdt/tsdt/2020/20200828/images/Anh%20th%C3%A0nh%20ph%E1%BB%91%202.jpg', '2022-11-22 16:52:52', '2022-11-23 13:09:11'),
(11, 24, 'Sóc Trăng', 'Sóc Trăng là một tỉnh ven biển, nằm trong vùng hạ lưu Nam sông Hậu thuộc đồng bằng sông Cửu Long, Việt Nam', 'Sóc Trăng nổi tiếng với những ngôi chùa cổ kính, kiến trúc độc đáo, hấp dẫn. Đến với Sóc Trăng các bạn sẽ được chiêm ngưỡng những địa điểm độc đáo gắn liền với kiến trúc của người Khmer, những địa điểm nổi tiếng mà bạn có thể lưu lại để dành cho chuyến đi: Chùa Dơi, chùa Som Rông, chợ nổi Ngã Năm, bảo tàng Khmer, khu vui chơi Thiếu nhi Hồ Nước Ngọt, vườn Cò Tân Long,...', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62941.30103122888!2d105.94279206716674!3d9.609789066719008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a04dfdccbd1d57%3A0xfa68286965e71218!2zVHAuIFPDs2MgVHLEg25nLCBTw7NjIFRyxINuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669136033793!5m2!1svi!2s', 'https://bcp.cdnchinhphu.vn/Uploaded/nguyenminhdiem/2020_04_28/TP%20ST.jpg', '2022-11-22 16:54:24', '2022-11-23 13:09:04'),
(12, 24, 'Cà Mau', 'Đi du lịch Cà Mau bạn đừng chỉ tới chụp hình ở mốc tọa độ rồi về vì ở đây còn vô vàn điểm tham quan cũng như điều thú vị khác để bạn khám phá.', 'Cà Mau là tỉnh thành ở cuối bản đồ Việt Nam. Đến Cà Mau các bạn sẽ được thỏa sức check in tại mũi Cà Mau nơi đánh dấu vị trí cực Nam Tổ Quốc. Ngoài ra Cà Mau cũng còn rất nhiều địa điểm hấp dẫn khác như Hòn Đá Bạc, Đầm Thị Tường, cột mốc Quốc gia Đất Mũi, khu du lịch Khai Long, lâm viên Cà Mau,...', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126040.52673129067!2d105.11713054974093!3d9.175527283599456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a1499e262d02a9%3A0xefe0b01bb69d636d!2zVHAuIEPDoCBNYXUsIEPDoCBNYXUsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1669136163881!5m2!1svi!2s', 'https://media.vneconomy.vn/images/upload/2022/11/21/hinh-anh-mui-ca-mau.jpeg', '2022-11-22 16:56:38', '2022-11-23 13:08:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_category`
--

CREATE TABLE `tour_category` (
  `category_id` int(12) UNSIGNED NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_category`
--

INSERT INTO `tour_category` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(21, 'Miền Bắc', '2022-11-22 15:39:53', '2022-11-22 15:41:44'),
(22, 'Miền Nam', '2022-11-22 15:41:20', '2022-11-22 15:41:20'),
(23, 'Miền Trung', '2022-11-22 15:41:28', '2022-11-22 15:41:28'),
(24, 'Đồng Bằng Sông Cửu Long', '2022-11-22 15:42:05', '2022-11-22 16:43:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_faq`
--

CREATE TABLE `tour_faq` (
  `faq_id` int(12) NOT NULL,
  `faq_question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_faq`
--

INSERT INTO `tour_faq` (`faq_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(1, 'Nếu một điểm du lịch hoặc một thắng cảnh bị thiếu thì sao?', 'Nếu một điểm du lịch hoặc một thắng cảnh bị thiếu thì sao?', '2022-11-22 16:16:16', '2022-11-22 16:16:16'),
(2, 'Người mới khỏi covid-19 có được đăng ký tour không?', 'Có, những người đã khỏi COVID-19 có thể đi lại an toàn nếu đáp ứng các tiêu chí để đi xa. Những du khách đã khỏi COVID-19 trong 90 ngày qua không cần xét nghiệm trước hay sau khi đi xa hoặc đi du lịch. Nếu họ xuất hiện triệu chứng của COVID-19​​​​​​​ trước, trong hay sau chuyến đi, họ nên cô lập và tham khảo ý kiến từ nhà cung cấp dịch vụ chăm sóc sức khỏe về khuyến nghị xét nghiệm.', '2022-11-22 16:18:11', '2022-11-22 16:18:11'),
(3, 'Lưu giữ Dữ liệu cá nhân của quý khách hàng', 'Miễn là tài khoản của quý khách hàng vẫn còn tồn tại, chúng tôi sẽ lưu Dữ liệu cá nhân của quý khách hàng để cung cấp các dịch vụ khi cần. Chúng tôi sẽ ngừng lưu giữ Dữ liệu cá nhân hoặc với nỗ lực hợp lý để xóa các phương tiện có liên quan đến Dữ liệu cá nhân của Quý khách hàng, ngay khi, 1) mục đích thu thập Dữ liệu cá nhân không còn phù hợp với việc lưu giữ dữ liệu; và 2) luật hiện hành không yêu cầu lưu giữ dữ liệu và/hoặc không cần thiết cho mục đích kinh doanh.', '2022-11-22 16:18:48', '2022-11-22 16:18:48'),
(4, 'Có đảm bảo quyền lợi đúng như đã giới thiệu ?', 'Chúng tôi luôn đặt uy tín lên hàng đầu, đảm bảo các dịch vụ đã giới thiệu trong tour. Với đội ngũ hướng dẫn viên chuyên nghiệp, sẽ luôn mang lại cho quý khách 1 trải nghiệm tốt nhất khi đăng ký tham gia tour của chúng tôi. Nếu trong quá trình du lịch, quý khách có vấn đề gì cần giải quyết hoặc thắc mắc có thể liên hệ với hướng dẫn viên để được giải đáp nhanh nhất', '2022-11-22 16:19:26', '2022-11-22 16:19:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `tour_category`
--
ALTER TABLE `tour_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tour_faq`
--
ALTER TABLE `tour_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tour_category`
--
ALTER TABLE `tour_category`
  MODIFY `category_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tour_faq`
--
ALTER TABLE `tour_faq`
  MODIFY `faq_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tour_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
