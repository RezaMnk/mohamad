@foreach($products as $product)
    @unless($slider)
        <div class="col">
            <div class="card border-0">
                <div class="imgBx">
                    <img src="{{ $product->featuring_image()->image_url }}" alt="{{ $product->name }}">
                </div>
                <div class="contentBx">
                    <h2>{{ $product->name }}</h2>
                    <a href="{{ route('home.product', $product->id) }}" class="btn btn-primary">مشاهده و خرید</a>
                </div>
            </div>
        </div>
    @else
        <div class="item">
            <div class="col">
                <div class="card border-0">
                    <div class="imgBx">
                        <img src="{{ $product->featuring_image()->image_url }}" alt="{{ $product->name }}">
                    </div>
                    <div class="contentBx">
                        <h2>{{ $product->name }}</h2>
                        <a href="{{ route('home.product', $product->id) }}" class="btn btn-primary">مشاهده و خرید</a>
                    </div>
                </div>
            </div>
        </div>
    @endunless
@endforeach
