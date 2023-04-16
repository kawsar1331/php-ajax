<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD With Ajax</title>

    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row m-3 ">
            <div class="col-4 border border-primary rounded p-4 shadow">
                <div class="form-ele">
                    <legend class="text-center display-6 text-primary">CRUD with Ajax</legend>
                    <div class="msg">

                    </div>
                    <div class="form-group my-2">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" class="form-control mt-2" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" class="form-control mt-2" placeholder="Enter Your Email">
                    </div>
                    <!-- <div class="form-group my-2">
                        <label for="password">Your Password</label>
                        <input type="password" id="password" class="form-control mt-2" placeholder="Enter Your Password">
                    </div> -->
                    <div class="form-group my-2">
                        <label for="phone">Your Phone Number</label>
                        <input type="number" id="phone" class="form-control mt-2" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group my-2">
                        <label for="status">Account Status</label>
                        <select id="status" class="form-control mt-2">
                            <option value="">---------- Select Status ----------</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group my-4 text-center">
                        <button class="btn btn-lg btn-outline-primary" id="btnclick">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-8 ">
                <div class="table-ele">
                    <table class="table border border-primary shadow">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td colspan="6" class="msgCha"></td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  <!-- Delete Modal -->
  <div class="modal fade" id="delMod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Deletation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-danger">
            Are you sure?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="delConfirm">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Modal -->
  <div class="modal fade" id="editMod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-success">
            <div class="form-ele">
                <div class="msgup">

                </div>
                <div class="form-group my-2">
                    <label for="kname">Your Name</label>
                    <input type="text" id="kname" class="form-control mt-2" placeholder="Enter Your Name">
                </div>
                <div class="form-group my-2">
                    <label for="kemail">Your Email</label>
                    <input type="email" id="kemail" class="form-control mt-2" placeholder="Enter Your Email">
                </div>
                <!-- <div class="form-group my-2">
                    <label for="password">Your Password</label>
                    <input type="password" id="password" class="form-control mt-2" placeholder="Enter Your Password">
                </div> -->
                <div class="form-group my-2">
                    <label for="kphone">Your Phone Number</label>
                    <input type="number" id="kphone" class="form-control mt-2" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-group my-2">
                    <label for="kstatus">Account Status</label>
                    <select id="kstatus" class="form-control mt-2">
                        <option value="">---------- Select Status ----------</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <!-- <div class="form-group my-4 text-center">
                    <button class="btn btn-lg btn-outline-primary" id="btnupdate">Submit</button>
                </div> -->
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
          <button type="button" class="btn btn-success" id="btnupdate">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

    <!-- JS -->
    <!-- jQuery -->
    <!-- <script src="js/jquery-3.6.3.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Main JS -->
    <script src="js/app.js"></script>
    <script src="ajax.js"></script>
</body>

</html>