<?php include ('../layouts/header.php');?>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <?php include ('../layouts/menu.php');?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <?php include ('../layouts/nav.php'); ?>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5>Dispatch Entry</h5>
                </div>
                <form name="dispatch_entry" id="dispatch_entry" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gpf_number" class="form-label">GPF Number <span id="status" class="text-danger"></span></label>
                                    <input type="number" class="form-control" id="gpf_number" name="gpf_number" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="file_number" class="form-label">File No (If you Don't have file number. Kindly Enter Nil)</label>
                                    <input type="text" class="form-control" name="file_number" id="file_number">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="status" style="display: none;">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Subscriber Name</label>
                                    <input type="text" class="form-control" id="name" name="name" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="text" class="form-control" name="dob" id="dob" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="doj" class="form-label">Date of Joining</label>
                                    <input type="text" class="form-control" name="doj" id="doj" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" id="add-dispatch" class="col btn btn-outline-primary m-auto">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include ('../layouts/footer.php');?>