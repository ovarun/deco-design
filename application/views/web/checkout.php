
<main>
 <div class="slider-area ">
    <div class="slider-active">
       <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
          <div class="container">
             <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-8">
                   <div class="hero__caption hero__caption2">
                      <h1 data-animation="fadeInUp" data-delay=".4s">Checkout</h1>
                      <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">checkout</a></li>
                         </ol>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <section class="checkout_area section-padding40">
    <div class="container">  
       <div class="billing_details">
          <div class="row">
             <div class="col-lg-8">
                <h3>Billing Details</h3>
                <form class="row contact_form" action="#" method="post" novalidate>
                   <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="first" name="name" />
                      <span class="placeholder" data-placeholder="First name"></span>
                   </div>
                   <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="last" name="name" />
                      <span class="placeholder" data-placeholder="Last name"></span>
                   </div>
                   <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
                   </div>
                   <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="number" name="number" />
                      <span class="placeholder" data-placeholder="Phone number"></span>
                   </div>
                   <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="email" name="compemailany" />
                      <span class="placeholder" data-placeholder="Email Address"></span>
                   </div>
                   <div class="col-md-12 form-group p_star">
                      <select class="country_select">
                         <option value="1">Country</option>
                         <option value="2">Country</option>
                         <option value="4">Country</option>
                      </select>
                   </div>
                   <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="add1" name="add1" />
                      <span class="placeholder" data-placeholder="Address line 01"></span>
                   </div>
                   <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="add2" name="add2" />
                      <span class="placeholder" data-placeholder="Address line 02"></span>
                   </div>
                   <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="city" name="city" />
                      <span class="placeholder" data-placeholder="Town/City"></span>
                   </div>
                   <div class="col-md-12 form-group p_star">
                      <select class="country_select">
                         <option value="1">District</option>
                         <option value="2">District</option>
                         <option value="4">District</option>
                      </select>
                   </div>
                   <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                   </div>
                   <div class="col-md-12 form-group">
                      <div class="checkout-cap">
                         <input type="checkbox" id="fruit1" name="keep-log">
                         <label for="fruit1">Create an account?</label>
                      </div>
                   </div>
                   <div class="col-md-12 form-group">
                      <div class="creat_account">
                         <h3>Shipping Details</h3>
                         <div class="checkout-cap">
                            <input type="checkbox" id="f-option3" name="selector" />
                            <label for="f-option3">Ship to a different address?</label>
                         </div>
                      </div>
                      <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                   </div>
                </form>
             </div>
             <div class="col-lg-4">
                <div class="order_box">
                   <h2>Your Order</h2>
                   <ul class="list">
                      <li>
                         <a href="#">Product<span>Total</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">Fresh Blackberry
                         <span class="middle">x 02</span>
                         <span class="last">$720.00</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">Fresh Tomatoes
                         <span class="middle">x 02</span>
                         <span class="last">$720.00</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">Fresh Brocoli
                         <span class="middle">x 02</span>
                         <span class="last">$720.00</span>
                         </a>
                      </li>
                   </ul>
                   <ul class="list list_2">
                      <li>
                         <a href="#">Subtotal <span>$2160.00</span></a>
                      </li>
                      <li>
                         <a href="#">Shipping
                         <span>Flat rate: $50.00</span>
                         </a>
                      </li>
                      <li>
                         <a href="#">Total<span>$2210.00</span>
                         </a>
                      </li>
                   </ul>  
                   <div class="creat_account checkout-cap">
                      <label for="f-option8">By continuying you’ve read and accept the <a href="#">terms & conditions*</a> </label>
                   </div>
                   <a class="btn w-100" href="#">Proceed to Paypal</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section> 
 <?php $this->load->view('web/footer_features'); ?>
</main>