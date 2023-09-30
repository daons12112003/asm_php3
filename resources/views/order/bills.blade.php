@extends('user.client')
@section('content')
<section class="main-content-section">
    <div class="container">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="index.html">HOMe</a>
            <span><i class="fa fa-caret-right	"></i></span>
            <span>Addresses</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->
        
        <h2 class="page-title">Addresses</h2>

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

        <div class="row">
            <!-- ADDRESS AREA START -->
            <div class="col-lg-5 col-md-6">
                <div class="form-group primary-form-group p-info-group deli-address-group">
                    <label>Choose a delivery address:</label>
                    <div class="birth-day delivery-address">
                        <select id="deli-address" name="deliveryaddress">
                            <option value="">Your Office Address</option>
                            <option value="">Your Office Address</option>
                            <option value="">Other Address</option>
                        </select>
                    </div>
                </div>
                <div class="form-group primary-form-group p-info-group chose-address">
                    <label class="cheker">
                        <input type="checkbox" name="checkbox">
                        <span></span>
                    </label>
                    <a href="#">Use the delivery address as the billing address.</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="first_item primari-box">
                    <!-- DELIVERY ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Your delivery address
                            </h3>
                        </li>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Tên người nhận</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Địa chỉ giao hàng</label>
                                <input type="text" name="diachi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Số điện thoại</label>
                                <input type="text" name="sdt" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tên người nhận</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3 update-button">
                               <button type="submit" class="btn btn-danger">SubMit<i class="fa fa-chevron-right"></i></button>
                            </div>
                        </form>
                      
                    </ul>
                    <!-- DELIVERY ADDRESS END -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second_item primari-box">
                    <!-- BILLING ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Your Order
                            </h3>
                        </li>
                        @foreach($cartItems as $item)
                       <li>
                        <label for="" class="form-label">Tên sản phẩm :</label>
                        <input type="text" class="form-control" value="{{$item->name}}">
                         </li>
                         <li>
                            <label for="" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" value="{{$item->price * $item->quantity}}VNĐ">
                             </li>
                        
                        @endforeach
                        <div class="mb-3">
                            <label for="" class="form-label">Ship</label>
                            <input type="text" value="15.000 VNĐ" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tổng tiền</label>
                            <input type="text" name="name" value="{{$sumCart + 15000}} VNĐ" class="form-control">
                        </div>

                    </ul>
                    <!-- BILLING ADDRESS END -->
                </div>
            </div>
        </div>

        <div class="add-new-address">
            <a href="my-cart-step-2-info.html" class="new-address-link">Add a new address<i
                    class="fa fa-chevron-right"></i></a>
            <div class="form-group p-info-group type-address-group">
                <label>If you would like to add a comment about your order, please write it in the field
                    below.</label>
                <textarea class="form-control input-feild " name="addcomment"></textarea>
            </div>
        </div>
        <!-- ADDRESS AREA START -->

        <!-- RETURNE-CONTINUE-SHOP START -->
        <div class="returne-continue-shop ship-address">
            <a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue
                shopping</a>
            <a href="checkout-shipping.html" class="procedtocheckout">Proceed to checkout<i
                    class="fa fa-chevron-right"></i></a>
        </div>
        <!-- RETURNE-CONTINUE-SHOP END -->

    </div>
</section>
@endsection