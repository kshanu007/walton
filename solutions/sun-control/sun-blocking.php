<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">Sun blocking</h1>
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
                      <a href="#">Sun blocking</a>
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
                    <h2 class="title">Sun blocking window Film Installation</h2>
                    <p class="description">Sun blocking window film is one of the most highly sought products on the market, and for good reason. From commercial office buildings, retail storefronts, governmental facilities, hospitals, schools, and homes, the benefits of sun blocking window film are universally-applicable across many types of buildings. In addition to blocking the sun's heat, this type of window film also prevents glare, minimizes hot spots, and blocks harmful ultraviolet (UV) rays, which can be damaging to the skin as well as cause fading in furnishings and upholstery after prolonged exposure.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <h2 class="title">Benefits of sun blocking Window Film</h2>
                    <p style="font-weight: 300;font-size: 1.2rem;">Perhaps one of the greatest benefits of sun and UV blocking window film is the ability to lower heating and cooling bills. To help put this into perspective, 3M Prestige Series Window Films are proven to reduce up to 78% of the sun’s heat. This, in turn, provides dramatic dividends for office buildings and facilities with larger spaces, especially those located in areas that see a lot of sunlight throughout the year.<br>

                    In turn, we’ve helped our commercial and residential customers select and install sun blocking window film. In addition to solar window film to block the sun’s heat and UV rays, we’re also able to integrate additional window treatments to help improve the level of security, comfort, energy efficiency, and overall look of any indoor environment. We can help you combine the energy efficiency of sun blocking window films by pairing these features with decorative window treatments as well as safety and security window film for ultimate protection.
                    </p>
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