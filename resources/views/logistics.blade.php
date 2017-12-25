
        <div class="container-fluid">
            <div class="row">
                <div class="spess-header">
                    <div class="container">
                        <a class="" href="/home" > <img class="spess-logo"  src = "{{ URL::asset('/images/spess.png')}}" alt = "logo"></a>

                        <ul class="menu pull-right">
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Logistics Services</a></li>
                            <li><a href="#">Plant Machinery</a></li>
                            <li><a href="#">Protective Equipment</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
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
                    <div class="pages-header">
                            <div class="container">
                                    <h1>Heavy<br>Cargo<br>Transportation</h1>
                            </div>
                    </div>
            </div>

            <div class="row">
                    <div class="container">
                            <div class="pages-content">
                                <h1>Heavy Cargo Transportation</h1>
                                <p>duscius et haribus audis etus, officatio. Et ommolup tatist, ulliqui corest plis pratiun ditium re raeperitatem sum dellument dolorenet accus dollumqui id magnis aut lant andipienimus a velictiam fugiae od quam vollaut fugia volorae ctorehent.
                                Us accus, ut fugiati busciam aspedit ioreritam velessimus que net oditae re dolupid empero et doles ute sit hil ipsum ut destrum la in nonserferi quidebitatem ad mo blacerem fuga. Itas in consequi iundam, quodia cuptatur rest omnit ipitae sed ex et ommos moluptatas que veria nihitatio cor sit doluptat expla dolorum fugiatur sitiis ipsamus nobis alignima dolorae dia velessincil in eaquunto et quo exeritin pro dolenist as endit fuga. Nam sinimo exerchi libeaqui dolore num idipsae pa solupta quo totasit aquatat vercips aperum imagnat</p>
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