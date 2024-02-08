<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableComponents extends Component
{
    public $search = '';
    public $executionTime = 0;
    public $totalUsers = 0; 

    use WithPagination;
    public $paginationTheme = 'bootstrap';
    protected $listeners = ['triggerSearch' => 'updatingSearch'];

        public function mount()
    {
        $this->totalUsers = User::count();
    }

    public function render()
    {
        $start = microtime(true); 

        $users = User::where('name', 'like', '%'.$this->search.'%')
                                ->orWhere('email', 'like', '%'.$this->search.'%')
                                ->paginate(10);

        $end = microtime(true); 
        $executionTime = round($end - $start, 5); 

        $this->executionTime = $executionTime;

        return view('livewire.table-components', [
            'users' => $users,
            'totalUsers' => $this->totalUsers, 
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function triggerSearch()
    {
        $this->updatingSearch();
    }

    // public function paginationView()
    // {
    //     return 'livewire.custom-pagination-links'; 
    // }

}
