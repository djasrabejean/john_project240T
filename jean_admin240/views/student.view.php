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

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">FName</th>
                  <th scope="col">RegNo</th>
                  <th scope="col">Faculty</th>
                  <th scope="col">Current Program</th>
                  <th scope="col">Attendance</th>
                  <th scope="col">Status</th>
                  <th scope="col">GPA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>16-4455</td>
                  <td>SCHOOL OF APPLIED HUMAN SCIENCES</td>
                  <td>Diploma in Psychology</td>
                  <td>60%</td>
                  <td>Active</td>
                  <td>2.49</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>20-1997</td>
                  <td>SCHOOL OF ARTS AND SOCIAL SCIENCES</td>
                  <td>Bachelor ofPeace and International Relations</td>
                  <td>49%</td>
                  <td>Active</td>
                  <td>2.00</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>22-5020</td>
                  <td>SCHOOL OF COMMUNICATION,LANGUAGE,AND PERFORMING ARTS</td>
                  <td>Diploma in Communication</td>
                  <td>80%</td>
                  <td>Active</td>
                  <td>2.70</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>23-7777</td>
                  <td>SCHOOL OF SCIENCE,ENGINEERING AND HEALTH</td>
                  <td>Bachelors of Computer Science</td>
                  <td>55%</td>
                  <td>Active</td>
                  <td>2.60</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>21-2008</td>
                  <td>SCHOOL OF BUSINESS AND ECONOMICS</td>
                  <td>Bachelor in ECONOMICS</td>
                  <td>65%</td>
                  <td>2016-05-25</td>
                  <td>2016-05-25</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Students Attendances</h5>

          <!-- Progress Bars with labels-->
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% SCHOOL OF APPLIED HUMAN SCIENCES</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50% SCHOOL OF COMMUNICATION,LANGUAGE,AND PERFORMING ARTS</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% SCHOOL OF BUSINESS AND ECONOMICS</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100% SCHOOL OF SCIENCE,ENGINEERING AND HEALTH</div>
          </div><!-- End Progress Bars with labels -->

        </div>
      </div>


    </div>
  </section>

</main><!-- End #main -->
<!-- footer required from footer.php file -->
<?php require('partials/footer.php'); ?>