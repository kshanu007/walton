<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">Anti-Smash and grab</h1>
                  <ol class="breadcrumb">
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">Solutions</a>
                    </li>
                    <li>
                      <a href="#">Safety & Security Flims</a>
                    </li>
                    <li>
                      <a href="#">Anti-Smash and Grab</a>
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
                    <h2 class="title">Anti-Smash & Grab Window Film Installation</h2>
                    <p class="description">When it comes to warding-off theft and vandalism, anti-smash and grab film is the best solution for retailers with vulnerable points of entry, such as glass doors and storefronts. Anti-smash and grab window film mitigates hazards from shattered glass while holding windows and doors in place. In turn, these measures can significantly deter unwarranted entry, stolen products, and further harm to the premise or its occupants.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <h2 class="title">Benefits of anti-Smash & Grab Window Film</h2>
                    <p style="font-weight: 300;font-size: 1.2rem;">Also called anti-intrusion window film, anti-smash and grab film is similar to other types of safety and security film but offers added advantages against human intrusion. Engineered with micro-layered, tear-resistant film, anti-smash and grab window film is far more resilient and difficult to penetrate than standard films. When properly installed, anti-intrusion window film strengthens glass and provides advanced protection for people, property and possessions.<br>

                    At Window Film Depot, we provide anti-smash and grab film installations designed meet the most demanding government specifications and performance. In addition to anti-intrusion properties, this window film mitigates hazards from both natural and human causes. In instances of natural disasters or explosions, the properties of this window film help provide protection to people and property from flying glass shards.<br>

                    As the #1 3M window film installer in the nation, our team at Window Film Depot can integrate anti-smash and grab film with other window treatments. One popular option is to combine anti-intrusion window film with 3M Impact Protection Attachment Systems (IPAs) for additional safety and security.<br>

                    Another option is integrating 3M Sun Control Films to block harmful UV rays that cause fading and discoloration to inventory, furnishings, and upholstery. Window Film Depot provides nationwide installation services for those interested in anti-smash and grab, as well as other types of safety and security film. </p>
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