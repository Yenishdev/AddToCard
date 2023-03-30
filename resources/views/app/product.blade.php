<div class="bg-light text-white rounded-3" style="--bs-bg-opacity: 0.15;">
    <div class="row g-0">
        <div class="col-5">
            <div class="d-flex p-2">
                <img src="{{  $product->image ? Storage::url('products/sm/' . $product->image) : asset('img/sm/product.jpg') }}"
                     alt="{{ $product->name }}" class="img-fluid rounded-3">
            </div>
        </div>
        <div class="col py-3 ps-2 pe-3">
            <div class="d-flex flex-column h-100">
                <div class="fw-semibold mb-auto">
                    {{ $product->name }}
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <div class="fs-5 fw-semibold text-primary">
                                {{ number_format($product->price, 2, '.', ' ') }}
                                <small>TMT</small>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn btn-danger btn-sm rounded-3 add-to-cart">
                            <i class="bi-plus-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>