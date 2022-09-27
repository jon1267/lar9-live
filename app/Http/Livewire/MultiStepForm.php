<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public string $first_name, $last_name, $gender, $description, $email, $phone, $country, $city;
    public $age;
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

        }
    }

    public function register()
    {

    }

}
