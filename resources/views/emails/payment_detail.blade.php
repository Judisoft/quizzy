@component('mail::message')

# Dear {{ auth()->user()->name }},

Thank you so much for giving Quizzy a try.

Payment details are as follows:

Mobile Money: 672 076 996 <br>
Account Name: Kum Jude Bama <br>


Amount: {{ $amount }}

<br>

@component('mail::button', ['url' => route('validate.payment', $payment->id)])
{{ __('validate payment') }}
@endcomponent

Best regards,<br>
Kum Jude <br>
{{ config('app.name') }}
@endcomponent
