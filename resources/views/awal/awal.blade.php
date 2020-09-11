@extends('awal.master')
@section ('content')


{{--  carausel  --}}
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/carausel3.jpg" alt="carausel1" height="200">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/carausel1.jpg" alt="carausel1" height="200">
        
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we wont forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/carausel2.jpg" alt="carausel1" height="200">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
{{--  end carausle  --}}



{{--  <!-- Container (The Band Section) -->  --}}
<div id="band" class="container">
  <h3>BERITA</h3>
  <br>
  
  <div class="row">
    <div class="col-sm-9">
            {{--  card berita  --}}
            @foreach ($tampil as $t)
                <div class="col-5">
                    {{-- start card   --}}
                        <div class="card">
                            <img src="data_file/{{ $t -> fileAset }}" class="card-img-top" alt="..." height="200">
                            <h3>{{ $t -> title }}</h3>
                            <div class="card-body">
                                <p class="card-text align-left">{{ \Illuminate\Support\Str::limit($t->content, 200, '...') }}  <a href="/awal/{{ $t -> id }}">Baca selengkapnya..</a>  </p>
                                

                            </div>
                        </div> <br> <br>
                    {{--  end card  --}}
                </div>
            @endforeach
            {{--  end card berita  --}}
    </div>
    <div class="col-sm-3">
        <div class="col-3">
                    <img src="iklan1.jpg" alt="iklan 1" width="250"> <br> <br> <br>
                    <img src="iklan2.png" alt="iklan 1" width="250">
                </div>
         <br><br>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">PRODUK KESEHATAN</h3>
    <p class="text-center">Lindungi keluarga, temukan berbagai produk Kesehatan </p>
    <div class="row text-center">
      <div class="col-sm-4">
        <a href="/">
          <div class="thumbnail">
            <img src="data_file/1594350562_pelangsing badan.png" alt="New York" width="400" height="300">
            
          </div>
          </a>
      </div>
      <div class="col-sm-4">
        <a href="/">
          <div class="thumbnail">
            <img src="data_file/1594350535_kalung.jpg" alt="New York" width="400" height="300"> 
          </div>
          </a>
      </div>
      <div class="col-sm-4">
        <a href="/">
          <div class="thumbnail">
            <img src="data_file/1594348961_late-milk.jpeg" alt="New York" width="400" height="300">
            
          </div>
          </a>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  {{--  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>  --}}

  {{--  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>  --}}
  <br>
  <h3 class="text-center">Author</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Elisa</a></li>
    <li><a data-toggle="tab" href="#menu1">Hudani</a></li>
    <li><a data-toggle="tab" href="#menu2">Novanda</a></li>
    <li><a data-toggle="tab" href="#menu3">Vanesa</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Elisa Purwaningrum</h2>
      <p>outhor of this blog</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Hudani Sari Ratih</h2>
            <p>outhor of this blog</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Novanda Seimahuira</h2>
            <p>outhor of this blog</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Vanessa Tifani </h2>
            <p>outhor of this blog</p>
    </div>
  </div>
</div>


@endsection