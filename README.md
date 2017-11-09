# 2017_Fall_ISC301_Group3
Hướng dẫn cài đặt: 8 bước

1.	Cài localhost
2.	Cài đặt ssl trên localhost
3.	Giải nén file winestoreml.zip
4.	import file winestoreml.sql vào trong mysql
5.	Vào file winestore/wp-config.php
6.	Sửa các thông tin về localhost trong wp-config.php
Các thông tin cần thay đổi:
    a.	DB_NAME: wine
    b.	DB_USER: user_localhost_mysql
    c.	DB_PASSWORD: password_localhost_mysql
    d.	DB_HOST: localhost
7.	Vào console và chạy lênh php -S localhost:8000
8.	Vào browser và vào link https://localhost:8000
