<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPESS Rental Services</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/spess.css')}}" rel="stylesheet">      
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


            <div class="row">
                <div class="spess-heroslider">
                    <div class="container">
                        <h3>Logistical Services</h3>
                        <h1>SMALL AND LARGE <br>TRUCKS FOR HIRE</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="services">
                        <div class="row">
                            <h1>Our Services</h1>

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
                <div class="container">
                    <div class="about-us">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>About Us</h1>
                                <p>SPESS Rental services Ltd is a privately held Limited liability company that was established  in January 2014 with a goal to provide excellent result by providing top quality supplies and reliable integrated services that meets our client`s needs. We dedicate ourselves to be a customer focused company that provides the best in products and services to our customers in Eastern Africa and global at large.</p>
                            </div>

                            <div class="col-md-6">
                                <p>Check</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
