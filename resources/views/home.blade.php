@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('_side_bar_links')
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
            @include('_publish_tweet_panel')
            <div class="border border-gray-300 rounded-lg">
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
            </div>
        </div>
        <div class="lg:w-1/6 bg-gray-100 p-6 rounded-lg">
            @include('_friends_lists')
        </div>
    </div>
@endsection
