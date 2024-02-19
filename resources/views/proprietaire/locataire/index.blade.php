@extends('proprietaire.layouts.app')
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Mes Locataires</h1>
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
                          <th>Etat</th>
                          <th>Actions</th>



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
                            <td>
                              <div id="etat" class="badge badge-light-{{($locataire->etat=='inactif')? 'danger' : 'success' }}">{{$locataire->etat}}</div>
                              </td>
                            <td>
                              <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
                              <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                              <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                  </g>
                                </svg>
                              </span>
                              </a>
                              
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 fw-bold fs-7 w-200px py-4" data-kt-menu="true">
                                
                                 <div class="menu-item px-2">
                                  <a href="{{ route('resetpasswordloc',$locataire->slug) }}" class="btn btn-active-light-primary menu-link">
                                   <i class="fas fa-redo-alt mr-2"></i>
                                    reset mot de passe</a>
                                </div>

                                <div class="menu-item px-2">
                                  <button type="button"  class="btn btn-active-light-danger menu-link " data-kt-customer-table-filter="delete_row" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
                                    <span class="svg-icon svg-icon-4 ms-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                          </g>
                                        </svg>
                                   </span>
                                    supprimer
                                </button>
                                </div>

                                <div class="menu-item px-2">
                                  <a href="{{ route('deactivateloc',$locataire->slug) }}" class="btn btn-active-light-dark menu-link " data-kt-customer-table-filter="delete_row">
                                    <span class="svg-icon svg-icon-5 ms-1 ">
                                    <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:5;" version="1.1" viewBox="0 0 24 24" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <g id="Icon">
                                        <path d="M12,2.25c-5.381,-0 -9.75,4.369 -9.75,9.75c-0,5.381 4.369,9.75 9.75,9.75c5.381,-0 9.75,-4.369 9.75,-9.75c-0,-5.381 -4.369,-9.75 -9.75,-9.75Zm6.339,4.472l-11.617,11.617c1.431,1.193 3.271,1.911 5.278,1.911c4.553,-0 8.25,-3.697 8.25,-8.25c-0,-2.007 -0.718,-3.847 -1.911,-5.278Zm-1.061,-1.061c-1.431,-1.193 -3.271,-1.911 -5.278,-1.911c-4.553,-0 -8.25,3.697 -8.25,8.25c-0,2.007 0.718,3.847 1.911,5.278l11.617,-11.617Z"/>
                                      </g>
                                    </svg>
                                  </span>

                                    desactiver

                                </a>
                                   
                                </div>
                                
                              </div>
                             
                            </td>

                        </tr>
                        <div class="modal fade" tabindex="-1" id="kt_modal_2">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title">{{$locataire->nom}}</h1>

                                  </div>

                                  <div class="modal-body">
                                    <span class="text-gray-800 fs-5">Etes vous sur de vouloir vraiment supprimer {{$locataire->nom}}</span>
                                  </div>

                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-active-light-primary" data-bs-dismiss="modal">Annuler</button>
                                      <a href="{{route('supprimerloc',$locataire->slug) }}"class="btn btn-danger">Supprimer</a>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                    
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
