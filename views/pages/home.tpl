{extends file="layouts/mainhome.tpl"}
{block name="content"}
  <section class="section section-md section-md-1 text-center bg-wave-dark-wrap pb-0 text-gray-600">
        <div class="bg-wave-dark bg-wave-dark-1 bg-gray-800">
          <svg class="wave-dark" width="1920" height="713" viewBox="0 0 1920 713" fill="none">
            <path class="wave-path wave-path-1" d="M1920 463.314V713H0V414.325C0.0515862 414.316 0.103105 414.308 0.154556 414.299C59.8232 467.769 270.664 573.445 636.676 568.392C873.316 565.126 1040.4 505.514 1188.57 452.65C1326.86 403.309 1448.68 359.846 1595.21 373.565C1727.41 385.944 1837.94 423.471 1920 463.314Z" fill="white"></path>
            <path class="wave-path wave-path-2" d="M1920 463.988V713H0V234.66C102.275 199.182 221.353 170.486 354.422 158.026C584.381 136.494 775.567 204.707 992.611 282.146C1225.15 365.113 1373 457.092 1858.75 463.796C1879.49 464.082 1899.9 464.142 1920 463.988Z" fill="white"></path>
            <path class="wave-path wave-path-3" d="M1920 85.9538V713H0V310.063C15.2357 310.099 30.6508 310.012 46.2454 309.796C417.632 304.67 679.852 211.113 912.389 128.146C1129.43 50.7068 1320.62 -17.5061 1550.58 4.02629C1690.21 17.1004 1814.43 48.0502 1920 85.9538Z" fill="white"></path>
          </svg>
        </div>
        <div class="container">
          <h6 class="wow fadeInUp">Welcome to our Web Agency</h6>
          <h1 class="wow fadeInUp" data-wow-delay=".2s">{$contentData.hero_title}</h1>
          <p class="big d-none d-sm-block wow fadeInUp" data-wow-delay=".4s">{$contentData.hero_content}</p>
          <img class="wow fadeInUp" src="{$contentData.hero_url}" alt="" width="830" height="473" data-wow-delay=".6s"/>
        </div>
      </section>
      <div class="position-relative">
        <svg class="wave-light" width="1920" height="1060" viewBox="0 0 1920 1060" fill="none">
          <path class="wave-path" d="M1270.8 218.376C1568.83 102.736 1850.63 180.948 2030.21 307.382C2032.51 308.998 2034.48 310.988 2036.1 313.28L2244.6 608.07C2253.3 620.368 2249.27 637.477 2235.62 643.849C2136.91 689.931 1934.93 754.715 1745.59 720.317C1486.28 673.211 1150.28 423.428 797.391 434.116C526.793 442.311 106.516 537.961 -92.8574 590.62C-106.447 594.21 -120.226 585.95 -123.559 572.295L-211.97 210.086C-214.872 198.199 -208.784 185.922 -197.319 181.649C-86.282 140.272 153.264 93.3374 366.435 189.479C649.935 317.339 970.87 334.757 1270.8 218.376Z" fill="#4D4468"></path>
          <path class="wave-path" d="M772.48 255.118C380.165 103.024 9.24323 206.281 -226.745 372.767C-229.039 374.385 -231.01 376.373 -232.632 378.664L-512.582 774.127C-521.29 786.427 -517.274 803.55 -503.683 810.064C-377.112 870.73 -105.683 960.41 148.442 914.284C489.263 852.422 930.89 524.399 1394.72 538.435C1753.87 549.303 2313.64 677.282 2572.46 745.98C2586.04 749.585 2599.94 741.362 2603.28 727.711L2722.96 237.787C2725.87 225.895 2719.88 213.66 2708.45 209.275C2565.44 154.399 2245.45 89.0608 1961.15 217.17C1588.53 385.08 1166.7 407.953 772.48 255.118Z" fill="#4D4468"></path>
          <path class="wave-path" d="M1447.25 805.997C1794.64 1025.39 2182.35 991.059 2453.13 870.614C2455.6 869.515 2457.81 868.064 2459.73 866.318L2833.15 525.603C2842.65 516.93 2842.3 503.238 2831.92 495.349C2724.31 413.548 2478 274.243 2215.74 273.626C1867.52 272.805 1356.87 514.147 906.52 416.969C558.455 341.862 42.8667 116.692 -194.437 2.73577C-207.328 -3.45464 -223.54 1.25043 -229.521 12.9186L-466.827 475.879C-471.469 484.935 -468.544 495.538 -459.301 501.375C-333.611 580.741 -34.896 703.74 275.402 629.247C680.162 532.076 1098.27 585.601 1447.25 805.997Z" fill="#4D4468"></path>
        </svg>

  <section class="section section-md bg-default text-center">
          <div class="container">
            <div class="row row-fix justify-content-center wow fadeInUp">
              <div class="col-xl-8 col-lg-10">
                <h6>Why Choose Us</h6>
                <h2>{$contentData.article_title}</h2>
                <p class="big">{$contentData.article_content}</p><a class="button button-secondary button-nuka" href="/agcms/articles">Learn More<span class="button-overlay"></span></a>
              </div>
            </div>
          </div>
        </section>

   <section class="section section-md bg-default" id="about">
          <div class="container">
            <div class="row row-40 align-items-center wow fadeInUp">
              <div class="col-xl-7 col-lg-6">
                <div class="img-video"><img class="box-shadow" src="{$contentData.about_url}" alt="" width="660" height="406"/>
                </div>
              </div>
              <div class="col-xl-5 col-lg-6">
                <h6>About Us</h6>
                <h2>{$contentData.about_title}</h2>
                <p class="big">{$contentData.about_content}</p><a class="button button-secondary button-nuka" href="/agcms/about">About Us<span class="button-overlay"></span></a>
              </div>
            </div>
          </div>
        </section>

   <section class="section section-md bg-default">
          <div class="container">
            <div class="row row-15 justify-content-sm-between wow fadeInUp">
              <div class="col-xl-5 col-lg-6">
                <h6>Our Mission</h6>
                <h2>{$contentData.mission_title}</h2>
                <p class="big">{$contentData.mission_content}</p>
                <div class="quote-classic">
                  <div class="quote-classic-body">
                    <q>{$contentData.mission_quote}</q>
                  </div>

                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="text-center text-lg-left"><img src="{$contentData.mission_url}" alt="" width="500" height="406"/>
                </div>
              </div>
            </div>
          </div>
        </section>

    <section class="section section-md bg-gray-800 position-relative text-center" id="our-projects">
        <svg class="wave-dark" width="1920" height="713" viewBox="0 0 1920 713" fill="none">
          <path class="wave-path wave-path-1" d="M1920 463.314V713H0V414.325C0.0515862 414.316 0.103105 414.308 0.154556 414.299C59.8232 467.769 270.664 573.445 636.676 568.392C873.316 565.126 1040.4 505.514 1188.57 452.65C1326.86 403.309 1448.68 359.846 1595.21 373.565C1727.41 385.944 1837.94 423.471 1920 463.314Z" fill="white"></path>
          <path class="wave-path wave-path-2" d="M1920 463.988V713H0V234.66C102.275 199.182 221.353 170.486 354.422 158.026C584.381 136.494 775.567 204.707 992.611 282.146C1225.15 365.113 1373 457.092 1858.75 463.796C1879.49 464.082 1899.9 464.142 1920 463.988Z" fill="white"></path>
          <path class="wave-path wave-path-3" d="M1920 85.9538V713H0V310.063C15.2357 310.099 30.6508 310.012 46.2454 309.796C417.632 304.67 679.852 211.113 912.389 128.146C1129.43 50.7068 1320.62 -17.5061 1550.58 4.02629C1690.21 17.1004 1814.43 48.0502 1920 85.9538Z" fill="white"></path>
        </svg>
        <div class="container wow fadeInUp">
          <h6>Our Recent Projects</h6>
          <h2 class="heading-1">Take a look at the recent and featured projects that we have completed</h2>
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
              <p class="big">Our team of creative experts and web designers regularly works to deliver the best websites for you. Here are some of our recent projects we have worked on.</p><a class="button button-secondary button-nuka offset-top-1" href="/agcms/ourprojects">View More<span class="button-overlay"></span></a>
            </div>
          </div>
        </div>

        <div class="owl-carousel owl-corporate-wide wow fadeInUp" data-items="1" data-sm-items="2" data-md-items="3" data-xl-items="4" data-stage-padding="60" data-sm-stage-padding="38" data-margin="20" data-slide-transition="linear" data-smart-speed="4000" data-autoplay-time-out="4000">
          <div class="owl-corporate-item"><img src="{$projects.firstSection[0].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.firstSection[1].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.firstSection[2].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.secondSection[0].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[0].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[1].image_url}" alt="" width="442" height="310"/>
          </div>
          {* <div class="owl-corporate-item"><img src="{$projects.thirdSection[2].image_url}" alt="" width="442" height="310"/>
          </div> *}
        </div>

        <div class="owl-carousel owl-corporate-wide wow fadeInUp" data-items="1" data-sm-items="2" data-md-items="3" data-xl-items="4" data-stage-padding="80" data-sm-stage-padding="38" data-margin="20" data-slide-transition="linear" data-smart-speed="4500" data-autoplay-time-out="4500" data-center="true">
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[2].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[3].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[4].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[5].image_url}" alt="" width="442" height="310"/>
          </div> 
           <div class="owl-corporate-item"><img src="{$projects.thirdSection[6].image_url}" alt="" width="442" height="310"/>
          </div>
          <div class="owl-corporate-item"><img src="{$projects.thirdSection[7].image_url}" alt="" width="442" height="310"/>
          </div>
        </div>
      </section>
      <div class="oh">
        <svg class="wave-light wave-light-8" width="1920" height="1060" viewBox="0 0 1920 1060" fill="none">
          <path class="wave-path" d="M1270.8 218.376C1568.83 102.736 1850.63 180.948 2030.21 307.382C2032.51 308.998 2034.48 310.988 2036.1 313.28L2244.6 608.07C2253.3 620.368 2249.27 637.477 2235.62 643.849C2136.91 689.931 1934.93 754.715 1745.59 720.317C1486.28 673.211 1150.28 423.428 797.391 434.116C526.793 442.311 106.516 537.961 -92.8574 590.62C-106.447 594.21 -120.226 585.95 -123.559 572.295L-211.97 210.086C-214.872 198.199 -208.784 185.922 -197.319 181.649C-86.282 140.272 153.264 93.3374 366.435 189.479C649.935 317.339 970.87 334.757 1270.8 218.376Z" fill="#4D4468"></path>
          <path class="wave-path" d="M772.48 255.118C380.165 103.024 9.24323 206.281 -226.745 372.767C-229.039 374.385 -231.01 376.373 -232.632 378.664L-512.582 774.127C-521.29 786.427 -517.274 803.55 -503.683 810.064C-377.112 870.73 -105.683 960.41 148.442 914.284C489.263 852.422 930.89 524.399 1394.72 538.435C1753.87 549.303 2313.64 677.282 2572.46 745.98C2586.04 749.585 2599.94 741.362 2603.28 727.711L2722.96 237.787C2725.87 225.895 2719.88 213.66 2708.45 209.275C2565.44 154.399 2245.45 89.0608 1961.15 217.17C1588.53 385.08 1166.7 407.953 772.48 255.118Z" fill="#4D4468"></path>
          <path class="wave-path" d="M1447.25 805.997C1794.64 1025.39 2182.35 991.059 2453.13 870.614C2455.6 869.515 2457.81 868.064 2459.73 866.318L2833.15 525.603C2842.65 516.93 2842.3 503.238 2831.92 495.349C2724.31 413.548 2478 274.243 2215.74 273.626C1867.52 272.805 1356.87 514.147 906.52 416.969C558.455 341.862 42.8667 116.692 -194.437 2.73577C-207.328 -3.45464 -223.54 1.25043 -229.521 12.9186L-466.827 475.879C-471.469 484.935 -468.544 495.538 -459.301 501.375C-333.611 580.741 -34.896 703.74 275.402 629.247C680.162 532.076 1098.27 585.601 1447.25 805.997Z" fill="#4D4468"></path>
        </svg>

 <section class="section section-md bg-default" id="awards">
          <div class="container">
            <div class="row row-fix row-40 align-items-center wow fadeInUp">
              <div class="col-xl-5">
                <h6>Our Team</h6>
                <h2>Meet our team of experts</h2>
                <p class="big">The team within the digital agency works collaboratively to create and execute innovative digital marketing strategies for their clients. They leverage their expertise in areas such as web design, social media marketing, and search engine optimization to drive measurable results and help their clients achieve their business objectives.</p>
              </div>
              <div class="col-xl-7">
                <div class="row row-40 row-narrow">
                  <div class="col-sm-6">
                  <img style="border-radius: 5%" src="{$users[0].user_url}"/>
                  </div>
                  <div class="col-sm-6">
                  <img style="border-radius: 5%" src="{$users[1].user_url}"/>
                  </div>
              </div>
            </div>
          </div>
        </section>
{/block}

