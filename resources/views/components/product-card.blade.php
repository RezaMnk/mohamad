@foreach($products as $product)
    @unless($slider)
    <div class="col">
        <a href="{{ route('home.product', $product->id) }}">
            <div class="card border-0">
                <div class="imgBx">
                    <img src="{{ $product->featuring_image()->image_url }}" alt="{{ $product->name }}">
                </div>
                <div class="contentBx">
                    <h2>{{ $product->name }}</h2>
                    <a href="{{ route('home.product', $product->id) }}" class="btn btn-primary">مشاهده و خرید</a>
                </div>
            </div>
        </a>
    </div>

    @else
    <div class="item">
        <a href="{{ route('home.product', $product->id) }}">
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
        </a>
    </div>

    @endunless
@endforeach
