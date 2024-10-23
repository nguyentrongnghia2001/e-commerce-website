<div class="product-item item ">
    <div class="pi-pic">
        <img src="./front/img/products/{{ $product->productImages[0]->path ?? 'noi-image.png' }}" alt="{{ $product->name }}" />

        @if($product->discount != null)
        <div class="sale">Sale</div>
        @endif

        <div class="icon">
            <i class="icon_heart_alt"></i>
        </div>

        <ul>
            <li class="w-icon active">
                <a href="javascript:addCart({{ $product->id }})"><i class="icon_bag_alt"></i></a>
            </li>
            <li class="quick-view">
                <a href="shop/product/{{ $product->id }}">+ Xem chi tiết</a>
            </li>
            {{-- <li class="w-icon">
                <a href=""><i class="fa fa-random"></i></a>
            </li> --}}
        </ul>
    </div>
    <div class="pi-text">
        <div class="catagory-name"></div>
        <a href="shop/product/{{ $product->id }}">
            <h5>{{ $product->name }}</h5>
        </a>
        <div class="product-price">
            @if($product->discount != null)
            {{ number_format($product->discount) }} đ
            <span>{{ number_format($product->price) }} đ</span>
            @else
            {{ number_format($product->price) }} đ
            @endif
        </div>
    </div>
</div>