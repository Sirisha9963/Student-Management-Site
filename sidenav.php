<div class="flex-shrink-0 px-3 pb-3 pt-0 ms-0 bg-dark text-white " style="width: 200px; height:720px">
                    <div class="d-flex pb-2 mb-3">
                        <div class="pic">
                            <img src="pics/face8.jpg" class="rounded-circle mt-1" width="30px" height="30px">
                        </div>
                        <div class="ms-3">
                            <p style="font-weight: bold;"><?php echo $_SESSION['admin_name'] ?><br><span><?php echo $_SESSION['admin_email']?></span></p>
                           
                        </div>
                    </div>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                        <a href="admindashboard.php" class="text-white" style="text-decoration:none"><button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="" aria-expanded="true">
                            Dashboard<i class="bi bi-speedometer2" style="margin-left: 60px !important;"></i>
                            </button></a>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#class-collapse" aria-expanded="false">
                            Class<i class="bi bi-stack" style="margin-left: 100px !important;"></i>
                            </button>
                            <div class="collapse" id="class-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="class_add.php" class="text-white  d-inline-flex text-decoration-none rounded">&gt;     Add Class</a></li>
                                    <li><a href="manage_class.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Class</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class=" btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Students<i class="bi bi-people-fill" style="margin-left: 70px !important;"></i>
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_students.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Add Students</a></li>
                                    <li><a href="manage_Students.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Students</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#notice-collapse" aria-expanded="false">
                            Notice<i class="bi bi-file-earmark-fill" style="margin-left: 85px !important;"></i>
                            </button>
                            <div class="collapse" id="notice-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_notice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Add Notice</a></li>
                                    <li><a href="manage_notice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Notice</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#pubnotice-collapse" aria-expanded="false">
                            Public Notice<i class="bi bi-file-earmark-fill" style="margin-left: 80px !important;"></i>
                            </button>
                            <div class="collapse" id="pubnotice-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_publicnotice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Add Public Notice</a></li>
                                    <li><a href="manage_publicnotice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Public Notice</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#pages-collapse" aria-expanded="false">
                            Pages<i class="bi bi-file-earmark-fill" style="margin-left: 85px !important;"></i>
                            </button>
                            <div class="collapse" id="pages-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="about_us.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt; About Us</a></li>
                                    <li><a href="contact_us.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt; Contact Us</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0" aria-expanded="false"><a href="reports.php" style="text-decoration:none;color:white">
                            Reports</a><i class="bi bi-journal" style="margin-left: 71px !important;"></i>
                            </button>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0" aria-expanded="false"><a href="search.php" style="text-decoration:none;color:white">
                            Research</a><i class="bi bi-search" style="margin-left: 61px !important;"></i>
                            </button>
                        </li>
                    </ul>
                </div>