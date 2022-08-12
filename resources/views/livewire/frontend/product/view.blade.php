<div>
    <div class="shop-detail-box-main product_data">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                @if ($product->productImage)
                                <img class="d-block w-100" src="{{ asset($product->productImage[0]->thumbnail) }}" alt="First slide"> </div>
                                @endif 
                            <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-02.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-03.jpg" alt="Third slide"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2> {{ $product->title }} </h2>
                        <h5> {{ $product->price }} </h5>
                        <p class="available-stock"><span> {{ $product->quantity }} / <a href="#">8 sold </a></span>
                            <p>
                                <h4>Short Description:</h4>
                                <p>{{ $product->description }} </p>
                                        <div class="form-control quantity-box mb-5">
                                            <input type="hidden" value="{{ $product->id }}" class="pro_id">
                                            <label class="control-label">Quantity</label>
                                            <input class="form-control qty-input" value="1" min="0" max="100" type="number">
                                        </div>

                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        {{-- <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a> --}}
                                        <a class="btn hvr-hover addtoCartBtn" >Add to cart</a>
                                        <a class="btn hvr-hover float-end" style="margin: 0px 3px" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin: 0px 3px" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin: 0px 3px" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin: 0px 3px" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover float-end" style="margin: 0px 3px" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>  
                            </p>   
                        </p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
