@extends('layouts.app')

@section('content')
<section id="pricing" class="pricing">
    <div class="pricing-container">
        <div class="faqs pb-5">
            <h3 class="mb-3 wow fadeIn animated up font-16-bold">FAQS ON METER</h1>
            <div class="row">
                <div class="col-12">
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3 pr-3">
                            Why did my meter reject the token?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            I can’t load my token
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            When I loaded the token, I got a response used but still don’t have power supply.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            Why do I have a debt on my meter?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            Can I load the token I purchased on another prepaid meter?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            I was debited for a failed transaction
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            The number of units I got was lesser.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            I bought for a wrong meter number.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            My meter is dispensing fast.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            I want to edit the name on my meter number.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            I brought the same amount for two meters but got different number of units.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            When I loaded my token, I got a response 'Old'
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            Can I cancel my token and get a refund?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            Got a response meter is invalid.
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            How long before my token expires?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            How can I be a merchant of buypower?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>                
                </div>
            </div>
        </div> 
        <div class="account pb-5">
            <h3 class="mb-3 wow fadeIn animated up font-16-bold">My ACCOUNT</h1>
            <div class="row">
                <div class="col-12">
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            How to create an account?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            How to reset my password?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            How to login into my account?  
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                </div>
            </div>
        </div>
        <div class="payments-bills pb-5">
            <h3 class="mb-3 wow fadeIn animated up font-16-bold">PAYMENTS & BILLS</h1>
            <div class="row">
                <div class="col-12">
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            What payment options are available?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            What happens if my Card (Verve, Visa, MasterCard) doesn't work?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            How can I buy electricity on buypower?  
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            Where can you see your bills?  
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            Where to call if I have questions about my bill?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>                    
                </div>
            </div>
        </div>
        <div class="token-services">
            <h3 class="mb-3 wow fadeIn animated up font-16-bold">TOKEN & SERVICES (PURCHASE)</h1>
            <div class="row">
                <div class="col-12">
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            My state is not on the list
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">
                            Why did my transaction fail?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            How do I access my tokens?  
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            I did not receive my token via SMS what can I do?  
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            What do I do if my token is not generated after payment?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div> 
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            Do I need to register another number to purchase for other meters?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div> 
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            Can I buy token at any hour of the day?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div> 
                    <div class="faqs-accordion d-flex align-items-center justify-content-between">
                        <div class="faqs-text-font pr-3">                            
                            Why do I have to pay 100 service charge?
                        </div>
                        <img src="{{ asset('frontend/img/Vector 3.png') }}" alt="logo" class="">
                    </div>                    
                </div>
            </div>
        </div>          
    </div>
</section>
@endsection