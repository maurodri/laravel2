<?php

namespace App\Http\Livewir;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }
    public function store()
    {
        $validatedData = $this->validate(
            ['firstname' => 'required', 
            'lastname' => 'required', 
            'email' => 'required|email', 
            'phone' => 'required'
        ]);
        Student::create($validatedData);
        session()->flash('message', 'Student Created Successfully!');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }
    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }
    public function update()
    {
        $this->validate(
            ['firstname' => 'required', 
            'lastname' => 'required', 
            'email' => 'required|email', 
            'phone' => 'required'
        ]);
        if ($this->ids) {
            $student = Student::find($this->ids);
            $student->update(['firstname' => $this->firstname, 
            'lastname' => $this->lastname, 
            'email' => $this->email, 
            'phone' => $this->phone
        ]);
            session()->flash('message', 'Student Updated Successfully');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }
    public function render()
    {
        $students = Student::orderBy('id', 'DESC')->get();
        return view('livewire.students', ['students' => $students]);
    }
}
