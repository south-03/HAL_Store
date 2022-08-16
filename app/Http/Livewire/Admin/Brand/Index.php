<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,$phone, $fax, $address, $email, $brand_id;

    public function rules()
    {
        return[
            'name' => 'required|string',
            'phone' => 'required|string',
            'fax' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string',
        ];
    }

    public function resetInput()
    {
        $this->name = NULL;
        $this->phone = NULL;
        $this->fax = NULL;
        $this->address = NULL;
        $this->email = NULL;
        $this->brand_id = NULL;
    }

    public function storeBrand()
    {
        $validatedData = $this->validate();
        Brand::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'fax' => $this->fax,
            'address' => $this->address,
            'email' => $this->email,
        ]);

        session()->flash('message', 'Brand Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();

    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function editBrand(int $brand_id)
    {
        $this->brand_id = $brand_id;
        $brands = Brand::findOrFail($brand_id);
        $this->name = $brands->name;
        $this->origin = $brands->origin;
    }

    public function updateBrand()
    {
        $validatedData = $this->validate();
        Brand::findOrFail($this->brand_id)->update([
            'name' => $this->name,
            'origin' => $this->origin,
        ]);

        session()->flash('message', 'Brand Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteBrand($brand_id)
    {
        $this->brand_id = $brand_id;

    }

    public function destroyBrand()
    {
        Brand::findOrFail($this->brand_id)->delete();
        session()->flash('message', 'Brand Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.admin.brand.index', ['brands' =>$brands])
                ->extends('layouts.admin')
                ->section('content');
    }
}
