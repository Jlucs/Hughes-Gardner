@extends('layout')

@section('content')

    <div class="homeCta" id="homeCta">
        <a href="" class="btn btn-primary btn-circular">Get in Touch</a>
        <a href="" class="btn btn-secondary btn-circular">Book a Call</a>
    </div>

    <section class="section section-hero">
        <div class="hero-bg">
            <video
            clas="AboutBlock_video__CKPzH"
            width="1418"
            height="628"
            playsInline
            autoPlay
            muted 
            loop
            src="/images/adobebanner.mov"
            /> 
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-title">
               Your Day-to-Day London<br/> Commercial Cleaning 
            </div>
            <div class="hero-text">A Recognized Leader in Commercial Cleaning Since 1972. </div>
            <div class="buttonWrapper">
            </div>
        </div>
    </section>

    <section class="section section--py128">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="row">
                  <div class="col-lg-6 md-mb64">
                    <section class="copy variant--section">
                      <header class="copy-header">
                        <h1 class="copy-title">
                            We have all your commercial cleaning needs covered
                        </h1>
                      </header>
                      <div class="copy-body ">
                        <p>
                          Marleybone's favourite Commercial Cleaning. We utilize the industry's best practices, equipment, and eco-friendly products to deliver exceptional cleaning services, ensuring a safe and healthy work environment.
                        </p>
                        <!-- <p>
                          Our enduring client relationships stand as a testament
                          to our unwavering dedication to exceptional cleaning
                          services and customer satisfaction. Let Hughes/Gardner
                          keep your space sparkling clean and healthy. We're
                          passionate about providing exceptional cleaning
                          solutions that allow your business to thrive. Contact
                          us today to discuss your cleaning needs
                        </p> -->
                      </div>
          
                      <div class="copy-footer">
                        <div class="copy-ctaContainer">
                          <a href="" class="btn btn-circular btn-primary">
                            <span>View Services</span>
                          </a>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-lg-6">
                    <div class="serviceGrid">
                      <div class="col">
                        <a class="card card-service" href="/services/office-and-commercial">
                          <div class="card-body">
                            <div class="card-title">Office Cleaning</div>
                            <p class="card-desc">Day to day cleaning using environmentally friendly products.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/office-cleaning.png"/>
                          </div>
                        </a>
                        <a class="card card-service" href="/services/carpet-and-floor">
                          <div class="card-body">
                            <div class="card-title">Carpet & Floor Maintenance</div>
                            <p class="card-desc">Our trained coworkers use the best industry recognised equipment and products to clean and treat a vast range of floor types.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="#211E44" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                           <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/carpet.png"/>
                          </div>
                        </a>
                        <a class="card card-service" href="/services/waste-management">
                          <div class="card-body">
                            <div class="card-title">Waste Management</div>
                            <p class="card-desc">Tailored Solutions Minimizing Environmental Impact.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                           <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/waste-management.jpg"/>
                          </div>
                        </a>
                        <a class="card card-service" href="/services/covid-sanitation-services">
                          <div class="card-body">
                            <div class="card-title">Hazard Sanitation Services</div>
                            <p class="card-desc">Securely Handling Biohazards and Ensuring Peace of Mind.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                           <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/hazard-services.jpg"/>
                          </div>
                        </a>
                      </div>
                      <div class="col">
                      <div class="col">
                        <a class="card card-service" href="/services/window-cleaning">
                          <div class="card-body">
                            <div class="card-title">Window Cleaning</div>
                            <p class="card-desc">Professional Service for Breathtaking Views and a Brighter Work Environment.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                           <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/window-cleaning.png"/>
                          </div>
                        </a>
                        <a class="card card-service" href="/services/washroom-supplies">
                          <div class="card-body">
                            <div class="card-title">Washroom Supplies</div>
                            <p class="card-desc">Keeping Your Workplace Hygienic and Functional with a reliable supply of Eco-Friendly Products.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                           <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/washroom-supplies.jpg"/>
                          </div>
                        </a>
                        <a class="card card-service" href="/services/IT-cleaning">
                          <div class="card-body">
                            <div class="card-title">IT Cleaning</div>
                            <p class="card-desc">Ensure a spotless and secure IT environment with our expert commercial cleaning services.</p>
                            <div class="card-arrow">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" fill="none" viewBox="0 0 32 32">
                                <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.33 22.67 22.67 9.33m0 0H9.33m13.34 0v13.34"></path>
                              </svg>
                            </div>
                          </div>
                           <div class="card-image">
                            <div class="card-overlay"></div>
                            <img src="/images/it-cleaning.png"/>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section section--cs section--py128">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="cs--block"></div>
            <div class="section-background">
               
            </div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                
                <!-- <div class="topOverlay"></div>
                <div class="bottomOverlay"></div> -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <div class="section-label">Our Success Stories</div> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial">
                            
                            <div class="testimonial-content">
                                <div class="card card-cs">
                                    <div class="card-body">
                                        <div class="card-title">Seqouia Capital</div>
                                        <div class="card-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc augue urna, aliquam eget sollicitudin non, consequat non felis. Duis tincidunt dolor quis ante suscipit, sit amet tincidunt erat facilisis. Donec ex nisl, aliquet auctor mauris ac, commodo maximus nisi. Donec posuere, massa at sodales posuere, purus lorem lobortis mi, sit amet pellentesque sem est non augue. Nam suscipit, neque a auctor malesuada, magna arcu placerat justo, vitae luctus neque elit ultrices lorem. Donec fermentum at tortor at efficitur. Sed et ligula et sapien convallis commodo ac quis dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <div class="card-author"><p><b>Testimonial Author, Manager at X</b></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section section--py128 section--blue">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="cs-divider"></div>
                <div class="row-layout">
                  <div class="row-layout">
                    <section class="copy variant--section">
                      <header class="copy-header">
                        <h1 class="copy-title">
                          We're different
                          <br /> because
                        </h1>
                      </header>
                    </section>
                  </div>
                  <div class="row-layout">
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="why-image">
                          <img src="/images/whyus.png" class="rounded-3xl" />
                        </div>
                      </div>
                      <div class="col-lg-7">
                       <div class="accordion">
                        <details class="accordion-item" open>
                          <summary>We Believe in People</summary>
                          <p>
                              We believe in people because they are our greatest asset. At HG we are not just a company; we are a family. We all share our unique work culture,in which everyone is valued, supported and empowered to reach their full potential.
                          </p>
                      </details>
                      <div class="line active"></div>

                      <details class="accordion-item">
                          <summary>We Solve Each and Any Cleaning Problem</summary>
                          <p>
                              We solve each and any cleaning problem with our dedicated team and innovative solutions.
                          </p>
                      </details>
                      <div class="line"></div>

                      <details class="accordion-item">
                          <summary>Here to Help No Matter What</summary>
                          <p>
                              Our team is here to help you no matter what the circumstances.
                          </p>
                      </details>
                      <div class="line"></div>

                      <details class="accordion-item">
                          <summary>Flexible & Fast Decision-Making</summary>
                          <p>
                              We pride ourselves on our flexible and fast decision-making process.
                          </p>
                      </details>
                      <div class="line"></div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section section--pt128 section--lightBlue">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="row no-gutters lg-row-reverse">
                  <div class="col-lg-6">
                      <img src="/images/testingvan.png"/>
                  </div>
                  <div class="col-lg-6 ">
                      <div class="card card-article">
                          <div class="card-body">
                              <section class="copy variant--subsection">
                                  <header class="copy-header">
                                      <h1 class="copy-title">
                                          Family Owned and Operated Business in London for over 50 years
                                      </h1>
                                  </header>
                                  <div class="copy-body ">
                                      <p>
                                        Established in 1972, Hughes/Gardner is a family-owned and operated business, proudly serving Marylebone with premier commercial cleaning services. Our commitment to excellence has solidified our reputation as the go-to cleaning experts in the area. Leveraging decades of experience, we provide tailored cleaning solutions that meet the unique needs of each client. Our team is dedicated to maintaining the highest standards of cleanliness and hygiene, ensuring that every workspace we service is pristine and conducive to productivity. Our extensive knowledge and expertise enable us to tackle any cleaning challenge, from routine office maintenance to specialized cleaning projects, with unparalleled efficiency and attention to detail.
                                      </p>
                                      <p>
                                        At Hughes/Gardner, we understand the importance of building long-lasting relationships with our clients. Our personalized approach and consistent delivery of exceptional service have earned us the trust and loyalty of businesses throughout Marylebone. We are committed to using eco-friendly products and advanced cleaning techniques to protect the health and well-being of your employees and customers. As a family-operated enterprise, we take pride in our hands-on management and dedicated staff, ensuring every job is completed to the highest standard. Whether you require daily office cleaning, deep carpet cleaning, or IT equipment sanitation, Hughes/Gardner is your trusted partner in maintaining a spotless and professional environment. Choose us for your Marylebone commercial cleaning needs and experience the difference our expertise and dedication can make.
                                      </p>
                                  </div>
                                  <div class="copy-footer">
                                      <div class="copy-ctaContainer">
                                          <a href="" class="btn btn-circular btn-primary">
                                              <span>Read Our Story</span>
                                          </a>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>
                      
                  </div>
                  
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section section--lightBlue">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="Marquee">
                  <div class="Marquee-content">
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_1.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_2.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_3.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_4.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_5.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_6.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_7.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_8.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_9.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_1.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_1.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                    <div class="Marquee-tag">
                      <div class="card card-award">
                        <div class="card-image">
                          <img src="/images/acc_1.png"/>
                        </div>
                        <div class="card-body">
                          <div class="card-title"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <section class="section section--pb128 section--lightBlue">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="row-layout">
                    <div class="row-layout">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <img src="/images/whyus.jpeg"/>
                            </div>
                            <div class="col-lg-8">
                              <div class="card card-why">
                                <section class="copy variant--subsection ">
                                  <header class="copy-header">
                                      <h1 class="copy-title">
                                          Why Hughes Gardner?
                                      </h1>
                                  </header>
                                  <div class="copy-body ">
                                      <p>
                                        We pride ourselves on delivering top-tier commercial cleaning services across Marylebone. Our dedicated team of professionals ensures that every space, from bustling offices to busy clinics, is spotless and hygienic. With years of experience in the industry, we utilize the latest cleaning technologies and eco-friendly products to provide thorough and efficient cleaning solutions. Our commitment to excellence and attention to detail has earned us a reputation as one of the leading commercial cleaning companies in Marylebone. We tailor our services to meet the unique needs of each client, ensuring a clean and healthy environment that boosts productivity and leaves a lasting impression.
                                      </p>
                                      <p>
                                        Choosing Hughes Gardner means opting for reliability, quality, and unmatched customer service. Our Marylebone commercial cleaning services are designed to cater to businesses of all sizes, offering flexible scheduling and customizable cleaning plans. We understand the importance of a clean workspace and strive to exceed our clients' expectations with every job. Our highly trained staff undergo rigorous background checks and continuous training to stay updated on the best practices in the industry, ensuring your business receives the highest standard of cleanliness.
                                      </p>
                                  </div>
                                  <div class="copy-footer">
                                      <div class="copy-ctaContainer">
                                          <a href="" class="btn btn-circular btn-primary">
                                              <span>Read Our Story</span>
                                          </a>
                                      </div>
                                  </div>
                                </section>
                              </div>
                            </div>
                        </div>
                    </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- <section class="section section--py128">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="row-layout">
                    <div class="row-layout">
                        <div class="row">
                            <div class="col-lg-6 md-mb64">
                                <section class="copy variant--section ">
                                    <header class="copy-header">
                                        <h1 class="copy-title">
                                            Family Owned and Operated Business in London<br/> for over 50 years
                                        </h1>
                                    </header>
                                    <div class="copy-body ">
                                        <p>
                                        Since 1972, Hughes/Gardner has been your family-owned
                                        cleaning partner. We take pride in building strong
                                        relationships with our clients, understanding their
                                        unique needs. With over 50 years of experience, we've
                                        adapted to every challenge, from the latest hygiene
                                        protocols to cutting-edge cleaning technology. Our
                                        commitment to your health and safety is paramount.
                                        </p>
                                    </div>
                                    <div class="copy-footer">
                                        <div class="copy-ctaContainer">
                                            <a href="" class="btn btn-circular btn-primary">
                                                <span>Read Our Story</span>
                                            </a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-6">
                                <div class="statsGrid">
                                    <div class="col">
                                        <div class="card card-stat">
                                            <div class="card-body">
                                                <div class="card-title">50+</div>
                                                <div class="card-text">Years of Experience</div>
                                            </div>
                                        </div>
                                        <div class="card card-stat">
                                            <div class="card-body">
                                                <div class="card-title">99%</div>
                                                <div class="card-text">Customer Satisfaction</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-stat">
                                            <div class="card-body">
                                                <div class="card-title">14,580</div>
                                                <div class="card-text">Jobs completed last 12 months</div>
                                            </div>
                                        </div>
                                        <div class="card card-stat">
                                            <div class="card-body">
                                                <div class="card-title">12+</div>
                                                <div class="card-text">Certifications and Training</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-layout">
                        
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    

    <section class="section section--py128">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="row">
                    <div class="col-lg-6">
                        <section class="copy variant--section ">
                            <header class="copy-header">
                                <h1 class="copy-title">
                                    Why Hughes Gardner?
                                </h1>
                            </header>
                            <div class="copy-body ">
                                <p>
                                Since 1972, Hughes/Gardner has been your family-owned
                                cleaning partner. We take pride in building strong
                                relationships with our clients, understanding their
                                unique needs. With over 50 years of experience, we've
                                adapted to every challenge, from the latest hygiene
                                protocols to cutting-edge cleaning technology. Our
                                commitment to your health and safety is paramount.
                                </p>
                            </div>
                            <div class="copy-footer">
                                <div class="copy-ctaContainer">
                                    <a href="" class="btn btn-circular btn-primary">
                                        <span>Read Our Story</span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                     <div class="col-lg-6">
                        <img src="/images/about.jpg" class="img-primary"/>
                    </div>
                    
                   
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </section> -->

    <section class="section section--py128 section--blue">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="cs-divider"></div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="approachTitle">
                      <span>Enhancing Cleanliness </span>
                      <br/>Through Teamwork and Innovation
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="grid-layout approachGrid" data-columns="2,2">
                      <div class="card card-approach">
                        <div class="card-body">
                          <div class="card-order">01</div>
                          <div class="card-icon"></div>
                          <div class="card-title">Efficient</div>
                          <div class="card-desc">Our cleaning processes are designed to be highly efficient, ensuring every corner of your commercial space is spotless. We use the latest technology and methods to deliver superior results quickly and effectively.</div>
                        </div>
                      </div>
                      <div class="card card-approach">
                        <div class="card-body">
                          <div class="card-order">02</div>
                          <div class="card-icon"></div>
                          <div class="card-title">Innovative</div>
                          <div class="card-desc">We incorporate innovative cleaning techniques and environmentally friendly products to provide a healthier and safer workspace. Our team continuously seeks out new solutions to improve our services and meet your specific needs.</div>                      </div>
                      </div>
                      <div class="card card-approach">
                        <div class="card-body">
                          <div class="card-order">03</div>
                          <div class="card-icon"></div>
                          <div class="card-title">Customer Focused</div>
                          <div class="card-desc">We put our clients first, understanding your unique requirements and tailoring our services to exceed your expectations. Your satisfaction is our top priority, and we strive to create clean and welcoming environments for your business.</div>
                        </div>
                      </div>
                      <div class="card card-approach">
                        <div class="card-body">
                          <div class="card-order">04</div>
                          <div class="card-icon"></div>
                          <div class="card-title">Reliable</div>
                          <div class="card-desc">You can count on us to deliver consistent, high-quality cleaning services every time. Our dedicated team is trained to maintain the highest standards, ensuring your commercial space is always in pristine condition.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <section class="section section--pt128">
        <div class="section-masked">
            <div class="section-backgroundMask">
            <div class="section-background"></div>
            </div>
            <div class="section-container">
            <div class="section-layoutContainer">
                <div class="section-layout">
                <div class="sustainability">
                    <div class="image">
                    <img src="/images/sustainability.png" />
                    </div>
                    <div class="content section--blue">
                    <section class="copy variant--subsection ">
                        <header class="copy-header">
                        <h1 class="copy-title">Quality, Eco-Friendly & Healthy Environment</h1>
                        </header>
                        <div class="copy-body ">
                        <p>
                            The Company are committed to using natural resources in a
                            responsible manner to minimise any negative input on the
                            Environment and reduce its environmental impact wherever
                            practical. This is evidenced with our accreditation to BS EN
                            ISO 14001:2015 Environmental management systems & BS EN ISO
                            9001:2015 Quality Management systems. This policy is
                            continually reviewed in conjunction with our Environmental
                            and Carbon Footprint Policies.
                        </p>
                        <p>
                            We embrace our environmental responsibility and pledge to
                            initiate meaningful change. We understand that addressing
                            climate change is a collective endeavor, and we are
                            wholeheartedly devoted to being part of the solution. We
                            actively contribute to a sustainable future, reduce our
                            carbon footprint, and help build a healthier planet for
                            present and future generations.
                        </p>
                        </div>
                        <div class="copy-footer">
                        <div class="copy-ctaContainer">
                            <a href="" class="btn btn-secondary btn-circular">
                            <span>
                                Sustainability Policy
                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                            </span>
                            <span>
                                <svg
                                class="btn-arrow"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"
                                >
                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z"></path>
                                </svg>
                            </span>
                            </a>
                        </div>
                        </div>
                    </section>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>


        <section class="section section--py128">
        <div class="section-masked">
          <div class="section-backgroundMask">
            <div class="section-background"></div>
          </div>
          <div class="section-container">
            <div class="section-layoutContainer">
              <div class="section-layout">
                <div class="row-layout">
                    <div class="row-layout">
                        <section class="copy variant--section ">
                            <header class="copy-header">
                                <h1 class="copy-title">
                                    Recent posts
                                </h1>
                            </header>
                            <div class="copy-body ">
                                <p>
                                    Explore insightful stories and tips in our featured blog posts.
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="row-layout">
                        <div class="grid-layout blog-grid" data-columns="1,1,1">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <img src="/images/blog1.webp" />
                                </div>
                                <div class="card-body">
                                    <div class="card-title">Eco-Friendly Cleaning Solutions for London Offices: Why It Matters</div>
                                    <div class="card-desc">
                                     London's bustling office scene is a hub of innovation, but it also has an environmental footprint. The good news? Simple eco-friendly solutions can make a big difference. Read on to discover how creating a sustainable workspace benefits not just the planet, but also your employees and your company's financial health.  
                                    </div>
                                </div>
                            </div>
                            <div class="card card-blog">
                                <div class="card-image">
                                    <img src="/images/blog2.webp" />
                                </div>
                                <div class="card-body">
                                    <div class="card-title">How Regular Commercial Cleaning Can Improve Workplace Productivity</div>
                                    <div class="card-desc">
                                      Keeping your London office sparkling clean isn't just about aesthetics. Regular commercial cleaning goes far beyond a tidy desk, actually boosting employee morale, focus, and overall productivity. We'll delve into the surprising ways a clean environment can supercharge your team's performance.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-blog">
                                <div class="card-image">
                                    <img src="/images/blog3.webp" />
                                </div>
                                <div class="card-body">
                                    <div class="card-title">How to Maintain a Spotless Office: Tips from London’s Leading Cleaning Experts</div>
                                    <div class="card-desc">
                                      Dreaming of an immaculate office that inspires and motivates your team? Look no further! Marleybone’s leading cleaning experts share their industry secrets, revealing a practical toolkit to keep your workspace hygienically clean, polished, and positively gleaming.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
    </section>

    <script>
        window.onscroll = function() {
            var stickyElement = document.getElementById('homeCta');

            if (window.scrollY > 80) {
                stickyElement.classList.add('repositioned');
            } else {
                stickyElement.classList.remove('repositioned');
            }
        };
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('.accordion-item');
            const lines = document.querySelectorAll('.line');

            function updateAccordionState() {
                const windowWidth = window.innerWidth;

                if (windowWidth < 992) {
                    accordionItems.forEach((item, index) => {
                        item.setAttribute('open', 'true');
                        lines[index].classList.add('active');
                    });
                } else {
                    let openIndex = -1;
                    accordionItems.forEach((item, index) => {
                        if (index === 0) {
                            item.setAttribute('open', 'true');
                            lines[index].classList.add('active');
                            openIndex = index;
                        } else {
                            item.removeAttribute('open');
                            lines[index].classList.remove('active');
                        }
                    });

                    accordionItems.forEach((item, index) => {
                        item.addEventListener('toggle', (event) => {
                            if (item.open) {
                                accordionItems.forEach((el, elIndex) => {
                                    if (el !== item) {
                                        el.open = false;
                                        lines[elIndex].classList.remove('active');
                                    } else {
                                        lines[elIndex].classList.add('active');
                                    }
                                });
                            }
                        });
                    });
                }
            }

            // Initial state update
            updateAccordionState();

            // Update state on window resize
            window.addEventListener('resize', updateAccordionState);
        });
    </script>
@endsection

