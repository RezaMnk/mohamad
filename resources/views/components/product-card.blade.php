@foreach($products as $product)
    @if(!$slider)
        <div class="col">
            <div class="container">
                <div class="card">
                    <div class="imgBx">
                        <img src="{{ 'https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG' }}" alt="{{ $product->name }}">
                    </div>
                    <div class="contentBx">
                        <h2>{{ $product->name }}</h2>
                        <div class="size">
                            <h3>Size :</h3>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                        </div>
                        <a href="{{ route('admin.products.edit', $product->id) }}">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="item">
            <div class="product type-product">
                <div class="product-wrapper">
                    <div class="product-image">
                        <a href="single-shop.html" class="woocommerce-LoopProduct-link">
                            <img src="{{ asset('storage/site') }}/products/squire-272.png" alt="{{ $product->name }}">
                        </a>
                        <div class="hover-area">
                            <div class="cart-button">
                                <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                            </div>
                            <div class="wishlist-button">
                                <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                            </div>
                            <div class="compare-button">
                                <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">
                            <a href="single-shop.html">{{ $product->name }}</a>
                        </h3>
                        <div class="product-price">
                            <div class="price">
                                <ins>4450000 تومان</ins>
                            </div>
                        </div>
                        <div class="shipping-feed-back">
                            <div class="star-rating">
                                <div class="rating-wrap">
                                    <a href="index.html">
                                        <span>0 امتیاز</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
