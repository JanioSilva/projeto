@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="row">
            <h1>Notícias</h1>
        </div>
        
        <div class="row">
            
            <div class="list-group">

                <div class="mt-2">
                
                    <a href="#" class="mb-2 list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                    </a>
                    <hr class="item-divider">
                </div>
            </div>
        
        </div>
    </div>

@endsection