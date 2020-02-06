create database congreso default character set utf8 collate utf8_unicode_ci;
create user admin@localhost identified with mysql_native_password by 'practica-congreso-bd';
grant all on congreso.* to admin@localhost;
flush privileges;