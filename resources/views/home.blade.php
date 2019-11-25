@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>D.Z.</p>
                    <p>1. Spremiti uređenog korisnika u bazu, napraviti validaciju podataka iz forme</p>
                    <p>2. Staviti link na users.index i posts.index u Menu</p>
                    <p>3. Staviti login i register u Menu - prekopirati iz app.blade.php</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
