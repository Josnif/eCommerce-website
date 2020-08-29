@component('mail::message')
# Shop Activation Request

Please activate shop. Here are shop's details...

Shop name : {{$shop->name}}
Shop Owner: {{$shop->owner->name}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
