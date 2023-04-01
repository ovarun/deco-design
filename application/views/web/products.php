<main>
   <div class="slider-area ">
      <div class="slider-active slick-initialized slick-slider">
         <div class="slick-list draggable">
            <div class="slick-track">
               <div class="single-slider hero-overly2 slider-bg2 slider-height2 d-flex align-items-center slick-slide slick-current slick-active" style="width: 100%; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0" data-slick-index="0" aria-hidden="false">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                           <div class="hero__caption hero__caption2">
                              <h1 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;">Products</h1>
                              <nav aria-label="breadcrumb">
                                 <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>" tabindex="0">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" tabindex="0">Products</a></li>
                                 </ol>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="category-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 col-lg-8 col-md-10">
               <div class="section-tittle mb-50">
                  <h2>Shop with us</h2>
                  <p>Browse from latest items</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 ">
               <div class="row">
                  <div class="col-12">
                     <div class="small-tittle mb-45">
                        <div class="ion">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                              <path fill-rule="evenodd" fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"></path>
                           </svg>
                        </div>
                        <h4>Filter Product</h4>
                     </div>
                  </div>
               </div>
               <div class="category-listing mb-50">
                  <div class="categories-wrapper">
                     <form class="row"> 
                           <div class="col-12">
                              <div class="select-categories">
                                 <select name="type" class="filtterSelect" onchange="this.form.submit()">
                                    <option value="">Type</option>
                                    <option value="<?= MD5('Sofa') ?>" selected>Sofa</option>
                                    <option value="<?= MD5('Table') ?>">Table</option>
                                    <option value="<?= MD5('Chair') ?>">Chair</option>
                                    <option value="<?= MD5('Bead') ?>">Bead</option>
                                    <option value="<?= MD5('Lightning') ?>">Lightning</option>
                                    <option value="<?= MD5('Decore') ?>">Decore</option>
                                 </select> 
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="select-categories">
                                 <select name="size" class="filtterSelect" onchange="this.form.submit()">
                                    <option value="">Size</option>
                                    <option value="<?= MD5('2.2') ?>" selected>2.2ft</option>
                                    <option value="<?= MD5('5.5') ?>">5.5ft</option>
                                    <option value="<?= MD5('8.2') ?>">8.2ft</option>
                                    <option value="<?= MD5('10.2') ?>">10.2ft</option>
                                 </select> 
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="select-categories">
                                 <select name="color" class="filtterSelect" onchange="this.form.submit()">
                                    <option value="">Color</option>
                                    <option value="<?= MD5('White') ?>" selected>White</option>
                                    <option value="<?= MD5('Green') ?>">Green</option>
                                    <option value="<?= MD5('Blue') ?>">Blue</option>
                                    <option value="<?= MD5('Sky_Blue') ?>">Sky Blue</option>
                                    <option value="<?= MD5('Gray') ?>">Gray</option>
                                 </select> 
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="select-categories">
                                 <select name="range" class="filtterSelect" onchange="this.form.submit()">
                                    <option value="">Price range</option>
                                    <option value="<?= MD5('10_20') ?>" selected>$10 to $20</option>
                                    <option value="<?= MD5('20_30') ?>">$20 to $30</option>
                                    <option value="<?= MD5('50_80') ?>">$50 to $80</option>
                                    <option value="<?= MD5('100_120') ?>">$100 to $120</option>
                                    <option value="<?= MD5('200_300') ?>">$200 to $300</option>
                                    <option value="<?= MD5('500_600') ?>">$500 to $600</option>
                                 </select> 
                              </div>
                           </div> 
                     </form>
                  </div> 
                  <div class="select-checkbox mt-30 mb-30">
                     <div class="small-tittle">
                        <h4>Latest Product</h4>
                     </div>
                     <label class="container">Any
                     <input type="checkbox">
                     <span class="checkmark"></span>
                     </label>
                     <label class="container">Today
                     <input type="checkbox" checked="">
                     <span class="checkmark"></span>
                     </label>
                     <label class="container">Last 2 days
                     <input type="checkbox">
                     <span class="checkmark"></span>
                     </label>
                     <label class="container">Last 5 days
                     <input type="checkbox">
                     <span class="checkmark"></span>
                     </label>
                     <label class="container">Last 10 days
                     <input type="checkbox">
                     <span class="checkmark"></span>
                     </label>
                     <label class="container">Last 15 days
                     <input type="checkbox">
                     <span class="checkmark"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 ">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="count-job mb-35">
                        <span>39, 782 Product found</span>
                        <div class="select-cat">
                           <span>Sort by</span>
                           <select name="select" style="display: none;">
                              <option value="">Sofa</option>
                              <option value="">Table</option>
                              <option value="">Chair</option>
                              <option value="">Bead</option>
                              <option value="">Lightning</option>
                              <option value="">Decore</option>
                           </select>
                           <div class="nice-select" tabindex="0">
                              <span class="current">Table</span>
                              <ul class="list">
                                 <li data-value="" class="option focus">Sofa</li>
                                 <li data-value="" class="option selected">Table</li>
                                 <li data-value="" class="option">Chair</li>
                                 <li data-value="" class="option">Bead</li>
                                 <li data-value="" class="option">Lightning</li>
                                 <li data-value="" class="option">Decore</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="new-arrival new-arrival3">
                  <div class="row">
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular1.png">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="<?= base_url('Web/productsDetailed'); ?>">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular5.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular6.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular7.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular8.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular9.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular2.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular3.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                           <div class="popular-img">
                              <img src="<?= base_url(); ?>public/assets/img/gallery/xpopular4.png" alt="">
                           </div>
                           <div class="popular-caption">
                              <h3><a href="#">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                              <span>$367</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="room-btn mt-20">
                        <a href="catagori.html" class="border-btn">Browse More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> 
   <?php $this->load->view('web/footer_features'); ?>
</main>