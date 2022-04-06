<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\School;

class StudentController extends Controller
{
    public function students()
    {


        // $students = Student::with("courses")->get(); //két tábla összekapcsolása

        // foreach($students as $student){
        //     echo "<pre>";
        //     print_r($student->name. " ");
        //     print_r($student->course->course);
        // }

        //adatot szerzünk
        //az iskola táblán keresztül a studentel építek fel kapcsolatot
        $schools = School::with("student")->get();

        foreach ($schools as $school) {

            echo "<pre>";  //school táblában a school oszlopot nézzük
            print_r($school->school); 
            
            foreach ($school->student as $sc) {
                echo "<pre>";
                print_r($sc->name);
            }
        }
    }
}
