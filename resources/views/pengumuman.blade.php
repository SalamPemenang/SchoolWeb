<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang | SchoolWeb</title>
  @include('admin.part.assets-head-wel')

</head>

<body>

  <div class="container">
    @include('admin.part.nav-wel')
  </div>

  <div class="container cta-100">
    <div class="conatiner text-center">
      <h2>Daftar Pengumuman</h2>
      <hr>
    </div>
    <div class="container">
      <div class="row blog">
        <div class="col-md-12">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-5">

              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-3">
               <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Pengumuman
                </button>
                <div class="dropdown-menu">
                  @foreach($Pengumuman as $pmin)
                  <a class="dropdown-item" href="#" style="text-overflow: ellipsis; overflow: hidden; max-width: 350px;">{{$pmin->judul}}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">

            <!-- Carousel items -->
            <div class="carousel-item active">
              @foreach($Pengumuman as $p)
              <div class="row">
                <div class="col-md-4" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{{$p->tgl}}</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="{{ '/image/pengumuman/' .$p->foto }}" class="rounded"> </figure>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="item-box-blog-body">
                    <!--Heading-->
                    <div class="item-box-blog-heading">
                      <a href="#" tabindex="0">
                        <h5>{{$p->judul}}</h5>
                      </a>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data">
                      <p><i class="fa fa-user-o"></i> Admin</p>
                    </div>
                    <!--Text-->
                    <div class="item-box-blog-text">
                      <p>{{$p->deskripsi}}</p>
                    </div>
                    <div class="mt">
                      <button  type="button" data-toggle="modal" data-target="#myModal-{{$p->id}}" tabindex="0" class="btn bg-blue-ui white read">Lihat</button>
                    </div>
                    <!--Read More Button-->
                  </div>
                </div>
              </div>
              <!--.row-->
            </div>
            <div class="modal fade" id="myModal-{{$p->id}}" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">{{$p->judul}}</h4>
                    <p><i class="fa fa-user-o"></i> Administrator {{$p->tgl}}</p>
                  </div>
                  <div class="modal-body">
                    <pre>{{$p->deskripsi}}</pre>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!--.carousel-inner-->
            <div class="container">
              {{ $Pengumuman->links() }} 
              <br>     
            </div>
          </div>
          <!--.Carousel-->
        </div>
      </div>
    </div>
  </div>





  @include('admin.part.foot-wel')
  @include('admin.part.assets-foot-wel')
</body>
</html>
