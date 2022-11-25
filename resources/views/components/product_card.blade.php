<div class="col-md-4">
    <div class="product-item">
        <div class="product-title">
            <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
            <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="product-image">
            <a href="product-detail.html">
                <img src="{{ $product->imageUrl }}" alt="Product Image">
            </a>
            <div class="product-action">
                <button class="cart-btn"><i class="fa fa-cart-plus"></i></button>
                <button class=""><i class="fa fa-heart"></i></button>
                <button class=""><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="product-price">
            <h3><span>$</span>{{ $product->price }}</h3>
            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
        </div>
    </div>
</div>



