@extends('_layouts.master')

@section('body')
    
    @include('_partials.aboutme')

    @include('_partials.technologies')

    @include('_partials.contact')
    

    <div class="text-center">
        @include('_partials.footer')
    </div>
    
@endsection
