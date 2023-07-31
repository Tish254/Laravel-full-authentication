<x-mail::message>
# Welcome to my application.

Thank you for subscribing

<x-mail::button :url="'https://www.patakitu.com'">
Visite site
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
