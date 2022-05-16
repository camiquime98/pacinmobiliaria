<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\inmuebles;
use Livewire\WithPagination;


class Inmueble extends Component
{

    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.inmueble',[
            'inmuebles' => inmuebles::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->simplePaginate($this->perPage), 
        ]);
    }
    // use WithPagination;

    // public $perPage = 10;
    // public $search = '';
    // public $orderBy = 'id';
    // public $orderAsc = true;


    // public function render()
    // {
    //     return view('livewire.inmueble',[
    //         'inmuebles' => inmuebles::search($this->search)
    //         ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
    //         ->simplePaginate($this->perPage),
    //     ]);
    // }
}
