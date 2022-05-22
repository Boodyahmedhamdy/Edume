-- use Edume;



create table enrollments (
	enrollment_id int primary key identity(1, 1), 
	enrollment_date date, 
	course_id int references courses(course_id), 
	student_id int references students(student_id), 
	payment_method_id int references payment_methods(payment_method_id)

)

