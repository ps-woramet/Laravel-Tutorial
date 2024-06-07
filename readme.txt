MVC

    Model (M) ส่วนที่เก็บข้อมูลของ application (backend)
    View (V) ส่วนที่ทำงานฝั่ง frotnend หรือ หน้าตา application เป็นส่วนที่แสดงผลข้อมูลด้วย html (balade template)
    Controller (C) ส่วนประมวลผลคำสั่งต่างๆใน application โดยควบคุมการทำงานระหว่าง model และ view (backend)

    client <-(request/response)-> server(mvc) <--> database

    user -> (request) -> routing -> Controller <-> model -> database
    user -> (request) -> routing -> Controller -> view -> (response) -> user

0. install tools

    0.1. xampp (apache + mysql)
        -config apache php.ini เพื่อช่วยให้ PHP สามารถสร้าง อ่าน เขียน และจัดการกับไฟล์ ZIP ได้
            extension=zip
        -mysql
            http://localhost/dashboard/
    0.2. composer เป็นเครื่องมือที่ใช้ในการจัดการและบริหารจัดการ dependencies (การติดตั้งและใช้งานชุดคำสั่งหรือไลบรารีของโค้ด) ในโปรเจคโปรแกรมของภาษา PHP

        https://getcomposer.org/download/

        install for all user

        ทำเครื่องหมายถูกที่ add this php to your path?

        cmd > composer --version

    0.3. nodejs ใช้รันโค้ด JavaScript นอกเว็บเบราว์เซอร์
    0.4. visual studio code
    0.5. extension

        Color highlight
        Auto Rename Tag
        Html css support
        Prettier code formatter
        Laravel Blade Snippets
        Laravel Blade Snippets

