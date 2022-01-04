<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ConfimVote extends Component
{

    public function mount($code)
    {
        $id = decrypt($code);
        DB::table('votes')->where('id', $id)->update(['status' => 'Verified']);
    }

    public function render()
    {
        return view('livewire.confim-vote')->layout('layouts.guest');
    }
}
