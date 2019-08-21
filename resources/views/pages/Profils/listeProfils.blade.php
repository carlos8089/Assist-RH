@extends('templates.base')

@section('element1')

<div class="container">
    @foreach ($users as $user)
        <div class="row">
            <?= $user ?>
        </div>
    @endforeach
</div>

@endsection