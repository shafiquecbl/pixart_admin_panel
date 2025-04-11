<?php

namespace App\Livewire;

use App\Models\Account;
use Livewire\Component;
use Livewire\WithPagination;

class AccountsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'account_name';
    public $sortDirection = 'asc';
    public $accountType = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.accounts-table', [
            'accounts' => Account::query()
                ->when($this->search, function ($query) {
                    $query->where(function ($query) {
                        $query->where('account_name', 'like', '%' . $this->search . '%')
                            ->orWhere('contact_person', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%');
                    });
                })
                ->when($this->accountType, function ($query) {
                    $query->where('account_type', $this->accountType);
                })
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10)
        ]);
    }
}
