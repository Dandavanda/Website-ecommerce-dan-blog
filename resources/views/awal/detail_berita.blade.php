@extends('awal.master')
@section ('content')



{{--  Container berita  --}}
<div id="band" class="container">
  <h3>BERITA</h3>
  <br>
  
  <div class="row">
    <div class="col-sm-9">
            {{--  card berita  --}}
            
                <div class="col-5">
                    {{-- start card   --}}
                        <div class="card">
                            <img src="../data_file/{{ $tampil -> fileAset }}" class="card-img-top" alt="..." height="200">
                            <h3>{{ $tampil -> title }}</h3>
                            <div class="card-body">
                                <p class="card-text align-left">{{ $tampil->content }}    </p>
                            </div>
                        </div> <br> <br>
                    {{--  end card  --}}
                </div>
            


                @if (Auth::user())
                <div class="panel panel-default">
                    <div class="panel-heading">Tambahkan Komentar</div>

                    <div class"panel-body">
                        <form action="{{ route('post.comment.store', $post ?? '') }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            {{-- <div class="form-group"> --}}
                                <textarea name="message" id="" cols="38" rows="5" class="form-control" placeholder="Berikan Komentar ..."></textarea>
                            {{-- </div> --}}

                            {{-- <div class="form-group"> --}}
                                <input type="submit" value="Komentar" class="btn btn-primary">
                            {{-- </div> --}}
                        </form>
                    </div>
                </div>
                @endif
            {{--  end card berita  --}}
    </div>
    <div class="col-sm-3">
        <div class="col-3">
                    <img src="../iklan1.jpg" alt="iklan 1" width="250"> <br> <br> <br>
                    <img src="../iklan2.png" alt="iklan 1" width="250">
                </div>
         <br><br>
    </div>
  </div>
</div>





  

  



@endsection