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
              <li class="nav-item active">
                <a
                  href="books.php"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-book"></i>
                  <p>Books</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="categories.php"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-th-list"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="" style="margin-top:450px; margin-left:30px;">
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
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">Books</h3>
                <h6 class="op-7 mb-2">Kelola semua bukumu!</h6>
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
                          <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                            <i class="fa fa-plus"></i> Add Row
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <!-- Modal -->
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
                                <form method="POST" action="add_book.php">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="form-group form-group-default">
                                        <label>Title</label>
                                        <input
                                          id="addName"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill title"
                                          name="title"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6 pe-0">
                                      <div class="form-group form-group-default">
                                        <label>Author</label>
                                        <input
                                          id="addPosition"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill author"
                                          name="author"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default">
                                        <label>Release Year</label>
                                        <input
                                          id="addRelease"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill release year"
                                          name="release"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6 pe-0">
                                      <div class="form-group form-group-default">
                                        <label>Categories</label>
                                        <select name="category" id="categoryFilter" class="form-select">
                                          <?php
                                          $catQuery = "SELECT category_id, name FROM categories";
                                          $catResult = mysqli_query($koneksi, $catQuery);
                                          while ($catRow = mysqli_fetch_array($catResult)) {
                                            $selected = (isset($_GET['category']) && $_GET['category'] == $catRow['category_id']) ? 'selected' : '';
                                            echo "<option value='" . $catRow['category_id'] . "' $selected>" . $catRow['name'] . "</option>";
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default">
                                        <label>Rack</label>
                                        <input
                                          id="addRack"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill rack"
                                          name="rack"
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
  <!-- Filter Section -->
  <div class="row mb-3">
    <form action="books.php" method="GET" class="row mb-3">
      <div class="col-md-3">
        <input type="text" name="search" class="form-control" placeholder="Search by title" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Apply Filter</button>
      </div>
    </form>
  </div>

  <!-- Table -->
  <div class="table-responsive">
    <table id="add-row" class="display table table-striped table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Author</th>
          <th>Release</th>
          <th>Category</th>
          <th>Rack</th>
          <th>File</th>
          <th style="width: 10%">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        $query = "SELECT b.*, c.name AS category_name
                  FROM books b 
                  JOIN categories c ON b.category_id = c.category_id
                  WHERE 1=1";

        if (isset($_GET['search']) && $_GET['search'] !== '') {
          $search = mysqli_real_escape_string($koneksi, $_GET['search']);
          $query .= " AND (b.title LIKE '%$search%' OR b.author LIKE '%$search%' OR b.release LIKE '%$search%' OR c.name LIKE '%$search%' or b.rack LIKE '%$search%')";
        }

        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_array($result)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['author']; ?></td>
          <td><?php echo $row['release']; ?></td>
          <td><?php echo $row['category_name']; ?></td>
          <td><?php echo $row['rack']; ?></td>
          <td>
        <?php if (!empty($row['file_path'])): ?>
          <!-- Display file path as a link if it exists -->
          <a href="<?php echo htmlspecialchars($row['file_path']); ?>" target="_blank">
            View
          </a>
        <?php else: ?>
          <!-- Optional: Display a message or leave it blank if no file path -->
          -
        <?php endif; ?>
      </td>
          <td>
          <div class="form-button-action">
            <button
              type="button"
              data-bs-toggle="modal"
              title=""
              class="btn btn-link btn-primary btn-lg"
              data-original-title="Edit Task"
              data-bs-target="#updateModal<?php echo $row['book_id'] ?>"
            >
              <i class="fa fa-edit"></i>
            </button>
            <button
              type="button"
              data-bs-toggle="modal"
              title=""
              class="btn btn-link btn-danger"
              data-original-title="Remove"
              data-bs-target="#deleteModal<?php echo $row['book_id'] ?>"
            >
              <i class="fa fa-times"></i>
            </button>
            <button
              type="button"
              data-bs-toggle="modal"
              title=""
              class="btn btn-link btn-success btn-lg"
              data-original-title="Upload File"
              data-bs-target="#uploadModal<?php echo $row['book_id'] ?>"
            >
              <i class="fa fa-upload"></i>
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
        $query = "SELECT b.*, c.name AS category_name
                  FROM books b 
                  JOIN categories c ON b.category_id = c.category_id
                  WHERE 1=1";

        if (isset($_GET['search']) && $_GET['search'] !== '') {
        $search = mysqli_real_escape_string($koneksi, $_GET['search']);
        $query .= " AND (b.title LIKE '%$search%' OR b.author LIKE '%$search%' OR b.release LIKE '%$search%' OR c.name LIKE '%$search%' or b.rack LIKE '%$search%')";
        }

        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_array($result)) {
        ?>

        <div class="modal fade" id="uploadModal<?php echo $row['book_id'] ?>" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="book_id" value="<?php echo $row['book_id'] ?>">
                  <div class="mb-3">
                    <label for="fileUpload" class="form-label">Choose file to upload</label>
                    <input class="form-control" type="file" id="fileUpload" name="fileUpload" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Upload</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Modal -->
        <div
          class="modal fade"
          id="updateModal<?php echo $row['book_id'] ?>"
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
                                <form method="POST" action="update_book.php">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <input type="hidden" name="book_id" value="<?php echo $row['book_id'] ?>">
                                      <div class="form-group form-group-default">
                                        <label>Title</label>
                                        <input
                                          id="addName"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill title"
                                          name="title"
                                          value="<?php echo $row['title'] ?>"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6 pe-0">
                                      <div class="form-group form-group-default">
                                        <label>Author</label>
                                        <input
                                          id="addPosition"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill author"
                                          name="author"
                                          value="<?php echo $row['author'] ?>"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default">
                                        <label>Release Year</label>
                                        <input
                                          id="addOffice"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill release year"
                                          name="release"
                                          value="<?php echo $row['release'] ?>"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6 pe-0">
                                      <div class="form-group form-group-default">
                                        <label>Categories</label>
                                        <select name="category" id="categoryFilter" class="form-select">
                                          <?php
                                          $catQuery = "SELECT category_id, name FROM categories";
                                          $catResult = mysqli_query($koneksi, $catQuery);
                                          while ($catRow = mysqli_fetch_array($catResult)) {
                                            $selected = (isset($_GET['category']) && $_GET['category'] == $catRow['category_id']) ? 'selected' : '';
                                            echo "<option value='" . $catRow['category_id'] . "' $selected>" . $catRow['name'] . "</option>";
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default">
                                        <label>Rack</label>
                                        <input
                                          id="addOffice"
                                          type="text"
                                          class="form-control"
                                          placeholder="fill rack"
                                          name="rack"
                                          value="<?php echo $row['rack'] ?>"
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
          id="deleteModal<?php echo $row['book_id'] ?>"
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
              <form method="POST" action="delete_book.php">
                <input type="hidden" name="book_id" value="<?php echo $row['book_id'] ?>">
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
