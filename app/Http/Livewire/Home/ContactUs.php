<?php

namespace App\Http\Livewire\Home;

use App\Mail\HireMail;
use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactUs extends Component
{

    use LivewireAlert;

    public $name;
    public $email;
    public $purpose;
    public $audience;
    public $features;
    public $budget;
    public $responsible;
    public $weblike;
    public $design;
    public $brand;
    public $services;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'purpose' => 'required',
        'audience' => 'required',
        'features' => 'required',
        'budget' => 'required',
        'responsible' => 'required',
        'weblike' => 'required',
        'design' => 'required',
        'brand' => 'required',
        'services' => 'required',
    ];


    public function formHire()
    {
        $this->validate();

        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'purpose' => $this->purpose,
            'audience' => $this->audience,
            'features' => $this->features,
            'budget' => $this->budget,
            'responsible' => $this->responsible,
            'weblike' => $this->weblike,
            'design' => $this->design,
            'brand' => $this->brand,
            'services' => $this->services,
        );

        Mail::to('hire@aitscode.com')->send(new HireMail($data));

        $this->alert('success', 'Thank you for reaching out to us! We will assist you soon, to get your website online!', [
            'timer' => '5000',
            'toast' => true,
            'showCancelButton' => false,
            'showConfirmButton' => false,
            'position' => 'center'
        ]);

        $this->reset();
    }

    public function updated($name, $value)
    {
        $this->resetValidation($name);
        $this->resetErrorBag($name);
    }

    public function render()
    {
        return view('livewire.home.contact-us');
    }
}
