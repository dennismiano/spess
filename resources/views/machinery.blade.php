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
                    <div class="machinery-header">
                            <div class="container">
                                    <h1>Plant & Machinery<br>Rentals</h1>
                            </div>
                    </div>
            </div>

            <div class="row">
                    <div class="pages-content">
                        <div class="container">
                            <div class="col-md-8">
                              <h1>Plant & Machinery Rentals</h1>
                              <p>Renting an equipment is a sure convinient way to start on a project fast and free up some cash for other essentials in the project. Thats where we step in to provide you with specialized plant equipment, construction equipment, motor vehicles while being mindful of the value you are getting from the rented equipment. We structure our renting models to give the client least pressure and remaining transparent about the roles and obligations of each party during the tenure</p>

                              <div class="row">
                                        <div class="col-md-4">
                                            <img class="service-thumbnail"  src = "{{ URL::asset('/images/gray.jpg')}}" alt = "service-icon">
                                        </div>

                                        <div class="col-md-4">
                                            <img class="service-thumbnail"  src = "{{ URL::asset('/images/gray.jpg')}}" alt = "service-icon">
                                        </div>

                                        <div class="col-md-4">
                                            <img class="service-thumbnail"  src = "{{ URL::asset('/images/gray.jpg')}}" alt = "service-icon">
                                        </div>
                                </div>
                            </div>


                        <div class="col-md-4">
                            <div class="form">
                                <div class="row">
                                    <div class="form-header">
                                        <h1>Talk to Us</h1>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-body">
                                        <form class="project_fm">
                                             {{csrf_field()}}
                                              <div class="form-group">
                                               <select type="text" class="form-control spess-text" name="">
                                                 <option>--Which service would you like us to quote for</option>
                                                 <option>Heavy equipment transportion</option>
                                                 <option>General & Specialized construction equipment</option>
                                                 <option>Supply of Protective Equipment</option>
                                                 <option>General Logistics Support</option>
                                               </select>
                                              </div>
                                              
                                              <div class="form-group">
                                                <input type="text" class="form-control spess-text"  placeholder="your name" name="">
                                              </div>
                                              
                                              <div class="form-group">
                                                <input type="text" class="form-control spess-text" placeholder="your email" name="">
                                              </div>

                                              <div class="form-group "  >
                                                <input type="text" class="form-control spess-text"  placeholder="mobile number" name="">
                                              </div>

                                              <button type="submit" class="spess-cta"><b class="">Get a Quote</b> <i class="fa fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
            </div>