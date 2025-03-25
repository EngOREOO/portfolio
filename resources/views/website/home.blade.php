@extends('layouts.base')

@section('title', 'Home')

@section('content')

<main class="site-content" id="content">
    <!-- start: Hero Area -->
    <section class="hero-section style-3 d-flex align-items-center" id="intro">
       <div class="intro_text">
          <svg viewBox="0 0 1320 300">
             <text x="50%" Y="50%" text-anchor="middle">HI</text>
          </svg>
       </div>
       <div class="container">
          <div class="row align-items-center">
             <div class="col-md-5 d-none d-md-block">
                <div class="hero-image-box text-center">
                   <img src="{{asset('website/assets/img/abd.png')}}" alt="Images"  style="height: 465px;" />
                </div>
             </div>
             <div class="col-md-7">
                <div class="hero-content-box">
                   <span class="hero-sub-title">Hi, I am Abdullah.</span>
                   <h1 class="hero-title">A Social Media Specialist based in Egypt</h1>

                   <div class="hero-image-box d-md-none text-center">
                      <img src="{{asset('website/assets/img/abd.png')}}" alt="" />
                   </div>
                   <p class="lead">
                      I design and code beautifully simple things and i love what i do. Just simple like that!
                   </p>
                   <div class="button-box d-flex flex-wrap align-items-center">
                      <a href="#contact-section" class="btn tj-btn-secondary">Got a project?</a>
                      <a href="https://wa.me/+201095895224" target="_blank" class="btn tj-btn-primary">Lets talk!</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Hero Area -->

    <!-- start: Roll Area -->
    <section class="tj-roll-section sc-pt-55 sc-pb-55">
       <div class="slide-roll">
          <div class="roll-box roll-box-revers">
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Development</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Design</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Development</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Webflow</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Problems</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Design</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">management</h5>
                </div>
             </div>
          </div>
          <div class="roll-box roll-box-revers">
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Development</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Design</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Development</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Webflow</h5>
                </div>
             </div>
             <div class="roll-item">
                <div class="roll-icon">
                   <img class="portal-icon" src="{{asset('website/assets/img/icons/star.svg')}}" alt="Icon" />
                </div>
                <div class="roll-title">
                   <h5 class="title">Design</h5>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Roll Area -->

    <!-- start: Project Area -->
   @if ($portfolios->count() < 1)
        
   @else
   <section class="project-section style-2">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">Recent Projects</p>
               </div>
               <div class="stack-wrapper">
                  <div class="stack-offset"></div>
                  <div class="project-wrapper">
                  @foreach ($portfolios as $portfolio)
                        
                     <div class="stack-item">
                        <div class="project-content-area featured style-2">
                           <div class="project-box">
                              <div class="project-left-content">
                                 <div class="project_content">
                                    <span class="subtitle">{{$portfolio->category->name ?? ''}}</span>
                                    <h3 class="title"><button data-mfp-src="#portfolio-wrapper-{{ $portfolio->id }}"
                                          class="modal-popup">{{$portfolio->name ?? ''}}</button>
                                    </h3>
                                    <p class="desc">
                                       {{$portfolio->short_description ?? ''}}
                                    </p>
                                 </div>
                                 <div class="check-list" style="word-wrap: break-word">
                                 {!! $portfolio->features ?? '' !!}
                                 </div>
                                 <ul class="project_tags">
                                 @foreach ($portfolio->tags as $arrTags)
                                    @foreach ($arrTags as $item)
                                    {{-- @dd($item)    --}}
                                    <li><a href="#">{{$item}}</a></li>
                                    @endforeach
                                 @endforeach
                                 </ul>
                                 {{-- <div class="project-button">
                                    <button class="project-btn modal-popup" data-mfp-src="#portfolio-wrapper">Veiw
                                       Live Project
                                       <span class="icon_box">
                                          <i class="icon_first fa-light fa-arrow-right"></i>
                                          <i class="icon_second fa-light fa-arrow-right"></i>
                                       </span>
                                    </button>
                                 </div> --}}
                              </div>
                              <div class="project-wrapper">
                                 <img src="{{asset('storage/'.$portfolio->image)}}" alt="Images" />
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div id="portfolio-wrapper-{{ $portfolio->id }}" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
                         <div class="popup_modal_img">
                            <img src="{{asset('storage/'.$portfolio->image)}}" alt="" />
                         </div>
                         <div class="popup_modal_content">
                            <div class="portfolio_info">
                               <div class="portfolio_info_text" style="max-width: calc(70% - 25px);">
                                  <h2 class="title">{{$portfolio->name}}</h2>
                                  <div class="desc">
                                     <p>
                                        {{$portfolio->short_description}}
                                     </p>
                                  </div>
                                  {{-- <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a> --}}
                               </div>
                               <div class="portfolio_info_items" style="max-width: calc(30% - 25px);">
                                  <div class="info_item">
                                     <div class="key">Category</div>
                                     <div style="background-color:#2a1454;border-radius: 25px;font-size: 16px;line-height: 1;padding: 8px 10px;transition: all 0.4s ease-in-out 0s;width: max-content;margin-top: 10px">{{$portfolio->category->name}}</div>
                                  </div>
                               </div>
                            </div>
                            <div class="portfolio_gallery owl-carousel">
                               @foreach ($portfolio->getMedia() as $media)
                               {{-- @dd($media->getUrl()) --}}
                               <div class="gallery_item">
                                  <img src="{{$media->getUrl()}}" alt="" />
                               </div>
    
                               @endforeach
    
                            </div>
                            <div class="portfolio_description">
                               <h2 class="title">Project Description</h2>
                               <div class="desc">
                                  <p>
                                     {{$portfolio->long_description}}
                                  </p>
                               </div>
                            </div>
                            <div class="portfolio_story_approach">
                               <div class="portfolio_story">
                                  <div class="story_title">
                                     <h4 class="title">Features</h4>
                                  </div>
                                  <div class="story_content">
                                     <p>
                                        {!! $portfolio->features !!}
                                     </p>
                                  </div>
                               </div>
                               {{-- <div class="portfolio_approach">
                                  <div class="approach_title">
                                     <h4 class="title">OUR APPROACH</h4>
                                  </div>
                                  <div class="approach_content">
                                     <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration in some form, by
                                        injected humour, or randomised words which don't look even slightly believable. If you are going
                                        to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                                        are many variations of
                                        passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to
                                        be sure there isn't anything embarrassing hidden in the middle of text.
                                     </p>
                                  </div>
                               </div> --}}
                            </div> 
                            <div class="portfolio_navigation mt-3">
                               {{-- <div class="navigation_item prev-project">
                                  <a href="#" class="project">
                                     <i class="fal fa-arrow-left"></i>
                                     <div class="nav_project">
                                        <div class="label">Previous Project</div>
                                        <h3 class="title">Sebastian</h3>
                                     </div>
                                  </a>
                               </div>
                               <div class="navigation_item next-project">
                                  <a href="#" class="project">
                                     <div class="nav_project">
                                        <div class="label">Next Project</div>
                                        <h3 class="title">Qwillo</h3>
                                     </div>
                                     <i class="fal fa-arrow-right"></i>
                                  </a>
                               </div> --}}
                            </div>
                         </div>
                      </div>

                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @endif
    <!-- end: Portfolio Area -->

    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
       <div class="popup_modal_img">
          <img src="{{asset('website/assets/img/portfolio/modal-img.jpg')}}" alt="" />
       </div>
       <div class="popup_modal_content">
          <div class="portfolio_info">
             <div class="portfolio_info_text">
                <h2 class="title">DStudio</h2>
                <div class="desc">
                   <p>
                      They are was greater open above shelter lets itself under appear sixth open gathering made upon
                      can't own above midst
                      gathering gathered he one us saying can't divide.
                   </p>
                </div>
                <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
             </div>
             <div class="portfolio_info_items">
                <div class="info_item">
                   <div class="key">Category</div>
                   <div class="value">Web Design</div>
                </div>
                <div class="info_item">
                   <div class="key">Client</div>
                   <div class="value">Artboard Studio</div>
                </div>
                <div class="info_item">
                   <div class="key">Start Date</div>
                   <div class="value">August 20, 2023</div>
                </div>
                <div class="info_item">
                   <div class="key">Designer</div>
                   <div class="value"><a href="#">ThemeJunction</a></div>
                </div>
             </div>
          </div>
          <div class="portfolio_gallery owl-carousel">
             <div class="gallery_item">
                <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="" />
             </div>
             <div class="gallery_item">
                <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="" />
             </div>
             <div class="gallery_item">
                <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="" />
             </div>
             <div class="gallery_item">
                <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="" />
             </div>
          </div>
          <div class="portfolio_description">
             <h2 class="title">Project Description</h2>
             <div class="desc">
                <p>
                   The goal is there are many variations of passages of Lorem Ipsum available, but the majority have
                   suffered alteration in some
                   form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
                <p>
                   There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                   alteration in some form, by
                   injected humour, or randomised words which don't look even slightly believable. If you are going to
                   use a passage of Lorem
                   Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                </p>
             </div>
          </div>
          <div class="portfolio_story_approach">
             <div class="portfolio_story">
                <div class="story_title">
                   <h4 class="title">The story</h4>
                </div>
                <div class="story_content">
                   <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by
                      injected humour, or randomised words which don't look even slightly believable. If you are going
                      to use a passage of Lorem
                      Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                      are many variations of
                      passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                      injected humour, or
                      randomised words which don't look even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to
                      be sure there isn't anything embarrassing hidden in the middle of text.
                   </p>
                </div>
             </div>
             <div class="portfolio_approach">
                <div class="approach_title">
                   <h4 class="title">OUR APPROACH</h4>
                </div>
                <div class="approach_content">
                   <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by
                      injected humour, or randomised words which don't look even slightly believable. If you are going
                      to use a passage of Lorem
                      Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                      are many variations of
                      passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                      injected humour, or
                      randomised words which don't look even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to
                      be sure there isn't anything embarrassing hidden in the middle of text.
                   </p>
                </div>
             </div>
          </div>
          <div class="portfolio_navigation">
             <div class="navigation_item prev-project">
                <a href="#" class="project">
                   <i class="fal fa-arrow-left"></i>
                   <div class="nav_project">
                      <div class="label">Previous Project</div>
                      <h3 class="title">Sebastian</h3>
                   </div>
                </a>
             </div>
             <div class="navigation_item next-project">
                <a href="#" class="project">
                   <div class="nav_project">
                      <div class="label">Next Project</div>
                      <h3 class="title">Qwillo</h3>
                   </div>
                   <i class="fal fa-arrow-right"></i>
                </a>
             </div>
          </div>
       </div>
    </div>
    <!-- end: Portfolio Popup -->

    <!-- start: Service Area -->
    <section class="service-section">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="section-header text-center">
                   <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Services</h2>
                   <p class="wow fadeInUp text-uppercase" data-wow-delay=".4s">Offerd Services</p>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-6">
                <div class="service-item wow fadeInLeft" data-wow-delay=".3s">
                   <div class="service-icon">
                      <i class="flaticon-code"></i>
                   </div>
                   <div class="service-content">
                      <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">Web
                            Design</button>
                      </h5>
                      <div class="desc">
                         <p>I design visually appealing, user-friendly websites that enhance your brand and engage your audience. Whether you need a fresh look or a complete redesign, I ensure your site stands out.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="service-item wow fadeInRight" data-wow-delay=".3s">
                   <div class="service-icon">
                      <i class="flaticon-bezier-tool"></i>
                   </div>
                   <div class="service-content">
                      <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">Web
                            Development</button>
                      </h5>
                      <div class="desc">
                         <p>I create robust, scalable websites tailored to your needs. Using the latest technologies, I develop custom web applications that are both functional and future-proof.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="service-item wow fadeInLeft" data-wow-delay=".4s">
                   <div class="service-icon">
                      <i class="flaticon-browser"></i>
                   </div>
                   <div class="service-content">
                      <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">Mobile App</button>
                      </h5>
                      <div class="desc">
                         <p>I build high-quality mobile apps for Android and iOS, focusing on intuitive design and seamless user experience. From concept to deployment, I bring your mobile app ideas to life.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Service Area -->

    <!-- start: Service Popup -->
    <div id="service-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
       <div class="popup_modal_img">
          <img src="./assets/img/services/modal-img.jpg" alt="" />
       </div>
       <div class="popup_modal_content">
          <div class="service_details">
             <div class="row">
                <div class="col-lg-7 col-xl-8">
                   <div class="service_details_content">
                      <div class="service_info">
                         <h6 class="subtitle">SERVICES</h6>
                         <h2 class="title">UI/UX Design</h2>
                         <div class="desc">
                            <p>
                               Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst car boot a
                               load of old tosh is
                               cracking goal blow off telling brown.
                            </p>

                            <p>
                               Brolly show off show off pick your nose and blow off well A bit of how’s your father
                               tomfoolery blimey, me old
                               mucker starkers Queen’s English dropped a clanger bite your arm spiffing good time
                               burke Why chancer. Hotpot bum
                               bag cracking goal young delinquent naff bugger cup of chars bender loo it’s all gone to
                               pot the nancy cheeky.
                            </p>

                            <p>
                               At public school cras bog some dodgy chav Richard Why argy bargy vagabon William bender
                               matie boy, off his nut
                               chancer Jeffrey up the kyver say mufty you mug ummm telling pear shaped Oxford owt to
                               do with me do one so said
                               are you taking his.
                            </p>
                         </div>
                         <h3 class="title">Services Process</h3>
                         <div class="desc">
                            <p>
                               Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst car boot a
                               load of old tosh is
                               cracking goal blow off telling brown.
                            </p>
                         </div>
                         <ul>
                            <li>Reinvent Your Business to Better</li>
                            <li>Pioneering the Internet's First</li>
                            <li>Pioneering the Design World's First</li>
                            <li>Pioneering the Design World's First</li>
                            <li>Pioneering the Design World's First</li>
                            <li>Pioneering the Design World's First</li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                   <div class="tj_main_sidebar">
                      <div class="sidebar_widget services_list">
                         <div class="widget_title">
                            <h3 class="title">All Services</h3>
                         </div>
                         <ul>
                            <li class="active">
                               <button>
                                  <i class="flaticon-design"></i>
                                  Branding Design
                               </button>
                            </li>
                            <li>
                               <button>
                                  <i class="flaticon-3d-movie"></i>
                                  3D Animation
                               </button>
                            </li>
                            <li>
                               <button>
                                  <i class="flaticon-ux-design"></i>
                                  UI/UX Design
                               </button>
                            </li>
                            <li>
                               <button>
                                  <i class="flaticon-web-design"></i>
                                  Web Design
                               </button>
                            </li>
                            <li>
                               <button>
                                  <i class="flaticon-ui-design"></i>
                                  App Design
                               </button>
                            </li>
                         </ul>
                      </div>
                      <div class="sidebar_widget contact_form">
                         <div class="widget_title">
                            <h3 class="title">Get in Touch</h3>
                         </div>
                         <form action="index.html">
                            <div class="form_group">
                               <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" />
                            </div>
                            <div class="form_group">
                               <input type="email" name="semail" id="semail" placeholder="Email" autocomplete="off" />
                            </div>
                            <div class="form_group">
                               <textarea name="smessage" id="smessage" placeholder="Your message"
                                  autocomplete="off"></textarea>
                            </div>
                            <div class="form_btn">
                               <button class="btn tj-btn-primary" type="submit">Send Message</button>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- end: Service Popup -->

    <!-- start: Counter Area -->
    <section class="counter-section">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="funfact-area">
                   <div class="row">
                      <div class="col-6 col-lg-3">
                         <div
                            class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="number"><span class="odometer" data-count="5">5</span></div>
                            <div class="text">Years of <br />Experience</div>
                         </div>
                      </div>
                      <div class="col-6 col-lg-3">
                         <div
                            class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                            data-wow-delay=".4s">
                            <div class="number"><span class="odometer" data-count="50">50</span>+</div>
                            <div class="text">Websites <br /></div>
                         </div>
                      </div>
                      <div class="col-6 col-lg-3">
                        <div
                           class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                           data-wow-delay=".4s">
                           <div class="number"><span class="odometer" data-count="10">10</span>+</div>
                           <div class="text">Mobile Apps <br /></div>
                        </div>
                     </div>
                      <div class="col-6 col-lg-3">
                         <div
                            class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                            data-wow-delay=".5s">
                            <div class="number"><span class="odometer" data-count="80">80</span></div>
                            <div class="text">Happy <br />Clients</div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Counter Area -->

    <!-- start: Works Area -->
    <section class="works-section style-2">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="section-header text-center">
                   <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Resume</h2>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-12">
                <div class="works-wrapper">
                   <div class="works-content-item">
                      <h3 class="title wow fadeInLeft" data-wow-delay=".3s">Education</h3>
                      <div class="works-inner wow fadeInUp" data-wow-delay=".4s">
                         <div class="works-item">
                            <div class="works-icon">
                               <i class="flaticon-graduation-cap"></i>
                            </div>
                            <div class="works-content">
                               <span class="number">2020 - 2024</span>
                               <h5 class="title">Managment Information Systems</h5>
                               <span class="sub-title">Delta Academy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="works-content-item">
                      <h3 class="title wow fadeInRight" data-wow-delay=".3s">Work Experience</h3>
                      <div class="works-inner wow fadeInUp" data-wow-delay=".4s">
                         <div class="works-item">
                            <div class="works-icon">
                               <i class="flaticon-suitcase"></i>
                            </div>
                            <div class="works-content">
                               <span class="number">2019 - 2020</span>
                               <h5 class="title">Web developer</h5>
                               <span class="sub-title">Nawy Media</span>
                            </div>
                         </div>
                         <div class="works-item">
                            <div class="works-icon">
                               <i class="flaticon-suitcase"></i>
                            </div>
                            <div class="works-content">
                               <span class="number">2020 - 2021</span>
                               <h5 class="title">Backend Developer</h5>
                               <span class="sub-title">Najtaz</span>
                            </div>
                         </div>
                         <div class="works-item">
                            <div class="works-icon">
                               <i class="flaticon-suitcase"></i>
                            </div>
                            <div class="works-content">
                               <span class="number">2021 - 2024</span>
                               <h5 class="title">Backend developer</h5>
                               <span class="sub-title">onCall company</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Works Area -->

    <!-- start: Skills Area -->
    <section class="skills-section style-3">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="section-header text-center">
                   <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                   <p class="text-uppercase wow fadeInUp" data-wow-delay=".4s">
                      Top Skills
                   </p>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-12">
                <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                    
                   <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                      <div class="skill-inner">
                         <div class="icon-box">
                            <img src="{{asset('website/assets/img/icons/laravel.svg')}}" alt="" />
                         </div>
                         <!-- <div class="number">95%</div> -->
                      </div>
                      <p>laravel</p>
                   </div>
                   <div class="skill-item wow fadeInUp" data-wow-delay=".4s">
                      <div class="skill-inner">
                         <div class="icon-box">
                            <img src="{{asset('website/assets/img/icons/php.svg')}}" alt="" />
                         </div>
                         <!-- <div class="number">80%</div> -->
                      </div>
                      <p>PHP</p>
                   </div>
                   <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                      <div class="skill-inner">
                         <div class="icon-box">
                            <img src="{{asset('website/assets/img/icons/mysql.svg')}}" alt="" />
                         </div>
                         <!-- <div class="number">90%</div> -->
                      </div>
                      <p>MySQL</p>
                   </div>
                   <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="skill-inner">
                       <div class="icon-box">
                          <img src="{{asset('website/assets/img/icons/livewire.svg')}}" alt="" />
                       </div>
                       <!-- <div class="number">75%</div> -->
                    </div>
                    <p>Livewire</p>
                 </div>
                 <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                    <div class="skill-inner">
                       <div class="icon-box">
                          <img src="{{asset('website/assets/img/icons/filament.webp')}}" alt="" />
                       </div>
                       <!-- <div class="number">80%</div> -->
                    </div>
                    <p>Filament</p>
                 </div>
                   <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                      <div class="skill-inner">
                         <div class="icon-box">
                            <img src="{{asset('website/assets/img/icons/html.svg')}}" alt="" />
                         </div>
                         <!-- <div class="number">90%</div> -->
                      </div>
                      <p>Html</p>
                   </div>
                   <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="skill-inner">
                        <div class="icon-box">
                            <img src="{{asset('website/assets/img/icons/css.svg')}}" alt="" />
                        </div>
                        <!-- <div class="number">65%</div> -->
                        </div>
                        <p>Css</p>
                    </div>
                    <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="{{asset('website/assets/img/icons/javascript.svg')}}" alt="" />
                           </div>
                           <!-- <div class="number">55%</div> -->
                        </div>
                        <p>JavaScript</p>
                    </div>
                    <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="{{asset('website/assets/img/icons/bootstrap.svg')}}" alt="" />
                           </div>
                           <!-- <div class="number">80%</div> -->
                        </div>
                        <p>Bootstrap</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="{{asset('website/assets/img/icons/git.svg')}}" alt="" />
                           </div>
                           <!-- <div class="number">90%</div> -->
                        </div>
                        <p>Git</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="{{asset('website/assets/img/icons/rest.svg')}}" alt="" />
                           </div>
                           <!-- <div class="number">95%</div> -->
                        </div>
                        <p>Rest Api</p>
                     </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Skills Area -->

    <!-- start: Testimonial Area -->
    {{-- <section class="testimonial-section style-3">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="testimonials-widget">
                   <div class="owl-carousel testimonial-carousel">
                      <div class="testimonial-item wow fadeInUp" data-wow-delay=".3s">
                         <div class="logo-box">
                            <img src="assets/img/testimonials/logo/1.png" alt="" />
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint0_linear_263_588)" />
                               <defs>
                                  <linearGradient id="paint0_linear_263_588" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint1_linear_263_589)" />
                               <defs>
                                  <linearGradient id="paint1_linear_263_589" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">Taylor is a professional really helps my business by Designer he really
                            helps my business by providing value to my business. Taylor is a professional Designer
                            providing he really helps my business by providing value to my business. </p>
                         <div class="testimonial-feature-item">
                            <div class="auother-images">
                               <img src="assets/img/testimonials/user/1.jpg" alt="Images">
                            </div>
                            <div class="feature-content">
                               <h4 class="name">Brandon Fraser</h4>
                               <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div>
                         </div>
                      </div>
                      <div class="testimonial-item wow fadeInUp" data-wow-delay=".4s">
                         <div class="logo-box">
                            <img src="assets/img/testimonials/logo/1.png" alt="" />
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint2_linear_263_511)" />
                               <defs>
                                  <linearGradient id="paint2_linear_263_511" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint3_linear_263_510)" />
                               <defs>
                                  <linearGradient id="paint3_linear_263_510" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">Taylor is a professional really helps my business by Designer he really
                            helps my business by providing value to my business. Taylor is a professional Designer
                            providing he really helps my business by providing value to my business. </p>
                         <div class="testimonial-feature-item">
                            <div class="auother-images">
                               <img src="assets/img/testimonials/user/2.jpg" alt="Images">
                            </div>
                            <div class="feature-content">
                               <h4 class="name">Tim Bailey</h4>
                               <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div>
                         </div>
                      </div>
                      <div class="testimonial-item wow fadeInUp" data-wow-delay=".5s">
                         <div class="logo-box">
                            <img src="assets/img/testimonials/logo/1.png" alt="" />
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint4_linear_263_512)" />
                               <defs>
                                  <linearGradient id="paint4_linear_263_512" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint5_linear_263_513)" />
                               <defs>
                                  <linearGradient id="paint5_linear_263_513" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">Taylor is a professional really helps my business by Designer he really
                            helps my business by providing value to my business. Taylor is a professional Designer
                            providing he really helps my business by providing value to my business. </p>
                         <div class="testimonial-feature-item">
                            <div class="auother-images">
                               <img src="assets/img/testimonials/user/1.jpg" alt="Images">
                            </div>
                            <div class="feature-content">
                               <h4 class="name">Brandon Fraser</h4>
                               <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div>
                         </div>
                      </div>
                      <div class="testimonial-item wow fadeInUp" data-wow-delay=".6s">
                         <div class="logo-box">
                            <img src="assets/img/testimonials/logo/1.png" alt="" />
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint6_linear_263_514)" />
                               <defs>
                                  <linearGradient id="paint6_linear_263_514" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint7_linear_263_515)" />
                               <defs>
                                  <linearGradient id="paint7_linear_263_515" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">Taylor is a professional really helps my business by Designer he really
                            helps my business by providing value to my business. Taylor is a professional Designer
                            providing he really helps my business by providing value to my business. </p>
                         <div class="testimonial-feature-item">
                            <div class="auother-images">
                               <img src="assets/img/testimonials/user/2.jpg" alt="Images">
                            </div>
                            <div class="feature-content">
                               <h4 class="name">Brandon Fraser</h4>
                               <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div>
                         </div>
                      </div>
                      <div class="testimonial-item wow fadeInUp" data-wow-delay=".7s">
                         <div class="logo-box">
                            <img src="assets/img/testimonials/logo/1.png" alt="" />
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint8_linear_263_512)" />
                               <defs>
                                  <linearGradient id="paint8_linear_263_512" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint9_linear_263_513)" />
                               <defs>
                                  <linearGradient id="paint9_linear_263_513" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">Taylor is a professional really helps my business by Designer he really
                            helps my business by providing value to my business. Taylor is a professional Designer
                            providing he really helps my business by providing value to my business. </p>
                         <div class="testimonial-feature-item">
                            <div class="auother-images">
                               <img src="assets/img/testimonials/user/1.jpg" alt="Images">
                            </div>
                            <div class="feature-content">
                               <h4 class="name">Brandon Fraser</h4>
                               <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div>
                         </div>
                      </div>
                      <div class="testimonial-item wow fadeInUp" data-wow-delay=".8s">
                         <div class="logo-box">
                            <img src="assets/img/testimonials/logo/1.png" alt="" />
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint10_linear_263_514)" />
                               <defs>
                                  <linearGradient id="paint10_linear_263_514" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint11_linear_263_515)" />
                               <defs>
                                  <linearGradient id="paint11_linear_263_515" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">Taylor is a professional really helps my business by Designer he really
                            helps my business by providing value to my business. Taylor is a professional Designer
                            providing he really helps my business by providing value to my business. </p>
                         <div class="testimonial-feature-item">
                            <div class="auother-images">
                               <img src="assets/img/testimonials/user/1.jpg" alt="Images">
                            </div>
                            <div class="feature-content">
                               <h4 class="name">Brandon Fraser</h4>
                               <span class="designation">SEO Specialist, Theme Junction</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section> --}}
    <!-- end: Testimonial Area -->

    <!-- start: Faq Area -->
    <section class="faq-section">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="section-header text-center">
                   <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Your Questions and Answers</h2>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-12">
                <div class="accordion tj-faq" id="faqOne">
                   <div class="accordion-item active wow fadeInUp" data-wow-delay=".4s">
                      <button class="faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                         aria-expanded="true">
                         Can you help with website redesigns?
                      </button>
                      <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                         <div class="accordion-body faq-text">
                            <p>Yes, I can assist with redesigning your website to improve its look, feel, and functionality.</p>
                         </div>
                      </div>
                   </div>
                   <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#faq-2" aria-expanded="false">
                         Do you offer SEO services?
                      </button>
                      <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                         <div class="accordion-body faq-text">
                            <p>While my primary focus is on web development, I can incorporate basic SEO best practices into your website to help improve its visibility in search engines.</p>
                         </div>
                      </div>
                   </div>
                   <div class="accordion-item wow fadeInUp" data-wow-delay=".6s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#faq-3" aria-expanded="false">
                         What is your development process?
                      </button>
                      <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                         <div class="accordion-body faq-text">
                            <p>My development process includes initial consultation, project planning, design and development, testing, and deployment, followed by ongoing maintenance and support.</p>
                         </div>
                      </div>
                   </div>
                   <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#faq-4" aria-expanded="false">
                         How do you handle project timelines and deadlines?
                      </button>
                      <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                         <div class="accordion-body faq-text">
                            <p>work closely with my clients to establish clear timelines and deadlines, ensuring that projects are completed on schedule.</p>
                         </div>
                      </div>
                   </div>
                   <div class="accordion-item wow fadeInUp" data-wow-delay=".8s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#faq-5" aria-expanded="false">
                         How can I get started with a project?
                      </button>
                      <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                         <div class="accordion-body faq-text">
                            <p>To get started, you can contact me through my website’s contact form or email me directly or use whatsapp number to discuss your project requirements and goals.</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Faq Area -->

    <!-- start: Text Area -->
    <section class="text-section">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="section-header">
                   <div class="heading-left">
                      <p class="wow fadeInUp" data-wow-delay=".3s">Want to start a project?</p>
                      <h2 id="anim" class="section-title wow fadeInUp" data-wow-delay=".4s">Let’s have a chat</h2>
                   </div>
                   <div class="chat-mail wow fadeInRight" data-wow-delay=".5s">
                      <a class="link" target="_blank" href="https://wa.me/+201095895224">01061851679 <i
                            class="fa-light fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- end: Text Area -->

    <section class="contact-section" id="contact-section">
        <div class="container">
           <div class="row">
              <div class="col-lg-6 col-md-7 order-2 order-md-1">
                 <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                    <div class="section-header">
                       <h2 class="section-title">Let’s work together!</h2>
                       <p>I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                    </div>

                    <div class="tj-contact-form">
                       <form id="contact-form">
                        @csrf
                          <div class="row gx-3">
                             <div class="col-sm-6">
                                <div class="form_group">
                                   <input type="text" name="first_name" id="conName" placeholder="First name"
                                      autocomplete="off" required/>
                                </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="form_group">
                                   <input type="text" name="last_name" id="conLName" placeholder="Last name"
                                      autocomplete="off" />
                                </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="form_group">
                                   <input type="email" name="email" id="conEmail" placeholder="Email address"
                                      autocomplete="off" />
                                </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="form_group">
                                   <input type="tel" name="phone" id="conPhone" placeholder="Phone number"
                                      autocomplete="off" required/>
                                </div>
                             </div>
                             <div class="col-12">
                                <div class="form_group">
                                   <select name="service" id="conService" class="tj-nice-select" required>
                                      <option value="" selected disabled>Choose Service</option>
                                      <option value="web_development">web development</option>
                                      <option value="mobile">Mobile Development</option>
                                      <option value="ui">UI/UX</option>
                                      <option value="graphic">Graphic Design</option>
                                      <option value="video">Video Editing</option>
                                   </select>
                                </div>
                             </div>
                             <div class="col-12">
                                <div class="form_group">
                                   <textarea name="message" id="conMessage" placeholder="Message" required></textarea>
                                </div>
                             </div>
                             <div class="col-12">
                                <div class="form_btn">
                                   <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                </div>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>

              <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                 <div class="contact-info-list">
                    <ul class="ul-reset">
                       <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                          data-wow-delay=".4s">
                          <div class="icon-box">
                             <i class="flaticon-phone-call"></i>
                          </div>
                          <div class="text-box">
                             <p>Phone</p>
                             <a href="tel:201095895224">+201095895224</a>
                          </div>
                       </li>
                       <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                          data-wow-delay=".5s">
                          <div class="icon-box">
                             <i class="flaticon-mail-inbox-app"></i>
                          </div>
                          <div class="text-box">
                             <p>Email</p>
                             <a href="mailto:lahbk227@gmail.com">lahbk227@gmail.com</a>
                          </div>
                       </li>
                       <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                          data-wow-delay=".6s">
                          <div class="icon-box">
                             <i class="flaticon-location"></i>
                          </div>
                          <div class="text-box">
                             <p>Address</p>
                             <a href="#">Alexandria, Egypt</a>
                          </div>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
    </section>

    <!-- BEGIN: Contact Form Success Modal Message -->
    <div class="modal contact_modal" id="message_sent" tabindex="-1">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <span class="modal-title"><strong>Message Sent Successfully</strong></span>
               <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                     class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
               <p>Thank you for contacting us. We will get back to you shortly.<br />Have a great day!</p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- END: Contact Form Success Modal Message -->

   <!-- BEGIN: Contact Form Fail Modal Message -->
   <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <span class="modal-title"><strong>Error</strong></span>
               <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                     class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
               <p>Oops! Something went wrong, please try again.</p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- END: Contact Form Fail Modal Message End -->
 </main>

@endsection