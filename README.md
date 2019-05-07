# Cakephp-blog
Please find in this repository the zip file containing all of my project, also you will find the cakephp app folder containing Models, Views and Controllers.

## schema.
```sql
drop table posts;
create table posts(
  id int(10) not null,
  title varchar(50),
  body text,
  user_id int(11),
  created datetime,
  modified datetime,
  primary key (id),
  foreign key (user_id) references users(id)
);
drop table users;
create table users(
  id int(10) not null,
  username varchar(50),
  password varchar(255),
  email varchar(255),
  primary key (id)
);
```
