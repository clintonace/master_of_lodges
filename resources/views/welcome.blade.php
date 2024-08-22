@extends('layouts.app')

@section('content')

 <!-- .site-header -->
    <div class="homepage-slider slider-variation-two flexslider slider-loader">
        <ul class="slides">
            <li>
                <div class="slide-overlay hidden-xs hidden-sm container">
                    <div class="slide-inner-container">
                        <div class="slide-header">
                            <h3 class="slide-entry-title entry-title">
                                <a href="property-single.html" rel="bookmark">Home in Merrick Way</a>
                            </h3>
                            <div class="price-and-status">
                                <span class="price">$540,000</span>
                                <a href="#">
                                    <span class="property-status-tag">For Sale</span>
                                </a>
                            </div>
                        </div>
                        <div class="meta-item-half hidden-md">
                            <div class="property-meta entry-meta clearfix ">
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-area">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Area</span>
                                        <span class="meta-item-value">4300<sub class="meta-item-unit">Sq Ft</sub></span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-bed">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Bedrooms</span>
                                        <span class="meta-item-value">3</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-bath">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Bathrooms</span>
                                        <span class="meta-item-value">3</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-garage">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Garages</span>
                                        <span class="meta-item-value">2</span>
                                    </div>
                                </div>
                                <div class="meta-item meta-property-type">
                                    <i class="meta-item-icon icon-ptype">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd"
                                                fill="#0DBAE8"
                                                d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Type</span>
                                        <span class="meta-item-value">Single Family Home</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .property-meta -->
                        </div>
                        <a class="btn-default btn-orange hidden-md" href="property-single.html">More Details<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <a href="property-single.html">
                    <img src="/landing/assets/images/slider/slide-2.jpg" alt="Home in Merrick Way">
                </a>
            </li>
            <li>
                <div class="slide-overlay hidden-xs hidden-sm container">
                    <div class="slide-inner-container">
                        <div class="slide-header">
                            <h3 class="slide-entry-title entry-title">
                                <a href="property-single.html" rel="bookmark">Villa on Grand Avenue</a>
                            </h3>
                            <div class="price-and-status">
                                <span class="price">$4,750 Monthly</span>
                                <a href="#">
                                    <span class="property-status-tag">For Rent</span>
                                </a>
                            </div>
                        </div>
                        <div class="meta-item-half hidden-md">
                            <div class="property-meta entry-meta clearfix ">
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-area">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Area</span>
                                        <span class="meta-item-value">9350<sub class="meta-item-unit">Sq Ft</sub></span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-bed">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Bedrooms</span>
                                        <span class="meta-item-value">4</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-bath">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Bathrooms</span>
                                        <span class="meta-item-value">4</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-garage">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Garages</span>
                                        <span class="meta-item-value">2</span>
                                    </div>
                                </div>
                                <div class="meta-item meta-property-type">
                                    <i class="meta-item-icon icon-ptype">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd"
                                                fill="#0DBAE8"
                                                d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Type</span>
                                        <span class="meta-item-value">Villa</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .property-meta -->
                        </div>
                        <a class="btn-default btn-orange hidden-md" href="property-single.html">More Details<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <a href="property-single.html">
                    <img src="/landing/assets/images/slider/slide-6.jpg" alt="Villa on Grand Avenue">
                </a>
            </li>
            <li>
                <div class="slide-overlay hidden-xs hidden-sm container">
                    <div class="slide-inner-container">
                        <div class="slide-header">
                            <h3 class="slide-entry-title entry-title">
                                <a href="property-single.html" rel="bookmark">Home in Coral Gables</a>
                            </h3>
                            <div class="price-and-status">
                                <span class="price">$850,000</span>
                                <a href="#">
                                    <span class="property-status-tag">For Sale</span>
                                </a>
                            </div>
                        </div>
                        <div class="meta-item-half hidden-md">
                            <div class="property-meta entry-meta clearfix ">
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-area">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Area</span>
                                        <span class="meta-item-value">3800<sub class="meta-item-unit">Sq Ft</sub></span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-bed">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Bedrooms</span>
                                        <span class="meta-item-value">4</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-bath">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Bathrooms</span>
                                        <span class="meta-item-value">4.5</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <i class="meta-item-icon icon-garage">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill="#0DBAE8"
                                                d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Garages</span>
                                        <span class="meta-item-value">2</span>
                                    </div>
                                </div>
                                <div class="meta-item meta-property-type">
                                    <i class="meta-item-icon icon-ptype">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30"
                                            height="30" viewBox="0 0 48 48">
                                            <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd"
                                                fill="#0DBAE8"
                                                d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z">
                                            </path>
                                        </svg>
                                    </i>
                                    <div class="meta-inner-wrapper">
                                        <span class="meta-item-label">Type</span>
                                        <span class="meta-item-value">Single Family Home</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .property-meta -->
                        </div>
                        <a class="btn-default btn-orange hidden-md" href="property-single.html">More Details<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <a href="property-single.html">
                    <img src="/landing/assets/images/slider/slide-1.jpg" alt="Home in Coral Gables">
                </a>
            </li>
        </ul>
    </div>
    <div id="content-wrapper" class="site-content-wrapper">
        <div id="content" class="site-content layout-wide">
            <main id="main" class="site-main">
                <section class="advance-search main-advance-search">
                    <div class="container">
                        <h3 class="search-title">Quick Search</h3>
                        <form class="advance-search-form" action="#" method="get">
                            <div class="option-bar property-location">
                                <select name="location" id="location" class="search-select">
                                    <option value="any">Location (Any)</option>
                                    <option value="miami">Miami</option>
                                    <option value="little-havana">- Little Havana</option>
                                    <option value="perrine">- Perrine</option>
                                    <option value="doral">- Doral</option>
                                </select>
                            </div>
                            <div class="option-bar property-type">
                                <select name="type" id="select-property-type" class="search-select">
                                    <option value="any" selected="selected">Property Type (Any)</option>
                                    <option value="commercial"> Commercial</option>
                                    <option value="office">- Office</option>
                                    <option value="shop">- Shop</option>
                                    <option value="residential"> Residential</option>
                                    <option value="apartment">- Apartment</option>
                                    <option value="apartment-building">- Apartment Building</option>
                                    <option value="condominium">- Condominium</option>
                                    <option value="single-family-home">- Single Family Home</option>
                                    <option value="villa">- Villa</option>
                                </select>
                            </div>
                            <div class="option-bar property-status">
                                <select name="status" id="select-status" class="search-select">
                                    <option value="any" selected="selected">Property Status (Any)</option>
                                    <option value="for-rent"> For Rent</option>
                                    <option value="for-sale"> For Sale</option>
                                </select>
                            </div>
                            <div class="option-bar property-keyword">
                                <input type="text" name="keyword" id="keyword-txt" value="" placeholder="Keyword">
                            </div>
                            <div class="option-bar property-id">
                                <input type="text" name="property-id" id="property-id-txt" value=""
                                    placeholder="Property ID">
                            </div>
                            <div class="option-bar property-bedrooms">
                                <select name="bedrooms" id="select-bedrooms" class="search-select">
                                    <option value="any" selected="selected">Min Beds (Any)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="option-bar property-bathrooms">
                                <select name="bathrooms" id="select-bathrooms" class="search-select">
                                    <option value="any" selected="selected">Min Baths (Any)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="option-bar property-min-price">
                                <select name="min-price" id="select-min-price" class="search-select">
                                    <option value="any" selected="selected">Min Price (Any)</option>
                                    <option value="1000">$1,000</option>
                                    <option value="5000">$5,000</option>
                                    <option value="10000">$10,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="400000">$400,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="600000">$600,000</option>
                                    <option value="700000">$700,000</option>
                                    <option value="800000">$800,000</option>
                                    <option value="900000">$900,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    <option value="1500000">$1,500,000</option>
                                    <option value="2000000">$2,000,000</option>
                                    <option value="2500000">$2,500,000</option>
                                    <option value="5000000">$5,000,000</option>
                                </select>
                            </div>
                            <div class="option-bar property-max-price">
                                <select name="max-price" id="select-max-price" class="search-select">
                                    <option value="any" selected="selected">Max Price (Any)</option>
                                    <option value="5000">$5,000</option>
                                    <option value="10000">$10,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="400000">$400,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="600000">$600,000</option>
                                    <option value="700000">$700,000</option>
                                    <option value="800000">$800,000</option>
                                    <option value="900000">$900,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    <option value="1500000">$1,500,000</option>
                                    <option value="2000000">$2,000,000</option>
                                    <option value="2500000">$2,500,000</option>
                                    <option value="5000000">$5,000,000</option>
                                    <option value="10000000">$10,000,000</option>
                                </select>
                            </div>
                            <div class="option-bar property-min-area">
                                <input type="text" name="min-area" id="min-area" pattern="[0-9]+" value=""
                                    placeholder="Min Area (sq ft)" title="Please only provide digits!">
                            </div>
                            <div class="option-bar property-max-area">
                                <input type="text" name="max-area" id="max-area" pattern="[0-9]+" value=""
                                    placeholder="Max Area (sq ft)" title="Please only provide digits!">
                            </div>
                            <div class="option-bar form-control-buttons">
                                <input type="submit" value="Search" class="form-submit-btn">
                            </div>
                            <div class="extra-search-fields">
                                <h5 class="title"><span class="text-wrapper">Looking for certain features</span></h5>
                                <ul class="features-checkboxes-wrapper list-unstyled clearfix">
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-2-stories" value="2-stories"><label
                                                for="feature-2-stories">2 Stories<small>(6)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-26-ceilings" value="26-ceilings"><label
                                                for="feature-26-ceilings">26' Ceilings<small>(1)</small></label></span>
                                    </li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-bike-path" value="bike-path"><label
                                                for="feature-bike-path">Bike Path<small>(1)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-central-cooling" value="central-cooling"><label
                                                for="feature-central-cooling">Central
                                                Cooling<small>(4)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-central-heating" value="central-heating"><label
                                                for="feature-central-heating">Central
                                                Heating<small>(3)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-dual-sinks" value="dual-sinks"><label
                                                for="feature-dual-sinks">Dual Sinks<small>(5)</small></label></span>
                                    </li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-electric-range" value="electric-range"><label
                                                for="feature-electric-range">Electric
                                                Range<small>(5)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-emergency-exit" value="emergency-exit"><label
                                                for="feature-emergency-exit">Emergency
                                                Exit<small>(2)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-fire-alarm" value="fire-alarm"><label
                                                for="feature-fire-alarm">Fire Alarm<small>(3)</small></label></span>
                                    </li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-fire-place" value="fire-place"><label
                                                for="feature-fire-place">Fire Place<small>(4)</small></label></span>
                                    </li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-home-theater" value="home-theater"><label
                                                for="feature-home-theater">Home Theater<small>(3)</small></label></span>
                                    </li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-hurricane-shutters" value="hurricane-shutters"><label
                                                for="feature-hurricane-shutters">Hurricane
                                                Shutters<small>(1)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-jog-path" value="jog-path"><label for="feature-jog-path">Jog
                                                Path<small>(1)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-laundry-room" value="laundry-room"><label
                                                for="feature-laundry-room">Laundry Room<small>(3)</small></label></span>
                                    </li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-lawn" value="lawn"><label
                                                for="feature-lawn">Lawn<small>(5)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-marble-floors" value="marble-floors"><label
                                                for="feature-marble-floors">Marble
                                                Floors<small>(5)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-next-to-busy-way" value="next-to-busy-way"><label
                                                for="feature-next-to-busy-way">Next To Busy
                                                Way<small>(1)</small></label></span></li>
                                    <li><span class="option-set"><input type="checkbox" name="features[]"
                                                id="feature-swimming-pool" value="swimming-pool"><label
                                                for="feature-swimming-pool">Swimming
                                                Pool<small>(4)</small></label></span></li>
                                </ul>
                            </div>
                            <!-- .extra-search-fields -->
                        </form>
                        <!-- .advance-search-form -->
                    </div>
                    <!-- .container -->
                </section>
                <!-- .advance-search -->
                <div class="property-listing-two">
                    <div class="container">
                        <div class="row zero-horizontal-margin">
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-1-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Home in Merrick Way</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$540,000</span><a href="#"><span
                                                        class="property-status-tag">For Sale</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">4300<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-12-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Villa in Coral Gables</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$825,000</span><a href="#"><span
                                                        class="property-status-tag">For Sale</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">3500<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">3.5</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-10-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Street Food
                                                    Restaurant</a></h4>
                                            <div class="price-and-status">
                                                <span class="price">$1,600</span><a href="#"><span
                                                        class="property-status-tag">For Rent</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">950<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-9-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Villa on Hollywood
                                                    Boulevard</a></h4>
                                            <div class="price-and-status">
                                                <span class="price">$740,000</span><a href="#"><span
                                                        class="property-status-tag">For Sale</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">4530<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">4</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-2-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Villa on Grand Avenue</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$4,750</span><a href="#"><span
                                                        class="property-status-tag">For Rent</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">9450<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">4</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">4</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-8-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Office Space at Northwest
                                                    107th Avenue</a></h4>
                                            <div class="price-and-status">
                                                <span class="price">$3,100</span><a href="#"><span
                                                        class="property-status-tag">For Rent</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">2800<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-7-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Condo on Biscayne
                                                    Boulevard</a></h4>
                                            <div class="price-and-status">
                                                <span class="price">$3,250</span><a href="#"><span
                                                        class="property-status-tag">For Rent</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">1500<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">1</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <div class="col-xs-6 custom-col-xs-12 col-md-4 col-lg-3 zero-horizontal-padding">
                                <article class="hentry property-listing-home meta-item-half">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-3-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Home in Coral Gables</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$850,000</span><a href="#"><span
                                                        class="property-status-tag">For Sale</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">3800<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">4</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">4.5</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .property-listing-home -->
                <section class="submit-property submit-property-one"
                    style="background: url(images/demo/hiw-bg.jpg) no-repeat center top;  background-size: cover;">
                    <div class="container">
                        <header class="submit-property-header">
                            <h3 class="sub-title">Welcome</h3>
                            <h2 class="title">Add Your Property to Our List</h2>
                            <p>
                                We have a big customer base to market your property to right buyers. So get started by
                                following these simple steps.
                            </p>
                        </header>
                        <div class="row submit-property-placeholders">
                            <div class="col-sm-4 submit-property-placeholder">
                                <div class="image-wrapper">
                                    <a href="#"><img src="/landing/assets/images/demo/icon-1.svg" alt="Icon" /></a>
                                </div>
                                <h3 class="submit-property-title">Register</h3>
                                <p>
                                    Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus
                                    porttitor.
                                </p>
                            </div>
                            <div class="col-sm-4 submit-property-placeholder">
                                <div class="image-wrapper">
                                    <a href="#"><img src="/landing/assets/images/demo/icon-2.svg" alt="Icon" /></a>
                                </div>
                                <h3 class="submit-property-title">Fill Up Property Details</h3>
                                <p>
                                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam
                                    porta sem malesuada magna mollis euismod.
                                </p>
                            </div>
                            <div class="col-sm-4 submit-property-placeholder">
                                <div class="image-wrapper">
                                    <a href="#"><img src="/landing/assets/images/demo/icon-3.svg" alt="Icon" /></a>
                                </div>
                                <h3 class="submit-property-title">You are Done!</h3>
                                <p>
                                    Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et.
                                </p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="btn-large btn-green" href="#">Submit Your Property</a>
                        </div>
                    </div>
                    <!-- .container -->
                </section>
                <!-- .submit-property-section -->
                <div class="featured-properties meta-item-half featured-properties-two">
                    <div class="container">
                        <header class="section-header">
                            <h3 class="section-title">Featured Properties</h3>
                        </header>
                        <div class="row">
                            <div class="col-xs-6 col-md-4">
                                <article class="hentry featured-property-post">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-1-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Home in Merrick Way</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$540,000</span><a href="#"><span
                                                        class="property-status-tag">For Sale</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">4300<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-ptype">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd"
                                                            fill="#0DBAE8"
                                                            d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Type</span>
                                                    <span class="meta-item-value">Single Family Home</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <!-- .featured-properties-item -->
                            <div class="col-xs-6 col-md-4">
                                <article class="hentry featured-property-post">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-12-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Villa in Coral Gables</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$825,000</span><a href="#"><span
                                                        class="property-status-tag">For Sale</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">3500<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">3</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">3.2</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-ptype">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd"
                                                            fill="#0DBAE8"
                                                            d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Type</span>
                                                    <span class="meta-item-value">Villa</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <!-- .featured-properties-item -->
                            <div class="col-xs-6 col-md-4">
                                <article class="hentry featured-property-post">
                                    <div class="property-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/property/property-2-660x600.jpg"
                                                alt="Thumbnail"></a>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="property-description">
                                        <header class="entry-header">
                                            <h4 class="entry-title"><a href="#" rel="bookmark">Villa on Grand Avenue</a>
                                            </h4>
                                            <div class="price-and-status">
                                                <span class="price">$4,750</span><a href="#"><span
                                                        class="property-status-tag">For Rent</span></a>
                                            </div>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Area</span>
                                                    <span class="meta-item-value">9350<sub class="meta-item-unit">Sq
                                                            Ft</sub></span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">4</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bath">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bathrooms</span>
                                                    <span class="meta-item-value">4</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-garage">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8"
                                                            d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Garages</span>
                                                    <span class="meta-item-value">2</span>
                                                </div>
                                            </div>
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-ptype">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container"
                                                        width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd"
                                                            fill="#0DBAE8"
                                                            d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z" />
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Type</span>
                                                    <span class="meta-item-value">Villa</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .property-meta -->
                                    </div>
                                    <!-- .property-description -->
                                </article>
                            </div>
                            <!-- .featured-properties-item -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .featured-properties -->
                <section class="partners">
                    <div class="container">
                        <div class="row zero-horizontal-margin">
                            <div class="col-xs-12">
                                <h3 class="title">
                                    We are Working as <span>Partners</span> with Following Prestigious Companies.
                                </h3>
                                <ul class="list-grid-layout list-unstyled">
                                    <li><a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/partner/videohive.png" alt="Thumbnail"></a>
                                    </li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/partner/codecanyon.png" alt="Thumbnail"></a>
                                    </li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/partner/audiojungle.png"
                                                alt="Thumbnail"></a></li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/partner/themeforest.png"
                                                alt="Thumbnail"></a></li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="/landing/assets/images/partner/photodune.png" alt="Thumbnail"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .container -->
                </section>
                <!-- .partners -->
                <section class="home-recent-posts">
                    <div class="container">
                        <header class="section-header">
                            <h3 class="section-title">Latest News</h3>
                            <div class="recent-posts-carousel-nav carousel-nav">
                                <a class="carousel-prev-item prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow-container" width="32"
                                        height="52" viewBox="0 0 32 52">
                                        <g class="left-arrow" fill="#fff">
                                            <path opacity=".5"
                                                d="M31.611 7.646l-6.787-7.057-24.435 25.406 6.787 7.057z" />
                                            <path d="M.389 26.006l6.787-7.058 24.435 25.406-6.787 7.057z" />
                                        </g>
                                    </svg>
                                </a>
                                <a class="carousel-next-item next">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow-container" width="32"
                                        height="52" viewBox="0 0 32 52">
                                        <g class="right-arrow" fill-rule="evenodd" clip-rule="evenodd" fill="#fff">
                                            <path
                                                d="M.388 44.354l6.788 7.057 24.436-25.406-6.788-7.057-24.436 25.406z" />
                                            <path opacity=".5"
                                                d="M31.612 25.994l-6.788 7.058-24.436-25.406 6.788-7.057 24.436 25.405z" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </header>
                        <div class="recent-posts-carousel">
                            <div class="owl-carousel">
                                <div class="recent-posts-item">
                                    <article class="clearfix format-gallery hentry">
                                        <div class="post-thumbnail-container">
                                            <div class="gallery-slider-two flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <a title="Feature Image" data-rel="gallery-1" class="swipebox"
                                                            href="images/news/news-post-7-660x600.jpg">
                                                            <img src="/landing/assets/images/news/news-post-7-660x600.jpg"
                                                                alt="Thumbnail">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a title="Feature Image" data-rel="gallery-1" class="swipebox"
                                                            href="images/news/news-post-5-660x600.jpg">
                                                            <img src="/landing/assets/images/news/news-post-5-660x600.jpg"
                                                                alt="Thumbnail">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a title="Feature Image" data-rel="gallery-1" class="swipebox"
                                                            href="images/news/news-post-4-660x600.jpg">
                                                            <img src="/landing/assets/images/news/news-post-4-660x600.jpg"
                                                                alt="Thumbnail">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-content-wrapper">
                                            <div class="post-header entry-header">
                                                <h4 class="post-title entry-title"> <a href="#">Gallery Post Format</a>
                                                </h4>
                                                <div class="post-meta entry-meta">
                                                    <span class="author-link">By <a rel="author" href="#">John
                                                            Doe</a></span>
                                                </div>
                                            </div>
                                            <p>Competently harness enterprise vortals via revolutionary e-tailers.
                                                Monotonectally recaptiualize one-to-one relationships whereas
                                                ubiquitous…</p>
                                            <a class="read-more" href="#">More <i
                                                    class="fa fa-arrow-circle-o-right"></i></a>
                                        </div>
                                        <!-- .post-content-wrapper -->
                                    </article>
                                </div>
                                <div class="recent-posts-item">
                                    <article class="clearfix format-image hentry">
                                        <div class="post-thumbnail-container">
                                            <figure class="post-thumbnail">
                                                <a href="#"><img
                                                        src="/landing/assets/images/news/news-post-3-660x600.jpg"
                                                        class="img-responsive wp-post-image" alt="News Post"></a>
                                            </figure>
                                        </div>
                                        <!-- .post-thumbnail-container -->
                                        <div class="post-content-wrapper">
                                            <div class="post-header entry-header">
                                                <h4 class="post-title entry-title"><a href="#">Image Post Format</a>
                                                </h4>
                                                <div class="post-meta entry-meta">
                                                    <span class="author-link">By <a rel="author" href="#">John
                                                            Doe</a></span>
                                                </div>
                                            </div>
                                            <p>Enthusiastically disintermediate progressive innovation before
                                                high-payoff metrics. Intrinsicly generate sticky services without B2B…
                                            </p>
                                            <a class="read-more" href="#">More <i
                                                    class="fa fa-arrow-circle-o-right"></i></a>
                                        </div>
                                        <!-- .post-content-wrapper -->
                                    </article>
                                </div>
                                <div class="recent-posts-item">
                                    <article class="clearfix format-video hentry">
                                        <div class="post-thumbnail-container">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe
                                                    src="https://player.vimeo.com/video/89541885?title=0&amp;byline=0&amp;portrait=0"></iframe>
                                            </div>
                                        </div>
                                        <div class="post-content-wrapper">
                                            <div class="post-header entry-header">
                                                <h4 class="post-title entry-title"><a href="#">Video Post Format</a>
                                                </h4>
                                                <div class="post-meta entry-meta">
                                                    <span class="author-link">By <a rel="author" href="#">John
                                                            Doe</a></span>
                                                </div>
                                            </div>
                                            <p>Uniquely customize future-proof niche markets via worldwide users.
                                                Proactively negotiate user-centric schemas after…</p>
                                            <a class="read-more" href="#">More <i
                                                    class="fa fa-arrow-circle-o-right"></i></a>
                                        </div>
                                        <!-- .post-content-wrapper -->
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .container -->
                </section>
                <!-- .home-recent-posts -->
            </main>
            <!-- .site-main -->
        </div>
        <!-- .site-content -->
    </div>
@endsection
