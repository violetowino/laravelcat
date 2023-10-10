<!doctype html>
<html lang="en">
 @include('layouts.header')
    <body>
 
        @include('layouts.navbar')


        <div class="contents">
        <h2 class="text-center ab-5 display-3 shadow-sm p-3" style="color: brown;">About Us</h2>
        </div>

        <section>
            <div id="about-2">
                <div class="content-box-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-book"></i>
                                    <h2>MISSION</h2>
                                    <hr>
                                    <p class="fonts"> To provide efficient and reliable car parking solutions that enhance convenience and accessibility for our customers, while prioritizing safety, sustainability, and exceptional service.</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-globe"></i>
                                    <h2>VISION</h2>
                                    <hr>
                                    <p class="fonts"> To become the leading car parking service provider, recognized for our innovation, customer-centric approach, and commitment to creating seamless parking experiences that positively impact urban mobility</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <h2>CORE VALUES</h2>
                                    <hr>
                                    <p class="fonts"> Our Guiding Core Values are;
                                        <li class="fonts">Integrity</li>
                                        <li class="fonts">Innovation</li>
                                        <li class="fonts">Sustainability</li>
                                        <li class="fonts">Safety and Security</li>
                                        <li class="fonts">Customer-Centricity</li>
                                        <li class="fonts">Teamwork and Respect</li>
                                        <li class="fonts">Community Engagement</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        @include('layouts.footer')
    </body>
</html>