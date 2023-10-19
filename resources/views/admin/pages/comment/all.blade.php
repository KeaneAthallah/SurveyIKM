 @extends('admin.layouts.main')
 @section('content')
     <div class="container-fluid pt-4 px-4">
         <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h6 class="card-title mb-4">All Surveys</h6>
                         <div class="table-responsive mt-2">
                             <table id="dataTableExample" class="table">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>User Id</th>
                                         <th>Jenis</th>
                                         <th>Tanggal</th>
                                         <th>Komentar</th>
                                         <th>Action</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($comments as $comment)
                                         <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{ $comment->code_user }}</td>
                                             <td>{{ $comment->class }}</td>
                                             <td>{{ $comment->date }}</td>
                                             <td>{{ $comment->comment }}</td>

                                             <td>
                                                 <a href="#" class="btn btn-danger" id="delete">Delete</a>
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
