<?php

namespace App\Livewire;

use App\Models\Department;
use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';

    public $searchName;
    public $searchLastname;
    public $searchCi;
    public $searchEmail;
    public $searchAddress;
    public $searchDepartment;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updating($field)
    {
        $this->resetPage();
    }

    public function render()
    {
        $employees = Employee::with('department')
            ->where('name', 'like', '%' . $this->searchName . '%')
            ->where('lastname', 'like', '%' . $this->searchLastname . '%')
            ->where('ci', 'like', '%' . $this->searchCi . '%')
            ->where('email', 'like', '%' . $this->searchEmail . '%')
            ->where('address', 'like', '%' . $this->searchAddress . '%')
            ->whereHas('department', function($query) {
                $query->where('name', 'like', '%' . $this->searchDepartment . '%');
            })
            ->paginate(10);
        return view('livewire.employee-index', compact('employees'));
    }
}
