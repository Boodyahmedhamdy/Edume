-- use Edume;



-- organization first
create table organizations (
	organization_id int primary key identity(1, 1), 
	organization_name varchar(20) default 'organization_name', 
	organization_username varchar(20) unique, 
	organization_email varchar(20) unique, 
	organization_password varchar(20) 
	-- students_number as (select count(student_id) from students where organization_id = organization_id)
	-- courses_number as (select count(course_id) from courses where organization_id = organization_id)

);

-- teachers
create table teachers (
	teacher_id int primary key identity(1, 1), 
	teacher_name varchar(20) default 'teacher_name', 
	teacher_username varchar(20) unique, 
	teacher_email varchar(20) unique, 
	teacher_password varchar(20)
);