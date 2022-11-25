<!DOCTYPE html>
<html lang="en">
    
    @include('layouts.head')

    <body>
        <!-- Top bar Start -->
        @include('components.top_bar')
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        @include('components.nav_bar')
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        @include('components.bottom_bar')
        <!-- Bottom Bar End -->
        
        <!-- Breadcrumb Start -->
        @include('components.breadcrumb')
        <!-- Breadcrumb End -->
        
        <!-- Wishlist Start -->
        <div class="wishlist-page">
            <div class="container-fluid">
                <div class="wishlist-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Add to Cart</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="/assets/img/product-6.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button class="btn-cart">Add to Cart</button></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="/assets/img/product-7.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button class="btn-cart">Add to Cart</button></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="/assets/img/product-8.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button class="btn-cart">Add to Cart</button></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="/assets/img/product-9.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button class="btn-cart">Add to Cart</button></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="/assets/img/product-10.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button class="btn-cart">Add to Cart</button></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist End -->
        
        <!-- Footer Start -->
        @include('components.footer')
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        @include('components.footer_bottom')
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries and Template Javascript -->
        @include('layouts.foot')
        
    </body>
</html>
