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
                                            <th>Eposta</th>
                                            <th>Telefon No</th>
                                            <th>Konu</th>
                                            <th>Mesaj</th>
                                            <th>Gönderilme Tarihi</th>
                                            <th>Durumu</th>
                                            <th>Durum Düzenle</th>
                                          
                                        </tr>
                                    </thead>
                                    @foreach ($contacts as $contact)
                                        
                                   
                                    <tbody>
                                        <tr>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone_number}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>{{$contact->created_at}}</td>
                                            @foreach ($contact->status as $contactStatus)
                                            <td>
                                                {{$contactStatus->name}}
                                            </td>
                                            <td>
                                               
                                                <a href="{{url('/back/contact/edit/').'/'.$contact->id}}">
                                                    <i class="text-light btn-info btn-circle fas fa-solid fa-marker"></i>
                                                 </a>
                                               
                                            </td>
                                            
                                            @endforeach
                                            
                                        </tr>
                                   
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
  
@endsection