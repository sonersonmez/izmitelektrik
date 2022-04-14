@extends('back.layouts.master')
@section('content')
   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">İletişim Formu</h1>
                    <p class="mb-4">Bu sayfada iletişim formundan gelen istekleri görebilirsiniz.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gelen Form Verileri</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Gönderen</th>
                                            <th>Mesaj</th>
                                            <th>Telefon No</th>
                                            <th>Eposta</th>
                                            <th>Gönderilme Tarihi</th>
                                            <th>Durumu</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>Görüldü</td>
                                        </tr>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
  
@endsection