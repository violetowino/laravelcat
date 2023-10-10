<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body class="bg-light">
        

        @include('layouts.navbar')

        <div class="contents">
        <h2 class="text-center ab-5 display-3 shadow-sm p-3" style="color: brown;">Contact Us</h2>
        </div>
        
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-8 col-md-6 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded"  height="360px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.12286490899!2d37.002073358037904!3d-1.1353063261187792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4616a21d035d%3A0xd46c6efa3589f45f!2sJuja!5e0!3m2!1sen!2ske!4v1688729411760!5m2!1sen!2ske" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-4 col-md-3">
                    <div class="bg-white p-4 rounded mb-4">                            
                        <div class="col-md-5">
                            <div>
                                <div class="containers">
                                    <div class="contactInfo">
                                        <div class="box">
                                            <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                                            <div class="text">
                                                <h5>Address</h5>
                                                <p>Juja, next to Juja main stage</p>   
                                            </div>
                                        </div> 
                                            
                                        <div class="box">
                                            <div class="icon"><i class="bi bi-telephone-fill"></i></div>
                                            <div class="text">
                                                <h5>Phone</h5>
                                                <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                                                +254733345678</a>
                                
                                                <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                                                    +254722345678</a>
                                            </div>
                                        </div>
                                    
                                        <div class="box">
                                            <div class="icon"><i class="bi bi-envelope-fill"></i></div>
                                            <div class="text">
                                                <h5>Email</h5>
                                                <p id="emailLink">info@neighbourspark.co.ke</p>
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
        <br>

        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-8 col-md-6 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5 class="fw-bold h-font fs-3 mb-2">Talk to Us</h5>
                    
                        <form action="{{ route('store.message')}}" method="post">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="floatingInput" required>
                                <label for="floatingInput">Full Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput" required>
                                <label for="floatingInput">Email Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="phone" name="phone" class="form-control" id="floatingInput" required>
                                <label for="floatingInput">Phone Number</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" id="floatingTextarea" required></textarea>
                                <label for="floatingTextarea">Your Message....</label>
                            </div>

                            <div class="d-flex">
                                <button class="btn btn-sm text-white custom-bg shadow-none">Submit</button>
                            </div>
                        </form>        
                    </div>
                </div>


                <div class="col-lg-4 col-md-3">
                    <div class="bg-white p-4 rounded mb-4">
                        <div class="col-md-5">
                            <div>
                                <div class="containers">
                                    <div class="col-lg-4 p-4">
                                        <h5 class="fw-bold h-font fs-3 mb-2">Follow Us</h5>
                                        <a href="#" class="d-inline-block mb-3">
                                            <span class="badge bg-light text-dark fs-6 p-3">
                                            <i class="bi bi-twitter me-2 text-primary"></i>  Twitter
                                            </span>
                                        </a>

                                        <a href="#" class="d-inline-block mb-3">
                                            <span class="badge bg-light text-dark fs-6 p-3">
                                                <i class="bi bi-instagram me-2 text-danger"></i> Instagram
                                            </span>
                                        </a>
                                        <br>

                                        <a href="#" class="d-inline-block mb-3">
                                            <span class="badge bg-light text-dark fs-6 p-3">
                                                <i class="bi bi-linkedin me-2 text-primary"></i> LinkedIn
                                            </span>
                                        </a>
                                        <br>

                                        <a href="#" class="d-inline-block mb-3">
                                            <span class="badge bg-light text-dark fs-6 p-3">
                                                <i class="bi bi-facebook me-2 text-primary"></i> Facebook
                                            </span>
                                        </a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <br><br>

        @include('layouts.footer')

        <script>
            const emailElement = document.getElementById('emailLink');

            emailElement.addEventListener('mouseenter', () => {
                emailElement.style.cursor = 'pointer';
            });

            emailElement.addEventListener('click', () => {
                const email = emailElement.textContent.trim();
                window.location.href = `mailto:${email}`;
            });
        </script>

    </body>
</html>