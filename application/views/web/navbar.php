<header>
   <div class="header-area">
      <div class="main-header header-sticky">
         <div class="container-fluid">
            <div class="row menu-wrapper align-items-center justify-content-between">
               <div class="header-left d-flex align-items-center">
                  <div class="logo">
                     <a href="<?= base_url(); ?>"><img src="data:image/webp;base64,UklGRiYBAABXRUJQVlA4TBkBAAAvv0AnAJdApG0z/46Lzq5h/oUEyf/DGJ3/3JOMZAJHAABBst22zVNjQShIxP1vG1KSS5CeRPR/Auzf/79w89w/SOx5/wNLpX+oiGhjFyneEfqHAkhDIXyAiZ3/atcMH3lBRKRctPpI7HzuCSSXCYRGAHHZBoiZvQC7yywABIBoPqsL7aU6zapMwCR2cwfcdLN79M19/gFMpa1nioi2ioi6RujO27EAY20EEB8x7meIbhKzrQyQT7E6yixDODdWT+kFCyRPZYhn1gHUR0lVBdAzusJcXdTNdsoiZD8ltQvqAOohsQBiV9gK8+KiDdgvschrB1mGcE0dvFQHKJfY6iUrMNZLLHrJAqRr6uCdh/8321P/EPn3/99TAQA=" alt=""></a>
                  </div>
                  <div class="logo2">
                     <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>public/assets/img/logo/xlogo2.png" alt=""></a>
                  </div>
                  <div class="main-menu  d-none d-lg-block">
                     <nav>
                        <ul id="navigation">
                           <li><a href="<?= base_url(); ?>">Home</a></li>
                           <li><a href="<?= base_url(); ?>Web/about">About Us</a></li>
                           <li><a href="<?= base_url(); ?>Web/product">Product</a></li>
                           <li>
                              <a href="#">Page</a>
                              <ul class="submenu">
                                 <li><a href="<?= base_url(); ?>Web/login">Login</a></li>
                                 <li><a href="<?= base_url(); ?>Web/card">Card</a></li>
                                 <li><a href="<?= base_url(); ?>Web/categories">Categories</a></li>
                                 <li><a href="<?= base_url(); ?>Web/checkout">Checkout</a></li>
                                 <li><a href="<?= base_url(); ?>Web/product_details">Product Details</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="<?= base_url(); ?>Web/blog">Blog</a>
                              <ul class="submenu">
                                 <li><a href="<?= base_url(); ?>Web/blog">Blog</a></li>
                                 <li><a href="<?= base_url(); ?>Web/blog_details">Blog Details</a></li>
                                 <li><a href="<?= base_url(); ?>Web/elements">Elements</a></li>
                              </ul>
                           </li>
                           <li><a href="<?= base_url(); ?>Web/contact">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="header-right1 d-flex align-items-center">
                  <div class="search">
                     <ul class="d-flex align-items-center">
                        <li>
                           <form action="#" class="form-box f-right ">
                              <input type="text" name="Search" placeholder="Search products">
                              <div class="search-icon">
                                 <i class="ti-search"></i>
                              </div>
                           </form>
                        </li>
                        <li>
                           <a href="login" class="account-btn" target="_blank">My Account</a>
                        </li>
                        <li>
                           <div class="card-stor">
                              <img src="<?= base_url(); ?>public/assets/img/icon/card.svg" alt="">
                              <span>0</span>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>