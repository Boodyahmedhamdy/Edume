-- use Edume;


create table students_courses (
	student_id int foreign key references students(student_id), 
	course_id int foreign key references courses(course_id), 
	
	-- composite primary key
	primary key(student_id, course_id)

)