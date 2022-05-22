-- use Edume;

create table courses (
	course_id int primary key identity(1, 1), 
	course_name varchar(20) default 'course_name', 
	course_details varchar(100),
	teacher_id int foreign key references teachers(teacher_id)
	--student_number as (select count())
)

create table students (
	student_id int primary key identity(1, 1), 
	student_name varchar(20) default 'student_name', 
	student_username varchar(20) unique, 
	student_email varchar(20) unique, 
	student_password varchar(20), 
	in_organization bit default 0 not null,
	organization_id int foreign key references organizations(organization_id)

)
