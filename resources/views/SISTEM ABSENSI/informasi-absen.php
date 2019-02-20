<?php 
require_once('header.php');
 ?>
<div class="container-fluid bawah">
    <div class="row">
        <div class="col-3 ">
            <div id="list" class="list-group">
                <a class="list-group-item list-group-item-action active" href="#list-item-1">Informasi Rangkuman</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Daftar Murid</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">
                        <div class="card-image">
                            <!-- Content -->
                            <a href="#!">
				            <div class="text-white d-flex h-100 mask blue-gradient-rgba">
				              <div class="first-content align-self-center p-3">
				                <h3 class="card-title">Siswa Hadir</h3>
				                <p class="lead mb-0">35 Orang</p>
				              </div>
				              <div class="second-content align-self-center mx-auto text-center">
				                <i class="far fa-grin-beam fa-3x fa-spin"></i>
				              </div>
				            </div>
				          </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">
                        <div class="card-image">
                            <!-- Content -->
                            <a href="#!">
				            <div class="text-white d-flex h-100 mask purple-gradient-rgba">
				              <div class="first-content align-self-center p-3">
				                <h3 class="card-title">Tidak Hadir</h3>
				                <p class="lead mb-0">5 Orang</p>
				              </div>
				              <div class="second-content align-self-center mx-auto text-center">
				                <i class="far fa-frown fa-3x fa-spin"></i>
				              </div>
				            </div>
				          </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">
                        <div class="card-image">
                            <!-- Content -->
                            <a href="#!">
		            <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
		              <div class="first-content align-self-center p-3">
		                <h3 class="card-title">Paling Cepat</h3>
		                <p class="lead mb-0">05.30 (Udin Sedunia)</p>
		              </div>
		              <div class="second-content align-self-center mx-auto text-center">
		                <i class="fas fa-hourglass-start fa-3x"></i>
		              </div>
		            </div>
		          </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">
                        <div class="card-image">
                            <!-- Content -->
                            <a href="#!">
		            <div class="text-white d-flex h-100 mask peach-gradient-rgba">
		              <div class="first-content align-self-center p-3">
		                <h3 class="card-title">Paling Lambat</h3>
		                <p class="lead mb-0">08.30 (Udin Sedunia)</p>
		              </div>
		              <div class="second-content align-self-center mx-auto text-center">
		                <i class="fas fa-hourglass-end fa-3x"></i>
		              </div>
		            </div>
		          </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->
            </div>
            <!-- Table data siswa -->
            <div class="row">
                <div class="col">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="4"><button type="button" class="btn btn-outline-success btn-rounded waves-effect">Export ke Excel</button></th>
                                    <th>
                                        <form class="form-inline my-2 my-lg-0 ml-auto">
                                            <input class="form-control rounded-pill" type="search" placeholder="Nama..." aria-label="Search">
                                            <button class="btn rounded-pill btn-indigo btn-md my-2 my-sm-0 ml-3" type="submit">Cari</button>
                                        </form>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jam Masuk</th>
                                    <th scope="col">Jam Keluar</th>
                                    <th scope="col">Hari</th>                                    
                                </tr>
                            </thead>
                            <tbody class="table-hover  table-bordered">
                                <tr>
                                    <th scope="row">190237128</th>
                                    <td>Udin Sedunia</td>
                                    <td>08.30</td>
                                    <td>09.00</td>
                                    <td>12/90/2001</td>                                    
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>