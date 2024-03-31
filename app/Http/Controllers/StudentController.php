<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    protected $table = 'students';


    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {
        $response['students'] = Student::all(); // Corrected to use Student::all()
        dd($response);
        return view('pages.student.index')->with($response);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // Add other fields as necessary
        ]);

        $this->student->create($validatedData); // Corrected to call create method correctly

        return redirect()->back();
    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }

    public function done($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done=1;
        $task->update();

        return redirect()->back();
    }
}
