<div>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $product['name_' . session('locale')] }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('images/' . $product['name_es'] . '.webp') }}"
                                alt="{{ $product['name_es'] }}" width="80%" height="200">
                        </div>
                        <div class="card-footer">
                            {{ $product['description_' . session('locale')] }}
                            <br>
                            <span class="float-right">${{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
