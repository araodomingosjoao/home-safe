@extends('site.master.layout')

@section('title','Detalhe da Casa')

@section('content')
    <div class="site-section site-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div>
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{{asset('site/assets/images/hero_bg_1.jpg')}}" alt="Image" class="img-fluid"></div>
                            <div><img src="{{asset('site/assets/images/hero_bg_2.jpg')}}" alt="Image" class="img-fluid"></div>
                            <div><img src="{{asset('site/assets/images/hero_bg_3.jpg')}}" alt="Image" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="bg-white property-body border-bottom border-left border-right">
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <strong class="text-success h1 mb-3">$1,000,500</strong>
                            </div>
                            <div class="col-md-6">
                                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">2 <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">2</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">SQ FT</span>
                                        <span class="property-specs-number">7,000</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                                <strong class="d-block">Condo</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                                <strong class="d-block">2018</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                                <strong class="d-block">$520</strong>
                            </div>
                        </div>
                        <h2 class="h4 text-black">More Info</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti
                            vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt
                            tempora molestias quo deserunt similique sequi.</p>
                        <p>Nisi voluptatum error ipsum repudiandae, autem deleniti, velit dolorem enim quaerat rerum
                            incidunt sed, qui ducimus! Tempora architecto non, eligendi vitae dolorem laudantium dolore
                            blanditiis assumenda in eos hic unde.</p>
                        <p>Voluptatum debitis cupiditate vero tempora error fugit aspernatur sint veniam laboriosam eaque
                            eum, et hic odio quibusdam molestias corporis dicta! Beatae id magni, laudantium nulla iure ea
                            sunt aliquam. A.</p>

                        <div class="row no-gutters mt-5">
                            <div class="col-12">
                                <h2 class="h4 text-black mb-3">Gallery</h2>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_1.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_2.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_3.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_4.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_4.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_5.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_5.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_6.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_6.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_7.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_7.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_8.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_8.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_1.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_2.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_3.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="{{asset('site/assets/images/img_4.jpg')}}" class="image-popup gal-item"><img
                                        src="{{asset('site/assets/images/img_4.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="bg-white widget border rounded">

                        <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                        <form action="" class="form-contact-agent">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>

                    <div class="bg-white widget border rounded">
                        <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe
                            eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis
                            ducimus quis. Illo, quisquam, veritatis.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="site-section-title mb-5">
                        <h2>Related Properties</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Esta sendo vendida</span>
                                <span class="offer-type bg-success">Esta sendo alugada</span>
                            </div>
                            <img src="{{asset('site/assets/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                            <h2 class="property-title"><a href="property-details">Jardim de Rosa</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>
                                Jardim de Rosa Talatona</span>
                            <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">7,000</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Esta sendo vendida</span>
                                <span class="offer-type bg-success">Esta sendo alugada</span>
                            </div>
                            <img src="{{asset('site/assets/images/img_2.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <a href="#" class="property-favorite active"><span class="icon-heart-o"></span></a>
                            <h2 class="property-title"><a href="property-details">871 Crenshaw Blvd</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 1 New
                                York Ave, Warners Bay, NSW 2282</span>
                            <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">1,620</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-info">Em processamento</span>
                            </div>
                            <img src="{{asset('site/assets/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                            <h2 class="property-title"><a href="property-details">853 S Lucerne Blvd</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 S
                                Lucerne Blvd Unit 101 Los Angeles, CA 90005</span>
                            <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">5,500</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection