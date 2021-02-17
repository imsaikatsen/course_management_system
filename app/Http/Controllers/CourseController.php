<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function getStudents()
    {
        $withCount = Student::withCount('courses')->get();

//        $student = Student::leftJoin('student_courses', function ($q) {
//            $q->on('student_courses.student_id', 'students.id');
//        })->select('students.id', 'students.name', DB::raw('count(student_courses.course_id) as course_count'))->groupBy('students.id', 'students.name')->get();
        return response()->json([ $withCount]);
    }
}
