<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">Frosted Films</h1>
                  <ol class="breadcrumb">
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">Solutions</a>
                    </li>
                    <li>
                      <a href="#">Frosted Flims</a>
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
                    <h2 class="title">Frosted</h2>
                    <p class="description">Frosted glass film is an easy to apply window film that provides privacy by giving glass the appearance of acid-etched or sand blasted glazing – preventing vision from both sides of the window.<br>
                    The frosted glass film supplied by The Window Film Company is Frostbrite, a high-performance window film, specially developed to be easy to install and to deliver a stylish privacy solution without sacrificing natural light.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <h2 class="title">Frostbrite frosted window film is hugely popular for a number of reasons;</h2>
                    <p style="font-weight: 300;font-size: 1.2rem;">1.       Effective immediately
                      <br>
                    Once applied, the film is effective immediately, blocking the view from both sides of the glass. The contemporary, stylish look means that it’s the perfect solution for any location, whether that be for privacy in the home or for use in a commercial setting. The film is designed to be retro-fitted to the internal face of glass and can be installed with the minimum of fuss.<br>

                    2.       Long lasting and durable
                    <br>
                    Frostbrite frosted film looks stylish, but it is also incredibly tough and long lasting. It has been specially developed to be resistant to water and moisture, making it perfect for use in bathrooms or on shower screens. It is also easy to clean (no special treatment is required, simply clean the film as you would normally clean glass) and is incredibly tough – it can be used with confidence in high traffic locations such as corridors and doors.<br>

                    3.       Fully customisable
                          <br>
                    Frosted glass film provides the perfect opportunity for customisation and The Window Film Company offers a wide range of stylish and creative options.

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
          <div class="content-section">
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
                      <img src="images/Frosted/1.jpg" alt="">
                      <img src="images/Frosted/2.jpg" alt="">
                      <img src="images/Frosted/3.jpg" alt="">
                      <img src="images/Frosted/4.jpg" alt="">
                      <img src="images/Frosted/5.jpg" alt="">
                      <img src="images/Frosted/6.jpeg" alt="">
                      <img src="images/Frosted/7.jpeg" alt="">
                      <img src="images/Frosted/8.jpeg" alt="">
                      <img src="images/Frosted/9.jpeg" alt="">
                      <img src="images/Frosted/10.jpeg" alt="">
                      <img src="images/Frosted/11.jpg" alt="">
                      <img src="images/Frosted/12.jpg" alt="">
                      <img src="images/Frosted/13.jpg" alt="">
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
          </div>
          <!-- Partners end -->
        </div>
<?php
include("footer.php");
?>