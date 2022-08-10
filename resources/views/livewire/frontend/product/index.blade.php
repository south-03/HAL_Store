<div>
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
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
                                <button class="list-group-item list-group-item-action" >Gaming laptop</button>
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
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range">

                                </div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
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
                                                <input type="checkbox" wire:model="brandInputs" value="{{  $brandItem->name }}"><span style="margin-left: 5px">{{ $brandItem->name }}</span></label>
                                        @endforeach
                              
                         
                                    
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price → High Price</option>
									<option value="3">Low Price → High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>

                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                                <div class="container productFill">
                                    <div class="row">

                                        @forelse ($products as $productItem)
                                        
                                            <div class="col-sm-6 col-md-6 col-lg-4 border border-primary ml-5" style="    margin: 0px 20px 0px 0px;">
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
                                                                Name:    {{ $productItem->title }}    
                                                            </a></h4>
                                                        <h5>Prices:{{ $productItem->price}}</h5>
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
