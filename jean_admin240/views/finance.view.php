<?php require('partials/head.php'); ?>

<!-- Navigation required from nav.php file -->
<?php require('partials/nav.php'); ?>

</header>
<!-- End Header -->

<!-- aside bar required from sidebar.php -->
<?php require('partials/sidebar.php'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Students Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index.view.php">Home</a></li>
        <li class="breadcrumb-item">students</li>
        <li class="breadcrumb-item active">Tables Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card recent-payement overflow-auto">
          <!-- Recent payement -->


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

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Finance Details</h5>

          <!-- Progress Bars with labels-->
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20% of none payment</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30% of half payment</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">50% of completed payment</div>
          </div>
        </div><!-- End Progress Bars with labels -->

      </div>
    </div>

    </div>
    </div>
  </section>

</main>
<!-- End #main -->

<!-- footer required from footer.php file -->
<?php require('partials/footer.php'); ?>