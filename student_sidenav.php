<div class="flex-shrink-0 px-3 pb-3 pt-0 ms-0 bg-dark text-white " style="width: 200px; height:720px">
                    <div class="d-flex pb-2 mb-3">
                        <div class="pic">
                            <img src="pics/face8.jpg" class="rounded-circle mt-1" width="30px" height="30px">
                        </div>
                        <div class="ms-3">
                            <p style="font-weight: bold;"><?php echo $_SESSION['student_name']?><br><span><?php echo $_SESSION['student_email']; ?></span></p>
                           
                        </div>
                    </div>
                    <ul class="list-unstyled ps-0">
                        <h4>Dashboard</h4>
                        <li class="mb-1">
                        <a href="student_dashboard.php" class="text-white" style="text-decoration:none"><button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="" aria-expanded="true">
                            Dashboard<i class="bi bi-speedometer2" style="margin-left: 60px !important;"></i>
                            </button></a>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                        <a href="student_notice.php" class="text-white" style="text-decoration:none"><button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="" aria-expanded="true">
                            View Notice<i class="bi bi-file-earmark-fill" style="margin-left: 60px !important;"></i>
                            </button></a>
                        </li>
                    </ul>
</div>