<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">clear heat control</h1>
                  <ol class="breadcrumb">
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">Solutions</a>
                    </li>
                    <li>
                      <a href="#">Sun-Control</a>
                    </li>
                    <li>
                      <a href="#">clear heat control</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Page titlebar end -->
          <!-- intro and benifits start -->
          <div class="content-section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="content-section-header center">
                    <h2 class="title">Clear heat control window Film Installation</h2>
                    <p class="description">Dynamic window film, also commonly known as adaptive window tint, is one of the most innovative options on the market today. Mostly used in office and commercial applications, dynamic window tint can transform from transparent appearance to opaque, creating a "wall" for privacy purposes as well as projections and presentations. Living up to its name, adaptive window tint is an excellent option for any space that demands the flexibility for privacy as well as capabilities to display screen projections, deliver presentations, and cater to other creative applications.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <h2 class="title">Benefits of Clear heat control Window Film</h2>
                    <p style="font-weight: 300;font-size: 1.2rem;">Despite having the luxury of air conditioning, sometimes experiencing the sun’s heat and glare is unavoidable, even indoors. Sun blocking and heat control window films from 3M enable you to minimize disturbing hot spots, reduce glare, and protect furnishings and upholstery from damaging UV rays, not to mention your skin. Unlike blinds and other more conventional solutions, 3M heat control window film provides a clear, uninterrupted view through your windows. 3M heat control film rejects up to 97% of infrared light while allowing a high transmission of natural light into your indoor environment. With common applications ranging from office spaces and retail storefronts to apartments and residential living spaces, installing heat control window film delivers exceptional comfort for occupants while dramatically lowering a building’s energy consumption.<br>

                    In addition to keeping your space cool, sun blocking and heat control window film from 3M rejects up to 99.9% of damaging UV rays. Not only does this protect you and a building’s occupants from potentially damaging UV rays, but this also helps protect your interior from fading and discoloration. At Window Film Depot, our customers rave about the benefits of our solar window film solutions. Retailers can lower operating costs and protect valuable floor merchandise from fading while creating a comfortable shopping environment. Employers can also provide a better working environment that promotes productivity and minimizes distraction.</p>
                  </div>
                  <style type="text/css">
                    #button{
                      /*border:solid 1px;*/
                     /* width: 25px;
                      height: 23px;*/
                          float:left;
                          cursor:pointer;
                          margin-top: 5px;
                      }
                      #button2{
                           border:solid 1px;
                          float:left;
                          cursor:pointer;
                      }
                      #hide{
                        display: none;
                      }
                  </style>
                  <script type="text/javascript">
                    $("#button").click(function(){
                              if($(this).html() == "<h5>- Read More</h5>"){
                                  $(this).html("<h5>+ Read More</h5>");
                              }
                              else{
                                $(this).html("<h5>- Read More</h5>");
                              }
                              $("#hide").slideToggle();
                          });
                  </script>
                </div>
              </div>
            </div>
          </div>
          <!-- intro and benifits end -->
          <!-- Partners start -->
         <!--  <div class="content-section">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="partners-wrapper">
                    <div class="partners-nav left owl-nav">
                      <button id="partners-prev" type="button" role="presentation" class="owl-prev">
                        <span class="wicon-iconmonstr-angel-left-circle-thin"></span>
                      </button>
                    </div>
                    <div id="partners" class="partners-content owl-carousel owl-theme">
                      <img src="../../images/partners/1.png" alt="">
                      <img src="../../images/partners/2.png" alt="">
                      <img src="../../images/partners/3.png" alt="">
                      <img src="../../images/partners/4.png" alt="">
                      <img src="../../images/partners/5.png" alt="">
                      <img src="../../images/partners/6.png" alt="">
                      <img src="../../images/partners/7.png" alt="">
                      <img src="../../images/partners/8.png" alt="">
                      <img src="../../images/partners/9.png" alt="">
                    </div>
                    <div class="partners-nav right owl-nav">
                      <button id="partners-next" type="button" role="presentation" class="owl-next">
                        <span class="wicon-iconmonstr-angel-right-circle-thin"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Partners end -->
        </div>
    <?php
include("footer.php");
?>