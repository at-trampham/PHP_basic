#AT_Intern_Fall-Winter_2017_Tram-Pham_Report About Git
## Khái niệm cơ bản:
-Git là một hệ thống quản lý source code của Linux
-Khi quản lý file bằng Git,lịch sử chỉnh sửa sẽ được lưu trong Git.
-Trong git,snapshot là khái niệm lưu trữ,mỗi snapshot lưu trữ trạng thái của các file.
## Repository quản lý lịch sử:
-Repository là nơi ghi lại trạng thái của thư mục và file về lịch sửa thay đổi của nội dung.Repository là các dự án ta tạo ra, chứa source code.
-Phân loại:Có 2 loại Repository:
+Remote repository: Là repository chung được lưu trên server và để chia sẻ giữa nhiều người.
+Local repository: Là repository lưu trên máy của người dùng và dành cho một người dùng sử dụng.
 **Có 2 cách tạo local repository:
  *Cách thứ nhất:Tạo repository hoàn toàn mới.
  *Cách thứ hai: Sao chép remote repository rồi tạo.
-Working Tree và Index
+Working tree: Là những thư mục được đặt trong sự quản lý của Git mà mọi người đang thực hiện công việc trong thực tế.
+Index:Là nơi để chuẩn bị cho việc commit lên repository.Là nơi tồn tại giữa repository và working tree.
## Các trạng thái trong git:
 --Có 2 trạng thái chính:
+Track: Là tập tin đã được đánh dấu theo dõi trong Git để bạn làm việc với nó,chúng có thể là unmodified(chưa chỉnh sửa gì), modified(đã chỉnh sửa), hoặc staged(đã sẵn sàng để commit).
+Untrack: Là trạng thái các tập tin hoặc thư mục nằm ngoài sự quản lý của git, nếu muốn làm việc với các tập tin này thì phải đưa vào trạng thái track thông qua lệnh git add.
## Lệnh cơ bản:
 git init:Để khởi tạo Git trong một repository.
 git remote -v:Để kiểm tra trạng thái của remote hiện tại.
 git clone <url> :Clone một remote repository.Câu lệnh trên sẽ tạo một thư mục mới có tên giống trên của repo.
 git help clone :Xem thông tin trợ giúp cho một câu lệnh git.
 git diff:Xem thay đổi (chưa đc add) của những file hiện tại.
 git status:Kiểm tra status của working tree.
 git log:Xem commit history.
 git push origin <branch name> :push các lưu trữ ở local repository lên remote repository.
 git commit -m 'leave message here' :: commit các file hoặc thư mục ở staged vào local repository
 git add {tên file} :: dùng để đưa 1 file hoặc thư mục vào trạng thái staged.
## Branch (nhánh):
+Khái niệm:Branch là các nhánh phát triển của repository.
+Mỗi repository sẽ có một branch chính là master.
+Các lệnh sử dụng với branch:
 git branch :: kiểm tra các branch hiện tại và đang ở branch nào*
 git checkout  -b {tên branch} :: chuyển sang 1 branch đã tồn tại, tạo mới nếu chưa có*
 git branch -d {tên branch} :: xóa 1 branch
 git branch {tên branch} :: tạo 1 branch mới
 git branch -a:Xem tất cả các nhánh.


