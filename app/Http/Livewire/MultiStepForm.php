<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public string $first_name = '', $last_name = '', $gender = '', $description = '', $email = '', $phone = '', $country = '', $city = '';
    public $age=null;
    public array $frameworks = [];
    public $cv, $terms;

    public int $totalSteps = 4;
    public int $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();

        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();

        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }

    }

    public function validateData()
    {
        if ( $this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'gender' => 'required',
                'age' => 'required|digits:2'
            ]);
        }
        elseif ( $this->currentStep == 2) {
            $this->validate([
                'email' => 'required|email|unique:students',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required'
            ]);
        }
        elseif ( $this->currentStep == 3) {
            $this->validate([
                'frameworks' => 'required|array|min:2|max:3',
            ]);
        }
    }

    public function register()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 4) {
            $this->validate([
                'cv' => 'required|mimes:doc,docx,pdf|max:1024',
                'terms' => 'accepted'
            ]);
        }
        //dd('Now form ready for submit');
        $cv_name = 'CV_'.$this->cv->getClientOriginalName();
        $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        if ($upload_cv) {
            $data = [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'gender' => $this->gender,
                'age' => $this->age,
                'email' => $this->email,
                'phone' => $this->phone,
                'country' => $this->country,
                'city' => $this->city,
                'frameworks' => json_encode($this->frameworks),
                'description' => $this->description,
                'cv' => $cv_name,
            ];

            Student::create($data);
            //this 2 lines return at 1 step of registration & next 2 - redirect on ThankYou page
            //$this->reset();
            //$this->currentStep = 1;
            $data1 = ['name'=>$this->first_name.' '.$this->last_name, 'email'=>$this->email];
            return redirect()->route('registration.success', $data1);
        }
    }

}
