<!-- header include  -->
<?php include "../client/app/header.php"; ?>
<!-- header include ENd -->
<!--============= body container =========== -->
<style>
    input:focus,
    textarea:focus,
    select:focus {
        box-shadow: none !important;
    }
</style>
<section style="background-image: url(../client//imageFoleder/background1.jpg);" id="banner">
    <h3 class="line-1 anim-typewriter text-uppercase text-white text-center">So now you’re here you know how to reach us. We’re happy to serve!!</h3>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-tittel-h1">Wait no further! Write to us and we will get back to you shortly.</div>
            </div>
            <div class="col-lg-7">
                <form action="#!" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control border-0 border-bottom" placeholder="Your Full Name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control border-0 border-bottom" placeholder="Company (Optional)">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="tel" class="form-control border-0 border-bottom" placeholder="Phone Number">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="mail" class="form-control border-0 border-bottom" placeholder="Email Address">
                        </div>
                        <div class="col-lg-6 mb-3">
                             <select id="country-select" class="form-select border-0 border-bottom" aria-label="Country">
                                <option hidden selected disabled>Your Country</option>
                        </select>
                        </div>
                        <style>
                            .form-select {
                                color: #737373 !important;
                            }
                        </style>
                        <div class="col-lg-6 mb-3">
                            <select class="form-select border-0 border-bottom" aria-label="Purpose">
                                <option hidden selected disabled>Purpose</option>
                                <option value="Development">Development</option>
                                <option value="Support">Support</option>
                                <option value="Discussion">Discussion</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea class="w-100 form-control border-0 border-bottom" placeholder="About Your Project"></textarea>
                        </div>
                        <div class="col-lg-5">
                            <a href="#!" class="btn btn-primary w-100" role="button">Send Message <i class="fa-solid fa-paper-plane"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 addressMap" style="background-image:url(../client//imageFoleder//worldMap.jpg);">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2">Noida</div>
                <div class="footerAddress mb-2">
                    <img src="../client//imageFoleder//logo//flag-India.webp" alt="india Flag">
                    <div class="text-dark">CodM Software Pvt. Ltd. 2nd Floor, IHDP Business Park, Plot No. 7, Sector 127, Noida, Uttar Pradesh 201303, India</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+91 9871717425" class="text-dark">+91 9871717425</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:hr@Codmsoftware.com" class="text-dark">hr@Codmsoftware.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2">Faridabad</div>
                <div class="footerAddress mb-2">
                    <img src="../client//imageFoleder//logo//flag-India.webp" alt="india Flag">
                    <div class="text-dark">CodM Software Pvt. Ltd. Business Pluss, EF3 Mall, Sector 20A, Faridabad, Haryana 121001, India</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+91 9871717425" class="text-dark">+91 9871717425</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:hr@Codmsoftware.com" class="text-dark">hr@Codmsoftware.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2">United Kingdom</div>
                <div class="footerAddress mb-2">
                    <img src="../client//imageFoleder//logo//flag-uk.webp" alt="uk Flag">
                    <div class="text-dark">Tech14 Networks Ltd. Pvt. Regus Edmund House 12-22, Newhall Street, Birmingham B3 3AS, United Kingdom</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+44 7436934216" class="text-dark">+44 7436934216</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:info@tech14networks.com" class="text-dark">info@tech14networks.com</a>
                </div>
            </div>
        </div>
    </div>
</section>







<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include ENd -->