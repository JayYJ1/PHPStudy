create table book (isbn char(15) not null, 
                   title char(50) not null,
                    author char(20) not null,
                     year char(4),
                      price int, 
                      primary key(isbn) 
                      );

insert into book (isbn, title, author, year, price) values
           ('9791196440947', '날개', '이상', '2017', 12000);

insert into book (isbn, title, author, year, price) values
           ('9791196440388', '타인의 방', '최인호', '2019', 12000);

insert into book (isbn, title, author, year, price) values
           ('9791196440366', '나목', '박완서', '2019', 13000);

insert into book (isbn, title, author, year, price) values
           ('9791196440346', '삼포 가는 길', '확석영', '2018', 15000);

insert into book (isbn, title, author, year, price) values
           ('9791196440545', '우상의 눈물', '전상국', '2020', 15000);

insert into book (isbn, title, author, year, price) values
           ('9791196678899', '토지', '박경리', '2021', 13000);

select author, isbn, price from book where title='토지';

update book set price=20000 where isbn='9791196440545';

select * from book order by title;

select title, author, price from book order by title desc;

delete from book where title='타인의방';

