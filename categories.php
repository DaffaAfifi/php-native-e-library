<?php
require("koneksi.php");

session_start();

if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location:index.php');
}

$sesID = $_SESSION['id'];
$sesEmail = $_SESSION['email'];
$sesName = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>My-Arsip</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="dashboard.php" class="logo">
              <img
                src="assets/img/kaiadmin/logo-light-n.png"
                alt="navbar brand"
                class="navbar-brand"
                height="35"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a
                  href="dashboard.php"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="books.php"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-book"></i>
                  <p>Books</p>
                </a>
              </li>
              <li class="nav-item active">
                <a
                  href="categories.php"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-th-list"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="" style="margin-top:330px; margin-left:30px;">
                <a
                  href="logout.php"
                  class="btn btn-sm btn-danger"
                  aria-expanded="false"
                  style="padding: 5px 20px 0px 20px;"
                >
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="dashboard.php" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="assets/img/profile.png"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold"><?php echo $sesName; ?></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="assets/img/profile.png"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4><?php echo $sesName; ?></h4>
                            <p class="text-muted"><?php echo $sesEmail; ?></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Categories</h3>
                <h6 class="op-7 mb-2">Kelola semua kategorimu!</h6>
              </div>
            </div>
            <div class="container">
              <div class="page-inner">        
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="d-flex align-items-center">
                          <h4 class="card-title">Add Row</h4>
                          <button
                            class="btn btn-primary btn-round ms-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#addRowModal"
                          >
                            <i class="fa fa-plus"></i>
                            Add Row
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <!-- Add Modal -->
                        <div
                          class="modal fade"
                          id="addRowModal"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header border-0">
                                <h5 class="modal-title">
                                  <span class="fw-mediumbold"> New</span>
                                  <span class="fw-light"> Row </span>
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="small">
                                  Create a new row using this form, make sure you
                                  fill them all
                                </p>
                                <form method="POST" action="add_category.php">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="form-group form-group-default">
                                        <label>Category Name</label>
                                        <input
                                          id="addName"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill category name"
                                          name="name"
                                        />
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="modal-footer border-0">
                                <button
                                  id="addRowButton"
                                  class="btn btn-primary"
                                  type="submit"
                                >
                                  Add
                                </button>
                                </form>
                                <button
                                  type="button"
                                  class="btn btn-danger"
                                  data-bs-dismiss="modal"
                                >
                                  Close
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
    
                        <div class="table-responsive">
                          <table
                            id="add-row"
                            class="display table table-striped table-hover"
                          >
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th style="width: 10%">Action</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Action</th>
                              </tr>
                            </tfoot>
                            <tbody>
                            <?php
                              $no = 1;
                              $query = "SELECT * FROM categories";
                              $result = mysqli_query($koneksi, $query);

                              while ($row = mysqli_fetch_array($result)) {
                                  $catID = $row['category_id'];
                                  $catName = $row['name'];
                              ?>
                              <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $catName; ?></td>
                                <td>
                                  <div class="form-button-action">
                                    <button
                                      type="button"
                                      data-bs-toggle="modal"
                                      title=""
                                      class="btn btn-link btn-primary btn-lg"
                                      data-original-title="Edit Task"
                                      data-bs-target="#updateModal<?php echo $catID; ?>"
                                    >
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    <button
                                      type="button"
                                      data-bs-toggle="modal"
                                      title=""
                                      class="btn btn-link btn-danger"
                                      data-original-title="Remove"
                                      data-bs-target="#deleteModal<?php echo $catID; ?>"
                                    >
                                      <i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <?php
                                }
                              ?>
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

        <?php
        $query  = "SELECT * FROM categories";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_array($result)) {
            $catID = $row['category_id'];
            $catName = $row['name'];
        ?>

        <!-- Edit Modal -->
        <div
          class="modal fade"
          id="updateModal<?php echo $catID; ?>"
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h5 class="modal-title">
                  <span class="fw-mediumbold"> New</span>
                  <span class="fw-light"> Row </span>
                </h5>
                <button
                  type="button"
                  class="close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="small">
                  Update a row using this form, make sure you
                  fill them all
                </p>
                <form method="POST" action="update_category.php">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Category Name</label>
                        <input type="hidden" name="category_id" value="<?php echo $catID; ?>">
                        <input
                          id="addName"
                          type="text"
                          class="form-control"
                          name="name"
                          value="<?php echo $catName; ?>"
                        />
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer border-0">
                <button
                  id="addRowButton"
                  class="btn btn-primary"
                  type="submit"
                >
                  Save
                </button>
                </form>
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Delete Modal -->
        <div
          class="modal fade"
          id="deleteModal<?php echo $catID; ?>"
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h5 class="modal-title">
                  <span class="fw-mediumbold"> New</span>
                  <span class="fw-light"> Row </span>
                </h5>
                <button
                  type="button"
                  class="close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="small">
                  Yakin untuk menghapus data ini?
                </p>
                  
              </div>
              <div class="modal-footer border-0">
              <form method="POST" action="delete_category.php">
                <input type="hidden" name="category_id" value="<?php echo $catID; ?>">
                <button
                  id="addRowButton"
                  class="btn btn-primary"
                  type="submit"
                >
                  Yes
                </button>
                </form>
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
    ?>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="">Sri Akmaliatul</a>
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
  </body>
</html>
