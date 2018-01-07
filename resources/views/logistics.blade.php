<div class="row">
                    <div class="pages-header">
                            <div class="container">
                                    <h1>SPESS Heavy Cargo<br>Transportation</h1>
                            </div>
                    </div>
            </div>

            <div class="row">
                    <div class="pages-content">
                        <div class="container">
                            <div class="col-md-8">
                                <h1 class="pages-headerh1">Logistics</h1>
                                <p>We have specialized in handling every kind of cargo, from the small ones that require small to mid sized trucks to the large and bulky cargo that most transporters would not touch, which makes us a single point of your contact for all your transportation needs. This means that your cargo and documentation are handled by a single entity, imagine the convinience, you no longer have to worry about lost delivery documents, transfering cargo and other common difficulties that are experienced in logistics.</p>
                                <p>We have put our focus in logistics so we can efficiently deliver within short notice to the highest standards and satisfaction. We are redefining transport, giving the client more control and creating custom logistics solutions that give the client more flexibility and value for money</p>
                                
                                <div class="row">
                                  <div class="images-holder-h1">
                                        <div class="col-md-4">
                                            <img class="service-thumbnail"  src = "{{ URL::asset('/images/gallery-images/truck1.jpg')}}" alt = "service-icon">
                                        </div>

                                        <div class="col-md-4">
                                            <img class="service-thumbnail"  src = "{{ URL::asset('/images/gallery-images/truck2.jpg')}}" alt = "service-icon">
                                        </div>

                                        <div class="col-md-4">
                                            <img class="service-thumbnail"  src = "{{ URL::asset('/images/gallery-images/truck3.jpg')}}" alt = "service-icon">
                                        </div>
                                  </div>
                                </div>
                            </div>
                        

                        <div class="col-md-4">
                            <div class="form">
                                    <div class="form-header">
                                        <h1>Talk to Us</h1>
                                    </div>

                                    <div class="form-body">
                                        <p>If you have any question regarding any of our services, do not hesitate to ask.
                                         <form class="op">
                                             {{csrf_field()}}
                                              <div class="form-group">
                                               <select type="text" class="form-control spess-text" name="serv">
                                               <option>Which service would you like us to quote for</option>
                                               <option>Heavy equipment transportion</option>
                                               <option>General & Specialized construction equipment</option>
                                               <option>Supply of Protective Equipment</option>
                                               <option>General Logistics Support</option>
                                               </select>
                                              </div>
                                              
                                              <div class="form-group">
                                              <input type="text" class="form-control spess-text"  placeholder="your name" name="name">
                                              </div>
                                              
                                              <div class="form-group">
                                              <input type="email" class="form-control spess-text" placeholder="your email" name="em">
                                              </div>

                                              <div class="form-group "  >
                                              <input type="text" class="form-control spess-text"  placeholder="mobile number" name="ph">
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
            </div>