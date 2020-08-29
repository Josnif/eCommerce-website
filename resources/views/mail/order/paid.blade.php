@component('mail::message')
# Invoice paid

Thanks for the purchase.

Here is your receipt.

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($order->items as $item)
            <td> {{$item->name}} </td>
            <td> {{$item->pivot->quantity}} </td>
            <td> {{$item->pivot->price}} </td>
            @endforeach

        </tr>
    </tbody>
</table>
<p>Table: $ {{$order->grand_total}} </p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
