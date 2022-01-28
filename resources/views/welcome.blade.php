@extends('layouts.app')
@section('content')

    <!--== 5. Header ==-->
    <section id="header-slider">
        <img src="{{ asset('images/111.jpeg') }}" class="pic" alt="">

        <div class="item">
            <div class="container">
                <div class="header-content">

                    <h1 class="header-title">ร้านอาหารตามสั่งคุณยายต้อย</h1>

                </div>
            </div>
        </div>
    </section>



    <!--== 6. About us ==-->
    <section id="about" class="about">
        <img class="img-responsive section-icon hidden-sm hidden-xs">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">



                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content ">
                            <h2 class="section-content-title" style="color: back; text-shadow: 0 0 0.2em #8F7">เกี่ยวกับเรา
                            </h2>
                            <p class="section-content-para">
                                อยู่ดีๆก็อยากเปิดร้านเพราะมีคนชอบอาหารที่ย้าทำเพราะมันอร่อยยแล้วอยู๋ดีๆก็เปิดเป็นร้านอาหารทำสั่งคุณย้าต้อย.
                            </p>
                        </div> <!-- /.section-content -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#about -->


    <!--==  7. Afordable Pricing  ==-->
    <section id="pricing" class="pricing">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="section-header">
                                    <h2 class="pricing-title">รายการอาหาร</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="menu-price">
                    <div class="row  justify-content-between">
                        @foreach ($products as $rows)
                            <div class="col-sm-3 mitem">
                                <a>
                                    <img src="{{ asset('admin/products/' . $rows->image) }}" class="mpicture"
                                        alt="Food">
                                    <div class="menu-desc text-center">
                                        <span>
                                            <h3>{{ $rows->name }}</h3>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--== 8. สถานที่ที่ยอดเยี่ยมที่จะเพลิดเพลิน ==-->
    <section id="great-place-to-enjoy" class="great-place-to-enjoy">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">สถานที่ที่ยอดเยี่ยมที่จะเพลิดเพลิน</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#great-place-to-enjoy -->



    <!--==  9. Our Beer  ==-->
    <section id="beer" class="beer">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_color.png">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                </div>

                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">ผัดกะเพรา</h2>
                        <div class="section-description">
                            <p class="section-content-para">
                                ผัดกะเพรา เป็นอาหารจานเดียวของไทยที่ได้รับความนิยมมากที่สุดจานหนึ่ง[1] เป็นอาหารริมทาง
                                อาหารตามสั่งที่มีทั่วไปในประเทศไทย บางครั้งเรียกว่า เมนูสิ้นคิด
                                เนื่องจากเมื่อจะสั่งอาหารแล้วไม่รู้ว่าจะรับประทานอะไรก็มักจะสั่งผัดกะเพรา วัตถุดิบประกอบด้วย
                                เนื้อสัตว์ ใบกะเพรา ถั่วฝักยาว พริก กระเทียม บ้างใส่ผักชนิดอื่นลงไปด้วย เช่น ข้าวโพดอ่อน
                                แครอท หอมหัวใหญ่ เนื้อสัตว์ที่ใช้ในการทำผัดกะเพรา ได้แก่ เนื้อไก่ เนื้อหมู เนื้อวัว กุ้ง
                                ปลาหมึก หรือแม้แต่ ปลา หอยแมลงภู่ เนื้อปู วิธีการปรุง ใช้วิธีการผัดวัตถุดิบเข้าไปด้วยกัน
                                มีการปรุงรสด้วยน้ำปลา น้ำตาล บ้างใส่ผงชูรส ซีอิ๊วดำ พริกไทยป่น เติมน้ำสต๊อกพอให้ขลุกขลิก
                                รับประทานกับข้าวสวย อาจกินด้วยกับไข่ดาว มีน้ำปลาพริกเป็นเครื่องปรุงให้รสหอมและเผ็ดขึ้น
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--== 10. Our Breakfast Menu ==-->
    <section id="breakfast" class="breakfast">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/bread_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Our Breakfast Menu</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#breakfast -->




    <!--== 12. Our Featured Dishes Menu ==-->
    <section id="featured-dish" class="featured-dish">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Our Featured Dishes Menu</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#featured-dish -->

    <!--== 15. Reserve A Table! ==-->
    <section id="reserve" class="reserve">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Reserve A Table !</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#reserve -->



    <section class="reservation justify-content-center">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_color.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class=" section-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="opening-time">
                                <h3 class="opening-time-title">เปิดร้านพร้อมขาย</h3>
                                <p> 5:00 PM - 18:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>




    <section id="contact" class="contact">
        <div class="container-fluid color-bg">
            <div class="row">
                <div class="hidden-xs col-sm-4 dis-table-cell">
                    <h4 class="section-title">ติดต่อเรา</h4>
                </div>
                <div class="col-xs-4 col-sm-4 dis-table-cell">
                    <div class="section-content">
                        <p>74/1 ม.2 ต.บางกระสอ อ.เมืองนนทบุรี จ.นนทบุรี 11000</p>
                        <p>0928351566</p>
                    </div>
                </div>

                <div class="col-sm-4 map">

                    <iframe class="map-contain"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19388.600541110136!2d100.49866303593048!3d13.857929277636593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b6bc5460fb1%3A0xfff41e802e06fac!2s74!5e1!3m2!1sen!2sth!4v1641975747549!5m2!1sen!2sth"></iframe>
                </div>
            </div>
        </div>
    </section>



@endsection
