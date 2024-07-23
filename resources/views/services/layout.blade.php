@extends('layout')

@section('content')

    <main class="service-page">
        <div class="banner">
            <div class="banner-container">
                <h1 class="banner-title">@yield('service-page-title')</h1>
                <div class="banner-breadcrumb">
                    <span>
                        <a href="/">Home</a>
                    </span>
                    @yield('service-breadcrumb')
                </div>
            </div>
            <div class="banner-overlay"></div>
            <div class="banner-bg">
                <img src="/images/bannertest.jpg"/>
            </div>
        </div>
        <div class="article-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    @yield('service-article')
                </div>
                <div class="col-lg-4">
                    <div class="card card-sideBox">
                        <ul>
                            <li><a href="/services" class="">Introduction</a></li>
                            <li><a href="/services/office-and-commercial" class="">Office and Commercial</a></li>
                            <li><a href="/services/window-cleaning" class="">Window Cleaning</a></li>
                            <li><a href="/services/carpet-and-floor" class="">Carpet and Floor</a></li>
                            <li><a href="/services/covid-sanitation-services" class="">Covid Sanitation Services</a></li>
                            <li><a href="/services/frequently-requested" class="">Frequently Requested</a></li>
                            <li><a href="/services/washroom-supplies" class="">Washroom Supplies</a></li>
                            <li><a href="/services/waste-management" class="">Waste Management</a></li>
                            <li><a href="/services/IT-cleaning" class="">IT Cleaning</a></li>
                            <li><a href="/services/extra-services" class="">Extra Services</a></li>
                        </ul>
                    </div>
                    <div class="card card-contactBox mt-32">
                        <div class="card-body">
                            <div class="card-title">
                                Contacts
                            </div>
                            <ul>
                                <li>
                                    <a  href="tel:+ 01438860466" >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                        0143-886-0466
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:enquiries@hughesgardner.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/></svg>
                                        enquiries@hughesgardner.com
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                        <span>Mon - Fri 8:00am - 5:00pm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:enquiries@hughesgardner.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M205 34.8c11.5 5.1 19 16.6 19 29.2l0 64 112 0c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96l-96 0 0 64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z"/></svg>
                                        <span>Request a quote →</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- <div class="serviceContainer">
            <div class="left">
                <div class="listTitle">Services</div>
                <ul>
                    <li><a href="" class="">Office & Commercial</a></li>
                    <li><a href="" class="">Window Cleaning</a></li>
                    <li><a href="" class="">Carpet & Floor</a></li>
                    <li><a href="" class="">Covid Sanitation Services</a></li>
                    <li><a href="" class="">Frequently Requested</a></li>
                    <li><a href="" class="">Washroom Supplies</a></li>
                    <li><a href="" class="">Waste Management</a></li>
                    <li><a href="" class="">Extra Services</a></li>
                </ul>
            </div>
            <div class="right">
                <div class="listTitle">On this page</div>
                <ul>
                    <li><a href="" class="">Introduction</a></li>
                </ul>
            </div>
            <div class="center">
                <article>
                    <img src="/images/test.jpg"/>
                    <h1>Introduction</h1>
                    <p>With over 50 years of experience we create bespoke solutions for each client, utilizing best in class methods, equipment, environmentally friendly products and safety to provide services that are unmatched in the industry.</p>
                    <p>Established in 1972, Hughes/Gardner is a family owned and operated business, providing a first-class cleaning enterprise from inception and into the 21st century, using our extensive knowledge and wealth of experience to maintain long and mutually beneficial partnerships with our clients.</p>
                    <p>Covid secure workplaces are the new normality and Hughes/Gardner continues to stride forward, introducing new innovations and specialist cleaning regimes, working with clients to create new procedures.</p>
                </article>
            </div>
        </div> -->
    </main>
    
@endsection

