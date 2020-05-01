@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Perfil de Administrador</h1>
<p class="mb-4"> A continuación encontrará sus datos personales y las opciones correspondientes para modificarlos. </p>

<!-- Content Row -->
<div class="row">

  <div class="col-xl-8 col-lg-7">

    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Información personal</h6>
      </div>

      <div>

        <div class="card-body">
          
          <ul  style="list-style-type: none;">
            <li>Nombre: César </li>
            <li>Apellidos: Jaramillo</li>
            <li>Cédula: 13424234</li>
            <li>Correo electrónico: cjj@gmail.com</li>
            
          </ul>
          
        </div>

        <div align="center">
          <!-- Button Change profile Photo -->
          
          <a href="#" class="btn btn-primary btn-icon-split" style="margin-bottom: 20px;">
            <span class="icon text-white-50">
              <i class="fas fa-flag"></i>
            </span>
            <span class="text">Modificar información personal</span>
          </a>

        </div>

      </div>
    </div>

    
  </div>

  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">César Jaramillo</h6>
      </div>
      
      
      <!-- Card Body -->
      <div class="card-body" >
        <div class="imgPeople pt-4" >
          
          <div align="center" >
            
            <!-- Profile  Photo -->
            <img src="/img/people.png" style="width:60%" >

            <!-- Button Change profile Photo -->

          <a href="#" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-flag"></i>
            </span>
            <span class="text">Cambiar Foto de perfil</span>
          </a>


          </div>

        </div>
          



      </div>
    </div>
  </div>
</div>

</div>
<!-- end main content -->

@endsection