<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPESS Rental Services</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:800|Signika:300,400,600" rel="stylesheet">


        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/spess.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/slick.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/popup.css')}}" rel="stylesheet">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        <script src="{{ URL::asset('/js/popup.js')}}"></script>
        <script src="{{ URL::asset('/js/jquery-ui.min.js')}}"></script>
        <script src="{{ URL::asset('/js/slick.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.bundle.js')}}"></script>    
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="spess-header">
                    <div class="container">
                        <a class="" href="/home" > <img class="spess-logo"  src = "{{ URL::asset('/images/spess.png')}}" alt = "logo"></a>
                    </div>
                </div>
            </div>

<!--ORDER FORM STARTS HERE-->
            <div class="popup" data-popup="popup-1">
                    <div class="popup-inner">
                        <h2 classs="hid">We'd like to hear from you</h2>

                        <div class="form-bg subject">
        
                                <div class="row hid">
                                </div>

                                <div class="row more-form-body pe hid">
                                     <form class="project_fm">
                                     {{csrf_field()}}
                                      <div class="form-group">
                                       <select type="text" class="form-control" name="">
                                         <option>--Which service would you like us to quote for</option>
                                         <option>Heavy equipment transportion</option>
                                         <option>General & Specialized construction equipment</option>
                                         <option>Supply of Protective Equipment</option>
                                         <option>General Logistics Support</option>
                                       </select>
                                      </div>
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="your name" name="">
                                      </div>
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="your email" name="">
                                      </div>

                                      <div class="form-group "  >
                                        <input type="text" class="form-control"  placeholder="mobile number" name="">
                                      </div>

                                      <button type="submit" class="spess-cta"><b class="">Get a Quote</b> <i class="fa fa-paper-plane"></i></button>
                                    </form>
                                </div>
                        </div> 


                        <p><a data-popup-close="popup-1" href="#" class="hid">Close</a></p>
                        <a class="popup-close" data-popup-close="popup-1" class="hid" href="#">x</a>

                        </div>
                </div>
<!--END OF ORDER FORM-->

            <div class="row">
                <div class="spess-heroslider">
                    <div class="spess-heroslider1" style="background-image: url('/images/hero-image1.jpg');height:600px;">
                        <div class="container">
                                <div class="col-md-5">
                                    <h2>Logistical Services</h2>
                                     <h1><span class="red">SMALL AND LARGE TRUCKS FOR HIRE</span></h1>
                                     <button class="spess-cta" data-popup-open="popup-1">Get a Quote <i class="fa fa-chevron-circle-right"></i></button>
                                </div>
                        </div>
                    </div>

                    <div class="spess-heroslider2" style="background-image: url('/images/hero-image2.jpg');height:600px;">
                        <div class="container">
                            <div class="col-md-6">
                                <h2>Plant & Machinery</h2>
                                <h1><span class="red">GRADERS, DOZERS, BACKHOES COMPACTORS FOR HIRE</span></h1>
                                 <button class="spess-cta" data-popup-open="popup-1">Get a Quote<i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="spess-heroslider3" style="background-image: url('/images/hero-image3.jpg');height:600px;">
                        <div class="container">
                            <div class="col-md-6">
                                <h2>Heavy Cargo Transportation</h2>
                                <h1><span class="red">BARGING, WAREHOUSING<br>RAIL, AND ROAD SERVICES</span></h1>
                                 <button class="spess-cta" data-popup-open="popup-1">Get a Quote<i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="spess-heroslider4" style="background-image: url('/images/hero-image4.jpg');height:600px;">
                        <div class="container">
                            <div class="col-md-6">
                                <h2>Personal Protective Equipment</h2>
                                <h1><span class="red">SUPPLIES TO GEOTHERMAL, CONSTRUCTION, OIL AND GAS INDUSTRY</span></h1>
                                 <button class="spess-cta" data-popup-open="popup-1">Get a Quote<i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="services">
                        <div class="row">
                            <h1><span class="blue"> Our</span><span class="red"> Services</span></h1>

                            <div class="col-md-4">
                                <div class="service-wrapper">
                                     <img class="service-icons"  src = "{{ URL::asset('/images/service-icon1.png')}}" alt = "service-icon">
                                    <h4>LOGISTICAL SERVICES</h4>
                                    <p>SPESS Ltd specializes its supplies in geothermal, construction, oil and gas industry to try and close the gap that exists in this industry. We ensure that we stick to our high quality values in every supplies we do.</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-wrapper">
                                    <img class="service-icons"  src = "{{ URL::asset('/images/service-icon2.png')}}" alt = "service-icon">
                                    <h4>PLANT AND MACHINERY</h4>
                                    <p>At SPESS Ltd, we know that every one's rental needs are different. From the smallest economical car to the largest commercial truck, or a great one way migration to getting to a business meeting on time</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-wrapper">
                                    <img class="service-icons"  src = "{{ URL::asset('/images/service-icon3.png')}}" alt = "service-icon">
                                    <h4>SUPPLY OF PPE</h4>
                                    <p>SPESS Ltd specializes its supplies in geothermal, construction, oil and gas industry to try and close the gap that exists in this industry. We ensure that we stick to our high quality values in every supplies we do.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-us">
                        <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="aboutus-wrapper">
                                            <h1><span class="red"> About</span><span class="blue"> Us</span></h1>
                                            <h5 class="about-us-text"><span class="bold">SPESS Rental Services Ltd</span> is a privately held Limited liability company that was established  in January 2014 with a goal to provide excellent result by providing top quality supplies and reliable integrated services that meets our client`s needs. We dedicate ourselves to be a customer focused company that provides the best in products and services to our customers in Eastern Africa and global at large.</h5>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="vision">
                                            <h4><span class="red">VISION</span></h4>
                                            <p>To be the world leader in provision of equipment and related services, by doing this we will earn our client`s enthusiasm through continuous improvement driven by the integrity, teamwork and innovation of spess people to be a company that our shareholders and society want.</p>
                                        </div>

                                        <div class="mision">
                                            <h4><span class="red">MISSION</span></h4>
                                            <p>We strive to set, by example the standards for excellence and ethics in our industry, by pledging ourselves to seek continuous improvement through team effort, to do “whatever it takes” to deliver exceptional performance for our customers</p>
                                        </div>

                                        <div class="values">
                                            <h4><span class="red">VALUES</span></h4>
                                            <p>SPESS operation is guided by the following values;
                                            <li class="spess-text"><b>Quality</b> - We strive at providing quality supplies and services that will earn our client`s enthusiasm.
                                            </li>

                                            <li class="spess-text"><b>Professional</b> - SPESS Ltd is committed to provide professional, courteous, and knowledgeable services to it esteemed clients.
                                            </li>

                                            <li class="spess-text"><b>Reliability</b> - We are committed to provide consistently prompt supplies and services to exceed our customers’ expectations.
                                            </li></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="client-testimony">
                    <div class="container">
                        <h1>What Our Clients Say About us:</h1>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="testimony">
                                    <img class="testimony-speechmark"  src = "{{ URL::asset('/images/speechmark.png')}}" alt = "service-icon">
                                    <h4>We have relied on <b>SPESS Rental Services Ltd</b> for all our Logistical needs and they have proved to be a very reliable partner. They have always kept their word, delivering in good time and insisting on quality of services at every point. They are professionals who know their work which makes them reliable and we have always trusted them with ours as well.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1><span class="blue">Visit Us</span></h1>
                                <div id="map"></div>
                                    <div class="col-md-6">
                                        <h4>Watermark businesspark,</h4>
                                        <p>Bay court, Ndege road,<br>Off Langata road.<br>P.O Box 10298-00400 Nairobi, Kenya.</p>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="contacts-wrapper">
                                            <p>+254 742 360 766<br>+254 710 211 181<br>+254 724 723 980<br><b>Email:</b> info@spessltd.com</p>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                <div class="footer-form-container">
                                    <div class="form-header">
                                        <h4 class="form-title">Still Have a Question?</h4>
                                    </div>

                                    <div class="footer-form-body">
                                         <form class="project_fm">
                                         {{csrf_field()}}
                                          <div class="form-group">
                                            <input type="text" class="form-control no-border form-text" id="project-category" placeholder="Your Name?" name="about">
                                          </div>
                                          
                                          <div class="form-group">
                                            <input type="text" class="form-control no-border form-text"  placeholder="Phone number?" name="budget">
                                          </div>
                                          
                                          <div class="form-group">
                                            <input type="text" class="form-control no-border form-text"  placeholder="Email?" name="deadline">
                                          </div>

                                          <div class="form-group proj_update">
                                            <textarea class="form-control form-text" rows="4" placeholder="Your Message" name="phone"></textarea>
                                          </div>

                                          <button type="button" class="subscribe-button form-text">Submit <i class="fa fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
                $('.spess-heroslider').slick({
                    autoplay:true,
                    arrows: false,
                    fade: true,
                    autoplaySpeed:3000
                });
        </script>

        <script>
              function initMap() {
                var uluru = {lat: -1.3373943, lng: 36.7208522};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 16,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
         </script>

        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM4nUO7TbbgthUAw__ApRCsWY57cqv6Ls&callback=initMap">
        </script>


    </body>
</html>
