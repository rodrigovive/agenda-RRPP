@extends('backend.layout.app')

@section('content')
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Panel Principal</a>
        </li>
        <li class="breadcrumb-item active">Lista de Eventos</li>
    </ol>
         
<!-- datatable -->
<div class="card mb-3">
  <div class="card-header">
      <!-- <div class="col-sm-8 lista">
         <a class="lista"><i class="fa fa-list lista"></i> Lista de Eventos </a>    
      </div> -->
      <div class="col-sm-4 ml-auto">
        <a href="#" class="btn btn-primary"><i class="fa fa-print"></i> <span></span></a>
        <a href="#" class="btn btn-secondary"><i class="fa fa-file-pdf-o"></i> <span></span></a>
        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus"></i> <span>Agregar Evento</span></a>        
      </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
        <thead>
          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Actividad: activate to sort column descending" style="width: 72px;">Actividad</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Descripción: activate to sort column ascending" style="width: 90px;">Descripción</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 48px;">Fecha</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Organizador: activate to sort column ascending" style="width: 94px;">Organizador</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Coordinador: activate to sort column ascending" style="width: 95px;">Coordinador</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Acción: activate to sort column ascending" style="width: 51px;">Acción</th></tr>
        </thead>
        <tfoot>
          <tr><th rowspan="1" colspan="1">Actividad</th><th rowspan="1" colspan="1">Descripción</th><th rowspan="1" colspan="1">Fecha</th><th rowspan="1" colspan="1">Organizador</th><th rowspan="1" colspan="1">Coordinador</th><th rowspan="1" colspan="1">Acción</th></tr>
        </tfoot>
        <tbody>
          
          
          
          
          
          
          
          
          
          
          
        <tr role="row" class="odd">
            <td class="sorting_1">Congreso ESIS</td>
            <td>Este congreso sera llevado en el mes de noviembre y sera dirigido a los estudiantes y profesionales del area.</td>
            <td>26/06/2018</td>
            <td>ESIS</td>
            <td>Samuel Ramirez - 999666999</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>

            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012/08/06</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>

            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010/10/14</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Sonya Frost</td>
            <td>Software Engineer</td>
            <td>Edinburgh</td>
            <td>23</td>
            <td>2008/12/13</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">T</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>               
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Tatyana Fitzpatrick</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>19</td>
            <td>2010/03/17</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">vrielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012/12/02</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>

            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">yolleen Hurst</td>
            <td>Javascript Developer</td>
            <td>San Francisco</td>
            <td>39</td>
            <td>2009/09/15</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">zAshton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i title="Editar" class="fa fa-pencil-square-o"></i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i title="Eliminar" class="fa fa-trash-o"></i></a>
            </td>
          </tr></tbody>
      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
    
@endsection

@section('after-scripts')
    
    @include('backend.event.includes.after_scripts')

@endsection

@section('modal-create')

@endsection