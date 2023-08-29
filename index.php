<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>College Student Communication</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/logo2.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block">Student portal</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="profile-img.jpg"  class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Kevin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin </h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="./chatroom/login.php">
          <i class="bi bi-person-circle"></i>
          <span>Students Communities</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="faculty info.html">
          <i class="bi bi-people-fill"></i>
          <span>Faculty information</span>
        </a>
      </li>
      <!-- <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li> End Forms Nav -->

       
      <li class="nav-item">
        <a class="nav-link collapsed" href="scholarships.html">
          <i class="bi bi-book"></i>
          <span>Scholarships</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Campus</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="life at campus.html">
              <i class="bi bi-circle"></i><span>Life at Campus</span>
            </a>
          </li>
          <li>
            <a href="infrastructure.html">
              <i class="bi bi-circle"></i><span>Infrastructure</span>
            </a>
          </li>
          <li>
            <a href="library service.html">
              <i class="bi bi-circle"></i><span>Library Service</span>
            </a>
          </li>
          <li>
            <a href="student activity center.html">
              <i class="bi bi-circle"></i><span>Student Activity Center</span>
            </a>
          </li>

        </ul>
      </li>

      <!-- <li class="nav-heading">Pages</li> -->
      <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"href="#">
         <i class="bi bi-journal-text"></i><span>Student Corner</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li> <a href="circulars.html"> <i class="bi bi-circle"></i><span>Circulars</span> </a></li>
          <li> <a href="exam-section.html"> <i class="bi bi-circle"></i><span>Exam Section</span> </a></li>
          
        </ul>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
          </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-contact.html">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
          </a>
        </li><!-- End Contact Page Nav -->

        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav -->

        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> -->
        <!-- End Error 404 Page Nav -->




    </ul>

  </aside>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                
                <div class="card-body">
                  <h5 class="card-title">Students</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i
                        class="bi bi-people-fill"></i></div>
                    <div class="ps-3">
                      <h6>1000</h6> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                
                <div class="card-body">
                  <h5 class="card-title">Faculty</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i
                        class="bi bi-person"></i></div>
                    <div class="ps-3">
                      <h6>200</h6> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                
                <div class="card-body">
                  <h5 class="card-title">Courses</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i
                        class="bi bi-book-half"></i></div>
                    <div class="ps-3">
                      <h6>50</h6> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                
                <div class="card-body">
                  <h5 class="card-title">Result</h5>
                  <div id="reportsChart"></div>
                  <script>document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Medium Score',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'High Score',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Low Score',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        
                        
                      }).render();
                    });</script>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                
                <div class="card-body">
                  <h5 class="card-title">Toppers <span>| 2020</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Enrollment No.</th>
                        <th scope="col">CGPA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">161290107030</a></td>
                        <td>10</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">161290107025</a></td>
                        <td>9.95</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">161290107008</a></td>
                        <td>8.9</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">4</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">161290107045</a></td>
                        <td>8.50</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">5</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">161290107069</a></td>
                        <td>8.33</td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card top-selling overflow-auto">
               
                <div class="card-body pb-0">
                  <h5 class="card-title">Top Placements <span>| 2020</span></h5>
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Student photo</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Semester & Branch</th>
                        <th scope="col">Year</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/messages-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Abc</a></td>
                        <td>Ace Data Analytics, Ahmedabad</td>
                        <td class="fw-bold">8th sem Computer Engineering</td>
                        <td>2020</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/messages-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">XYZ</a></td>
                        <td>Yudiz Solutions Pvt. Ltd., Ahmedabad</td>
                        <td class="fw-bold">8th sem Computer Engineering</td>
                        <td>2020</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/messages-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">jkm</a></td>
                        <td>Bit-Excellent Pvt Ltd, Ahmedabad</td>
                        <td class="fw-bold">8th sem Computer Engineering</td>
                        <td>2020</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/messages-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">khu</a></td>
                        <td>BharatPe, Delhi</td>
                        <td class="fw-bold">8th sem Computer Engineering</td>
                        <td>2020</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title"> Activity</h5>
              <div class="activity">
                <div class="activity-item d-flex">
                   <i
                    class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content"> Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo
                      officiis</a> beatae</div>
                </div>
                <div class="activity-item d-flex">
                   <i
                    class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content"> Voluptatem blanditiis blanditiis eveniet</div>
                </div>
                <div class="activity-item d-flex">
                   <i
                    class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content"> Voluptates corrupti molestias voluptatem</div>
                </div>
                <div class="activity-item d-flex">
                   <i
                    class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content"> Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                      voluptatem</a> tempore</div>
                </div>
                <div class="activity-item d-flex">
                   <i
                    class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content"> Est sit eum reiciendis exercitationem</div>
                </div>
                <div class="activity-item d-flex">
                   <i
                    class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content"> Dicta dolorem harum nulla eius. Ut quidem quidem sit quas</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
           
            
            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>
              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
              <script>document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                        value: 1048,
                        name: 'Search Engine'
                      },
                      {
                        value: 735,
                        name: 'Direct'
                      },
                      {
                        value: 580,
                        name: 'Email'
                      },
                      {
                        value: 484,
                        name: 'Union Ads'
                      },
                      {
                        value: 300,
                        name: 'Video Ads'
                      }
                      ]
                    }]
                  });
                });</script>
            </div>
          </div>
          <div class="card">
           
            <div class="card-body pb-0">
              <h5 class="card-title">Daily &amp; Posts <span>| Today</span></h5>
              <div class="news">
                <div class="post-item clearfix"> <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>
                <div class="post-item clearfix"> <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>
                <div class="post-item clearfix"> <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>
                <div class="post-item clearfix"> <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script async src='https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP'></script>
  <script>if (window.self == window.top) { window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-P7JSYB1CSP'); }</script>
</body>

</html>