<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>Driver</title>
    <link href="{{ asset('styles/landing.css') }}?v=1.4.0" rel="stylesheet">
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

        setInterval(function () {

            var current = $('.app-carousel input:checked').attr('index');
            console.log(current)
            var index = parseInt(current) === 5 ? 1 : parseInt(current) + 1;
            $('#input-carousel_' + current).attr('checked', false)
            $('#input-carousel_' + index).attr('checked', true);
        }, 5000);
    </script>


</head>

<body>
<div id="content">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">

            <!--********************************** header ********************************** -->
            <div class="col-sm-12 header px-5">
                <header class="">
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <div class="col-sm-2 logo-container">
                            <a href="{{ route('home') }}">
                                <img src={{ asset('images/logo.png') }} class="header-logo">
                            </a>
                        </div>

                        <div class="text-end col-10">
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mb-md-0 text-end justify-content-end">
                                <li><a id="landing" href="{{ route('home') }}" class="nav-link px-2">الرئيسيه</a>
                                </li>
                                <li><a id="about" href="{{ route('about') }}" class="nav-link px-2">من نحن</a>
                                </li>
                                <li><a id="about" href="https://new-app.driverksa.com/ar/register" class="nav-link px-2">انضم كسائق</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>


            <!--********************************** introduction ********************************** -->
            <div class="col-sm-12 intro p-0 justify-content-center align-items-center">
                <div class="overlay d-flex justify-content-between col-sm-12 row align-items-start">
                    <div class="img-double col-sm-5 justify-content-center d-flex">
                        <img src={{ asset('images/phone_double.png') }}>
                    </div>
                    <div class="align-items-start col-sm-7 d-flex desc flex-column justify-content-end">
                        <div class="title col-sm-9 align-items-center d-flex flex-column justify-content-center">
                            <div class="title-desc"> تطبيق Driver App</div>
                            <div class="title-content">
                            <span>
                                مذهل وحديث وعصرى حيث إنه مجهز

                            </span>
                                <br>
                                <span>
                                بمميزات مذهلة ويأتي مع دعم أكثر روعة
                            </span>
                            </div>
                        </div>
                        <div class="apps d-flex">
                            <a href="https://apps.apple.com/us/app/driver-app-%D8%AF%D8%B1%D8%A7%D9%8A%D9%81%D8%B1/id6451006397"> <img src={{ asset('images/appstore-300x90.png') }}></a>
                            <a href="https://play.google.com/store/apps/details?id=com.tocaan.driver&pcampaignid=web_share" ><img class="android" src={{ asset('images/playstore-1-300x90.png') }}></a>
                        </div>

                    </div>
                </div>
            </div>


            <!--********************************** definition ********************************** -->
            <div class="definition d-flex flex-column col-sm-11">
                <div class="section align-items-center col-sm-12 d-flex flex-column justify-content-center">
                    <label class="section-title"> تطبيق Driver App</label>
                    <p class="section-desc">
                    <span style="display: block">
                        عرض تطبيق مذهل وقوي  حيث إنه مجهز
                    </span>
                        <span>
                        بمميزات مذهلة ويأتي مع دعم أكثر روعة
                    </span>
                    </p>
                </div>
                <div class="d-flex col-sm-12">
                    <div class="small-section align-items-center col-sm-3 d-flex flex-column justify-content-center">
                        <div class="d-flex gap-3 justify-content-center align-items-center"><label
                                class="small-section-title">تصميم مذهل</label> <span class="number">2</span></div>
                        <p class="small-section-desc">قمنا باستهداف اعدادات تتمتع
                            بسهولة الإستخـدام لتلبيـة مـا تحتاجه  في
                            التطبيق</p>
                    </div>
                    <div class="small-section center align-items-center col-sm-6 d-flex flex-column justify-content-center">
                        <div class="bg-color-1">
                            <img src="{{asset('images/1.png')}}" class="large-center-img">
                        </div>
                    </div>
                    <div class="small-section align-items-center col-sm-3 d-flex flex-column justify-content-center">
                        <div class="d-flex gap-3 justify-content-center align-items-center"><label
                                class="small-section-title">سهولة الإعدادات</label> <span class="number">1</span></div>
                        <p class="small-section-desc">قمنا باستهداف اعدادات تتمتع
                            بسهولة الإستخـدام لتلبيـة مـا تحتاجه  في
                            التطبيق</p>
                    </div>
                </div>

                <div class="d-flex col-sm-12 justify-content-center mt-5">
                    <div class="small-section align-items-center col-sm-4 d-flex flex-column justify-content-center">
                        <div class="d-flex gap-3 justify-content-center align-items-center"><label
                                class="small-section-title">موثق بشكل جيد</label> <span class="number">3</span></div>
                        <p class="small-section-desc">قمنا باستهداف اعدادات تتمتع
                            بسهولة الإستخـدام لتلبيـة مـا تحتاجه  في
                            التطبيق</p>
                    </div>
                </div>
            </div>



            <!--********************************** steps ********************************** -->
            <div class="steps d-flex flex-column col-sm-12">
                <div class="section align-items-center col-sm-12 d-flex flex-column justify-content-center mb-5">
                    <label class="section-title">خطوات التسجيل في التطبيق</label>
                    <p class="section-desc">Driver App للعميل</p>
                </div>

                <div class="d-flex col-sm-12 justify-content-between px-5">
                    <div class="d-flex col-sm-6 flex-column all-steps">
                        <div class="align-items-center col-sm-12 d-flex step">
                            <img src={{ asset('images/step1.svg') }}>
                            <div class="d-flex flex-column">
                                <p class="step-title">حمل البرنامج</p>
                                <p class="step-desc">تحميل البرنامج عن طريق App Store . Google Play</p>
                            </div>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex step">
                            <img src={{ asset('images/step1.svg') }}>
                            <div class="d-flex flex-column">
                                <p class="step-title">التسجيل في التطبيق</p>
                                <p class="step-desc">التسجيل عن طريق رقم الهاتف</p>
                            </div>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex step">
                            <img src={{ asset('images/step1.svg') }}>
                            <div class="d-flex flex-column">
                                <p class="step-title">أختر نوع الرحلة</p>
                                <p class="step-desc"> اكمل التسجيل باتباع خطوات نوع الرحلة التي تختارها</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col-sm-6 justify-content-center">
                        <div class="bg-color-2">
                            <img src={{ asset('images/steps-img.png') }}>
                        </div>
                    </div>

                </div>

            </div>


            <!--********************************** create ********************************** -->
            <div class="steps d-flex flex-column col-sm-12 align-items-center justify-content-center">
                <div
                    class="section create-title align-items-center col-sm-12 d-flex flex-column justify-content-center mt-5">
                    <label class="section-title">إنشاء</label>
                    <p class="section-desc">الرحلة المباشرة</p>
                </div>
                <div class="d-flex col-sm-11 stepper-dots-and-dashed align-items-center justify-content-center">
                    <div class="stepper-dot d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex flex-column stepper-desc">
                            <img class="dot" src={{ asset('images/title.svg') }}>
                            <p class="stepper-title stepper-title-mobile">تحديد العنوان</p>
                        </div>
                    </div>
                    <img class="dash" src={{ asset('images/dash.svg') }}>

                    <div class="stepper-dot d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex flex-column stepper-desc">
                            <img class="dot" src={{ asset('images/period.svg') }}>
                            <p class="stepper-title stepper-title-mobile">تحديد مده الرحلة</p>
                        </div>
                    </div>
                    <img class="dash" src={{ asset('images/dash.svg') }}>

                    <div class="stepper-dot d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex flex-column stepper-desc">
                            <img class="dot" src={{ asset('images/car-type.svg') }}>
                            <p class="stepper-title stepper-title-mobile">تحديد نوع السيارة</p>
                        </div>
                    </div>
                    <img class="dash" src={{ asset('images/dash.svg') }}>

                    <div class="stepper-dot d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex flex-column stepper-desc">
                            <img class="dot" src={{ asset('images/payment.png') }}>
                            <p class="stepper-title stepper-title-mobile">تحديد طريقة الدفع</p>
                        </div>
                    </div>
                    <img class="dash" src={{ asset('images/dash.svg') }}>

                    <div class="stepper-dot d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex flex-column stepper-desc">
                            <img class="dot" src={{ asset('images/trip.svg') }}>
                            <p class="stepper-title stepper-title-mobile">تحديد مده الرحلة</p>
                        </div>
                    </div>
                    <img class="dash" src={{ asset('images/dash.svg') }}>

                    <div class="stepper-dot d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                        </div>
                        <div class="align-items-center col-sm-12 d-flex flex-column stepper-desc">
                            <img class="dot" src={{ asset('images/driver.svg') }}>
                            <p class="stepper-title stepper-title-mobile">طلب الكابتن</p>
                        </div>
                    </div>
                    <img class="dash" src="{{ asset('images/dash.svg') }}" style="visibility: hidden">


                </div>

                <div class="d-flex col-sm-12 justify-content-center middle-sec">
                    <div class="bg-color">
                        <img src={{ asset('images/steps-large-img.png') }}>
                    </div>
                </div>
            </div>


            <!--********************************** create schedule ********************************** -->
            <div
                class="steps schedule d-flex flex-column col-sm-12 align-items-center justify-content-center mt-5">
                <div
                    class="section create-title align-items-center col-sm-12 d-flex flex-column justify-content-center">
                    <label class="section-title">إنشاء</label>
                    <p class="section-desc"> الرحلة المجدولة</p>
                </div>
                <div class="col-sm-12 d-flex">
                    <div class="d-flex col-sm-6 stepper-dots-and-dashed flex-column">
                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/payment.png') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">تعبئة المحفظة</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>

                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/click-schedule.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">الضغط على الرحلات المجدولة</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>


                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/period.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title" style="line-height: 12px; white-space: pre-line; text-align: start; margin-bottom: 0; ">تحديد موعيد الرحلات الاسبوعية يوميا أو بالايام المحددة
                                <span>
                                (السبت- الاحد- الاثنين- الثلاثاء- الاربعاء- الخميس- الجمعة )
                            </span>
                            </p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>

                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/trip.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">تحديد ساعة انطلاق الرحلة</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>


                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/driver.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">يستدعى السائق أوتوماتيكي (متواجدين 24ساعة في اليوم )</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>


                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/launch.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">تحديد مكان الانطلاق (منزل -مدرسة- جامعة -عمل)</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>


                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/distnation.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">تحديد مكان الوصول (منزل- مدرسة -جامعة- عمل)</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>


                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/car-type.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">تحديد نوع السيارة المناسبة لرحلاتك (اقتصادية-صالون
                                -عائلية-vip)</p>
                        </div>
                        <img class="vertical-dash" src={{ asset('images/dash.svg') }}>


                        <div class="d-flex pe-5 vertical-step">
                            <img class="dot" src={{ asset('images/save.svg') }}>
                            <img class="dot" src={{ asset('images/dot.svg') }}>
                            <p class="stepper-title">الضغط على حفظ لإضافتها للرحلات المجدولة</p>
                        </div>
                    </div>
                    <div class="d-flex col-sm-6 justify-content-center px-4">
                        <div class="bg-color-3">
                            <img src={{ asset('images/steps-img.png') }}>
                        </div>
                    </div>
                </div>
            </div>


            <!--********************************** app images ********************************** -->
            <div class="col-sm-12 app-images ">
                <div class="overlay-apps"></div>
                <div class="d-flex col-sm-12 justify-content-center align-items-center app-images-titles">
                    <div class="app-images-title">صور من التطبيق</div>
                    <div class="app-images-desc">
                    <span style="display: block">
                        سنوضح لك خطوات التسجيل في البرنامج وذلك
                    </span>
                        <span>
                          لمساعدتك في الاستفادة من التطبيق بكل سهولة
                     </span>
                    </div>
                </div>

                <div class="images">
                    <div class="app-carousel">
                        <input id="input-carousel_1" type="radio" index="1" name="position"/>
                        <input id="input-carousel_2" type="radio" index="2" name="position"/>
                        <input id="input-carousel_3" type="radio" index="3" name="position" checked/>
                        <input id="input-carousel_4" type="radio" index="4" name="position"/>
                        <input id="input-carousel_5" type="radio" index="5" name="position"/>
                        <main id="carousel">
                            <div class="item">
                                <img src="{{asset('images/app-image-5.png')}}">
                            </div>
                            <div class="item">
                                <img src="{{asset('images/app-image-4.png')}}">
                            </div>
                            <div class="item">
                                <img src="{{asset('images/app-image-3.png')}}">
                            </div>
                            <div class="item">
                                <img src="{{asset('images/app-image-2.png')}}">
                            </div>
                            <div class="item">
                                <img src="{{asset('images/app-image-1.png')}}">
                            </div>
                        </main>
                    </div>
                </div>
            </div>


            <!--********************************** FAQs ********************************** -->
            <div class="col-sm-12 faqs d-flex py-5">
                <div class="align-items-center col-sm-6 d-flex justify-content-center">
                    <img src={{ asset('images/faqs.png') }}>
                </div>
                <div class="align-items-center col-sm-6 d-flex flex-column px-5 py-5">
                    <p class="faqs-title">الأسئلة الشائعة</p>
                    <p class="faqs-desc"> تطبيق مذهل وحديث وعصرى حيث إنه مجهز بمميزات مذهلة ويأتي مع دعم أكثر روعة
                    </p>
                    <div class="accordion accordion-flush col-sm-12" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                    من نحن ؟
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    مؤسسة سائق للنقل البري

                                    Driver هو تطبيق ذكي فريد من نوعه بتجربة عصرية جديدة وحديثة

                                    تطبيق Driver يحسن من تجربة النقل وسيارات الأجرة في المملكة العربية السعودية

                                    يوفر التطبيق وسيلة تنقل آمنة وموثوقة وسهلة للراكب ، وتوفر للزبائن الخدمة في أي وقت خلال 24h وفي أي مكان في المملكة

                                    يوفر التطبيق حلول وميزات رائعة للمستخدم بذلك يسهل عليه إستخدامه والإستمتاع بخدماتنا … ويوفر أيضاً إختصارات وحلول رائعة وبذلك يمكن للمستخدم حفظ مكان منزله او مكان عمله أو بيت العائلة حتى يسهل عليه طلب كابتن Driver بسرعة

                                    يتميز التطبيق بسيارات حديثة ومميزة وكادر رائع لنقدم للزبائن أفضل رحلة مريحة وأكثر أمان تهدف شركة Driver لتقديم أفضل خدمة في مجال سيارات الأجرة ، لتكون بذلك أفضل شركة على الإطلاق في هذا المجال  تطبيق Driver طريقك نحو التميز
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                    كيفية تثبيت التطبيق ؟
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    قم بفتح متجر هاتفك app store في نظام ios او Google play في أنظمة الآندرويد.
                                    اضغط على أيقونة العدسة المكبرة لفتح شريط البحث، واكتب Driver  للبحث عن التطبيق.
                                    انقر فوق تطبيق Driver.
                                    انقر على “install” لتنزيل التطبيق .
                                    انتظر ليكتمل تنزيل التطبيق وانتقل إلى صفحة التطبيق
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                    كيف أحصل علي تطبيق الجوال لهاتفي ؟
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    التوجه الى متجر هاتفك
                                    الضغط على  ايقونة العدسة المكبرة للبحث
                                    البحث عن تطبيقنا driver في خانة البحث
                                    النقر على ايقونة التطبيق
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
                                    كيف أقوم بتعطيل التطبيقات المثبتة ؟
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                 aria-labelledby="flush-collapseFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    مميزات تطبيق درايفر :

                                    التميز في كيفية التسجيل

                                    واجهته المميزة التي تجعل حجز الرحلات أمرًا في غاية السهولة

                                    يمكن للمستخدمين الاختيار من بين مجموعة متنوعة من الخيارات واختيار رحلات طلب السيارة ،والرحلات المجدولة .

                                    يدعم اللغتين العربية والإنجليزية

                                    سرعته في تحديد موقعك بشكل سلس وواضح

                                    يوفر لكَ اختيار السيارة المناسبة لرحلاتك ، بالإضافة إلى تحديد مدة الرحلة

                                    يوفر لك تحديد موعد الرحلة بالوقت والتاريخ المناسب لك

                                    يمكنك ايضًا اختيار جنس الكابتن

                                    إمكانية تحديد اكثر من نقطة انطلاق وذهاب

                                    سرعة في التوصيل مع خدمة عملاء على مدار ٢٤ ساعة -اقل الأسعار ليصلك أقرب كابتن لموقعك واستمتع أثناء رحلتك مع درايفر !
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--********************************** APPS icons ********************************** -->
            <div class="apps-footer gap-5 d-flex col-sm-12 justify-content-center">
                <a href="https://apps.apple.com/us/app/driver-app-%D8%AF%D8%B1%D8%A7%D9%8A%D9%81%D8%B1/id6451006397"> <img src={{ asset('images/appstore-300x90.png') }}></a>
                <a href="https://play.google.com/store/apps/details?id=com.tocaan.driver&pcampaignid=web_share" ><img class="android" src={{ asset('images/playstore-1-300x90.png') }}></a>
            </div>


            <!--********************************** Footer ********************************** -->
            <div class="footer col-sm-12 d-flex justify-content-center align-items-center">
                <div>
                    <a href="https://www.tiktok.com/@drv_app"> <img src={{ asset('images/social-media/social.png') }}></a>
                </div>
                <div>
                    <a href="https://api.whatsapp.com/send?phone=966920031452"> <img src={{ asset('images/social-media/whatsapp.png') }}></a>
                </div>
                <div>
                    <a href="https://x.com/drv_app"><img src={{ asset('images/social-media/twitter.png') }}></a>
                </div>
                {{-- <div>
                    <img src={{ asset('images/social-media/insta.png') }}>

                </div> --}}
                <div>
                    <a href="https://www.instagram.com/drv_app/"><img src={{ asset('images/social-media/insta.png') }}></a>
                </div>
                <div>
                    <a href="https://www.facebook.com/profile.php?id=61552925038979"> <img src={{ asset('images/social-media/facebok.png') }}></a>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

</html>
