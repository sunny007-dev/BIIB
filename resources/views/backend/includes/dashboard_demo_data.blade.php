
  <head>
    <!-- <link rel="stylesheet" href="asset/vendor/choices.js/public/assets/styles/choices.min.css"> -->
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="asset/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="asset/css/custom.css">
    <!-- Favicon-->
  </head>
  <body>

    <div class="d-flex align-items-stretch">

      <div class="page-content">
        
            <!-- Breadcrumb-->
            
        <section class="pt-0">
          <div class="container-fluid">
            <div class="row gy-4">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body"><strong>Placements 2022-2023</strong>
                  <canvas id="myChartDough" class="chart-canvas"   style="display: block; box-sizing: border-box; height: 214px; width: 360.5px;"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script type="text/javascript">
                const dataDough = {
                    labels: ['Human Resources','Operations','Business Operations','International Business','Marketing','Finance'],
                    datasets: [{
                        label:  'Placement With Department',
                        backgroundColor: ['rgb(139,89,212)','rgb(4,0,58)','rgb(255,205,86)','rgb(61,177,102)'],
                      
                        fill:true,
                        data: [119,52,50,33,402,180]
                    }],
                };

                const configDough = {
                    type: 'line',
                    data: dataDough,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                               
                            }
                        }
                    },
                };

                const myChartDough = new Chart(
                    document.getElementById('myChartDough'),
                    configDough
                );
            </script>
                  </div>
                </div>
              </div>
          <div class="col-lg-4">
                <div class="card">
                  <div class="card-body"><strong>Recruiter</strong>
                  <canvas id="myChartP" class="chart-canvas"  height="200" width="360" style="display: block; box-sizing: border-box; height: 170px; width: 360.5px;"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script type="text/javascript">
                var pData_2022 = JSON.parse(`<?php echo $placement_year_count_2022; ?>`);
                var pLabel_2022 = JSON.parse(`<?php echo $placement_all_label_2022; ?>`);
                 var pData_2020 = JSON.parse(`<?php echo $placement_year_count_2020; ?>`);
                var pLabel_2020 = JSON.parse(`<?php echo $placement_all_label_2020; ?>`);


                const dataP = {
                    labels: ['2022-2020','2020-2018'],
                    datasets: [{
                        label: 'Placement',
                        backgroundColor: ['rgb(227,40,69)','rgb(9, 13, 50)'],
                        borderColor: 'rgb(227,40,69)',
                        data: ['121','123'],
                    }],
                };

                const configP = {
                    type: 'bar',
                    data: dataP,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                               
                            }
                        }
                    },
                };

                const myChartP = new Chart(
                    document.getElementById('myChartP'),
                    configP
                );
            </script>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body"><strong>Visitors</strong>
                    
                  <canvas id="myNewChart" class="chart-canvas" height="200" width="360" style="display: block; box-sizing: border-box; height: 170px; width: 360.5px;"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script type="text/javascript">
                var visitorData = JSON.parse(`<?php echo $visitor; ?>`);
                var visitorLabel = JSON.parse(`<?php echo $visitorl; ?>`);

                const dataNew = {
                    labels: visitorLabel,
                    datasets: [{
                        label: 'Visitors',
                        backgroundColor: 'rgb(61,177,102)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: visitorData,
                    }]
                };

                const configNew = {
                    type: 'bar',
                    data: dataNew,
                    options: {}
                };

                const myNewChart = new Chart(
                    document.getElementById('myNewChart'),
                    configNew
                );
            </script>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body"><strong>National Business Convention</strong>
                  <canvas id="myNewChartCon" class="chart-canvas" height="265" width="360" style="display: block; box-sizing: border-box; height: 170px; width: 360.5px;"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script type="text/javascript">
                var visitorData = JSON.parse(`<?php echo $visitor; ?>`);
                var visitorLabel = JSON.parse(`<?php echo $visitorl; ?>`);

                const dataNewCon = {
                    labels: ['2022', '2021'],
                    datasets: [{
                        label: 'National Conventions',
                        backgroundColor: ['rgb(227,40,69)',
                            'rgb(9, 13, 50)', 'rgb(61,177,102)'
                        ],
                        borderColor: 'rgb(227,40,69)',
                        data: [3, 4, 5],
                    }]
                };

                const configNewCon = {
                    type: 'line',
                    data: dataNewCon,

                    options: {}
                };

                const myNewChartCon = new Chart(
                    document.getElementById('myNewChartCon'),
                    configNewCon
                );
            </script>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body"><strong>Admissions Over Years</strong>
                  <canvas id="myChartAdm" class="chart-canvas" height="439" width="1295" style="display: block; box-sizing: border-box; height:439px; width:1295px;"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script type="text/javascript">
                var pData = JSON.parse(`<?php echo $placement_day_count; ?>`);
                var pLabel = JSON.parse(`<?php echo $placement_all_label; ?>`);


                const dataAdm = {
                    labels: ['2021','2022','2023'],
                    datasets: [{
                        label: 'Admissions',
                        backgroundColor:'rgb(139,89,212)',
                        borderColor: 'rgb(139,89,212)',
                        data: [5000,5200 ,6000]
                    },
                   {
                        label: 'MBA',
                        backgroundColor:'rgb(61,177,102)',
                        borderColor: 'rgb(61,177,102)',
                        data: [4000,4200 ,5000]
                    },
                    {
                        label: 'P.HD',
                        backgroundColor:'rgb(9, 13, 50)',
                        borderColor: 'rgb(9, 13, 50)',
                        data: [3501,4110 ,3110]
                    }
                ],
                };

                const configAdm = {
                    type: 'bar',
                    data: dataAdm,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                            }
                        }
                    },
                };

                const myChartAdm = new Chart(
                    document.getElementById('myChartAdm'),
                    configAdm
                );
            </script>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </section>
        <!-- Page Footer-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/vendor/just-validate/js/just-validate.min.js"></script>
    <script src="asset/vendor/chart.js/Chart.min.js"></script>
    <script src="asset/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="asset/js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="asset/js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>

