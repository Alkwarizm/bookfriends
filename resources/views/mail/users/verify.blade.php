@component('mail::message')
# Introduction

Welcome {{ $user->email }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
