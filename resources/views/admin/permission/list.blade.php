@extends('admin.layout.master')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{ $page_name }}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">{{ $page_name }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">{{ $page_name }}</strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Display Name</th>
                <th>Description</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($collection as $item)
                  
              @endforeach
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>$320,800</td>
                <td>Option</td>
              </tr>
              
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<script src=" {{ asset('/back/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/jszip.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
<script src=" {{ asset('/back/assets/js/lib/data-table/datatables-init.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    } );
</script>

@endsection