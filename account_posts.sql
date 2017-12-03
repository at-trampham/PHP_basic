-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: account
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `detail_post` text COLLATE utf8_unicode_ci,
  `date_create` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_1_idx` (`id_users`),
  CONSTRAINT `fk_posts_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Microsoft Most Valuable Professional (MVP) Award','Phải nói là rất vui khi đầu năm nay mình nhận được thư chúc mừng từ Microsoft thông báo mình đã nhận được giải thưởng Most Valuable Professional (MVP) 2017, tạm dịch là ','Đây là một vinh dự rất lớn vì năm nay chỉ có 12 MVP mới được vinh danh trong khu vực Châu Á – Thái Bình Dương và mình là người Việt Nam duy nhất J. Vậy MVP là gì, MVP mang lại những lợi ích gì cho bạn và làm sao để trở thành một MVP, mình sẽ chia sẻ lại với các bạn những kinh nghiệm của mình trong bài viết dưới đây.\r\n\r\nMVP là gì?\r\n\r\nGiải thưởng MVP là giải thưởng toàn cầu của Microsoft trao tặng cho những “thủ lĩnh cộng đồng” (community leader), những người được Microsoft đánh giá là có giá trị nhất với cộng đồng. Họ là những người chia sẻ niềm đam mê, kinh nghiệm và kiến thức về các sản phẩm/dịch vụ của Microsoft cho cộng đồng một cách không vụ lợi. Hiện danh mục xét giải của Microsoft gồm 17 hạng mục lớn, một số hạng mục dành cho các IT Pro như Cloud & Data Management, Office Server & Services, Business Solution… số còn lại tập trung vào đối tượng Developer như Azure, Windows Development, Data Platform…','8:24:1  - 1/12/2017',1),(2,'Các phím tắt thường dùng trong Sublime Text 3','Ở bài trước chúng ta đã cài đặt sublime text 3 và các plugin cần thiết cho việc lập trình. Thì hôm nay mình sẽ giới thiệu đến với các bạn về các phím tắt trong sublime text 3. Phím tắt là một công cụ giúp chúng ta code nhanh hơn và tiện lợi hơn trong công việc.','Ctrl + P : xuất hiện một bảng chọn file trong toàn bộ các file của folder project.\n\nCtrl + G : xuất hiện một bảng nhập số dòng mình muốn tới.\n\nCtrl + R : xuất hiện bảng chọn hàm trong file để di chuyển đến đó.\n\nCtrl + Pageup­/Pa­gedown : di chuyển qua lại giữa các tập tin\n\nCtrl + Delete/Backspace: xóa một cụm từ trước hoặc sau vị trí con trỏ\n\nCtrl + KK: xóa từ vị trí con trỏ tới cuối dòng\n\nCtrl + T : hoán đổi 2 ký tự đứng kế nhau\n\nCtrl + K + U : chuyển đổi toàn bộ chuỗi từ thường sang HOA\n\nCtrl + K + L : chuyển đổi toàn bộ chuỗi từ HOA sang thường\n\nCtrl + Shift + D: sao chép dòng hiện tại thành một dòng mới\n\nCtrl + Shift + K : xóa một dòng\n\nCtrl + Shift + Up,Down: di chuyển một dòng lên trên hoặc xuống dưới\n\nCtrl + Enter: thêm một dòng phía sau\n\nCtrl + Shift + Enter: thêm một dòng phía trước\n\nCtrl+K+B: ẩn/hiện side bar\n\nCtrl+/: comment\n\nCtrl+Shift+/: comment dạng block\n\nCtrl+L: select 1 dòng\n\nCtrl+Shift+K: xóa 1 dòng\n\nCtrl+]: indent\n\nCtrl+[: bỏ indent\n\nCtrl+Shift+D: nhân đôi dòng\n\nCtrl+J: nối dòng với dòng tiếp theo\n\nCtrl+Shift+[: đóng 1 đoạn code\n\nCtrl+Shift+]: mở 1 đoạn code\n\nCtrl+F: tìm kiếm\n\nCtrl+H: tìm kiếm và thay thế\n\nCtrl+Shift+N: mở cửa sổ mới\n\nCtrl+N: mở tab mới\n\nAlt+<number>: chuyển tab (ví dụ Alt+3)\n\n','8:24:1  - 1/12/2017',2),(7,'Chuyện tối ưu code, xấu đẹp, đẹp xấu','Chuyện tối ưu code, viết code cho thật đẹp là công việc hàng ngày của mỗi lập trình viên, điều đó ai cũng biết. Nhưng liệu code tối ưu có phải là code đẹp, và ngược lại? Đây là câu hỏi mà chắc hẳn nhiều bạn đều thắc mắc. Tôi sẽ kể một câu chuyện, và kết luận thế nào thì các bạn vui lòng kéo xuống phần “Kết luận” để đọc nhé.','Chuyện là một đêm Sài Gòn mát lạnh (do tôi ở trong phòng mở máy lạnh, chứ ngoài trời thì tôi không biết), tôi rảnh rỗi ngồi lướt Github (thay vì lướt Facebook) thì tình cờ tôi đọc được một đoạn code khá là thú vị.Cảm giác ban đầu của các bạn thế nào? Nhìn khó chịu đúng không? Tôi cũng vậy.\r\n\r\nĐể giới thiệu qua đoạn code này một tí. Đây là đoạn code viết bằng OpenGL Shading Language, có thể giới thiệu đại khái đây là ngôn ngữ cấp cao (high level language) dành cho việc lập trình các shader trong OpenGL (cái này chắc các bạn lập trình game với OpenGL hiểu rõ hơn, các bạn giúp mình giải thích rõ hơn trong phần comment nhé).\r\n\r\nĐoạn code này để làm việc gì?\r\n\r\nĐoạn code này được trích ra từ một ứng dụng xem ảnh trên web (tương tự Google Photo), và nhiệm vụ của nó là tính giá trị màu sắc của một điểm ảnh sau khi áp dụng filter, cụ thể ở đây là blur (làm mờ).\r\n\r\nThuật toán đằng sau nó là gì?\r\n\r\nTrước khi đi sâu vào đoạn code đó, chúng ta cùng nhìn qua về mặt giải thuật. Để tính được giá trị màu sắc của một điểm trên ảnh sau khi áp dụng filter chúng ta không thể chỉ thay đổi giá trị màu sắc của chính điểm đó bằng cách cộng trừ nhân chia với một giá trị delta nào đó, bởi vì làm vậy thì màu sắc của từng điểm sẽ dễ dàng bị khác biệt và tạo ra cảm giác không đẹp, vì bức ảnh là một tổ hợp của rất nhiều điểm.','20:39:10  - 1/12/2017',2),(9,'âaa','âa','aâa','22:29:18  - 1/12/2017',2);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-03 22:33:36
