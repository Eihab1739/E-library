@extends('layouts.app')

@section('title')

@section('content')
    <div class="container pb-4 mt-5" style="max-width: 800px">
        <div class="card" style="border-top: 5px solid var(--indigo)">
            <div class="card-header h5"><i class="fa fa-book"></i> Reserve Book</div>
            <div class="card-body">
                @include('partials.alerts')
                {{-- {@dd($book)} --}}
                <form action="{{route('reserve',['id'=>$book->id])}}" method="POST" >
                    @csrf

                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                    </div>


                    </div>




                    <button type="submit" name="borrow" class="btn bg-indigo btn-block">Reserve Book</button>
                </form>
            </div>
        </div>
    </div>

@endsection
