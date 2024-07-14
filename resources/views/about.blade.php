<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>Driver</title>
    <link href="{{ asset('styles/landing.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/about.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/global.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



</head>

<body>
    <div id="content">
        <div class="container-fluid p-0 about">
            <div class="row justify-content-center">

                <!--********************************** header ********************************** -->
                <div class="col-sm-12 header px-5">
                    <header class="">
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-sm-2 logo-container">
                                <img src="{{asset('images/logo.png')}}" class="header-logo">
                            </div>
                            <div class="text-end col-10">
                                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mb-md-0 text-end justify-content-end">
                                    <li><a id="landing" href="{{ route('home') }}" class="nav-link px-2">الرئيسيه</a>
                                    </li>
                                    <li><a id="about" href="{{ route('about') }}" class="nav-link px-2">من نحن</a>
                                    </li>
                                    <li><a id="about" href="https://app.driverksa.com/en/register" class="nav-link px-2">انضم لنا  </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>

                <div class="section align-items-center col-sm-11 d-flex flex-column justify-content-center">
                    <label class="section-title">مرحبًا بكم في تطبيق درايفر</label>
                    <p class="section-desc-small">Driver App !</p>
                    <p class="about-section-desc">في تطبيق درايفر ، نحن ملتزمون بتحويل تجربتك مع خدمات النقل في المملكة
                        العربية
                        السعودية.مهمتنا هي تقديم حلول قيادة موثوقة وآمنة وفعالة للأفراد والشركات على حد سواء.</p>
                </div>

                <div class="section align-items-center col-sm-11 d-flex flex-column justify-content-center">
                    <label class="section-title">قصتنا</label>
                    <p class="about-section-desc">تأسست مؤسسة سائق للنقل البري والمالكة لتطبيق درايفر في بداية عام 2024
                        ،  بدأت
                        من رغبة في تلبية الحاجة المتزايدة لخدمات قيادة احترافية وموثوقة.  تخيل شركة
                        لا
                        تقتصر على تلبية توقعات عملائنا , بل تتجاوزها بفهم عميق للثقافة المحلية والتحديات الفريدة للقيادة
                        في
                        المملكة العربية السعودية، انطلق أحمد لإنشاء خدمة تعطي الأولوية للسلامة والراحة ورضا العملاء </p>
                </div>


                <div class="section align-items-center col-sm-11 d-flex flex-column justify-content-center">
                    <label class="section-title">ما نقدمه في خدمات</label>
                    <p class="about-section-desc">قدم مجموعة من خدمات القيادة المصممة لتلبية احتياجاتك الخاصة السائقين
                        الشخصيين:
                        سواء كنت بحاجة إلى سائق لبضع ساعات أو على أساس دائم، فإن سائقي الليموزين المحترفين لدينا هنا
                        لمساعدتك.
                        يتم تدريبهم لتقديم تجربة قيادة سلسة وممتعة. خدمات
                        الشركات: يستفيد عملاؤنا من الشركات من خدماتنا الدقيقة والمحترفة، مما يضمن نقل موظفيك وعملائك
                        براحة
                        وأناقة. نقل الفعاليات: تخطط لحدث خاص؟ دعنا نتولى لوجستيات النقل، حتى تتمكن من التركيز على ما
                        يهمك أكثر.
                        خدمات الاحتياجات الخاصة: نقدم خدمات نقل متخصصة للأفراد ذوي الاحتياجات الخاصة، مما يضمن سهولة
                        الوصول
                        والراحة للجميع. التزامنا السلامة أولاً: سلامتك هي أولويتنا القصوى. يخضع جميع سائقي الليموزين
                        لدينا
                        لفحوصات خلفية صارمة وتدريب مكثف لضمان تلبية معاييرنا العالية.
                    </p>
                </div>


                <div class="section align-items-center col-sm-11 d-flex flex-column justify-content-center">
                    <label class="section-title">رضا العملاء</label>
                    <p class="about-section-desc">نسعى جاهدين لتقديم خدمة استثنائية لكل عميل. فريق دعم العملاء لدينا
                        متاح على
                        مدار الساعة لمساعدتك في أي استفسارات أو مخاوف.</p>
                </div>


                <div class="section align-items-center col-sm-11 d-flex flex-column justify-content-center">
                    <label class="section-title">الابتكار</label>
                    <p class="about-section-desc">نحن نبحث باستمرار عن طرق لتحسين خدماتنا من خلال التكنولوجيا والابتكار.
                        يجعل
                        تطبيقنا السهل الاستخدام حجز سائق أمرًا سهلاً ومريحًا
                    </p>
                </div>


                <div class="section align-items-center col-sm-11 d-flex flex-column justify-content-center">
                    <label class="section-title">تعرف على فريقنا</label>
                    <p class="about-section-desc">فريقنا هو أفضل أصولنا. من سائقي جميع فئات السيارات المهرة إلى موظفي
                        دعم
                        العملاء المتفانين،
                        يشارك الجميع في تطبيق Driver App هدفًا مشتركًا: تقديم أفضل خدمة ممكنة لعملائنا.
                    </p>


                    <div class="members d-flex flex-column col-sm-12">
                        <p><span class="member-name">أحمد العتيبي :</span> <span class="member-desc">المؤسس والرئيس
                                التنفيذي</span></p>
                        <p><span class="member-name">محمد صالح :</span> <span class="member-desc">المدير العام</span>
                        </p>
                        <p><span class="member-name">إبراهيم فتحي :</span> <span class="member-desc">قائد فريق خدمة
                                العملاء</span></p>
                    </div>

                    <p class="about-section-desc">تواصل معنا نود أن نسمع منك! سواء كان لديك سؤال، أو تحتاج إلى مساعدة،
                        أو تريد حجز خدمة،
                        لا تتردد في التواصل معنا.
                    </p>


                    <div class="contact-us col-sm-12">
                        <div>
                            <span class="contact-title">البريد الإلكتروني : </span> <span
                                class="contact-value">info@driverksa.com</span>
                        </div>


                        <div>
                            <span class="contact-title">الهاتف : </span> <span
                                class="contact-value">+966920031452</span>
                        </div>


                        <div>
                            <span class="contact-title">العنوان : </span> <span class="contact-value">3301, شارع السيل
                                الكبير ، حي الغدير ، 7169 , المملكة العربية السعودية</span>
                        </div>
                    </div>

                    <div class="social col-sm-12 justify-content-between d-flex">
                        <div>
                            <img src="{{asset('images/social-media/facebok.png')}}">
                            <a href="https://www.facebook.com/people/drvapp/61552925038979/"
                                target="_blank">Facebook</a>
                        </div>

                        <div>
                            <img src="{{asset('images/social-media/twitter.png')}}">
                            <a href="https://www.facebook.com/people/drvapp/61552925038979/" target="_blank">X</a>
                        </div>

                        <div>
                            <img src="{{asset('images/social-media/insta.png')}}">
                            <a href="https://www.instagram.com/drv_app/" target="_blank">Instagram</a>
                        </div>
                    </div>
                </div>


                <!--********************************** Footer ********************************** -->
                <div class="footer col-sm-12 d-flex justify-content-center align-items-center">
                    <div>
                        <img src="{{asset('images/social-media/social.png')}}">
                    </div>
                    <div>
                        <img src="{{asset('images/social-media/whatsapp.png')}}">
                    </div>
                    <div>
                        <img src="{{asset('images/social-media/twitter.png')}}">
                    </div>
                    <div>
                        <img src="{{asset('images/social-media/insta.png')}}">

                    </div>
                    <div>
                        <img src="{{asset('images/social-media/insta.png')}}">
                    </div>
                    <div>
                        <img src="{{asset('images/social-media/facebok.png')}}">
                    </div>
                </div>
            </div>
        </div>


    </div>

<script>
    (function(d,t) {
      var BASE_URL="https://chat.bevatel.com";
      var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=BASE_URL+"/packs/js/sdk.js";
      g.defer = true;
      g.async = true;
      s.parentNode.insertBefore(g,s);
      g.onload=function(){
        window.socialAppSDK.run({
          websiteToken: 'c2Y7954xxnJDs7bFNxhRf4Ba',
          baseUrl: BASE_URL
        })
      }
    })(document,"script");
  </script>
</body>

</html>
