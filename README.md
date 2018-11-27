# Composer-command


# Global Options
- **--verbose (-v)**: Hiện một messages dài
- **--help (-h)**: Hiển thị thông tin trợ giúp 
- **--quiet (-q)**: Không xuất ra bất kỳ thông báo nào trong khi chạy lệnh
- **--no-plugins**: Tắt plugin.
- **--working-dir (-d)**: Chỉ định thư mục làm việc
- **--profile**: Hiển thị thời gian và thông tin sử dụng bộ nhớ
- **--ansi**: Xuất kết quả với đầu ra là encoding là ANSI
- **--no-ansi**: Vô hiệu hóa việc xuất kết quả với đầu ra là mã ANSI
- **--version (-V)**: Hiển thị phiên bản của composer.
# Các câu lệnh
## **init** : Tạo file `composer.json` nhằm khai báo package
- Tùy chọn: 
  - *--name* : tên của package
  - *--description*: Mô tả package 
  - *--author*: Tên tác giả Package
  - *--type*: Loại package
  - *-- homepage*: Trang chủ của package
  - *--require* ,`--require-dev`, `--stability (-s)`, `--license (-l)`, `--repository`
## **install**: Đọc thông tin từ file `composer.json` . Tổng hợp và cài đặt các package vào folder vendor
- Tùy chọn : 

  - *--prefer-source*:Cài đặt từ source
  - *--prefer-dist* : Cài đặt từ dist
  - *--dry-run* : chạy qua một cài đặt mà không thực sự cài đặt một gói
  - *--dev* : Cái đặt các gói được liệt kê trong `require-dev`
  - *--no-dev*: Bỏ qua cài đặt các package được liệt kê trong `require-dev`
  - *--no-autoloader* : Bỏ qua phiên bản autoloader
  - *--no-scripts* : Bỏ qua việc thực hiện tập lệnh được định nghĩa trong `composer.json`
  - *--no-progress* : Loại bỏ hiển thị tiến trình
  - *--no-suggest* : Bỏ qua các gói được đề xuất ở đầu ra 
  - *--optimize-autoloader (-o)* : Chuyển đổi PSR-0/4 tự động thành classmap để tải trình nạp tự động nhanh hơn
  - *--classmap-authoritative (-a)* : Tự động nạp các lớp trong classmap
  - *--apcu-autoloader* : Sử dụng APCu để lưu các lớp tìm thấy / không tìm thấy.
  - *--ignore-platform-reqs* : bỏ qua các yêu cầu `php`, `hhvm` , `lib-*` and `ext-*` và cài đặt ngay.
  
 
## **update** : Update các dependencies lên phiên bản mới nhất  và update file `composer.lock`
- **Tùy chọn** : 

   Giống install và thêm một số tùy chọn sau : 
  - *--prefer-stable* : ưu  tiên các phiên bản ổn định của dependencies
  - *--prefer-lowest* : Ưu tiên phiên bản dependencies thấp nhất
  - *--interactive* : Giao diện tương tác với autocompletion  để chọn các gói cần cập nhật
  - *--root-reqs* : Hạn chế cập nhật đối với dependencies mức độ đầu tiên của bạn.
  
**require** :
  Thêm package mới vào file `composer.js`từ thư mục hiện tại. nếu file không tồn tại sẽ tạo một file một cách nhanh chóng
  
**remove** : Gỡ bỏ các package khỏi file `composer.js` khỏi thư mục hiện tại

**global** : cho phép chạy các lệnh `install`,`remove`, `require` hoặc `update` như thể đang chạy chúng từ thư mục COMPOSER_HOME

**search** : Tìm kiếm 1 package trong project của bạn

**show** : liệt kê các package khả dụng

**depends** : Cho biết package nào phụ thuộc vào package nào

**validate** : Kiểm tra xem file `composer.json` có hợp lệ hay không