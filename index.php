<?php
    include "header.php"
?>

    <main>
        <section class="bnner-section">
            <div class="bnner-slider-area">
                <div style="background-image: url(./assets/images/bnner-img-1.png);" class="bnner-slider-layer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="">
                                    <h2 class="bnner-sb-title">Welcome to</h2>
                                    <h1 class="bnner-title">Camaro Parts Guru!</h1>
                                    <p class="bnner-para">The most comprehensive parts store, information database and social media platform for a worldwide audience of Camaro enthusiasts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-image: url(./assets/images/bnner-img-1.png);" class="bnner-slider-layer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="">
                                    <h2 class="bnner-sb-title">Welcome to</h2>
                                    <h1 class="bnner-title">Camaro Parts Guru!</h1>
                                    <p class="bnner-para">The most comprehensive parts store, information database and social media platform for a worldwide audience of Camaro enthusiasts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bnner-slider-btn-area">
                <button class="bnner-slider-btn pre" type="button">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button class="bnner-slider-btn next" type="button">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </section>
    
        <section class="filter-pro-section position-relative">
            <button class="pro-filter-btn d-lg-none d-flex" type="button">
                <span class=""><i class="fa-solid fa-filter"></i></span>
                <span class="">filter</span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="pro-siderbar-area">
                            <button type="button" class="filter-cls-btn d-lg-none d-flex">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <div class="pro-filter-list">
                                <h2 class="pro-filter-title">
                                    Search
                                </h2>
                                <div class="filter-search-area">
                                    <div class="d-flex justify-content-start align-items-center w-75">
                                        <img class="img-fluid" src="./assets/images/search-vector-img.png" alt="">
                                        <input class="filter-search-input" placeholder="Search" type="text" name="" id="">
                                    </div>
                                    <div class="w-25 text-end">
                                        <i class="fa-solid fa-magnifying-glass text-white fs-3"></i>
                                    </div>
                                </div>
                            </div>
    
                            <div class="pro-filter-list">
                                <h2 class="pro-filter-title">
                                    year
                                </h2>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="filter_year" id="filter-year-1">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="filter-year-1">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">1967</span>
                                    </label>
                                </div>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="filter_year" id="filter-year-2">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="filter-year-2">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">1968</span>
                                    </label>
                                </div>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="filter_year" id="filter-year-3">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="filter-year-3">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">1969</span>
                                    </label>
                                </div>
                            </div>
    
                            <div class="pro-filter-list">
                                <h2 class="pro-filter-title">
                                    PART TYPE
                                </h2>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="part_type" id="part-type-1">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="part-type-1">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">Restoration</span>
                                    </label>
                                </div>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="part_type" id="part-type-2">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="part-type-2">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">Performance</span>
                                    </label>
                                </div>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="part_type" id="part-type-3">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="part-type-3">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">New-Old Stock (NOS)</span>
                                    </label>
                                </div>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="part_type" id="part-type-4">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="part-type-4">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">Used</span>
                                    </label>
                                </div>
                            </div>
    
                            <div class="pro-filter-list">
                                <h2 class="pro-filter-title">
                                    PARTS DISPLAYED
                                </h2>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="parts_displayed" id="parts-displayed-1">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="parts-displayed-1">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">All Parts</span>
                                    </label>
                                </div>
                                <div class="pro-filter-area">
                                    <input class="filter-checkbox" type="checkbox" name="parts_displayed" id="parts-displayed-2">
                                    <label class="filter-label d-flex justify-content-start align-items-center gap-4 " for="parts-displayed-2">
                                        <span class="check-square">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span class="filter-text">Available Parts Only </span>
                                    </label>
                                </div>
                            </div>
    
                            <div class="pro-filter-list">
                                <h2 class="pro-filter-title">
                                    categories
                                </h2>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">BODY COMPONENTS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">BODY SHELLS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">BRAKES</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">CHASSIS & SUSPENSION</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">CONVERTIBLE COMPONENTS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">COOLING SYSTEM</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">DRIVESHAFTS & U-JOINTS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">ELECTRICAL SYSTEM</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">ENGINES</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">ENGINE COMPARTMENT</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">ENTERTAINMENT SYSTEM</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">EXHAUST SYSTEM</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">EXTERIOR</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">FUEL SYSTEM</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">HVAC SYSTEM</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">INTERIOR</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">LIGHTING</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">LITERATURE</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">MARCATIONS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">OPTIONS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">PAINTS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">RALLY SPORT PACKAGE (Z22)</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">REAR ENDS & DIFFERENTIALS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">STEERING</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">TRANSMISSIONS - AUTOMATIC</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">TRANSMISSIONS - MANUAL</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">TRUNK</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">WHEELS & TIRES</a>
                                </div>
                                <div class="pro-filter-area mt-5">
                                    <a href="#" class="filter-text text-decoration-none ">ALL SALE PRODUCTS</a>
                                </div>
                                <div class="pro-filter-area">
                                    <a href="#" class="filter-text text-decoration-none ">ALL NEW PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-12 col-lg-9">
                        <h1 class="sec-title">SALE PRODUCTS</h1>
    
                        <div class="pro-flex-area mb-60px">
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                        </div>
    
                        <h1 class="sec-title">NEW PRODUCTS</h1>
    
                        <div class="pro-flex-area mb-60px">
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                            <div class="product-area position-relative">
                                <div class="pro-img-area">
                                    <img class="img-fluid pro-img" src="./assets/images/pro-img.png" alt="">
                                </div>
                                <div class="pro-text-area">
                                    <h3 class="pro-name">Lorem Ipsum is simply dummy text of the printing</h3>
                                    <span class="pro-part-no">Part no : XXX-XXXX</span>
                                    <span class="pro-price">$199.99</span>
                                    <span class="pro-save-price">Save $9.99</span>
                                    <a class="pro-cart-link" href="#">
                                        ADD TO CART
                                    </a>
                                </div>
                                <span class="pro-tag">Sale Product</span>
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="card-pro-area">
                    <div class="row justify-content-center">
    
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="pro-card-box">
                                <div class="pro-card-top">
                                    <h2 class="pro-card-title">CAMAROPEDIA</h2>
                                </div>
                                <div class="pro-card-bottom position-relative">
                                    <img class="img-fluid pro-card-img" src="./assets/images/pro-card-img-1.png" alt="">
                                    <p class="pro-card-para">A Camaro Knowledge Database</p>
                                </div>
                            </div>
                        </div>  
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="pro-card-box">
                                <div class="pro-card-top">
                                    <h2 class="pro-card-title">CAMARO MATRIX</h2>
                                </div>
                                <div class="pro-card-bottom position-relative">
                                    <img class="img-fluid pro-card-img" src="./assets/images/pro-card-img-2.png" alt="">
                                    <p class="pro-card-para">The Ultimate Camaro Forum</p>
                                </div>
                            </div>
                        </div>  
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="pro-card-box">
                                <div class="pro-card-top">
                                    <h2 class="pro-card-title">CAMARO NATION</h2>
                                </div>
                                <div class="pro-card-bottom position-relative">
                                    <img class="img-fluid pro-card-img" src="./assets/images/pro-card-img-3.png" alt="">
                                    <p class="pro-card-para">A Camaro Enthusiast Lounge</p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
    
        <section class="who-bkpp-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title-2">who BKPP is?</h1>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-1.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Who We Are</h3>
                            <p class="who-bkpp-para">We are the largest 1st Gen Camaro restoration parts supplier, offering more parts by more manufactures than any other retailer, including the most genuine GM parts. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-2.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Details Matter</h3>
                            <p class="who-bkpp-para">We insure you buy the right part by including GM part numbers, Assembly Instruction Manual page numbers and other detailed part data.  </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-3.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Affordability is Key</h3>
                            <p class="who-bkpp-para">Our low-price and satisfaction guarantee ensures that you get your project done within budget precisely as you want it done. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-4.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Intuitive Part Organization</h3>
                            <p class="who-bkpp-para">Our parts are displayed in an intuitive way that provides you quicker access to what you need to get your project on the road ASAP. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-5.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Dream List Service</h3>
                            <p class="who-bkpp-para">The parts you need are automatically sent to you in the order you need them.  Imagine, having your parts waiting on you. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-6.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Sell Your Unneeded Parts</h3>
                            <p class="who-bkpp-para">Have a used or NOS part you don’t need?  We can help you turn that part into cash to buy the parts you do need for a small percentage. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-7.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Knowledge is Power</h3>
                            <p class="who-bkpp-para">We know our clients know Camaros.  We encourage you to share that knowledge and experience with your fellow enthusiasts. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="who-bkpp-box">
                            <div class="who-bkpp-img-area">
                                <img class="img-fluid who-bkpp-img" src="./assets/images/who-bkpp-img-8.png" alt="">
                            </div>
                            <h3 class="who-bkpp-title">Completeness is Key</h3>
                            <p class="who-bkpp-para">Want to research your Camaro?  Our parts data base includes parts not are not available from the aftermarket, allowing you to know what you need and seek get them on the used market. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="filter-pro-section">
            
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="px-5">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a class="text-decoration-none" href="#">
                                        <div class="event-card">
                                            <div class="">
                                                <img class="img-fluid event-card-img" src="./assets/images/event-card-img-1.png" alt="">
                                            </div>
                                            <div class="">
                                                <h3 class="who-bkpp-title">Press Releases</h3>
                                                <p class="who-bkpp-para ">Want to find out what is going on at the Black Knight associated companies? Look here for the latest.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a class="text-decoration-none" href="#">
                                        <div class="event-card">
                                            <div class="">
                                                <img class="img-fluid event-card-img" src="./assets/images/event-card-img-2.png" alt="">
                                            </div>
                                            <div class="">
                                                <h3 class="who-bkpp-title ">Articles about Black Knight </h3>
                                                <p class="who-bkpp-para ">Interested in what the mass media says about Black Knight?  Here is where to look to find out.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a class="text-decoration-none" href="#">
                                        <div class="event-card">
                                            <div class="">
                                                <img class="img-fluid event-card-img" src="./assets/images/event-card-img-3.png" alt="">
                                            </div>
                                            <div class="">
                                                <h3 class="who-bkpp-title ">Articles about Black Knight </h3>
                                                <p class="who-bkpp-para ">Interested in what the mass media says about Black Knight?  Here is where to look to find out.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a class="text-decoration-none" href="#">
                                        <div class="event-card">
                                            <div class="">
                                                <img class="img-fluid event-card-img" src="./assets/images/event-card-img-3.png" alt="">
                                            </div>
                                            <div class="">
                                                <h3 class="who-bkpp-title ">Articles about Black Knight </h3>
                                                <p class="who-bkpp-para ">Interested in what the mass media says about Black Knight?  Here is where to look to find out.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="social-icon-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="d-flex justify-content-center gap-2 gap-lg-5 gap-md-5 align-items-center px-0 px-lg-5 px-md-5">
                            <div class="logo-area">
                                <img class="img-fluid logo" src="./assets/images/logo.png" alt="">
                            </div>
                            <div class="heder-text-area">
                                <h1 class="header-title">
                                    Camaro Parts Guru
                                </h1>
                                <p class="header-para  text-uppercase">A Division of Black Knight Performance Parts, Inc.</p>
                            </div>
                        </div>
                        <ul class="social-icons-list">
                            <li class="">
                                <a class="social-icon" href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="">
                                <a class="social-icon" href="#">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li class="">
                                <a class="social-icon" href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

   
<?php
    include "footer.php"
?>