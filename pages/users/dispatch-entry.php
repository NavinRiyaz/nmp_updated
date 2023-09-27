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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form name="dispatch_entry" id="dispatch_entry" method="post">
                                <div class="mb-3">
                                    <label for="gpf_number" class="form-label">GPF Number <span id="status" class="text-danger"></span></label>
                                    <input type="number" class="form-control" id="gpf_number" name="gpf_number">
                                </div>
                                <div class="mb-3">
                                    <label for="file_number" class="form-label">File No (If you Don't have file number. Kindly Enter Nil)</label>
                                    <input type="text" class="form-control" name="file_number" id="file_number">
                                </div>
                                <button type="submit" class="btn btn-outline-primary m-1">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('../layouts/footer.php');?>