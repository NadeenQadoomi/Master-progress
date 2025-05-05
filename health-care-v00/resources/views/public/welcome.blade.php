<x-app-layout>
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">شريك حيوانك الصحي الأكثر ثقة</h1>
                        <p class="mb-4 pr-5">نحن هنا لنجعل صحة حيوانك الأليف أولويتنا! احجز موعدك مع أطباء بيطريين ذوي خبرة عالية لضمان الراحة والعناية الأمثل لحيوانك الأليف.</p>

                        <form class="appointment-form" action="{{ route('doctors') }}" method="GET">
                            <div class="appointment-container">
                                <div class="select-group">
                                    <select name="governorate" class="appointment-select" id="governorate">
                                        <option value="" disabled selected>اختر المحافظة</option>
                                        @foreach(['عجلون', 'عمان', 'عقبة', 'بلقاء', 'أربد', 'جرش', 'كرك', 'معان', 'مأدبا', 'مفرق', 'طفيلة', 'زرقاء'] as $gov)
                                            <option value="{{ strtolower($gov) }}">{{ $gov }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="select-group">
                                    <select name="specializations[]" class="appointment-select" id="specialty">
                                        <option value="" disabled selected>Select Specialty</option>
                                        @foreach($specializations as $specialty)
                                            <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="btn-container">
                                    <button type="submit" class="btn btn-main-2 btn-icon btn-round-full">
                                        بحث <i class="icofont-simple-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Doctors Section -->
    <section class="recommended-doctors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-center">
                        <div class="col-lg-7 text-center">
                            <h2 class="section-title">الأطباء البيطرية المميزون</h2>
                            <div class="divider mx-auto my-4"></div>
                        </div>
                    </div>

                    <div class="splide" id="doctors-slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach($featuredDoctors as $doctor)
                                <li class="splide__slide">
                                    <div class="doctor-card">
                                        <img src="{{ $doctor->image ? asset('storage/' . $doctor->image) : asset('images/team/default.jpg') }}"
                                             alt="{{ $doctor->name }}" class="doctor-image">
                                        <div class="doctor-info">
                                            <h3 class="doctor-name">Dr. {{ $doctor->name }}</h3>
                                            <span class="doctor-specialty">{{ $doctor->specialization->name ?? 'General' }}</span>
                                            <div class="btn-container">
                                                <a href="{{ route('doctor', $doctor->id) }}" class="btn btn-main">
                                                    Book <i class="icofont-simple-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="steps-section pt-5 pb-5">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title">كيفية حجز موعد</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="text-muted">خطوات بسيطة للحصول على الرعاية التي تحتاجها</p>
                </div>
            </div>
            <div class="row justify-center gap-5">
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 bg-white rounded shadow-sm">
                        <div class="step-icon mb-4 bg-soft-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="icofont-doctor-alt text-primary" style="font-size: 2rem;"></i>
                            <span class="step-number bg-primary text-white rounded-circle">1</span>
                        </div>
                        <h4 class="text-dark">ابحث عن طبيب بيطري</h4>
                        <p class="text-muted">ابحث حسب نوع الحيوان أو الموقع أو اسم الطبيب البيطري</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 bg-white rounded shadow-sm">
                        <div class="step-icon mb-4 bg-soft-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="icofont-ui-calendar text-primary" style="font-size: 2rem;"></i>
                            <span class="step-number bg-primary text-white rounded-circle">2</span>
                        </div>
                        <h4 class="text-dark">حدد الفترة الزمنية</h4>
                        <p class="text-muted">اختر من بين التواريخ والأوقات المتاحة</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 bg-white rounded shadow-sm">
                        <div class="step-icon mb-4 bg-soft-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="icofont-check-alt text-primary" style="font-size: 2rem;"></i>
                            <span class="step-number bg-primary text-white rounded-circle">3</span>
                        </div>
                        <h4 class="text-dark">تأكيد الحجز</h4>
                        <p class="text-muted">احصل على تأكيد فوري عبر الرسائل القصيرة/البريد الإلكتروني</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialties Grid Section -->
    <section class="specialties-section pt-5 pb-5 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title">أنواع الحيوانات التي نعالجها </h2>
                    <div class="divider mx-auto my-4"></div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="specialty-card d-block p-4 bg-white rounded text-center h-100">
                    <i class="icofont-cat text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-dark">القطط</h5>
                      
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="specialty-card d-block p-4 bg-white rounded text-center h-100">
                    <i class="icofont-dog text-primary mb-3" style="font-size: 2.5rem;"></i>

                        <h5 class="text-dark">الكلاب</h5>
                       
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="specialty-card d-block p-4 bg-white rounded text-center h-100">
                    <i class="icofont-bird text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-dark">الطيور</h5>
                        
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="specialty-card d-block p-4 bg-white rounded text-center h-100">
                    <i class="fas fa-horse text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-dark">الأحصنة</h5>
                      
                    </a>
                </div>
            </div>
           
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="stats-section pt-5 pb-5 bg-primary-darker text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="stat-card text-center">
                        <i class="icofont-doctor mb-3" style="font-size: 3rem;"></i>
                        <h3 class="mt-2"><span class="counter">{{ $stats['doctors_count'] }}</span>+</h3>
                        <p class="mb-0">أطباء بيطرية مؤهلون</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="stat-card text-center">
                        <i class="icofont-google-map mb-3" style="font-size: 3rem;"></i>
                        <h3 class="mt-2"><span class="counter">12</span></h3>
                        <p class="mb-0">المحافظات المشمولة</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-sm-0">
                    <div class="stat-card text-center">
                        <i class="icofont-laughing mb-3" style="font-size: 3rem;"></i>
                        <h3 class="mt-2"><span class="counter">{{ $stats['happy_patients'] }}</span>+</h3>
                        <p class="mb-0">أصحاب الحيوانات السعداء</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-card text-center">
                        <i class="icofont-clock-time mb-3" style="font-size: 3rem;"></i>
                        <h3 class="mt-2" style="color: #e12454;"><span class="counter">24</span>/7</h3>
                        <p class="mb-0">الدعم متاح</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section pt-5 pb-5 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title">ما يقوله أصحاب الحيوانات</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="text-muted">استمع إلى آراء أصحاب الحيوانات الراضين
                        لدينا
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="splide" id="testimonials-slider">
                        <div class="splide__track p-1">
                            <ul class="splide__list">
                                <!-- Testimonial 1 -->
                                <li class="splide__slide">
                                    <div class="testimonial-item bg-white p-4 rounded shadow-sm h-100">
                                        <div class="testimonial-content mb-4">
                                            <i class="icofont-quote-left text-primary mb-3" style="font-size: 1.5rem;"></i>
                                            <p class="font-italic">"وجدتُ طبيب المثالي لحيواني عبر هذه المنصة. كانت عملية الحجز سلسة، وكان الطبيب البيطري ممتازًا."</p>
                                        </div>
                                        <div class="patient-info d-flex align-items-center">
                                            
                                            <div>
                                                <h5 class="mb-1">محمد علي</h5>
                                                <span class="text-muted small">عمان</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Additional testimonials (omitted for brevity)... -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency CTA Section -->
    <section class="emergency-section pt-5 pb-5 bg-primary-darker text-white">
        <div class="container">
            <div class="emergency-cta p-4 rounded">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h3 class="mb-2">هل تحتاج إلى رعاية طارئة؟</h3>
                        <p class="mb-0">تتوفر مواعيد الطوارئ على مدار الساعة طوال أيام الأسبوع مع شبكتنا من العيادات</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="tel:+962790000000" class="btn btn-white btn-round-full">
                            <i class="icofont-phone me-2"></i>
            اتصل الآن: +962796411533
                     
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section pt-5 pb-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title">الأسئلة الشائعة</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="text-muted">ابحث عن إجابات للأسئلة الشائعة حول خدماتنا</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 mb-4">
                    <div class="faq-item bg-gray p-4 rounded">
                        <h5 class="text-dark mb-3">كيف يمكنني حجز موعد؟</h5>
                        <p class="text-muted">استخدم أداة البحث لدينا للعثور على الأطباء حسب التخصص أو الموقع، واختر الفترة الزمنية المفضلة لديك، وأكمل نموذج الحجز</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="faq-item bg-gray p-4 rounded">
                        <h5 class="text-dark mb-3">هل يمكنني إعادة جدولة موعدي؟</h5>
                        <p class="text-muted">نعم، يمكنك إعادة جدولة موعدك قبل 24 ساعة من موعدك من خلال الرابط الموجود في رسالة التأكيد الخاصة بك</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="faq-item bg-gray p-4 rounded">
                        <h5 class="text-dark mb-3">ما هي طرق الدفع التي تقبلونها؟</h5>
                        <p class="text-muted">نقبل الدفع نقدًا في العيادة. قد تقبل بعض العيادات بطاقات الائتمان - سيتم تحديد ذلك عند الحجز.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="faq-item bg-gray p-4 rounded">
                        <h5 class="text-dark mb-3">هل معلوماتي الشخصية آمنة؟</h5>
                        <p class="text-muted">نعم، نستخدم تشفيرًا قياسيًا في الصناعة لحماية جميع بيانات المرضى والامتثال للوائح الخصوصية الطبية</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta pt-5 pb-5 bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <h3 class="text-white mb-2">هل أنت مستعد لحجز موعدك؟</h3>
                    <p class="text-white mb-0">ابحث عن المتخصص المناسب لاحتياجاتك الصحية اليوم</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#search-doctors" class="btn btn-main border btn-round-full btn-lg">
                    ابحث عن طبيب البيطري الآن <i class="icofont-simple-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Doctors slider
            new Splide('#doctors-slider', {
                type: 'loop',
                perPage: 4,
                perMove: 2,
                autoplay: true,
                interval: 3000,
                gap: '20px',
                padding: '50px',
                pagination: false,
                breakpoints: {
                    1200: { perPage: 3, gap: '50px', padding: '40px' },
                    1024: { perPage: 2, gap: '40px', padding: '30px' },
                    768: { perPage: 2, perMove: 1, gap: '30px', padding: '20px' },
                    568: { perPage: 1, perMove: 1, gap: '40px', padding: '80px' },
                    400: { perPage: 1, perMove: 1, gap: '40px', padding: '60px' }
                }
            }).mount();

            // Testimonials slider
            new Splide('#testimonials-slider', {
                type: 'loop',
                perPage: 3,
                perMove: 1,
                autoplay: true,
                interval: 3000,
                gap: '20px',
                padding: '50px',
                pagination: false,
                breakpoints: {
                    1200: { perPage: 3, gap: '20px', padding: '40px' },
                    1024: { perPage: 2, gap: '20px', padding: '30px' },
                    768: { perPage: 1, gap: '20px', padding: '20px' },
                    568: { perPage: 1, gap: '20px', padding: '10px' },
                    400: { perPage: 1, gap: '20px', padding: '10px' }
                }
            }).mount();

            // Counter animation
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</x-app-layout>
