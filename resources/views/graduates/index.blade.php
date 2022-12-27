@extends('layouts.app')
@section('content')
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");
    .height {
        height: 100vh
    }
    .search {
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1)
    }
    .search input {
        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4
    }
    .search input:focus {
        box-shadow: none;
        border: 2px solid blue
    }
    .search button {
        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: blue
    }
    </style>
</head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Graduates</h2>
            </div>
            <div class="pull-right">
                @can('graduate-create')
                <a class="btn btn-success" href="{{ route('graduates.create') }}"> Add New Graduates</a>
                @endcan
            </div>
            {{-- s --}}
            <div class="search"> <i class="fa fa-search"></i> 
              <form class="navbar-form navbar-left" action="{{ URL::to('find') }}" method="POST">
                  {{ csrf_field() }}
                      <input type="text" id="search" name="search" class="form-control" placeholder="Search Member" autocomplete="off">
                      <button type="submit" class="btn btn-primary">Search</button> 
              </form>
              </div>
               
              <div id="result" class="panel panel-default" style="display:none">
                  <div class="list-group" id="memList">
                   
                  </div>
              </div>
              {{-- a --}}


        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <div class="cards-list">
        @foreach ($graduates as $graduate)

        <div class="cardx main_container">
            <img src="{{ asset($graduate->photo) }}" class="image" />
            <div class="overlayx">
                
                    <form action="{{ route('graduates.destroy',$graduate->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('graduates.show',$graduate->id) }}">Details</a>
                        @can('graduate-edit')
                        <a class="btn btn-primary" href="{{ route('graduates.edit',$graduate->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('graduate-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                
            </div>
            <div class="qoute">
            <p class="qoutex">{{ $graduate->name }}</p>
            </div>
        </div>
        @endforeach
        
        </div>





    {!! $graduates->links() !!}
@endsection

<script type="text/javascript">
  $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        
      $('#search').keyup(function(){
          var search = $('#search').val();
          if(search==""){
              $("#memList").html("");
              $('#result').hide();
          }
          else{
              $.get("{{ URL::to('search') }}",{search:search}, function(data){
                  $('#memList').empty().html(data);
                  $('#result').show();
              })
          }
      });
  });
  </script>

<style>
    .w-5{
        /* display: none; */
        width: 25px;
    }
    .qoute{
        display: flex;
        height: 50px;
        justify-content: center;
    }
    .qoutex{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 15px;
        font-weight: bold;
        background-color: peachpuff;
    }

    .main_container{
        margin: 6% 0 0 36%;
        position: relative;
        /* width: 25%; */
    }
    .image{
        display: block;
        width: 100%;
        height: 100%;
    }
    .overlayx{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.75);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .main_container:hover .overlayx{
        height: 30%;
    }
    h1{
        width: 100%;
        margin-top: 30%;
        color: white;
        font-size: 4vw;
        position: absolute;
        text-align: center;
        transform: rotate(-5deg)skewX(-5deg);
    }
    h4{
        text-align: center;
        font-family: 'Roboto', sans-serif;
        color: white;
        font-size: 1.2vw;
        margin: 60% 0 0 18%;
        width: 70%;
        letter-spacing: 5px;
        line-height: 1.5em;
    }


    .cards-list {
    z-index: 0;
    width: 100%;
    display: flex;
    /* justify-content: space-around; */
    justify-content: start;
    flex-wrap: wrap;
    padding-bottom: 40px;
  }
  
  .cardx {
    margin: 30px auto;
    width: 300px;
    height: 300px;
    border-radius: 40px;
    box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
    cursor: pointer;
    transition: 0.4s;
    /* display: flex;
    justify-content: space-around;
    flex-wrap: wrap; */
  }
  
  .cardx .card_image {
    width: inherit;
    height: inherit;
    border-radius: 40px;
  }
  
  .cardx .card_image img {
    width: inherit;
    height: inherit;
    border-radius: 40px;
    object-fit: cover;
  }
  
  .cardx .card_title {
    text-align: center;
    border-radius: 0px 0px 40px 40px;
    font-family: sans-serif;
    font-weight: bold;
    font-size: 30px;
    margin-top: -80px;
    height: 40px;
    color: brown;
  }
  
  .cardx:hover {
    transform: scale(0.9, 0.9);
    box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
      -5px -5px 30px 15px rgba(0,0,0,0.22);
  }
  
  .title-white {
    color: white;
  }
  
  .title-black {
    color: black;
  }
  
  @media all and (max-width: 500px) {
    .card-list {
      flex-direction: column;
    }
    .cardx {
      /* On small screens, we are no longer using row direction but column */
      flex-direction: column;
    }
  }
  
  
  
  /* .cardx {
    margin: 30px auto;
    width: 300px;
    height: 300px;
    border-radius: 40px;
    background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
    transition: 0.4s;
  } */
 
</style>