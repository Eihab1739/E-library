@extends('layouts.app')

@section('title')

@section('content')
    <div class="container py-4 mt-5 dashboard-container" style="display: flex;justify-content:center;align-items:center">
        <div class="card bg-dark border-0 rounded-0 col-12">
            <div class="card-header h5 bt rounded-0 text-color"><i class="fa fa-sign-out-alt"></i> Borrow Book</div>
            <div class="card-body">
                @include('partials.alerts')
                {{-- {@dd($book)} --}}
                <form action="{{route('borrow',['id'=>$book->id])}}" method="POST" >
                    @csrf

                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="{{__('web.email')}}">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="{{__('web.phone')}}">
                    </div>
                    <div class="row">

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="start">End Date:</label>

                                <input type="datetime-local" id="end" name="trip-end"
                                       value="2020-07-22"
                                       min="2020-10-03" max="2021-11-03"

                                class="form-control">
                            </div>
                        </div>

                    </div>




                    <button type="submit" name="borrow" class="btn bg-primary btn-block">Borrow Book</button>
                </form>
            </div>
        </div>
    </div>

@endsection
