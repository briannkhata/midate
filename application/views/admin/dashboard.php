<?php include "header.php";?>

<!-- ======= Sidebar ======= -->
<?php include "menu.php";?>
<!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Clients</span></h5>

                                <div class="d-flex align-items-center">

                                    <div class="ps-3">
                                        <h6><?=count($this->db->get('clients')->result_array());?></h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">


                            <div class="card-body">
                                <h5 class="card-title">Staffs</span></h5>

                                <div class="d-flex align-items-center">

                                    <div class="ps-3">
                                        <h6><?=count($this->db->get('users')->result_array());?></h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">


                            <div class="card-body">
                                <h5 class="card-title">Messages</span></h5>

                                <div class="d-flex align-items-center">

                                    <div class="ps-3">
                                        <h6><?=count($this->db->get('messages')->result_array());?></h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                  






                </div>
            </div><!-- End Left side columns -->


        </div>
    </section>

</main><!-- End #main -->

<?php include 'footer.php';?>