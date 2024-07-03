<x-mail::message>
# hello, You have a new contact request!

<h3>name: {{ $data['name'] }}</h3>
<h3>email: {{ $data['email'] }}</h3>
<h3>message: {{ $data['message'] }}</h3>

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
