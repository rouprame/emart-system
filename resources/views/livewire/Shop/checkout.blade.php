
<div class="container" style="max-width:720px;">
  @if($this->checkout_message)
    <div class="alert alert-danger" role="alert">
        {{ $this->checkout_message}}
    </div>
  @endif
  <form wire:submit.prevent="placeOrder">
         
    <h4 class="card-title mb-4">Delivery Address</h4>
  <div class="row">
    

    @forelse ($addresses as $address)
          <div class="col-md-6">
              <article class="box mb-4">
                  <h6>{{ $address->entry_firstname }} {{ $address->entry_lastname }}</h6>
                  <p>
                    @if($address->entry_company)
                        {{ $address->entry_company }}<br>
                    @endif
                    {{ $address->entry_street_address }}<br>
                    <b>Landmark:</b> {{ $address->entry_landmark }}
                    <br> {{ $address->barangay->name }}, 
                    {{ $address->barangay->city->name }}, 
                    {{ $address->barangay->city->zip }}
                    <br>{{ $address->entry_phonenumber }}  
                </p>
                  <input wire:model="address_book_id" value="{{ $address->id }}" type="radio" name="address">
              </article>
          </div>  <!-- col.// -->
    @empty
      <a href="{{ route('user.address.create')}}" class="btn btn-light mb-3"> <i class="fa fa-plus"></i> Add new address </a>
    @endforelse
    @error('address_book_id')
    
      <span class="text-danger">
        <br> {{ $message }}
      </span>
    @enderror

  <main class="col-md-12">
        
  <div class="card">
    <h4 class="card-title ml-3 mt-3">Products</h4>

      <table class="table table-borderless table-shopping-cart">
      <thead class="text-muted">
      @if(!$cartItems->count() == 0)
          <tr class="small text-uppercase">
          <th scope="col" width="240">Product</th>
          <th scope="col" width="120">Quantity</th>
          <th scope="col" width="120">Price</th>
          </tr>
      @endif
      </thead>
      <tbody>
      @foreach ($cartItems as $cartItem)
          <tr>
              <td>
                  <figure class="itemside">
                      <div class="aside">
                          <a href="#">
                          <img src="{{ asset('storage') }}/{{ $cartItem->image }}" onerror="this.src='{{ asset('storage/app/public/') }}/{{ $cartItem->image }}'" class="img-sm">
                          </a>
                      </div>
                      <figcaption class="info">
                          <a href="#" class="title text-dark">{{ $cartItem->name }}</a>
                          <p class="text-muted small">{{--Size: XL, Color: blue, <br>--}}Brand: {{ $cartItem->brand }}</p>
                      </figcaption>
                  </figure>
              </td>
              <td> 
                  <div class="form-inline">
                      {{ $cartItem->qty }}
                  </div>
              </td>
              <td> 
                  <div class="price-wrap"> 
                      <var class="price">₱ {{ $cartItem->selling_price * $cartItem->qty }}</var> 
                      <small class="text-muted">₱ {{ $cartItem->selling_price }}  </small> 
                  </div> <!-- price-wrap .// -->
              </td>
             
          </tr>
      @endforeach

      </tbody>
      </table>
  </div> <!-- card.// -->
  
  <div class="card mt-4 mb-4">
    <div class="card-body">
    <h4 class="card-title mb-4">Payment Method</h4>
    <form role="form" style="max-width:380px;">
      @if ($this->payment_mode)
        <label class="js-check box active">
      @else
        <label class="js-check box">
      @endif
        <input wire:model="payment_mode" value="cod" type="radio" name="payment_mode">
        <h6 class="title">Cash on Delivery</h6>
        <p class="text-muted">Payment will be given upon delivery</p>
      </label> <!-- form-group.// -->
      @error('payment_mode')
      <span class="text-danger">
          {{ $message }}
      </span>
    @enderror
    </div> <!-- card-body.// -->
    
  </div>

  

  <div class="card mb-4">
    <div class="card-body">
    <h4 class="card-title mb-4">Order Total</h4>
      
      
      <span class="text-xl">Subtotal:</span><span class="text-xl"> ₱ {{ $this->totalCart }}</span><br>
    
      <span class="text-xl">Delivery fee:</span> <span class="text-xl"> ₱ {{ $this->shipping }}<br>
      @if($this->discount)
        <span class="font-bold text-xl">Discount:</span> <span class="text-xl">₱ {{ $this->discount }} </span><br>
        <span class="font-bold text-xl">Grand Total:</span> <span class="text-xl">₱ {{ $this->grandTotal - $this->discount }} </span>
      @else
      <span class="font-bold text-xl">Grand Total:</span> <span class="text-xl">₱ {{ $this->grandTotal }} </span>
      @endif
      <br><br>
      
    </div> 
  </div>
  
  
  <button class="btn btn-primary float-md-right"> Place Order <i class="fa fa-chevron-right"></i> </button>
</form>  
</main>
  </div>
  <div class="card mt-4 mb-4">
    <div class="card-body">
    <h4 class="card-title mb-4">Voucher</h4>
    <form wire:submit.prevent="applyCoupon" style="max-width:380px;">
        <div class="input-group w-50">
          <input wire:model="voucher" type="text" class="form-control">
        </div>
        @if($this->voucher_msg)
          <p class="text-danger">{{ $this->voucher_msg }}</p>
        @endif
        <br>
        <button type="submit" class="btn btn-primary float-md-left">Apply Voucher</button>
    </form>
    
    </div>  
  </div>
</div>


    <br><br> 
    
   