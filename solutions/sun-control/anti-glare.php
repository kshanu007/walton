<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">Anti-Glare</h1>
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
                      <a href="#">Anti-Glare</a>
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
                    <h2 class="title">Anti-Glare Window Film Installation</h2>
                    <p class="description">Anti-glare window film is a special type of sun control film that helps eliminate a significant amount of unwanted sunlight and glare while allowing natural light to pass through. Whether it is the long sunny days of summer, the intensity of morning and evening sun, or the low-lying nature of the winter sun, the intense brightness and ultraviolet (UV) rays from the sun can pose a problem year around. Compared to traditional solutions like blinds and screens, glare-reduction window film is a more cost-effective and easy-to-maintain solution that won't obstruct or block your view to the outdoors.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <h2 class="title">Benefits of Anti-Glare Window Film</h2>
                    <p style="font-weight: 300;font-size: 1.2rem;">The glare reduction capabilities of 3M window film products like the Prestige Series provide a transparent solution that doesn’t obstruct or distort your view from inside. Anti-glare film is effective as soon as it’s installed, and can minimize glare by up to 95%. Additionally, anti-glare film requires no additional cleaning and maintenance.<br>

                    In addition to glare control, such window films also provide a number of other benefits. One of the critical advantages to 3M anti-glare film is its ability to filter up to 99% of the sun’s harmful UV rays. Beyond being damaging to the skin, UV rays are also the main contributing factor to fading in furnishing and upholstery. So with anti-glare window film, you can also add a layer of solar protection, as well as the ability improve a building’s safety and security when combined with other window film products.<br>

                    At Window Film Depot, we are a nationwide installer of sun control and anti-glare window film products. We work with commercial, governmental, educational, and residential customers to provide custom window film solutions designed to meet the unique needs of every project. We’re also the #1 3M Window Film installation company and offer a full range of product solutions for sun control and beyond.<br>


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