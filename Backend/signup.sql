use signup;

create table input(nam varchar(15),
					dept varchar(5),
                    yr varchar(5),
					emailid varchar(15) PRIMARY KEY,
					pswrd varchar(10));
                    
create table teacher(nam varchar(15),
					dept varchar(5),
                    yr varchar(5),
					emailid varchar(15) PRIMARY KEY,
					pswrd varchar(10));

select * from input;
select * from teacher;

insert into input values ('yo','it','1st','a@gmail.com','lol');

truncate table input;