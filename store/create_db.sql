create database store default character set=utf8;

use store;

#会员表
create table userinfo
(
  userId       int             auto_increment primary key,
  userName     varchar(20)     unique not null,
  password     varchar(20)     not null,
  dateandtime  timestamp       default current_timestamp
);
insert into userinfo(userName,password)values('张三','123456');
insert into userinfo(userName,password)values('李四','123456');
insert into userinfo(userName,password)values('王五','123456');

#产品表
create table bookinfo
(
  bookId       int             auto_increment primary key,
  bookName     varchar(50)     not null,
  price        float           default 0,
  dateandtime  timestamp       default current_timestamp
);
insert into bookinfo(bookName,price)values('PHP开发指南',65);
insert into bookinfo(bookName,price)values('JavaScript指南',56);
insert into bookinfo(bookName,price)values('HTML & CSS设计',60);
insert into bookinfo(bookName,price)values('MVC框架',75);
insert into bookinfo(bookName,price)values('Linux系统',65.8);
insert into bookinfo(bookName,price)values('Smarty模板引擎',50);
insert into bookinfo(bookName,price)values('程序员上班那点事儿',65);
insert into bookinfo(bookName,price)values('数据库设计',76);

#购物车表
create table carinfo
(
  carId         int       auto_increment primary key,
  userId        int       not null,#买产品的人
  bookId        int       not null,#产品id
  bookCount     int       default 0,#产品数量
  dateandtime   timestamp default current_timestamp,
  foreign key (userId) references userinfo(userId),
  foreign key (bookId) references bookinfo(bookId)
);

#订单表(存储订单信息：送货信息)
create table orderinfo
(
  id          int             auto_increment primary key,#id号
  orderId     varchar(20)     unique not null,#订单编号
  totalPrice  float           not null,#订单总价
  userId      int             not null,#下订单的人
  accpter     varchar(20)     not null,#收件人
  tel         varchar(20)     not null,#收件人的电话
  address     varchar(500)    not null,#送货地址
  remark      varchar(1000)   default '无',#订单描述
  isPay       int             default 0,#是否付款(0未 1己)
  isSend      int             default 0,#是否发货(0未 1己)
  isCheck     int             default 0,#是否签收(0未 1己)
  dataandtime timestamp       default current_timestamp,
  foreign key (userId) references userinfo(userId)
);

#订单明细表(记录某个订单下的产品信息)
create table orderdetails
(
  odId         int             auto_increment primary key,
  oId          int             not null,#订单表的主键
  bookId       int             not null,#产品编号
  bookCount    int             default 0,#产品数量
  foreign key (oId) references orderInfo(id),
  foreign key (bookId) references bookinfo(bookId)
);

#carinfo、bookinfo表的视图
create view carview
as
select carId,userId,a.bookId,bookCount,bookName,price,a.dateandtime from carinfo a inner join bookinfo b on a.bookId=b.bookId order by carId;


select * from userinfo;#用户表(LoginController)
select * from bookinfo;#产品表(IndexController)
select * from carinfo;#购物车表(ActController、CarController)
select * from orderinfo;#订单表(OrderController)
select * from orderdetails;#订单明细表(OrderController)










