<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class DepartmentIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';

    public $searchName;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $departments = Department::paginate(10);
        return view('livewire.department-index', compact('departments'));
    }
}
