create database AdvertisementsManager;
use AdvertisementsManager;

drop table if exists Advertisements;
drop table if exists Users;
drop table if exists Moderators;
drop table if exists Statuses;
drop table if exists Categories;

/* create tables */

create table if not exists Categories
	(Category_ID char(3) not null,
	 CatName varchar(25) not null,
	 constraint pk_categories primary key (Category_ID)
	 );
      
create table if not exists Statuses
	(Status_ID char(2) not null,
	 Status_Name varchar(20) not null,
	 constraint pk_statuses primary key (Status_ID)
	 );
       
create table if not exists Users
	(User_ID varchar(20) not null,
     UserFirstName varchar(30) not null,
     UserLastName varchar(30) not null,
	 constraint pk_users primary key (User_Id)
     );

create table if not exists Moderators
	(User_ID varchar(20) not null,
    constraint fk_moderators_users foreign key (User_ID) references Users(User_ID) on delete restrict,
    constraint pk_moderators primary key (User_ID)
    );
    
create table if not exists Advertisements
	(Advertisement_ID integer unsigned not null auto_increment,
     AdvTitle varchar(50) not null,
     AdvDetails varchar(100) not null,
     AdvDateTime datetime not null,
     Price decimal (10,2) not null,
     User_ID varchar(20),
     Moderator_ID varchar(20),
     Category_ID char(3),
     Status_ID char(2),
     constraint pk_advertisements primary key (Advertisement_ID),
     constraint fk_advertisements_users foreign key (User_ID) references Users(User_ID) on delete cascade,
     constraint fk_advertisements_moderators foreign key (Moderator_ID) references Moderators(User_ID) on delete set null,
     constraint fk_advertisements_categories foreign key (Category_ID) references Categories(Category_ID) on delete restrict,
     constraint fk_advertisements_statuses foreign key (Status_ID) references Statuses(Status_ID) on delete restrict
     );
     
/* end of table creation */

/* begin data population */

/* Categories data */
insert into Categories (Category_ID, CatName)
values ('CAT', 'Cars and Trucks'),
	   ('HOU', 'Housing'),
       ('ELC', 'Electronics'),
       ('CCA', 'Child Care');

/* Statuses data */
insert into Statuses (Status_ID, Status_Name)
values ('PN', 'Pending'),
	   ('AC', 'Active'),
       ('DI', 'Disapproved');

/* Users data */
insert into Users (User_ID, UserFirstName, UserLastName)
values ('Jsmith', 'John', 'Smith'),
	   ('Ajackson', 'Ann', 'Jackson'),
       ('Rkale', 'Rania', 'Kale'),
       ('Sali', 'Samir', 'Ali');

/* Moderators data */
insert into Moderators (User_ID)
values ('Jsmith'),
	   ('Ajackson');
       
/* Advertisements data */
insert into Advertisements (AdvTitle, AdvDetails, AdvDateTime, Price, Category_ID, User_ID, Moderator_ID, Status_ID)
values ('2010 Sedan Subaru', '2010 sedan car in great shape for sale', '2017-02-10 00:00:00', 6000, 'CAT', 'Rkale', 'Jsmith', 'AC'),
	   ('Nice Office Desk', 'Nice office desk for sale', '2017-02-15 00:00:00', 50.25, 'HOU', 'Rkale', 'Jsmith', 'AC'),
       ('Smart LG TV for $200 ONLY', 'Smart LG TV 52 inches! Really cheap!', '2017-03-15 00:00:00', 200, 'ELC', 'Sali', 'Jsmith', 'AC'),
       ('HD Tablet for $25 only', 'Amazon Fire Tablet HD', '2017-03-20 00:00:00', 25, 'ELC', 'Rkale', NULL, 'PN'),
       ('Laptop for $100', 'Amazing HP laptop for $100', '2017-3-20 00:00:00', 100, 'ELC', 'Rkale', NULL, 'PN');

/* end of data population */