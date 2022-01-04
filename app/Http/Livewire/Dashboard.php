<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Dashboard extends Component
{
    use WithFileUploads;

    public $personnel_id;
    public $name;
    public $category;
    public $path;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.dashboard', [
            'presidentials' => DB::table('personnels')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function store()
    {
        DB::table('personnels')->insert([
            'name'     => $this->name,
            'category' => $this->category,
            'path'     => $this->path,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $results            = DB::table('personnels')->where('id', $id)->first();
        $this->personnel_id = $results->id;
        $this->name         = $results->name;
        $this->category     = $results->category;
        $this->path         = $results->path;
    }

    public function cancelEdit()
    {
        $this->personnel_id = null;
        $this->name         = '';
        $this->category     = '';
        $this->path         = '';
    }

    public function update()
    {
        DB::table('personnels')->where('id', $this->personnel_id)->update([
            'name'     => $this->name,
            'category' => $this->category,
            'path'     => $this->path,
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy()
    {
        DB::table('personnels')->where('id', $this->personnel_id)->delete();

        return redirect()->route('dashboard');
    }
}
