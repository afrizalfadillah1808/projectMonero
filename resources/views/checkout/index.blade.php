@extends('layouts.main')

@section('container')
    <div class="container py-5 col-lg-7">
        <main>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-indigo-600">Cart</span>
                    <span class="badge bg-indigo-600 rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3 border-0">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0 text-indigo-900">Harga Course</h6>
                    </div>
                    <span class="text-indigo-900">Rp.969.000</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="">
                        <h6 class="my-0 text-indigo-600">Promo code</h6>
                        <small class="text-indigo-600">DISKON60K</small>
                    </div>
                    <span class="text-indigo-600">−Rp. 60.000</span>
                    </li>
                    <li class="list-group-item d-flex text-indigo-900 justify-content-between">
                    <span>Total (IDR)</span>
                    <strong>Rp. 909.000</strong>
                    </li>
                </ul>
        
                <form class="card p-2">
                    <div class="input-group">
                    <input type="text" class="form-control text-indigo-900" placeholder="Promo Code">
                    <button type="submit" class="btn bg-indigo-600 text-indigo-100">Tukarkan</button>
                    </div>
                </form>
                </div>
                <div class="col-md-7 col-lg-8 text-indigo-900">
                <h4 class="mb-3 fw-bold">Billing Address</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback text-capitalize">
                        Valid first name is required.
                        </div>
                    </div>
        
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback text-capitalize">
                        Valid last name is required.
                        </div>
                    </div>
        
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                        <div class="invalid-feedback text-capitalize">
                            Your username is required.
                        </div>
                        </div>
                    </div>
        
                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback text-capitalize">
                        Please enter a valid email address for shipping updates.
                        </div>
                    </div>
        
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback text-capitalize">
                        Please enter your shipping address.
                        </div>
                    </div>
        
                    <div class="col-12">
                        <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or Suite">
                    </div>
        
                    <div class="col-md-5">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" required>
                        <option value="">Choose...</option>
                        <option>Indonesia</option>
                        </select>
                        <div class="invalid-feedback text-capitalize">
                        Please select a valid country.
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" required>
                        <option value="">Choose...</option>
                        <option>Jawa Barat</option>
                        </select>
                        <div class="invalid-feedback text-capitalize">
                        Please provide a valid state.
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback text-capitalize">
                        Zip code required.
                        </div>
                    </div>
                    </div>
        
                    <hr class="my-4">
        
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label text-capitalize" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
        
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label text-capitalize" for="save-info">Save this information for next time</label>
                    </div>
        
                    <hr class="my-4">
        
                    <h4 class="mb-3">Payment</h4>
        
                    <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Credit Card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Debit Card</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                    </div>
        
                    <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Name on Card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted text-capitalize">Full name as displayed on card</small>
                        <div class="invalid-feedback text-capitalize">
                        Name on card is required
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Credit Card Number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback text-capitalize">
                        Credit card number is required
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback text-capitalize">
                        Expiration date required
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback text-capitalize">
                        Security code required
                        </div>
                    </div>
                    </div>
        
                    <hr class="my-4">
        
                    <button class="bg-indigo-600 border-0 text-indigo-100 p-3 fw-medium shadow-sm rounded-xl text-center w-100 mb-3" type="submit">Checkout</button>
                </form>
                </div>
            </div>
        </main>
    </div>
@endsection