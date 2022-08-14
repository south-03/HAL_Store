<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $products, $category, $brandInputs = [], $priceInput;

    protected $queryString = [
        'brandInputs' => ['except' => '', 'as' => 'brand'],
        'priceInput' => ['except' => '', 'as' => 'price'],


    ];

    public function mount($category)
    {

        $this->category = $category;
    }

    public function render()
    {

        $this->products = Product::where('category_id', $this->category->id)
            ->when($this->brandInputs, function ($q) {
                $q->whereIn('brand', $this->brandInputs);
            })
            ->when($this->priceInput, function ($q) {
                $q->when($this->priceInput == 'high-to-low', function ($q2) {
                    $q2->orderBy('price', 'DESC');
                })
                    ->when($this->priceInput == 'low-to-high', function ($q2) {
                        $q2->orderBy('price', 'ASC');
                    });
            })
            ->get();
        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category,
            'products' => $products
        ]);
    }
}
