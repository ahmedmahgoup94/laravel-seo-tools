@extends(config('seo.layout'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('seo::dashboard.index')}}"> Dashboard</a></li>
@endsection
@section('tools')

@endsection
@section('content')
    <nav class="nav nav-tabs" id="seo-settings-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab"
           aria-controls="nav-social" aria-selected="true"> Accounts
        </a>

        <a class="nav-item nav-link" id="nav-facebook-tab" data-toggle="tab" href="#nav-facebook" role="tab"
           aria-controls="nav-facebook" aria-selected="false"> Facebook
        </a>

        <a class="nav-item nav-link" id="nav-twitter-tab" data-toggle="tab" href="#nav-twitter" role="tab"
           aria-controls="nav-twitter" aria-selected="false"> Twitter
        </a>

    </nav>
    <div class="tab-content mt-3" id="nav-tabContent">
        @include('seo::tabs.social')
        <div class="tab-pane fade" id="nav-facebook" role="tabpanel" aria-labelledby="nav-facebook-tab">

        </div>
        <div class="tab-pane fade" id="nav-twitter" role="tabpanel" aria-labelledby="nav-twitter-tab">
            Twitter Settings
        </div>
    </div>
@endSection