@extends('layouts.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Usuarios egresados actuales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendientes por aprobación</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 5</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Publicaciones Realizadas por mí</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 10 </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Publicaciones Totales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <!-- Tables Content-->
        <h1 class="h3 mb-2 text-gray-800">Usuarios Pendientes por Aprobación</h1>
        <p class="mb-4"> Acepte o elimine los usuarios que han solicitado unirse a la plataforma de Egresados</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Lista de usuarios pendientes por aprobación</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tel</th>
                    <th>Nacimiento</th>
                    <th>Correo</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    



                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>1088245763</td>
                    <td>Tiger Nixon</td>
                    <td>6145656</td>
                    <td>2011/04/25</td>
                    <td> abc@utp.edu.co</td>
                    <td> 
                        <a href="#" class="btn btn-success btn-circle">
                            <i class="fas fa-check"></i> </a>

                        <a href="#" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
                
                <tr>
                    <td>1088245763</td>
                    <td>Tiger Nixon</td>
                    <td>6145656</td>
                    <td>2011/04/25</td>
                    <td> abc@utp.edu.co</td>
                    <td> 
                        <a href="#" class="btn btn-success btn-circle">
                            <i class="fas fa-check"></i> </a>

                        <a href="#" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
                
                <tr>
                    
                
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection