<?php

namespace App\Http\Livewire;

use App\Mail\SendConfirmation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class OnlineSurvey extends Component
{
    public $email;
    public $name;
    public $personnel_id;
    public $personnel_name;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.online-survey', [
            'presidentials' => DB::table('personnels')->get()->toArray(),
        ])->layout('layouts.guest');
    }

    public function store()
    {
        $this->validate([
            'email' => 'required|unique:votes|email:rfc,dns',
            'name'  => 'required|max:200',
        ]);

        $id = DB::table('votes')->insertGetId([
            'personnel_id' => $this->personnel_id,
            'email'        => $this->email,
            'name'         => $this->name,
        ]);

        Mail::to($this->email)
            ->bcc([
            'renier.trenuela@gmail.com',
            'mohammed.abdulazizt.19@gmail.com'
        ])->send(new SendConfirmation($id, $this->name));

        $this->personnel_id = null;
        $this->email        = null;
        $this->name         = null;
        session()->flash('message', 'Please see your e-mail to confirm your vote.');
    }

    public function setID($name, $id)
    {
        $this->personnel_id   = $id;
        $this->personnel_name = $name;
    }
}
