@extends('utilisateur.layouts.app')
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Locataires</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>

    </div>

        

</div>
@endsection
@section('content')

    <section class="col-12">
      <div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body ">
                <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                  <thead>
                      <tr class="fw-bolder fs-6 text-gray-800 px-7">
                          <th>#</th>
                          <th>Nom</th>
                          <th>Login</th>
                          <th>Email</th>
                          <th>Telephone</th>
                          



                      </tr>
                  </thead>
                  <tbody>

                        @foreach ($locataires as $key => $locataire )
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$locataire->nom}}</td>
                            <td>{{$locataire->login}}</td>
                            <td>{{$locataire->email}}</td>
                            <td>{{$locataire->telephone}}</td>
                            
                           

                        </tr>
                        
                      
                        @endforeach




                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      
    </section>
    @section('script')
    <script src="{{url('assets_template/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>




   $("#kt_datatable_example_5").DataTable({
    "language": {
  "lengthMenu": "Show _MENU_",
 },

 "dom":
  "<'row'" +
  "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
  "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
  ">" +

  "<'table-responsive'tr>" +

  "<'row'" +
  "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
  "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
  ">"
    })
    </script>
    @endsection

@endsection
