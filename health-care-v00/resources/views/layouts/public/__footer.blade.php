<!-- Footer Start -->
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="/images/logo.png" alt="Heal Point" class="img-fluid" width="200">
                    </div>
                    <p>عيادة بيطرية تربط حيواناتها بكبار أخصائيي الرعاية الصحية. احجز مواعيدك بسهولة وأدر رحلتك الصحية معنا</p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100012316723325&mibextid=JRoKGi"><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://x.com/"><i class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/nadeen-qadoomi?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="icofont-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/nadeen_qadomi?igsh=MTVwc2huNzZxcmpkeg=="><i class="icofont-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">روابط سريعة</h4>
                    <div class="divider mb-4" style="background-color: #e12454;"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li><a href="{{ route('doctors') }}">أوجد الطبيب البيطري</a></li>
                        <li><a href="{{ route('about') }}">معلومات عنا</a></li>
                        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                        
                    </ul>
                </div>
            </div>

            <!-- For Doctors -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">للأطباء البيطرية</h4>
                    <div class="divider mb-4" style="background-color: #e12454;"></div>

                    <p>انضم إلى شبكتنا من المتخصصين في الرعاية الصحية وتنمية ممارستك</p>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{ route('register.doctor') }}">سجل عيادتك</a></li>
                        <li><a href="{{ route('doctor.login') }}">تسجيل دخول الطبيب البيطري</a></li>
                    </ul>

                    <a href="{{ route('doctor.login') }}" class="btn btn-main btn-round-full mt-3">انضم إلى شبكتنا</a>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">تواصل معنا</h4>
                    <div class="divider mb-4" style="background-color: #e12454;"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3 text-primary"></i>
                            <span class="h6 mb-0">
                                بريد إلكتروني
                            </span>
                        </div>
                        <h4 class="mt-2"><a href="mailto:info@healpoint.com">Nadeenqadoomi11@gmail.com</a></h4>
                    </div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-phone mr-3 text-primary"></i>
                            <span class="h6 mb-0">اتصل بنا</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+962790000000"> +962796411533</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-location-pin mr-3 text-primary"></i>
                            <span class="h6 mb-0">تفضل بزيارتنا</span>
                        </div>
                        <h4 class="mt-2">عمان,الأردن</h4>
                    </div>
                </div>
            </div>
        </div>

      
    </div>

    <!-- Back to Top -->
    <a href="#" class="backtop js-scroll-trigger">
        <i class="icofont-long-arrow-up"></i>
    </a>
</footer>
<!-- Footer End -->
