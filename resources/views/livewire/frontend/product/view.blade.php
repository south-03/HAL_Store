<div>
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @if ($product->productImage)
                                
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{ asset($product->productImage[0]->thumbnail) }}" alt="First slide"> </div>
                            @else
                            No Image Addes
                            @endif
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{ $product->title }}</h2>
                        <h5>{{ $product->price }} </h5>
                        <p class="available-stock"><span> {{ $product->quantity }} / <a href="#">8 sold </a></span>
                            <p>
                                <h4>Short Description:</h4>
                                <p>{{ $product->description }}</p>
                                
                                <div class="form-group quantity-box">
                                    <label class="control-label">Quantity</label>
                                    <input class="form-control" value="1" min="1" max="20" type="number">
                                </div>
                           
                                <div class="price-box-bar" style="margin-top: 5px">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover " data-fancybox-close="" href="#">Add to cart</a>
                                        <a class="btn hvr-hover float-end" style="margin-left: 5px;" href="#" ><i class="fab fa-facebook " aria-hidden="true" ></i></a>
                                        <a class="btn hvr-hover float-end" style="margin-left: 5px;" href="#"><i class="fab fa-google-plus " aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin-left: 5px;" href="#"><i class="fab fa-twitter " aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin-left: 5px;" href="#"><i class="fab fa-pinterest-p " aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin-left: 5px;" href="#"><i class="fab fa-whatsapp " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
