<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $Students =
        [
            [
                'id' => 1,
                'name' => 'Ahmed',
                'phone' => '01012345678',
                'age' => 22,
                'address' => 'Tanta, Egypt',
                'university' => 'Tanta University'
            ],
            [
                'id' => 2,
                'name' => 'Taha',
                'phone' => '01098765432',
                'age' => 23,
                'address' => 'Cairo, Egypt',
                'university' => 'Cairo University'
            ],
            [
                'id' => 3,
                'name' => 'Asal',
                'phone' => '01055555555',
                'age' => 21,
                'address' => 'Alexandria, Egypt',
                'university' => 'Alexandria University'
            ],
            [
                'id' => 4,
                'name' => 'Ali',
                'phone' => '01066666666',
                'age' => 24,
                'address' => 'Mansoura, Egypt',
                'university' => 'Mansoura University'
            ],
            [
                'id' => 5,
                'name' => 'Ibrahim',
                'phone' => '01077777777',
                'age' => 22,
                'address' => 'Giza, Egypt',
                'university' => 'GUC'
            ],
            [
                'id' => 6,
                'name' => 'Asmaa',
                'phone' => '01088888888',
                'age' => 20,
                'address' => 'Tanta, Egypt',
                'university' => 'Tanta University'
            ],
            [
                'id' => 7,
                'name' => 'Mohamed',
                'phone' => '01099999999',
                'age' => 25,
                'address' => 'Cairo, Egypt',
                'university' => 'Helwan University'
            ],
            [
                'id' => 8,
                'name' => 'Noha',
                'phone' => '01011111111',
                'age' => 21,
                'address' => 'Zagazig, Egypt',
                'university' => 'Zagazig University'
            ],
        ];
    function Students()
    {
        return view('Students.Students', ['Students' => $this->Students]);
        // return $this->Students;
    }
    function CreateStudent()
    {
        return view('students.CreateStudent');
    }

    public function ShowStudentId($id)
    {
        $student = collect($this->Students)->firstWhere('id', $id);

        if (!$student) {
            abort(404);
        }

        return view('Students.ShowStudentId', compact('student'));
    }

    function Store(Request $request)
    {
        return $request->all(); // مؤقتًا لعرض البيانات المُرسلة
    }

}
