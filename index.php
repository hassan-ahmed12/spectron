<?php
$title ="Spectron Designs";
include("template/header.php");
?>
<div class="home">
    <div class="fl-row hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="heading">
                        <h1>Unlock Your <br><span>Business Potential</span><br>with a Stunning Website</h1>
                    </div>
                    <div class="text-block">
                        <p>Elevate Your Online Presence: Empowering Success through Web Design, Development, SEO, Branding, Compelling Copy, and Captivating Video Production.</p>
                    </div>
                    <div class="dual-buttons">
                            <div class="btn-box btn-1">
                                <a href="#">
                                    <div class="btn-txt">Get Started</div>
                                </a>
                            </div>
                            <div class="btn-box btn-2">
                                <a href="" onclick="btnfun()">
                                    <div class="btn-txt">View Our Work</div>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="image-box anim-img">
                        <img src="https://i.postimg.cc/bvg1m9sh/settings.png" >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fl-row about-us alt-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-4">
                    <div class="yellow-box">
                        <p>About Us</p>
                    </div>
                    <div class="dual-headings">
                        <h4>Passionate</h4>
                        <h2>Agency</h2>
                    </div>
                    <div class="divider">
                        <span class="separator"> </span>
                    </div>
                    <div class="text-block">
                        <p>Unlock your digital potential with our adept development team's scalable solutions, enhancing website performance and realizing your aspirations.</p>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4">
                    <div class="icon-box">
                        <img src="https://i.postimg.cc/Z0tMg3Hm/web-design.png" alt="UX Deisgn">
                    </div>
                    <div class="heading">
                        <h4>Web Design</h4>
                    </div>
                    <div class="text-block">
                        <p>Committed to excellence, our skilled team collaborates to understand your goals, audience, and industry, crafting custom solutions that elevate your brand.</p>
                    </div>
                    <div class="btn-box arrow-btn">
                        <a href="#">
                            <div class="btn-txt">Read More</div>
                            <div class="btn-icon">
                                <img src="https://i.postimg.cc/tg5MBQbD/next.png" alt="arrow icon"> 
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4">
                    <div class="icon-box style-2">
                        <img src="https://i.postimg.cc/LstzSWpG/coding.png" alt="Development">
                    </div>
                    <div class="heading">
                        <h4>Development</h4>
                    </div>
                    <div class="text-block">
                        <p>Our expert development team can create robust, scalable solutions, unlocking your online platform's full potential. Partner with us for enhanced website performance.</p>
                    </div>
                    <div class="btn-box arrow-btn" id="anim-arrow">
                        <a href="#">
                            <div class="btn-txt">Read More</div>
                            <div class="btn-icon">
                                <img src="https://i.postimg.cc/tg5MBQbD/next.png" alt="arrow icon"> 
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row-bottom style-2">
                        <span>SPECTRON</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fl-row tech-slider">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-3">
                    <div class="heading">
                        <h2>Our Technologies</h2>
                    </div>
                    <div class="text-block">
                        <p>Quality is our Priority</p>
                    </div>
                </div>
                <div class="col col-12 col-lg-9">
                    <div class="tech-slider-box">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="icon-box">
                                    <img src="https://i.postimg.cc/Bvjkw72c/security.png">
                                </div>
                                <div class="text-block">
                                    <p>Engineering modern business to improve everyday lives</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box">
                                    <img src="https://i.postimg.cc/9XsXrx9w/charts.png">
                                </div>
                                <div class="text-block">
                                    <p>Harness your data's potential and enable your institution</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box">
                                    <!-- <img src="https://i.postimg.cc/GmCcjHqc/radio.png"> -->
                                    <img src="media/radio_wireless_tower.svg" height="64" >
                                </div>
                                <div class="text-block">
                                    <p>Examine data and construct AI to enhance human potential</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box">
                                    <img src="https://i.postimg.cc/kX8J8xN1/wrench.png">
                                </div>
                                <div class="text-block">
                                    <p>Creating advanced technologies supported by an adaptable framework</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row-bottom style-1">
                        <span>SPECTRON</span>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fl-row alt-bg">
        <div class="container">
            <div class="row">
                <div class="col col-md-3"></div>
                <div class="col col-md-3"></div>
                <div class="col col-md-3"></div>
            </div>
        </div>
    </div>

    <div class="fl-row">
        <div class="container">
            <div class="row">
                <div class="col col-md-3"></div>
                <div class="col col-md-3"></div>
                <div class="col col-md-3"></div>
            </div>
        </div>
    </div>

</div>

<?php
include("template/footer.php");
?>
    