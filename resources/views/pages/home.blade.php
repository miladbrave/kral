@extends('layouts/master2')

@section('title')
    Kral
@endsection

@section('bootsrap')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection


@section('toolbar')
    <style>
        ul {
            list-style-type: none;
            margin: 10px;
            margin-top: 50px;
            padding: 2px;
            overflow: hidden;
            background-color: black;
            position: -webkit-sticky; /* Safari */
            position: sticky;
            border-radius: 50px;
            top: 0;
            margin-right: 20px;
        }
        li {
            float: right;
            margin-right: 25px;
        }
        li a, .dropbtn {
            display: inline-block;color: white;text-align: center;
            padding: 14px 16px;text-decoration: none;
        }
        li a:hover {
            background-color: red;
        }
        li a:hover, .dropdown:hover .dropbtn {
            background-color: red;
            text-decoration: none;
        }
        li.dropdown {
            display: inline-block;
        }
        .dropdown-content {
            display: none;position: absolute;background-color: black;
            min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            padding: 12px 16px;text-decoration: none;
            display: block;text-align: left;color: white;

        }
        .dropdown-content a:hover {background-color: red}
        .dropdown:hover .dropdown-content {
            display: block;
        }

        input[type=text] {
            width: 130px;box-sizing: border-box;border: 2px solid #444444;
            border-radius: 4px;margin-top: 5px;margin-left: 50px;
            font-size: 16px;background-color: #8c8c8c;
            background-image: url('img/search.png');background-position: 5px 3px;
            background-repeat: no-repeat;padding: 5px 10px 5px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 1s ease-in-out;
        }
        input[type=text]:focus {
            width: 20%;
        }
    </style>
@endsection

@section('gallery')
    <style>
        div.gallery {
            margin: 35px;border: 8px solid red;float: left;width: 180px;
        }

        div.gallery:hover {
            border: 8px solid green;
        }

        div.gallery img {
            width: 100%;height:20%;
        }

        div.desc {
            padding: 15px;text-align: center;
        }
    </style>

    <div id="homeCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px">

        <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
            <li data-target="#homeCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/Paparazzi.jpg" alt="bath" style="width: 90%;margin-left: 50px">
                <div class="carousel-caption">
                    <h3>BATHROOM</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/g2.jpg" alt="bed" style="width: 90%;margin-left: 50px">
                <div class="carousel-caption">
                    <h3>REST AND ENJOY</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/g1.jpg" alt="shu" style="width: 90%;margin-left: 50px">
                <div class="carousel-caption">
                    <h3>NICE ROOM</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/i2.jpg" alt="inter" style="width: 90%;margin-left: 50px">
                <div class="carousel-caption">
                    <h3>EXCELLENT</h3>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#homeCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection



