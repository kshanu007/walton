<?php
include("header.php");
?>
          <!-- Page titlebar start -->
          <div class="content-section decorated-bg page-titlebar">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="title">SkyLight Tinting</h1>
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
                      <a href="#">SkyLight Tinting</a>
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
                    <h2 class="title">SkyLight Tinting window Film Installation</h2>
                    <p class="description">While skylights are popular window choices that allow stunning natural light into a room, there are some downsides to having a skylight. Skylights can account for a tremendous amount of heat buildup during the warmer months, in addition exposing occupants and interior furnishings to potentially dangerous UV rays. In short, skylights are notorious for creating new problems while solving others. However, most issues surrounding skylights can be addressed with professionally-installed skylight tinting and window film.</p>
                  </div>
                  <div id="button"><h5>+ Read More</h5></div>
                  <br><br><br>
                  <div class="content-section-header center" id="hide">
                    <h2 class="title">Benefits of SkyLight Tinting Window Film</h2>
                    <p style="font-weight: 300;font-size: 1.2rem;">At Window Film Depot, we work with all types of customers to install the proper window film to skylights, effectively minimizing heat and UV exposure without disrupting the natural light from entering the room. Whether for commercial or residential projects, we provide custom skylight tinting services to help our customers get the most from their skylight windows. In turn, our customers can realize a number of benefits, including:<br>
                    <ul style="list-style-type:square">
                      <li><b>Indoor Temperature Control</b> – Solar window films from 3M are proven to reduce up to 78% of the sun’s heat passing through windows. For skylights that see prolonged sun exposure throughout the day, this level of temperature control can have a profound effect on both occupant comfort and energy savings.<br></li>
                    <li><b>Anti-Glare</b> – Sunlight can hit buildings at varying angles and intensities throughout the day, leaving skylights susceptible to distracting glare. Proper skylight tinting solutions help to eliminate this common issue by redirecting the sun’s rays or reducing the visible light transmission from sunlight.<br></li>
                    <li><b>Furniture Fading</b> – Over time, UV radiation from the sun can cause furnishings, upholstery, and even cabinets to fade and discolor. With UV-blocking window film, you can protect your property from UV damage.<br></li>
                    <li><b>Weather Reinforcement</b> – Skylight window film can offer more than just sun blocking and UV protection qualities. One of the modern benefits of today’s window film products is layer safety and security capabilities, even if that means protecting against harsh weather and storms. <br> </li>
                    <li><b>Protect Occupant Health</b> – While skylights offer a unique perspective and beautiful natural light, they can also expose occupants to damaging rays. Harsh UV rays can be harmful to your skin and even your eyes. Skylight window film can help protect occupant health by eliminating damaging UV radiation from entering in the first place.<br></li>
                    </ul>
                    
                    There’s no question that skylights are a source of beautiful natural lighting that bring outdoor elements inside while reducing the need for artificial lighting. But what many fail to realize is that skylights can also leave your work or living space vulnerable to sun damage, weather hazards, and glare. Skylight tinting film is by and large the most cost-effective way to combat the problems associated with sunlight coming from your skylight windows.
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