<x-layout :title="$product->name">
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
        {{-- IMAGE GALLERY --}}
        <div class="mb-4">
            @if($product->images && $product->images->count() > 1)
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach($product->images as $index => $img)
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" @if($index === 0) aria-current="true" @endif aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner rounded">
                        @foreach($product->images as $index => $img)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $img->path) }}" class="d-block w-100" alt="{{ $product->name }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev" aria-label="Previous slide">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="ms-2 text-white bg-dark bg-opacity-75 px-2 py-1 rounded">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next" aria-label="Next slide">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="ms-2 text-white bg-dark bg-opacity-75 px-2 py-1 rounded">Next</span>
                    </button>
                </div>
            @else
                @if($product->images && $product->images->count() === 1)
                    @php $img = $product->images->first(); @endphp
                    <img class="img-fluid rounded mb-3" src="{{ asset('storage/' . $img->path) }}" alt="{{ $product->name }}">
                @else
                    {{-- fallback to old single image --}}
                    <img class="img-fluid rounded mb-3" src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
                @endif
            @endif
        </div>
        <div>
            {!! $product->description !!}

            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>
