@extends('layouts.guest')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    @include('home')

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start Services ==================== -->

    @include('services')

    <!-- ==================== End Services ==================== -->

    <!-- ==================== Start team ==================== -->

    @include('card')

    <!-- ==================== End team ==================== -->

    <!-- ==================== Start Blog ==================== -->

    @include('blogs')

    <!-- ==================== End Blog ==================== -->
@endsection
