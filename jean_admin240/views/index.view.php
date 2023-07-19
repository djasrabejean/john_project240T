<?php require('partials/head.php'); ?>

<!-- Navigation required from nav.php file -->
<?php require('partials/nav.php'); ?>

<!-- aside bar required from sidebar.php -->
<?php require('partials/sidebar.php'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="views/index.view.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <!-- <div class="row"> -->
        <div class="row">
          <!-- Campus Card -->
          <div class="col-xxl-4 col-xl-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                  <li><a class="dropdown-item" href="#">Nairobi Campus</a></li>
                  <li><a class="dropdown-item" href="#">Ndjamena Campus</a></li>
                  <li><a class="dropdown-item" href="#">Mombassa Campus</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Campus <span>| Nairobi Campus</span></h5>

                <div class="icon">
                  <i class="bi bi-house-fill"></i>
                  <div class="label">University Campus</div>
                </div>
                <div class="ps-3">
                  <h6>3</h6>
                </div>
              </div>
            </div>

          </div>


          <!-- Students Card -->
          <div class="col-xxl-4 col-xl-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                  <li><a class="dropdown-item" href="#">Nairobi Campus</a></li>
                  <li><a class="dropdown-item" href="#">Ndjamena Campus</a></li>
                  <li><a class="dropdown-item" href="#">Mombassa Campus</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Students <span>| Nairobi Campus</span></h5>

                <div class="icon">
                  <i class="ri-team-fill"></i>
                  <div class="label">Students</div>
                </div>
                <div class="ps-3">
                  <h6>2023</h6>


                </div>
              </div>
            </div>

          </div>

        </div>




        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Attendance <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- End Attendance Card -->

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Finance Reports <span>/This Year</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Revenue',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Customers',
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
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent payement -->
        <div class="col-12">
          <div class="card recent-payement overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Payments <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Reg Num</th>
                    <th scope="col">Students Name</th>
                    <th scope="col">Current Program</th>
                    <th scope="col">Amounts</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">22-5560</a></th>
                    <td>Ben-Amine Ndoradoumngue</td>
                    <td><a href="#" class="text-primary">Bachelor BUSINESS & MANAGEMENT SCIENCE</a></td>
                    <td>ksh164000</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">21-4779</a></th>
                    <td>Kemrangue Bansoula</td>
                    <td><a href="#" class="text-primary">Diploma Information and Communication TECHNOLOGY</a></td>
                    <td>ksh77000</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">20-4988</a></th>
                    <td>Asrom Edith</td>
                    <td><a href="#" class="text-primary">Bachelor in SOCIAL SCIENCES </a></td>
                    <td>ksh14700</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">23-1644</a></th>
                    <td>Ratamadji Ferdinand</td>
                    <td><a href="#" class="text-primar">Bachelor BUSINESS & MANAGEMENT SCIENCE</a></td>
                    <td>ksh67000</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">22-1944</a></th>
                    <td>Rayand Celest</td>
                    <td><a href="#" class="text-primary">Diploma in BUILT ENVIRONMENT & DESIGN</a></td>
                    <td>ksh16500</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Payement -->

        <!-- Student Awards -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="card-body pb-0">
              <h5 class="card-title">Students Awards</h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Reg.No</th>
                    <th scope="col">F.Names</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">GPA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"> 16-7777</th>
                    <td>Koulamadji Christeven</a></td>
                    <td><a href="#">SCHOOL OF SCIENCE,ENGINEERING AND HEALTH</a></td>
                    <td class="fw-bold">4.0</td>
                  </tr>
                  <tr>
                    <th scope="row"> 19-7070</th>
                    <td>Mahamat Idriss Deby Itno</a></td>
                    <td><a href="#">SCHOOL OF LAW</a></td>
                    <td class="fw-bold">3.90</td>
                  </tr>
                  <tr>
                    <th scope="row"> 20-2530</th>
                    <td>Ndoryam Alphonse</a></td>
                    <td><a href="#">SCHOOL OF BUSINESS AND ECONOMICS</a></td>
                    <td class="fw-bold">3.60</td>
                  </tr>
                  <tr>
                    <th scope="row"> 21-9999</th>
                    <td>Andress Iniesta</a></td>
                    <td><a href="#">SCHOOL OF APPLIED HUMAN SCIENCES</a></td>
                    <td class="fw-bold">3.50</td>
                  </tr>

                </tbody>
              </table>

            </div>

          </div>
        </div>
        <!-- Student Awards -->
      </div>
    </div>
    <!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">
    </div>
    <!-- End Right side columns -->

    </div>
  </section>

</main>
<!-- End #main -->

<!-- footer required from footer.php file -->
<?php require('partials/footer.php'); ?>