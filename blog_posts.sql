-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: blog
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
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `detail_post` text COLLATE utf8_unicode_ci,
  `date_create` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Microsoft Most Valuable Professional (MVP) Award','Phải nói là rất vui khi đầu năm nay mình nhận được thư chúc mừng từ Microsoft thông báo mình đã nhận được giải thưởng Most Valuable Professional (MVP) 2017, tạm dịch là ','Đây là một vinh dự rất lớn vì năm nay chỉ có 12 MVP mới được vinh danh trong khu vực Châu Á – Thái Bình Dương và mình là người Việt Nam duy nhất J. Vậy MVP là gì, MVP mang lại những lợi ích gì cho bạn và làm sao để trở thành một MVP, mình sẽ chia sẻ lại với các bạn những kinh nghiệm của mình trong bài viết dưới đây.\r\n\r\nMVP là gì?\r\n\r\nGiải thưởng MVP là giải thưởng toàn cầu của Microsoft trao tặng cho những “thủ lĩnh cộng đồng” (community leader), những người được Microsoft đánh giá là có giá trị nhất với cộng đồng. Họ là những người chia sẻ niềm đam mê, kinh nghiệm và kiến thức về các sản phẩm/dịch vụ của Microsoft cho cộng đồng một cách không vụ lợi. Hiện danh mục xét giải của Microsoft gồm 17 hạng mục lớn, một số hạng mục dành cho các IT Pro như Cloud & Data Management, Office Server & Services, Business Solution… số còn lại tập trung vào đối tượng Developer như Azure, Windows Development, Data Platform…','10:32:47  - 5/12/2017',1),(2,'Các phím tắt thường dùng trong Sublime Text 3','Ở bài trước chúng ta đã cài đặt sublime text 3 và các plugin cần thiết cho việc lập trình. Thì hôm nay mình sẽ giới thiệu đến với các bạn về các phím tắt trong sublime text 3. Phím tắt là một công cụ giúp chúng ta code nhanh hơn và tiện lợi hơn trong công việc.','Ctrl + P : xuất hiện một bảng chọn file trong toàn bộ các file của folder project.\r\n\r\nCtrl + G : xuất hiện một bảng nhập số dòng mình muốn tới.\r\n\r\nCtrl + R : xuất hiện bảng chọn hàm trong file để di chuyển đến đó.\r\n\r\nCtrl + Pageup­/Pa­gedown : di chuyển qua lại giữa các tập tin\r\n\r\nCtrl + Delete/Backspace: xóa một cụm từ trước hoặc sau vị trí con trỏ\r\n\r\nCtrl + KK: xóa từ vị trí con trỏ tới cuối dòng\r\n\r\nCtrl + T : hoán đổi 2 ký tự đứng kế nhau\r\n\r\nCtrl + K + U : chuyển đổi toàn bộ chuỗi từ thường sang HOA\r\n\r\nCtrl + K + L : chuyển đổi toàn bộ chuỗi từ HOA sang thường\r\n\r\nCtrl + Shift + D: sao chép dòng hiện tại thành một dòng mới\r\n\r\nCtrl + Shift + K : xóa một dòng\r\n\r\nCtrl + Shift + Up,Down: di chuyển một dòng lên trên hoặc xuống dưới\r\n\r\nCtrl + Enter: thêm một dòng phía sau\r\n\r\nCtrl + Shift + Enter: thêm một dòng phía trước\r\n\r\nCtrl+K+B: ẩn/hiện side bar\r\n\r\nCtrl+/: comment\r\n\r\nCtrl+Shift+/: comment dạng block\r\n\r\nCtrl+L: select 1 dòng\r\n\r\nCtrl+Shift+K: xóa 1 dòng\r\n\r\nCtrl+]: indent\r\n\r\nCtrl+[: bỏ indent\r\n\r\nCtrl+Shift+D: nhân đôi dòng\r\n\r\nCtrl+J: nối dòng với dòng tiếp theo\r\n\r\nCtrl+Shift+[: đóng 1 đoạn code\r\n\r\nCtrl+Shift+]: mở 1 đoạn code\r\n\r\nCtrl+F: tìm kiếm\r\n\r\nCtrl+H: tìm kiếm và thay thế\r\n\r\nCtrl+Shift+N: mở cửa sổ mới\r\n\r\nCtrl+N: mở tab mới\r\n\r\nAlt+<number>: chuyển tab (ví dụ Alt+3)\r\n\r\n','10:33:20  - 5/12/2017',1),(4,'Chuyện tối ưu code, xấu đẹp, đẹp xấu','Chuyện tối ưu code, viết code cho thật đẹp là công việc hàng ngày của mỗi lập trình viên, điều đó ai cũng biết. Nhưng liệu code tối ưu có phải là code đẹp, và ngược lại? Đây là câu hỏi mà chắc hẳn nhiều bạn đều thắc mắc. Tôi sẽ kể một câu chuyện, và kết luận thế nào thì các bạn vui lòng kéo xuống phần “Kết luận” để đọc nhé.','Chuyện là một đêm Sài Gòn mát lạnh (do tôi ở trong phòng mở máy lạnh, chứ ngoài trời thì tôi không biết), tôi rảnh rỗi ngồi lướt Github (thay vì lướt Facebook) thì tình cờ tôi đọc được một đoạn code khá là thú vị.Cảm giác ban đầu của các bạn thế nào? Nhìn khó chịu đúng không? Tôi cũng vậy.\r\n\r\nĐể giới thiệu qua đoạn code này một tí. Đây là đoạn code viết bằng OpenGL Shading Language, có thể giới thiệu đại khái đây là ngôn ngữ cấp cao (high level language) dành cho việc lập trình các shader trong OpenGL (cái này chắc các bạn lập trình game với OpenGL hiểu rõ hơn, các bạn giúp mình giải thích rõ hơn trong phần comment nhé).\r\n\r\nĐoạn code này để làm việc gì?\r\n\r\nĐoạn code này được trích ra từ một ứng dụng xem ảnh trên web (tương tự Google Photo), và nhiệm vụ của nó là tính giá trị màu sắc của một điểm ảnh sau khi áp dụng filter, cụ thể ở đây là blur (làm mờ).\r\n\r\nThuật toán đằng sau nó là gì?\r\n\r\nTrước khi đi sâu vào đoạn code đó, chúng ta cùng nhìn qua về mặt giải thuật. Để tính được giá trị màu sắc của một điểm trên ảnh sau khi áp dụng filter chúng ta không thể chỉ thay đổi giá trị màu sắc của chính điểm đó bằng cách cộng trừ nhân chia với một giá trị delta nào đó, bởi vì làm vậy thì màu sắc của từng điểm sẽ dễ dàng bị khác biệt và tạo ra cảm giác không đẹp, vì bức ảnh là một tổ hợp của rất nhiều điểm.','10:34:55  - 5/12/2017',2),(5,'Lời bài hát: Đã lỡ yêu em rồi','Đã lỡ yêu em nhiều rồi thì anh chỉ biết ngắm mưa  Nhìn qua hàng cây được bao nhiêu hạt mưa  Là trong anh được bấy nhiêu nỗi nhớ em  Đã lỡ yêu em nhiều rồi thì anh chỉ biết đếm sao ','Đã lỡ yêu em nhiều rồi thì anh chỉ biết ngắm mưa \r\nNhìn qua hàng cây được bao nhiêu hạt mưa \r\nLà trong anh được bấy nhiêu nỗi nhớ em \r\nĐã lỡ yêu em nhiều rồi thì anh chỉ biết đếm sao \r\nNhìn lên trời cao được bao nhiêu vì sao \r\nLà trong lòng anh còn bấy nhiêu những nỗi lo \r\nSợ mình đánh mất em khi, thu vừa sang, lá xanh bỗng úa vàng \r\nKhi mưa còn chưa tới, em thay người yêu mới, oh no no \r\nSợ mình sẽ khiến em yêu phai nhạt hơn giữa mênh mông bộn bề.. \r\nEm ơi chờ anh với \r\n(Chỉ biết nói cho em nghe vậy thôi..) \r\n\r\nVì đã lỡ yêu em rồi, chẳng dám hứa xa xôi \r\nCứ nhắm mắt em lại và feel my love \r\nDù nắng mưa bao mùa \r\nThì tình anh vẫn luôn đây mà \r\nChẳng phải kiếm đâu xa \r\nVẫn giữ đó bầu trời của riêng chúng ta \r\nĐể gió mang đi về 1 nơi không người.. \r\n\r\nĐã lỡ yêu em nhiều rồi thì anh chỉ biết thế thôi \r\nDù mai về sau mình không bên cạnh nhau \r\nDù tim mình đau khi biết em đã lỡ yêu người \r\nĐã lỡ yêu em nhiều rồi thì anh sẽ bất chấp luôn \r\nDù mưa, dù giông, dù sông sâu, biển xa \r\nDù nắng cháy anh cũng không hề lo \r\nChỉ sợ mình đánh mất em khi, thu vừa sang, lá xanh bỗng úa vàng \r\nKhi mưa còn chưa tới, em thay người yêu mới, oh no no \r\nSợ mình sẽ khiến em yêu phai nhạt hơn giữa mênh mông bộn bề \r\nEm ơi chờ anh với \r\n(Chỉ biết nói cho em nghe vậy thôi) \r\n\r\nVì đã lỡ yêu em rồi, chẳng dám hứa xa xôi \r\nCứ nhắm mắt em lại và feel my love \r\nDù nắng mưa bao mùa \r\nThì tình anh vẫn luôn đây mà \r\nChẳng phải kiếm đâu xa \r\nVẫn giữ đó bầu trời của riêng chúng ta \r\nĐể gió mang đi về 1 nơi không người \r\n\r\nĐã lỡ yêu..nah nah nah \r\nU know, oh lỡ yêu…nah nah nah \r\nI love you so, bei I love you so \r\nMình phải bước chậm lại vì ngày mai rất dài \r\nĐã lỡ yêu..nah nah nah \r\nU know, oh lỡ yêu…nah nah nah \r\nI love you so, bei I love you so \r\nMình phải bước chậm lại, chậm lại.. \r\n\r\nVì biết đâu, sớm mai thức dậy \r\nEm không còn đây ôm anh, nhẹ hôn anh \r\nĐể tình ta cứ trôi lững lờ \r\nChờ giông và bão cuốn đi bất ngờ \r\nRồi lỡ đâu, giấc mơ không thành \r\nEm không còn kề vai anh, tình mong manh \r\n1 người đứng cứ trông với chờ, người kia thì ôm giấc mơ.. \r\n\r\n','10:36:47  - 5/12/2017',2);
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

-- Dump completed on 2017-12-05 10:38:51
