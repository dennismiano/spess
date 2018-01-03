    <div  class="magic" >
    </div>	
        <div class="container-fluid">
            
            <div class="row">
                <div class="admin-header">
                        <a class="load_ajax" href="/" cl="services"> <img class="spess-logo"  src = "{{ URL::asset('/images/spess.png')}}" alt = "logo"></a>
                        <button class="logout-btn pull-right">Logout  <i class="fa fa-chevron-circle-right"></i></button>
                </div>
            </div>
            
            <div class="row">
                        <div class="col-md-2 col-xs-3">
                            <div class="admin-panel-menu">
                                    <li><a href="/view/message" class="load_ajax" cl="admin_content"><i class="fa  fa-comments adminmenu-icon"></i><span class="hide-element">&nbsp Messages</span></a></li>
                                    <li><a href="/view/order" class="load_ajax" cl="admin_content"><i class="fa  fa-shopping-cart adminmenu-icon"></i><span class="hide-element">&nbsp Orders</span></a></li>
                                    <li><a href="/view/post" class="load_ajax" cl="admin_content"> <i class="fa  fa-align-left adminmenu-icon"></i><span class="hide-element">&nbsp Blog</span></a></li>
                            </div>
                        </div>
                        
                        <div class="col-md-10 col-xs-9">   
                            <div class="admin_content">
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