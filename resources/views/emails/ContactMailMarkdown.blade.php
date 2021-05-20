@component('mail::message')
# Introduction
### Name:  {{ $name }}   
### Phone:  {{ $phone }}
  

@component('mail::panel')
    {{ $content }}
@endcomponent

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks, {{ config('app.name') }}

@endcomponent
