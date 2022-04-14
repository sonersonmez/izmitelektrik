@extends('back.layouts.master')
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Referanslar</h1>
        <p class="mb-4">Bu sayfada tüm referans gönderilerini görebilirsiniz.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row justify-content-between">
                <h6 class="col-9 m-0 font-weight-bold text-primary">Referanslar</h6>
                <button type="button" class="col-1 btn btn-outline-primary">
                    <a href="{{url('back/reference/add')}}"> <p class="text-success align-center"> Yeni</p> </a>
                </button>
            </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Aktif mi?</th>
                                <th>Kategorileri</th>
                                <th>Gönderilme Tarihi</th>
                                <th>Güncelle</th>
                                <th>Sil</th>  
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($references as $reference)
                             <tr>
                                <td>{{$reference->title}}</td>
                                <td>{{Str::limit($reference->content, 100, $end = '...')}}</td>
                              
                               @if ($reference->is_active == 1)
                               <td>
                                <i class="btn-success btn-circle  fas fa-check"></i>
                            </td>
                            @else
                            <td>
                                <i class="btn-warning btn-circle  fas fa-solid fa-eye-slash"></i>
                            </td>
                               @endif
                             
                            @foreach ($reference->categories->chunk(1) as $chunk)
                             @foreach ($chunk as $referenceCategory)
                                <td>{{$referenceCategory->name}}</td>
                             @endforeach
                            @endforeach
                                @if($reference->created_at != null)
                                <td>{{$reference->created_at}}</td>
                                @else
                                    <td>Belirtilmemiş</td>
                                @endif
                            
                            <td>
                                <a href="{{url('back/reference/update/'.$reference->id)}}">
                                   <i class="text-light btn-info btn-circle fas fa-solid fa-marker"></i>
                                </a>
                            </td>
                           
                            <td>
                            <form method="POST" action="">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                        
                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="Kaydı Sil">
                                </div>
                            </form>
                        </td>
                        <!-- text-light bg-danger btn-circle fas fa-solid fa-trash -->
                               
                                
                            </tr>
                           
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection