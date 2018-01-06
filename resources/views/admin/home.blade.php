    <div  class="magic" >
    </div>	
        <div class="container-fluid">
            
            <div class="row">
                <div class="admin-header">
                        <a class="load_ajax" href="/" cl="services"> <img class="spess-admin-logo"  src = "{{ URL::asset('/images/spessadmin.png')}}" alt = "logo"></a>
                        <button class="logout-btn pull-right">Logout  <i class="fa fa-chevron-circle-right"></i></button>
                </div>
            </div>
            
            <div class="row">
                        <div class="col-md-2 col-xs-2">
                            <div class="admin-panel-menu">
                                    <li><a href="/view/message" class="load_ajax" cl="admin_content"><i class="fa  fa-comments adminmenu-icon"></i><span class="hide-element">&nbsp Messages</span></a></li>
                                    <li><a href="/view/order" class="load_ajax" cl="admin_content"><i class="fa  fa-shopping-cart adminmenu-icon"></i><span class="hide-element">&nbsp Orders</span></a></li>
                                    <li><a href="/view/post" class="load_ajax" cl="admin_content"> <i class="fa  fa-align-left adminmenu-icon"></i><span class="hide-element">&nbsp Blog</span></a></li>
                            </div>
                        </div>
                        
                        <div class="col-md-10 col-xs-10">   
                            <div class="admin_content">
                                    <div class="row">
                                        <div class="message-holder">
                                                    <img class="no-message-icon"  src = "{{ URL::asset('/images/admin-panel-img.png')}}" alt = "logo">

                                                        <div class="no-message-msg">
                                                            <h1 class="">Welcome Admin,</h1>
                                                            <p>View, Edit, Update & Delete information with ease.</p>
                                                        </div>
                                                    <div class="how-it-works">
                                                            <h3>How it Works</h3>

                                                            <div class="col-md-2">
                                                            </div>

                                                            <div class="col-xs-10">
                                                                <p>The orders section receives quotation requests from clients who have already shown willingness to purchase a certain service.</p>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
            </div>
<!--
            <div class="row">
                     <div class="admin-panel">
                        <a class="load_ajax header-branding" href="/admin" cl="magic"><h3 class="red">Admin Panel</h3></a>
                        <button class="pull-right">Logout  <i class="fa fa-chevron-circle-right"></i></button>
                    </div>
            </div>
-->
		</div>