@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Graduates</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('graduates.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <body class="row">

        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapperx">
    <div class="left">
        <img src="{{ asset($graduate->photo) }}" width= '400' class="img img-responsive" />
        <h4 style="font-weight: bold">' {{ $graduate->qoute }} '</h4>
         {{-- <h5>BSIT</h5> --}}
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Name</h4>
                    <p style="font-weight: bold">{{ $graduate->name }}</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>0001-213-998761</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>For my future self</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Advice</h4>
                    <p>{{ $graduate->advice }}
                    </p>
                 </div>
                 <div class="data">
                   <h4>Hobby and Likes</h4>
                    <p>dolor sit amet.</p>
              </div>
            </div>
        </div>
      
        {{-- <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div> --}}
    </div>
</div>


    </body>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');



body{
   background-color: #f3f3f3;
}

.wrapperx{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 80rem;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
  background-color: #01a9ac;
}

.wrapperx .left{
  width: 35%;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapperx .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapperx .left h4{
  margin-bottom: 10px;
}

.wrapperx .left p{
  font-size: 12px;
}

.wrapperx .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapperx .right .info,
.wrapperx .right .projects{
  margin-bottom: 25px;
}

.wrapperx .right .info h3,
.wrapperx .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapperx .right .info_data,
.wrapperx .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.wrapperx .right .info_data .data,
.wrapperx .right .projects_data .data{
  width: 45%;
}

.wrapperx .right .info_data .data h4,
.wrapperx .right .projects_data .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapperx .right .info_data .data p,
.wrapperx .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapperx .social_media ul{
  display: flex;
}

.wrapperx .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}

.wrapperx .social_media ul li a{
  color :#fff;
  display: block;
  font-size: 18px;
}
</style>