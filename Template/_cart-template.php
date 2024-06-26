        <!-- Shopping cart section  -->
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                <!--  shopping cart items   -->
                    <div class="row">
                        <div class="col-sm-9">
                            <!-- cart item -->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <a href="#" style="display: inline-block; padding: 10px;">
                                            <img src="./assets/products/c1.png" alt="product1" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                                        </a> 
                                    </div>
                                    <div class="col-sm-8" style="padding: 10px;">
                                        <h5 class="font-baloo font-size-20">Almond Chocolate</h5>
                                        <small>by Yumeiro</small>
                                        <!-- product rating -->
                                        <div class="d-flex">
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                              </div>
                                        </div>
                                        <!--  !product rating-->

                                        <!-- product qty -->
                                            <div class="qty d-flex pt-2">
                                                <div class="d-flex font-rale w-25">
                                                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                    <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                    <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                </div>
                                                <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                            </div>
                                        <!-- !product qty -->

                                    </div>

                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 text-danger font-baloo">
                                            <span class="product_price">Rs. 400</span>
                                        </div>
                                    </div>
                                </div>
                            <!-- !cart item -->
                            <!-- cart item -->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <a href="#" style="display: inline-block; padding: 10px;">
                                        <img src="./assets/products/c2.png" alt="product1" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                                    </a> 
                                </div>
                                <div class="col-sm-8" style="padding: 10px;">
                                    <h5 class="font-baloo font-size-20">Raspberry Candy</h5>
                                    <small>by Yumeiro</small>
                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                          </div>
                                    </div>
                                    <!--  !product rating-->

                                    <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-rale w-25">
                                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                            <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                        </div>
                                    <!-- !product qty -->

                                </div>

                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-baloo">
                                        <span class="product_price">Rs. 400</span>
                                    </div>
                                </div>
                            </div>
                        <!-- !cart item -->
                        </div>
                        <!-- subtotal section-->
                        <div class="col-sm-3">
                            <div class="sub-total border text-center mt-2">
                                <div class="border-top py-4">
                                    <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger"> <span class="text-danger" id="deal-price">Rs. 800</span> </span> </h5>
                                    <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                                </div>
                            </div>
                        </div>
                        <!-- !subtotal section-->
                    </div>
                <!--  !shopping cart items   -->
            </div>
        </section>
    <!-- !Shopping cart section  -->