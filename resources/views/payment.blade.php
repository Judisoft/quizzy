<x-app-layout>
    <div class="pt-4">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">

            <div class="w-full sm:max-w-2xl mt-6 p-6 shadow-sm overflow-hidden sm:rounded-lg prose">
                <h2 class="text-center font-bold uppercase" style="color:#008dcd;">Upgrade Account - Subscription</h2><hr>
                <p class="font-bold ">You have choosen <span>{{ $plan }} </span>plan
                    <h3 style="color:#008dcd;" class="uppercase">Amount : {{ $amount }} fcfa</h3>
                    <hr>
                </p>
                @if(Session::has('success'))
                    <div class="rounded-lg px-3 mb-3 text-base text-white inline-flex items-center w-full" role="alert" style="background-color: #008dcd;">
                        <p class="text-white font-bold">{{ Session::get('success') }}</p>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="rounded-lg px-3 mb-3 text-base text-white inline-flex items-center w-full" role="alert" style="background-color: red;">
                        <p class="text-white font-bold">{{ Session::get('error') }}</p>
                    </div>
                @endif
                <h3 class="font-semibold">Pay via (Choose a payment method)</strong></h3>
                <div class="flex flex-col">
                    <label class="py-3 px-2">
                        <input type="radio" name="payment_method" value="quiz_pay" id="quizPay" onclick="paymentMethod(this.value)">
                        Quizzy Pay (Account Balance: <span class="font-bold">{{ $acc_balance->amount. ' '. 'FCFA' }}</span>)
                    </label>
                    <label class="py-3 px-2">
                        <input type="radio" name="payment_method" value="momo" id="momo" onclick="paymentMethod(this.value)">
                        MTN Mobile Money
                    </label>
                    <label class="py-3 px-2">
                        <input type="radio" name="payment_method" value="om" id="om" onclick="paymentMethod(this.value)">
                        Orange Money
                    </label>
                </div>
                <div class="flex flex-col mt-4 p-3">
                    @if ($errors->any())
                        <div>
                            <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div id="paymentInfo"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    // quizPay = document.createElement("quizPay")
    // momo = document.getElementsById("momo")
    // om = document.getElementsById("om")

    function paymentMethod(id)
    {
        let amount = {!! json_encode($amount) !!}
        let payment_methods = {
                            "momo": "MTN Mobile Mobile",
                            "om": "OrangeMoney",
                            "quiz_pay": "Quizzy Pay"
        }
        let paymentInfo = document.getElementById("paymentInfo")
        let p_method = document.getElementById(id)

        paymentInfo.innerHTML = `<div class="p-3 border">
                                    <form method="POST" action="{{ route('post.payment') }}">
                                        @csrf
                                        <div class="flex p-3">
                                            <label for="payment_method" class="px-4">Payment Method: <span class="font-bold">${payment_methods[id]}</span> </label>
                                            <input type="hidden" class="bg-transparent"  name="payment_method" value="${id}">
                                        </div>
                                        <div class="pt-4 p-3 flex">
                                            <label for="amount" class="px-4">Amount:<span class="font-bold">${amount} FCFA</span> </label>
                                            <input  type="hidden" name="amount" value="${amount}">
                                        </div>
                                        <div class="pt-4 flex p-3">
                                            <label for="telephone" class="px-4">Telephone </label>
                                            <input type="text" name="telephone" placeholder="Telephone number" value="{{ old('telephone') }}">
                                        </div>
                                        <div class="pt-4 flex flex-row p-3  justify-center">
                                            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Upgrade My Account</button>
                                        </div>
                                    </form>
                                </div>`
    }
</script>
