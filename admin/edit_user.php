<?php
session_start();
include 'head.php';
include 'proses/koneksi.php';

if (!isset($_SESSION['level'])) {
  //the session does not exist, redirect
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'header.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include 'sidebar.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <!-- <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Default form</h4>
                      <p class="card-description">
                        Basic form layout
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Horizontal Form</h4>
                      <p class="card-description">
                        Horizontal form layout
                      </p>
                      <form class="forms-sample">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pofil Akun User</h4>
                  <p class="card-description">
                    Buat Akun User
                  </p>
                  <div class="">
                    <!-- query show -->
                    <?php
                    $id = $_GET['id'];
                    $query_show = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
                    $data = mysqli_fetch_assoc($query_show);
                    ?>
                    <!-- end -->
                    <form class="forms-sample" action="proses/proses_edit.php" method="POST">
                      <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group w-50">
                            <label for="exampleInputName1">Nama</label>
                            <input value="<?php echo $data['nama']; ?>" type="text" class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="nama" placeholder="Masukkan Nama">
                          </div>
                          <div class="form-group w-50">
                            <label for="exampleInputName1">Email</label>
                            <input value="<?php echo $data['email']; ?>" type="text" class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="email" placeholder="mail@mail.com">
                          </div>
                          <div class="form-group w-50">
                            <label for="exampleInputName1">No HP</label>
                            <input value="<?php echo $data['no_hp']; ?>" type="text" class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="nohp" placeholder="+62xxxxx">
                          </div>
                        </div>
                        <div class="col-md-6 w-50">
                          <div class="form-group w-50">
                            <label for="exampleInputName1">Username</label>
                            <input value="<?php echo $data['username']; ?>" type="text" class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="username" placeholder="Masukkan Username">
                          </div>
                          <div class="form-group w-50">
                            <label for="exampleInputName1">Password</label>
                            <input value="<?php echo $data['password']; ?>" type="password" readonly class="form-control border-top-0 border-left-0 border-right-0 border-dark" id="exampleInputName1" name="password" placeholder="******">
                          </div>
                          <div class="form-group w-25 ">
                            <label for="exampleFormControlSelect2">Pilih User</label>
                            <?php if (empty($data['level'])) { ?>
                              <select class="form-control" name="level" id="exampleFormControlSelect2">
                                <option value="admin">Admin</option>
                                <option value="operator">Operator</option>
                                <option value="author">Author</option>
                              </select>
                            <?php } else { ?>
                              <select>
                                <option <?php echo ($data['level'] == 'admin') ? 'selected' : '' ?> value="admin">Admin</option>
                                <option <?php echo ($data['level'] == 'operator') ? 'selected' : '' ?> value="operator">Operator</option>
                                <option <?php echo ($data['level'] == 'author') ? 'selected' : '' ?> value="author">Author</option>
                              </select>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class=" my-4 d-flex justify-content-center align-content-center">
                        <button type="submit" name="update_user" class="btn btn-success mr-2">Simpan</button>
                        <button class="btn btn-light">Cancel</button>
                      </div>
                      <!-- <div class="form-group">
                      <label for="exampleInputName1">Tempat Lahir</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">No HP</label>
                      <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Upload Ijazah</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Upload CV</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Upload SKKNI</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card card py-4">
              <table id="table_id" class="table dt-center table-striped table-bordered data">
                <thead class="dt-center">
                  <tr class="">
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">Username
                    </th>
                    <th class="th-sm">Email
                    </th>
                    <th class="th-sm">No Hp
                    </th>
                    <th class="th-sm">Level
                    </th>
                    <th class="th-sm">Opsi
                    </th>
                  </tr>
                </thead>
                <tbody class="dt-center">
                  <!-- php table -->
                  <?php
                  $show_query = mysqli_query($koneksi, "SELECT * FROM user");
                  if (mysqli_num_rows($show_query) == 0) {
                    echo '<tr><td>Tidak ada data</td></tr>';
                  } else {
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($show_query)) {

                  ?>
                      <tr>
                        <td><?php echo $no++;
                            $no < 100 ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                        <td><?php echo $data['level']; ?></td>
                        <td class="mx-2">
                          <div class="d-flex justify-content-center align-content-center">
                            <a href="" class="btn btn-outline-primary mr-2"><i class="fa fa-eye" aria-hidden="true"> Lihat</i></a>
                            <a href="edit_user.php?id=<?php echo $data['id_user'] ?>" class="btn btn-outline-warning mr-2"><i class="fa fa-wrench" aria-hidden="true"> Edit</i></a>
                            <a class="btn btn-outline-danger" href="proses/proses_hapus.php?id=<?php echo $data['id_user'] ?>"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
                          </div>
                        </td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- <div class="col-md-5 d-flex align-items-stretch">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Basic input groups</h4>
                      <p class="card-description">
                        Basic bootstrap input groups
                      </p>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <div class="input-group-prepend">
                            <span class="input-group-text">0.00</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Colored input groups</h4>
                      <p class="card-description">
                        Input groups with colors
                      </p>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi mdi-menu text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon2">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon3">
                          <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-menu text-white"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">$</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input size</h4>
                  <p class="card-description">
                    This is the default bootstrap form layout
                  </p>
                  <div class="form-group">
                    <label>Large input</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                  </div>
                  <div class="form-group">
                    <label>Default input</label>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                  </div>
                  <div class="form-group">
                    <label>Small input</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Selectize</h4>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Large select</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Default select</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect3">Small select</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Checkbox Controls</h4>
                  <p class="card-description">Checkbox and radio controls</p>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Default
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked> Checked
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled> Disabled
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled checked> Disabled checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" checked> Option one
                            </label>
                          </div>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"> Option two
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-radio disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled> Option three is disabled
                            </label>
                          </div>
                          <div class="form-radio disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked> Option four is selected and disabled
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Checkbox Flat Controls</h4>
                  <p class="card-description">Checkbox and radio controls with flat design</p>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Default
                            </label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked> Checked
                            </label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled> Disabled
                            </label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled checked> Disabled checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-radio form-radio-flat">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios1" id="flatRadios1" value="" checked> Option one
                            </label>
                          </div>
                          <div class="form-radio form-radio-flat">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios2" id="flatRadios2" value="option2"> Option two
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-radio form-radio-flat disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios3" id="flatRadios3" value="option3" disabled> Option three is disabled
                            </label>
                          </div>
                          <div class="form-radio form-radio-flat disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="flatRadios4" id="flatRadios4" value="option4" disabled checked> Option four is selected and disabled
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Two column</h4>
                  <form class="form-sample">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Category1</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership</label>
                          <div class="col-sm-4">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'footer.php' ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <?php include 'script.php' ?>

</body>

</html>