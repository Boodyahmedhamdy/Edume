--create view number_of_objects
--as (
--select 'courses_number' as 'object name', count(course_id) as 'object count' from courses
--union
--select 'teachers_number', count(teacher_id) from teachers
--union 
--select 'students_number', count(student_id) from students
--)

select * from number_of_objects;