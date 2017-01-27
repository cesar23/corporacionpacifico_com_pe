<!-- Main component for a primary marketing message or call to action -->
<div class="row">
    <div class="col-lg-12">
        <style>
            .captionOrange, .captionBlack
            {
                color: #fff;
                font-size: 20px;
                line-height: 30px;
                text-align: center;
                border-radius: 4px;
            }
            .captionOrange
            {
                background: #EB5100;
                background-color: rgba(235, 81, 0, 0.6);
            }
            .captionBlack
            {
                font-size:16px;
                background: #000;
                background-color: rgba(0, 0, 0, 0.4);
            }
            a.captionOrange, A.captionOrange:active, A.captionOrange:visited
            {
                color: #ffffff;
                text-decoration: none;
            }
            a.captionOrange:hover
            {
                color: #eb5100;
                text-decoration: underline;
                background-color: #eeeeee;
                background-color: rgba(238, 238, 238, 0.7);
            }
            .bricon
            {
                background: url(template-01/jssor-slider/img/browser-icons.png);
            }
        </style>
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. -->
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1140px;
        height: 300px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(template-01/jssor-slider/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 300px;
            overflow: hidden;">
                <div>
                    <a u=image href="#"><img src="images/slider/1.jpg" /></a>
 <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                        Bienvenido
                    </div>
                </div>


                <div>
                    <a u=image href="#"><img src="images/slider/2.jpg" /></a>
                    <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                        PIONERS
                    </div>
                </div>
                <div>
                    <a u=image href="#"><img src="images/slider/3.jpg" /></a>
                    <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 10px; width:300px; height:30px;">
                        Mas gente confia  en nosotros
                    </div>
                </div>
      
            </div>

            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
            <style>
                /* jssor slider bullet navigator skin 01 css */
                /*
                .jssorb01 div           (normal)
                .jssorb01 div:hover     (normal mouseover)
                .jssorb01 .av           (active)
                .jssorb01 .av:hover     (active mouseover)
                .jssorb01 .dn           (mousedown)
                */
                .jssorb01 {
                    position: absolute;
                }
                .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 12px;
                    height: 12px;
                    filter: alpha(opacity=70);
                    opacity: .7;
                    overflow: hidden;
                    cursor: pointer;
                    border: #000 1px solid;
                }
                .jssorb01 div { background-color: gray; }
                .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                .jssorb01 .av { background-color: #fff; }
                .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->

            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
            <style>
                /* jssor slider arrow navigator skin 05 css */
                /*
                .jssora05l                  (normal)
                .jssora05r                  (normal)
                .jssora05l:hover            (normal mouseover)
                .jssora05r:hover            (normal mouseover)
                .jssora05l.jssora05ldn      (mousedown)
                .jssora05r.jssora05rdn      (mousedown)
                */
                .jssora05l, .jssora05r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 40px;
                    height: 40px;
                    cursor: pointer;
                    background: url(template-01/jssor-slider/img/a17.png) no-repeat;
                    overflow: hidden;
                }
                .jssora05l { background-position: -10px -40px; }
                .jssora05r { background-position: -70px -40px; }
                .jssora05l:hover { background-position: -130px -40px; }
                .jssora05r:hover { background-position: -190px -40px; }
                .jssora05l.jssora05ldn { background-position: -250px -40px; }
                .jssora05r.jssora05rdn { background-position: -310px -40px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
            <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div>
        <!-- Jssor Slider End -->
    </div>
</div>
<!-- Fin Slides Container -->