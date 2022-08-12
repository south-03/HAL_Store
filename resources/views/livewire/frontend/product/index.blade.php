<div>
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product"></div>
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Product portfolio</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <button class="list-group-item list-group-item-action">Gaming laptop</button>
                                <button class="list-group-item list-group-item-action">Office laptop</button>
                                <button class="list-group-item list-group-item-action">Gaming - Graphics PC</button>
                                <button class="list-group-item list-group-item-action">PC Components</button>
                                <button class="list-group-item list-group-item-action">Apple</button>
                                <button class="list-group-item list-group-item-action">Display</button>
                                <button class="list-group-item list-group-item-action">Keyboard</button>
                                <button class="list-group-item list-group-item-action">Mouse</button>
                                <button class="list-group-item list-group-item-action">Headset</button>
                                <button class="list-group-item list-group-item-action">Chair</button>
                                <button class="list-group-item list-group-item-action">Console</button>
                            </div>
                        </div>

                        <div class="filter-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            
                            <div class="brand-box" style="height: 72px;">
                                <ul>    
                                    <label class="d-block">
                                        <input class="sort-h-t-l" type="radio" name="priceSort" onclick="location.href='?price=high-to-low'" wire:model="priceInput" value="high-to-low">
                                        <span style="margin-left: 5px">High to low</span>
                                    </label>

                                    <label class="d-block">
                                        <input type="radio" name="priceSort" onclick="location.href='?price=low-to-high'" wire:model="priceInput" value="low-to-high">
                                        <span style="margin-left: 5px">Low to high</span>
                                    </label>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-brand-left">
                            <div class="title-left">
                                <h3>Brand</h3>
                            </div>
                            <div class="brand-box">
                                <ul>
                                    @foreach ($category->brands as $brandItem)
                                        <label class="d-block">
                                            <input type="checkbox" wire:model="brandInputs" value="{{  $brandItem->name }}"><span style="margin-left: 5px">{{ $brandItem->name }}</span>
                                        </label>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="row product-categorie-box">
                                <div class="container ">
                                    <div class="row">

                                        @forelse ($products as $productItem)
                                        
                                            <div class="col-sm-6 col-md-6 col-lg-4 border border-primary ml-5" style="margin: 0px 20px 0px 0px;">
                                                @if ($productItem->quantity > 0)
                                                    <label class="stock bg-success rounded" style="font-size: 20px; color: white; padding: 0px 5px; margin-top: 5px">In stock</label>
                                                @else
                                                    <label class="stock bg-danger rounded" style="font-size: 20px; color: white; padding: 2px 5px;">Out of stock</label>
                                                @endif
                                                <div class="products-single ">
                                                    

                                                    @if ($productItem->productImage->count() > 0)
                                                        <a href="{{ url('/collections/'.$productItem->category->name.'/'.$productItem->title) }}">
                                                            <img src="{{ asset($productItem->productImage[0]->thumbnail) }}" style="width: 200px; height: 200px; text-align:center; margin-left: 40px;" alt="Image">
                                                        </a>
                                                    @endif
                                                    
                                                    <div class="card-body">
                                                        <h4>
                                                            <a href="{{ url('/collections/'.$productItem->category->name.'/'.$productItem->title) }}">
                                                                {{ $productItem->title }}    
                                                            </a></h4>
                                                        <h5 style="color: red; font-size: 20px">{{ $productItem->price}} ₫</h5>
                                                        <a class="cart btn btn-danger btn-block" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-12">
                                                <div class="p-2">
                                                    <h4>No products Available for {{ $category->name }}</h4>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