@section('text')
    <fieldset style="text-align: center;color: black;font-size: larger;width: 60%;
                     margin-left: 250px;background-image: url('img/Gray.jpg');margin-top: 90px;margin-bottom: 25px">
        <p style=" direction: rtl;font-size: 25px;margin-bottom: 15px">
            براساس معنی مندرج در لغت‌نامه آکسفورد، دکوراسیون داخلی عبارت است از: «هماهنگ سازی طراحی شده برای به جلوه
            درآوردن رنگ‌ها، اثاثیه و سایر اشیاء در یک اتاق یا ساختمان به صورت هنرمندانه». دکوراسیون داخلی همانند سایر
            هنرها، دارای سبک و ریزه‌کاری‌های متفاوتی است که براساس سلیقه‌ها و نیازهای دوران، دستخوش تغییر می‌شوند.
            معماری داخلی آفرینش فضاست، فضایی که در عین زیبا و خاطره انگیز بودن عملگرا و کارآمد نیز باشد. در واقع طراح با
            تنیدن اصول فنی و تخصصی معماری داخلی با حس زیبایی شناسی، فضایی را طراحی می‌کند که بیانگر هویت، نیاز، درک و
            خواسته‌های مخاطبش است. دکوراسیون داخلی حلقه اتصال میان معماری و طراحی داخلی است. این رشته از طرفی همانند
            معماری با ساختمان و اجزاء و عناصر سازنده ساختمان سروکار دارد و از طرفی مانند طراحی داخلی بر فضاهای داخلی
            تأکید دارد اگر بگوییم معماری با مسائلی با مقیاس بزرگ شهری در تماس است تخصص معماری داخلی در مقیاس انسانی و
            ارتباط با فضاهای عمومی و شخصی است؛ و ماحصل آن ارتباط انسان با جهان پیرامون است. معماران داخلی علاوه برداشتن
            دانش کافی در زمینه معماری به توسعه و دریافت حس دریافتی از فضاهای معمارانه می‌پردازند به گونه‌ای که حس تعلق و
            یکپاچگی را در فضا به وجود می‌آورد و به عبارت دیگر به معماری فضا از دیدگاه ساکنان یا استفاده‌کنندگان آن
            می‌پردازد.ترکیب هنر با ساختمان‌سازی امریست که ریشه در فرهنگ‌ها، اقلیم، آداب و رسوم گذشته و حال دارد، تزئینات
            ساختمان بطور کلی شامل معماری داخلی، نمای ساختمان، محوطه سازی است در توضیح بیشتر می‌توان گفت دکوراسیون داخلی
            یا طراحی داخلی علمی است که فراتر از یک اعمال سلیقه ساده به تحلیل و بررسی کاربری یک فضا، رنگ‌ها، نور پردازی،
            وسایل دکوری، مبلمان، چیدمان و هارمونی بین عناصر مختلف می‌پردازد.
            یا تاکنون از خود پرسیده‌اید که پیشینه این هنر به چه زمانی بازمی‌گردد؟ مطمئناً علاقه انسان به تزئین و آرایش
            محل زندگی‌اش امری تازه نیست حتی این احتمال وجود دارد که نقاشی‌های دوران غارنشینی، سوای مسئله اطلاع‌رسانی،
            نقش تزئینی نیز داشته‌اند. به هر روی، هنگامی که در سال ۱۹۲۲، هاوارد کارتر (Howard Carter)، باستان‌شناس
            بریتانیایی، مقبره توتنخامون (Tutankhamen) را گشود؛ نقاب طلای خالص، جواهرات ظریف و اشیاء تزئینی که در کنار
            جسد و در داخل مقبره قرار داده شده بود، بینشی وسیع دربارهٔ چگونگی زندگی مصریان و علاقه آنان به تزئینات و
            طراحی را در اختیار محققان گذاشت که به نوبه خود آغازگر جستجویی دنباله‌دار و منجر به تجلی یافتن شکوه سبک اولیه
            مصری شد. حفاری‌های اولیه نشان داد که حتی بی‌نواترین خدمتکاران مصری هم، لوازم روزمره خانه‌شان را تزئین
            می‌کرده‌اند، امری که براساس استاندارهای فعلی در خور توجه است اینکه مصریان هرگز به راحتی رازهای خود را برملا
            نمی‌کردند، به همین روی مشخص نیست که دقیقاً علاقه و انگیزه آنان برای طراحی از کجا سرچشمه گرفته‌است. فرضیه‌ها
            و استدلال‌های مستمری در این زمینه مطرح شده‌است. آنچه می‌دانیم این است که سبک‌های آغازین طراحی از مصر نشأت
            گرفته‌اند.
            رومی‌ها اساتید مسلم طراحی بوده‌اند و هنوز هم از بسیاری جهات، خصوصاً در زمینه طراحی کلاسیک، سرآمد طراحان
            جهانند. علاقه وافرشان به اشیاء زیبا و سبک آسایش طلبانه‌شان در آثار به جامانده کاملاً قابل ملاحظه است. آن‌ها
            علاقه‌مند بودند تا ثروت و موقعیت اجتماعی‌شان را به نمایش بگذارند و به زندگی مجلل و سبک پر زرق و برق تمایل
            داشتند. به دلیل موفقیت آنان در زمینه طراحی داخلی، حتی با معیارهای نوین هم هنوز در زمره بهترین‌های این هنر
            محسوب می‌شوند. میزان آسایش و نقاشی‌های زیبای فضای داخلی خانه‌هایشان که به صورت نقاشی دیواری و موزائیک‌کاری
            کف جلوه‌نمایی می‌کرد، از شگفت‌آورترین موفقیت‌های طراحی داخلی آن زمان بوده‌است. آن‌ها با تمامی آراستگی و
            آذینی که می‌توانستند متصور شوند مبلمان، میزهایی با پایه‌های پنجه مانند، صندلی، اثاثیه خاص و مبلمان راحتی را
            طراحی می‌کردند و می‌ساختند. ضیافت‌ها و شیوه زندگی مجلل مهم‌ترین بخش هستی‌شان بود و از این‌رو این امر را در
            آرایش خانه‌هایشان متجلی می‌ساختند. برخلاف رومیان، یونانی‌ها در زمینه دکوراسیون داخلی چندان شهره نبودند و
            شهرت اصلی‌شان به خاطر سبک معماری فوق‌العاده‌شان است که هنوز هم در شهر آتن قابل ملاحظه است. پس از سقوط
            امپراطوری روم و اشاعه مسیحیت، سبک سرد و صومعه مانندی بر دکوراسیون داخلی خانه‌ها حکمفرما شد. شیوه‌های کلاسیک،
            آزادی طراحی، زیبایی‌دوستی و تجمل‌پرستی رومی جای خود را به تخته‌های تیره و خانه‌های بی‌تزئین دادند.
            گرچه هنرمندان دوران گوتیک، سعر کردند تا حدی از این بی‌پیرایگی بکاهند، اما عملاً این سبک تا زمان ظهور رنسانس
            حکمفرما بود. با تولد دوباره آزادی‌های هنری؛ زیبایی و تزئین، مجدداً به خانه‌ها بازگشت. تعدد هنرمندان به نامی
            که پس از رنسانس با آن‌ها روبرو می‌شویم، خود گواهی بر این امر است.
            در ملل شرقی نیز علاقه به دکوراسیون داخلی زیبا کاملاً آشکار است. مبلمان و تزئینات چینی، فرش‌های ایرانی،
            صدف‌کاری‌های ژاپنی و مجسمه‌ها و نقاش‌های پر رنگ و لعاب هندی، همه نشان دهنده علاقه این ملل به زیباسازی فضای
            زندگی‌شان است. گرچه سبک دکوراسیون داخلی شرقی با شیوه غربی آن تفاوت‌های بسیاری دارد. با این همه اگر
            علاقه‌مندید تا به عنوان یک دکوراتور داخلی حرفه‌ای به کار مشغول شوید، بهتر است پیش از هر کاری به مطالعه دقیق
            و کامل تاریخ هنر و معماری بپردازید تا کاملاً با انواع سبک‌ها و شیوه‌های مرتبط با این حرفه آشنا شوید. بسیاری
            از طراحان داخلی سرشناس، سبک‌ها و مبلمان‌هایی را به نام خود به جا گذاشته‌اند. گرچه ساختمان‌ها و فضای داخلی
            آن‌ها باید سبک و شیوه زندگی زمان خود را منعکس کنند، اما این عمل بدون آگاهی از پیشینه آن‌ها میسر نمی‌شود.
            بسیاری از طراحان داخلی با آمیختن چند سبک و حتی به کار بردن المان‌های شرقی و غربی در مکانی واحد، فضایی را خلق
            می‌کنند که علاوه بر تنوع و زیبایی، آرامشی خاص را برای ساکنینش به ارمغان می‌آورد.

        </p>
    </fieldset>
@endsection







