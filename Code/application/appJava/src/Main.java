import Core.Course;
import Core.Lesson;
import Core.Teacher;

public class Main {


    public static void main(String[] args) {
        Teacher teacher = new Teacher();
        teacher.setName("boody");
        Course course = new Course();
        course.setName("ML introduction to the hell");
        teacher.createCourse(course);

        System.out.println(teacher.getCourses());

        Lesson lesson = new Lesson();
        lesson.setName("first lesson");

        teacher.addLessonToCourse(lesson);
        teacher.addLessonToCourse(lesson);
        teacher.addLessonToCourse(lesson);
        System.out.println(teacher.getCourses().get(0).getLessons());


    }
}
