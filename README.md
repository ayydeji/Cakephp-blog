# Cakephp-blog
This is a blog application developed by ayydeji. It was created using the Cake-php web framework.

## Schema
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