1. create project (https://laravel.com/docs/11.x#creating-a-laravel-project)

    composer create-project laravel/laravel ชื่อproject
     
    1.1 (ทำการสร้างไฟล์ที่ xampp\htdocs)
    
        C:\xampp\htdocs>composer create-project laravel/laravel laravel-tutorial

    1.2 เข้าสู่ project ที่สร้าง

        C:\xampp\htdocs>cd laravel-tutorial
    
    1.3 run server
 
        php artisan serve
    
    1.4 open browser

        http://127.0.0.1:8000
    
    1.5 open code from folder

        C:\xampp\htdocs\laravel-tutorial

2. อธิบาย folder ต่างๆ

    folder app จัดเก็บกลุ่มของ (http, model, provider)

        Http (HTTP): โฟลเดอร์ http เกี่ยวข้องกับการจัดการ HTTP requests และ responses ของแอปพลิเคชัน Laravel โดยส่วนมากจะประกอบด้วยคลาสติก (controllers), ระเบียบเกี่ยวกับเส้นทาง (routes), และ middleware

        Models (โมเดล): โฟลเดอร์ models เป็นสถานที่ที่เก็บโมเดลของแอปพลิเคชัน Laravel โมเดลนี้จะเป็นตัวแทนของตารางในฐานข้อมูล และจะมีเมทอดเกี่ยวกับการเข้าถึงข้อมูลและการจัดการข้อมูล

        Providers (โปรไฟล์เดอร์): โฟลเดอร์ providers เก็บคลาสติก (providers) ที่ใช้ในการตั้งค่าและกำหนดการทำงานต่างๆ ของแอปพลิเคชัน Laravel เช่น การลงทะเบียนคอมโพเนนต์ (components) หรือการกำหนดการเชื่อมต่อกับฐานข้อมูล
    
    
    folder database ตั้งค่า databases (migrations, seeders, factories)

        Migrations (การโยกย้าย): Migrations เป็นเครื่องมือที่ใช้สร้างและจัดการโครงสร้างของฐานข้อมูล โดยมักจะใช้เพื่อสร้างตาราง และเพิ่มหรือลบคอลัมน์จากตาราง การใช้ migrations ช่วยให้การจัดการฐานข้อมูลเป็นไปอย่างมีระเบียบและสามารถทำการปรับเปลี่ยนได้โดยง่าย เพื่อให้ฐานข้อมูลสอดคล้องกับโครงสร้างของแอปพลิเคชัน

        Seeders (ซีดเดอร์): Seeders เป็นเครื่องมือที่ใช้ในการเติมข้อมูลลงในฐานข้อมูล โดยส่วนมากใช้สำหรับการเติมข้อมูลทดลองหรือข้อมูลที่จำเป็นสำหรับการพัฒนา ใช้เมื่อต้องการสร้างข้อมูลในฐานข้อมูลในรูปแบบที่กำหนดไว้ล่วงหน้า เช่น ข้อมูลของผู้ใช้หรือข้อมูลทดสอบ

        Factories (แฟคทอรี): Factories เป็นเครื่องมือที่ใช้สร้างข้อมูลทดสอบอัตโนมัติ ซึ่งสามารถใช้ในการสร้างข้อมูลทดสอบให้กับการทดสอบหน่วย (unit tests) หรือการทดสอบเชิงอินทิเกรต (integration tests) ซึ่งช่วยให้การทดสอบเป็นไปอย่างรวดเร็วและมีประสิทธิภาพขึ้น

    folder resources

        // ไฟล์ .blade.php เป็นการรวมระหว่างโค้ด PHP และ HTML เข้าด้วยกัน
        Views (มุมมอง): โฟลเดอร์ views เก็บไฟล์ที่ใช้ในการแสดงผล HTML หรือตัวอินเตอร์เฟสต่างๆ ของแอปพลิเคชัน ไฟล์มุมมองสามารถใช้งาน Laravel Blade ซึ่งเป็นเครื่องมือที่ใช้ในการสร้างเทมเพลตและแทรกข้อมูลได้
        //จะเห็นไฟล์เริ่มต้น welcome.blade.php

    folder routes

        web.php: ไฟล์นี้จะใช้ในการกำหนดเส้นทางเว็บของแอปพลิเคชัน เป็นที่นิยมสำหรับการกำหนดเส้นทางที่เกี่ยวข้องกับการทำงานของเว็บและการเรียกใช้งานผ่าน HTTP requests เช่น การแสดงหน้าแรก, การบันทึกข้อมูลจากฟอร์ม, การแสดงรายละเอียดของรายการ เป็นต้น

        console.php: ไฟล์นี้ใช้สำหรับกำหนดเส้นทางเมื่อมีการเรียกใช้คำสั่ง (commands) จาก command line interface (CLI) เช่น artisan commands หรือการทำงานที่เกี่ยวข้องกับการทำงานแบบ batch หรือ cron jobs

    file .env

        ไฟล์ที่มีชื่อ ".env" ภายใน ไฟล์นี้ใช้ในการกำหนดค่าต่างๆ ที่เกี่ยวข้องกับการตั้งค่าและการทำงานของแอปพลิเคชัน

3. ทดลองสร้าง route

    -routes > web.php

        // จะแสดงข้อความ welcome to my website

            Route::get('/', function (){
                return '<h1>welcome to my website</h1>';
            });

        // dynamic route

            Route::get('/post/{idPost}', function ($idblog) {
                return "<h1>id Post is ${idblog}</h1>";
            });


        // การใส่ link

            Route::get('/login', function () {
                return "<a href='admin/woramet'>Login</a>";
            });

            Route::get('admin/woramet', function () {
                return "<p>this is woramet page</p>";
            });

        // การใส่ link และ การย่อชื่อ route

            Route::get('/login2', function () {
                return "<a href='".route('gamePage')."'>Login</a>";
            });

            Route::get('/admin/game', function () {
                return "<p>this is game page</p>";
            })->name('gamePage');

        // route fallback หรือ หน้า 404

            Route::fallback(function(){
                return "<h1> Page not found 404</h1>";
            });

        // route ไปที่ view (ต้องสร้างไฟล์ myPage.blade.php ที่ resources > views > myPage.blade.php ก่อน)

            -routes
                Route::get('/about', function(){
                    return view('about');
                })->name('about');
                Route::get("/blog", function(){
                    return view('blog');
                })->name('blog');
                Route::get('/', function () {
                    return view('welcome');
                })->name('home');

            -resources > views > welcome.blade.php

                <body>
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">go to home page</a>
                    <a class="nav-link" aria-current="page" href="{{route('about')}}">go to about page</a>
                    <a class="nav-link" aria-current="page" href="{{route('blog')}}">go to blog page</a>
                </body>

4. ใช้งาน bootstrap (วางที่ file blade ที่ต้องการ)

    cdn : <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">