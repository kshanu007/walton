<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">Blast Mitigation</h1>
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
                      <a href="#">Blast Mitigation</a>
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
                    <h2 class="title">Blast Mitigation Window Film Installation</h2>
                    <p class="description">Unfortunately we live in a world where bomb blasts and terrorist threats pose real threat to our safety and security. Fortunately, advancements in safety and security measures have kept pace in protecting against these threats. Blast mitigation film helps reduce the risks of high-velocity flying glass that can occur as a result of an unexpected explosion or terrorist attack. These protective window films create barriers to help hold glass together amidst a blast, protecting the people inside of targeted and surrounding buildings.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <!-- <h2 class="title"></h2> -->
                    <p style="font-weight: 300;font-size: 1.2rem;">During a blast, broken airborne glass moving at high-velocities poses a serious risk for injury and even death. Blast pressures can carry glass shards at speeds of up to 60-70 MPH, or 100 feet per second. Blast mitigation film serves an effective means to better protect people, property, and possessions from flying glass shards – one of the most common blast-related injuries and fatalities.<br>

                    Whether accidental or intentional, blasts and explosions can cause major harm and devastation. Glass is the weakest link amidst a blast, and unprotected glass is one of greatest hazards that can be mitigated. At Window Film Depot, we can help you dramatically increase your level of protection and help save lives. Applicable to virtually any vulnerable glass, products like DefenseLite provide exceptional blast and impact-resistant capabilities.<br>

                    Window Film Depot is certified to install blast mitigation film and glass protection systems nationwide, specializing in high risk storefront, commercial, educational, and governmental facilities. Clients installations include: DHS, DOD, USACE, GSA, and other government agencies. Whether your project is local or national, Window Film Depot can rapidly deploy installation teams specialized in blast mitigation products to multiple locations, within budget, and to GSA Fragment Retention Level 3B standards.


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