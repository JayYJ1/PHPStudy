create table member2 ( num int not null auto_increment, 
                        id char(20) not null, 
                      pass char(20) not null,
                      name char(10) not null,
                  post_num char(5), 
                   address char(80),
                       tel char(15), 
                     level int, primary key(num)
                      );

select * from member2;

select num, id, name, tel, level from member2 where level=7;

select name, tel from member2 where level >=1 and level <=5;

select name, id, pass, address from member2 where address like '경기도%';

select name, id from member2 where name like '%영%';

update member2 set pass='6789' where name = '이지현';

update member2 set level=7 where name='김기수';

select name, tel, address from member2 order by name desc;

delete * from member2;