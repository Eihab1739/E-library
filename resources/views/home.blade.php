{{-- remove this page hoopy u shold log in to the adminlte hompage direct --}}
@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-small uk-section-muted">
    <div class="uk-container">
        @if (session('status'))
            <div class="uk-alert uk-alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h1>You are logged in (^_^)</h1>
    </div>
</div>
@endsection
