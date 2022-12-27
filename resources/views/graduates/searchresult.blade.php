@extends('layouts.app')
      
@section('content')
<h2>Search Results</h2><br>
    @if(count($graduates) > 0)
            {{-- <a href="{{ url('member/'.$graduate->id) }}"> --}}
                {{-- {{ $graduate->name }} {{ $graduate->qoute }} --}}
                <div class="cards-list">
                            @foreach($graduates as $graduate)
                    
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
                    {{-- </a> --}}
                <style>
    .w-5{
        /* display: none; */
        width: 25px;
    }
    .containers{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
    }
    .putosarowa{
        /* width: 400px; */
        display: flex;
        flex-wrap: wrap;
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
    width: auto;
    display: flex;
    /* background-color: greenyellow; */
    justify-content: space-around;
    /* justify-content: start; */
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
                </style>
    @else
        <h2>No Results Found</h2>
    @endif
@endsection