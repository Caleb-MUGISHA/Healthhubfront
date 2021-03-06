<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Healthhub</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />

    <link href="assets/img/favicon.png" rel="icon" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/plugins/apex/apexcharts.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="main-wrapper">
      <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
          <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
              <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </a>
            <a href="index.php" class="navbar-brand logo">
              <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
            </a>
          </div>
          <div class="main-menu-wrapper">
            <div class="menu-header">
              <a href="index.php" class="menu-logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
              </a>
              <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
              </a>
            </div>
          </div>
          <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
              <div class="header-contact-img">
                <i class="far fa-hospital"></i>
              </div>
              <div class="header-contact-detail">
                <p class="contact-header">Contact</p>
                <p class="contact-info-header">+250 784 200 694</p>
              </div>
            </li>

            <li class="nav-item dropdown has-arrow logged-item">
              <a
                href="#"
                class="dropdown-toggle nav-link"
                data-toggle="dropdown"
              >
                <span class="user-img">
                  <img
                    class="rounded-circle"
                    src="assets/img/patients/patient.jpg"
                    width="31"
                    alt="Ryan Taylor"
                  />
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="user-header">
                  <div class="avatar avatar-sm">
                    <img
                      src="assets/img/patients/patient.jpg"
                      alt="User Image"
                      class="avatar-img rounded-circle"
                    />
                  </div>
                  <div class="user-text">
                    <h6>Wanjiru Wangondu</h6>
                    <p class="text-muted mb-0">Patient</p>
                  </div>
                </div>
                <a class="dropdown-item" href="patient-dashboard.php"
                  >Dashboard</a
                >
                <a class="dropdown-item" href="profile-settings.php"
                  >Profile Settings</a
                >
                <a class="dropdown-item" href="login.php">Logout</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>

      

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
              <div class="profile-sidebar">
                <div class="widget-profile pro-widget-content">
                  <div class="profile-info-widget">
                    <a href="#" class="booking-doc-img">
                      <img
                        src="assets/img/patients/patient.jpg"
                        alt="User Image"
                      />
                    </a>
                    <div class="profile-det-info">
                      <h3>Wanjiru Wangondu</h3>
                      <div class="patient-details">
                        <h5>
                          <i class="fas fa-birthday-cake"></i> 04 Oct 2001, 20
                          years
                        </h5>
                        <h5 class="mb-0">
                          <i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dashboard-widget">
                  <nav class="dashboard-menu">
                    <ul>
                      <li class="active">
                        <a href="patient-dashboard.php">
                          <i class="fas fa-columns"></i>
                          <span>Dashboard</span>
                        </a>
                      </li>
                    
                      </li>
                   
                      <li>
                        <a href="medical-records.php">
                          <i class="fas fa-clipboard"></i>
                          <span>Add Medical Records</span>
                        </a>
                      </li>
                      <li>
                        <a href="medical-details.php">
                          <i class="fas fa-file-medical-alt"></i>
                          <span>Medical Details</span>
                        </a>
						<a href="booking.php">
                          <i class="fas fa-file-medical-alt"></i>
                          <span>Booking</span>
                        </a>
                      </li>
                
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <div class="col-md-7 col-lg-8 col-xl-9">
              <div class="row">
                <div
                  class="
                    col-12 col-md-6 col-lg-4 col-xl-3
                    patient-dashboard-top
                  "
                >
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <img
                          src="assets/img/specialities/pt-dashboard-01.png"
                          alt=""
                          width="55"
                        />
                      </div>
                      <h5>Heart Rate</h5>
                      <h6>12 <sub>bpm</sub></h6>
                    </div>
                  </div>
                </div>
                <div
                  class="
                    col-12 col-md-6 col-lg-4 col-xl-3
                    patient-dashboard-top
                  "
                >
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <img
                          src="assets/img/specialities/pt-dashboard-02.png"
                          alt=""
                          width="55"
                        />
                      </div>
                      <h5>Body Temperature</h5>
                      <h6>18 <sub>C</sub></h6>
                    </div>
                  </div>
                </div>
                <div
                  class="
                    col-12 col-md-6 col-lg-4 col-xl-3
                    patient-dashboard-top
                  "
                >
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <img
                          src="assets/img/specialities/pt-dashboard-03.png"
                          alt=""
                          width="55"
                        />
                      </div>
                      <h5>Glucose Level</h5>
                      <h6>70 - 90</h6>
                    </div>
                  </div>
                </div>
                <div
                  class="
                    col-12 col-md-6 col-lg-4 col-xl-3
                    patient-dashboard-top
                  "
                >
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <img
                          src="assets/img/specialities/pt-dashboard-04.png"
                          alt=""
                          width="55"
                        />
                      </div>
                      <h5>Blood Pressure</h5>
                      <h6>202/90 <sub>mg/dl</sub></h6>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-body pt-0">
                  <nav class="user-tabs mb-4">
                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          href="#pat_appointments"
                          data-toggle="tab"
                          >Appointments</a
                        >
                      </li>
                      
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          href="#pat_medical_records"
                          data-toggle="tab"
                          ><span class="med-records">Medical Records</span></a
                        >
                      </li>
                      
                      </li>
                    </ul>
                  </nav>

                  <div class="tab-content pt-0">
                    <div
                      id="pat_appointments"
                      class="tab-pane fade show active"
                    >
                      <div class="card card-table mb-0">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                              <thead>
                                <tr>
                                  <th>Doctor</th>
                                  <th>Appt Date</th>
                                  <th>Booking Date</th>
                                  <th>Amount</th>
                                  <th>Follow Up</th>
                                  <th>Status</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-01.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Ruby Perrin <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    14 Nov 2019
                                    <span class="d-block text-info"
                                      >10.00 AM</span
                                    >
                                  </td>
                                  <td>12 Nov 2019</td>
                                  <td>$160</td>
                                  <td>16 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-02.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Darren Elder <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    12 Nov 2019
                                    <span class="d-block text-info"
                                      >8.00 PM</span
                                    >
                                  </td>
                                  <td>12 Nov 2019</td>
                                  <td>$250</td>
                                  <td>14 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-03.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Deborah Angel
                                        <span>Cardiology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    11 Nov 2019
                                    <span class="d-block text-info"
                                      >11.00 AM</span
                                    >
                                  </td>
                                  <td>10 Nov 2019</td>
                                  <td>$400</td>
                                  <td>13 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-danger-light"
                                      >Cancelled</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-04.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Sofia Brient
                                        <span>Urology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    10 Nov 2019
                                    <span class="d-block text-info"
                                      >3.00 PM</span
                                    >
                                  </td>
                                  <td>10 Nov 2019</td>
                                  <td>$350</td>
                                  <td>12 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-warning-light"
                                      >Pending</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-05.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Marvin Campbell
                                        <span>Ophthalmology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    9 Nov 2019
                                    <span class="d-block text-info"
                                      >7.00 PM</span
                                    >
                                  </td>
                                  <td>8 Nov 2019</td>
                                  <td>$75</td>
                                  <td>11 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-06.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Katharine Berthold
                                        <span>Orthopaedics</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    8 Nov 2019
                                    <span class="d-block text-info"
                                      >9.00 AM</span
                                    >
                                  </td>
                                  <td>6 Nov 2019</td>
                                  <td>$175</td>
                                  <td>10 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-danger-light"
                                      >Cancelled</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-07.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Linda Tobin
                                        <span>Neurology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    8 Nov 2019
                                    <span class="d-block text-info"
                                      >6.00 PM</span
                                    >
                                  </td>
                                  <td>6 Nov 2019</td>
                                  <td>$450</td>
                                  <td>10 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-08.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Paul Richard
                                        <span>Dermatology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    7 Nov 2019
                                    <span class="d-block text-info"
                                      >9.00 PM</span
                                    >
                                  </td>
                                  <td>7 Nov 2019</td>
                                  <td>$275</td>
                                  <td>9 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-09.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. John Gibbs <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    6 Nov 2019
                                    <span class="d-block text-info"
                                      >8.00 PM</span
                                    >
                                  </td>
                                  <td>4 Nov 2019</td>
                                  <td>$600</td>
                                  <td>8 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-10.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Olga Barlow <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td>
                                    5 Nov 2019
                                    <span class="d-block text-info"
                                      >5.00 PM</span
                                    >
                                  </td>
                                  <td>1 Nov 2019</td>
                                  <td>$100</td>
                                  <td>7 Nov 2019</td>
                                  <td>
                                    <span
                                      class="badge badge-pill bg-success-light"
                                      >Confirm</span
                                    >
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    
                    </div>

                    <div id="pat_medical_records" class="tab-pane fade">
                      <div class="card card-table mb-0">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Date</th>
                                  <th>Description</th>
                                  <th>Attachment</th>
                                  <th>Created</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0010</a>
                                  </td>
                                  <td>14 Nov 2019</td>
                                  <td>Dental Filling</td>
                                  <td><a href="#">dental-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-01.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Ruby Perrin <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0009</a>
                                  </td>
                                  <td>13 Nov 2019</td>
                                  <td>Teeth Cleaning</td>
                                  <td><a href="#">dental-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-02.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Darren Elder <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0008</a>
                                  </td>
                                  <td>12 Nov 2019</td>
                                  <td>General Checkup</td>
                                  <td><a href="#">cardio-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-03.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Deborah Angel
                                        <span>Cardiology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0007</a>
                                  </td>
                                  <td>11 Nov 2019</td>
                                  <td>General Test</td>
                                  <td><a href="#">general-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-04.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Sofia Brient
                                        <span>Urology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0006</a>
                                  </td>
                                  <td>10 Nov 2019</td>
                                  <td>Eye Test</td>
                                  <td><a href="#">eye-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-05.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Marvin Campbell
                                        <span>Ophthalmology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0005</a>
                                  </td>
                                  <td>9 Nov 2019</td>
                                  <td>Leg Pain</td>
                                  <td><a href="#">ortho-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-06.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Katharine Berthold
                                        <span>Orthopaedics</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0004</a>
                                  </td>
                                  <td>8 Nov 2019</td>
                                  <td>Head pain</td>
                                  <td><a href="#">neuro-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-07.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Linda Tobin
                                        <span>Neurology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0003</a>
                                  </td>
                                  <td>7 Nov 2019</td>
                                  <td>Skin Alergy</td>
                                  <td><a href="#">alergy-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-08.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Paul Richard
                                        <span>Dermatology</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0002</a>
                                  </td>
                                  <td>6 Nov 2019</td>
                                  <td>Dental Removing</td>
                                  <td><a href="#">dental-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-09.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. John Gibbs <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="javascript:void(0);">#MR-0001</a>
                                  </td>
                                  <td>5 Nov 2019</td>
                                  <td>Dental Filling</td>
                                  <td><a href="#">dental-test.pdf</a></td>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a
                                        href="doctor-profile.php"
                                        class="avatar avatar-sm mr-2"
                                      >
                                        <img
                                          class="avatar-img rounded-circle"
                                          src="assets/img/doctors/doctor-thumb-10.jpg"
                                          alt="User Image"
                                        />
                                      </a>
                                      <a href="doctor-profile.php"
                                        >Dr. Olga Barlow <span>Dental</span></a
                                      >
                                    </h2>
                                  </td>
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-info-light"
                                      >
                                        <i class="far fa-eye"></i> View
                                      </a>
                                      <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm bg-primary-light"
                                      >
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade custom-modal show" id="graph1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">BMI Status</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">??</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="bmi-status"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade custom-modal show" id="graph2">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Heart Rate Status</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">??</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="heartrate-status"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade custom-modal show" id="graph3">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">FBC Status</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">??</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="fbc-status"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade custom-modal show" id="graph4">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Weight Status</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">??</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="weight-status"></div>
          </div>
        </div>
      </div>
    </div>

    <script
      data-cfasync="false"
      src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/plugins/apex/apexcharts.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

  <!-- Mirrored from Healthhub-html.dreamguystech.com/template/patient-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Aug 2021 15:28:23 GMT -->
</html>
