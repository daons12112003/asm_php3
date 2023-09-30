@extends('user.client')
@section('content')
<section class="main-content-section">
    <div class="container">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="index.html">HOMe</a>
            <span><i class="fa fa-caret-right	"></i></span>
            <span>Your shopping cart</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->

        <!-- SHOPPING-CART SUMMARY START -->
        <h2 class="page-title">Shopping-cart summary <span class="shop-pro-item">Your shopping cart
                contains: 2 products</span></h2>
        <!-- SHOPPING-CART SUMMARY END -->

        <!-- SHOPING-CART-MENU START -->
        <div class="shoping-cart-menu">
            <ul class="step">
                <li class="step-current first">
                    <span>01. Summary</span>
                </li>
                <li class="step-todo second">
                    <span>02.  Address</span>
                </li>
                <li class="step-todo four">
                    <span>03. Shipping</span>
                </li>
                <li class="step-todo last" id="step_end">
                    <span>04. Payment</span>
                </li>
            </ul>
        </div>
        <!-- SHOPING-CART-MENU END -->
        
        <!-- CART TABLE_BLOCK START -->
        <div class="table-content table-responsive">
            <!-- TABLE START -->
            <table class="table table-bordered" id="cart-summary">
                <!-- TABLE HEADER START -->
                <thead>
                    <tr>
                        <th class="cart-product">Product</th>
                        <th class="cart-description">Name</th>
                       
                        <th class="cart-unit text-right">Unit price</th>
                        <th class="cart_quantity text-center">Qty</th>
                        <th class="cart-delete">&nbsp;</th>
                        <th class="cart-total text-right">Total</th>
                    </tr>
                </thead>
                <!-- TABLE HEADER END -->
                <!-- TABLE BODY START -->
                <tbody>
                    <!-- SINGLE CART_ITEM START -->
                    @if (count($cartItems) > 0)
                    @foreach ($cartItems as $cartItem)
                    <tr>
                        <td class="cart-product">
                            <a href="#"><img  src="{{ $cartItem->image_url?''.Storage::url($cartItem->image_url):''}}"></a>
                        </td>
                        <td class="cart-description">
                            <p class="product-name"><a href="#">{{$cartItem->name}}</a></p>
                           
                        </td>
                        <td class="cart-unit">
                            <ul class="price text-right">
                                <li class="price">{{$cartItem->price}} VNĐ</li>
                            </ul>
                        </td>
                        <td class="cart_quantity text-center">
                            <div class="cart-plus">
                                <form action="{{ route('cart_update', ['cartItem' => $cartItem->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <input class="cart-plus-minus mb-2" type="number" name="quantity" value="{{$cartItem->quantity}}" min="1">
                                <button class="btn btn-success" type="submit">Update</button>
                            </form>
                            </div>
                        </td>
                      

                        <td class="cart-delete text-center">
                            <span>
                                <a href="{{route('delete', ['id' => $cartItem->id])}}" class="cart_quantity_delete" title="Delete"><i
                                        class="fa fa-trash-o"></i></a>
                            </span>
                        </td>
                        <td class="cart-total">
                            <span class="price">{{$cartItem->quantity*$cartItem->price}}</span>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>Giỏ hàng trống.</p>
                    @endif
                    <!-- SINGLE CART_ITEM END -->
                  
                </tbody>
                <!-- TABLE BODY END -->
                <!-- TABLE FOOTER START -->
                <tfoot>
                    <tr class="cart-total-price">
                        <td class="cart_voucher" colspan="3" rowspan="4"></td>
                        <td class="text-right" colspan="3">Total products (tax excl.)</td>
                        <td id="total_product" class="price" colspan="1">{{$sumCart}} VNĐ</td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="3">Total shipping</td>
                        <td id="total_shipping" class="price" colspan="1">15.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
                        <td class="price" colspan="1">$0.00</td>
                    </tr>
                    <tr>
                        <td class="total-price-container text-right" colspan="3">
                            <span>Total</span>
                        </td>
                        <td id="total-price-container" class="price" colspan="1">
                            <span id="total-price">{{$sumCart + 15.000}} VNĐ</span>
                        </td>
                    </tr>
                </tfoot>
                <!-- TABLE FOOTER END -->
            </table>
            <!-- TABLE END -->
        </div>
        <!-- CART TABLE_BLOCK END -->

        <div class="row">
            <div class="col-lg-6">
                <div class="first_item primari-box mycartaddress-info">
                    <!-- SINGLE ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Delivery address (Bstore Office)
                            </h3>
                        </li>
                        <li><span class="address_name">Bstore</span></li>
                        <li><span class="address_address1">Your address goes here.</span></li>
                        <li><span class="address_phone">0123456789</span></li>
                    </ul>
                    <!-- SINGLE ADDRESS END -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second_item primari-box mycartaddress-info">
                    <!-- SINGLE ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Invoice address (Bstore Home)
                            </h3>
                        </li>
                        <li><span class="address_name">Bstore</span></li>
                        <li><span class="address_address1">Your address goes here.</span></li>
                        <li><span class="address_phone">0123456789</span></li>
                    </ul>
                    <!-- SINGLE ADDRESS END -->
                </div>
            </div>
        </div>

        <!-- RETURNE-CONTINUE-SHOP START -->
        <div class="returne-continue-shop">
            <a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue
                shopping</a>
            <a href="/bill" class="procedtocheckout">Proceed to checkout<i
                    class="fa fa-chevron-right"></i></a>
        </div>
        <!-- RETURNE-CONTINUE-SHOP END -->
    </div>
</section>
@endsection