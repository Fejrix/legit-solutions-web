@extends('layouts.app')

<div class="flex flex-col items-center justify-center h-screen bg-transparent" >
    <authentication-card class="flex flex-col items-center justify-center">
        
        <img class="table w-20" src="https://media.discordapp.net/attachments/885210378559180841/944615057365545000/Logo.png?width=462&height=462" alt="">

        <x-jet-validation-errors class="pt-2 tracking-wide text-center text-orange-400"> 
        </x-jet-validation-errors>

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form class="box-content border-[2px] border-neutral-900 w-full px-6 py-6 mt-6 overflow-hidden rounded-lg shadow-md bg-[#1e1e1e] sm:max-w-md" method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <p class="mb-3 text-sm font-semibold tracking-widest text-center text-white uppercase">Vítejte v Legit Solutions</p>
               <!-- <x-jet-label class="table text-white" for="email" value="{{ __('Email') }}" /> -->
                <input placeholder="🙌 Tvoje jedinečná emailová adresa" id="email" class="focus:ring-transparent focus:border-neutral-900 text-white w-full mt-2 bg-transparent rounded-md border-[1px] border-t-neutral-900 border-l-neutral-900 border-r-orange-400 border-b-orange-400" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <!--<x-jet-label class="table text-white"  for="password" value="{{ __('Heslo') }}" />-->               
                    <input placeholder="👀 Tvoje neprolomitelné heslo " id="password" class="focus:ring-transparent focus:border-neutral-900 text-white w-full mt-2 bg-transparent rounded-md border-[1px] border-t-neutral-900 border-l-neutral-900 border-r-orange-400 border-b-orange-400" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="pt-5">                
                <label for="remember_me">
                    <x-jet-checkbox class="my-2 text-orange-400 focus:ring-0 focus:ring-offset-0 bg-neutral-800 border-neutral-900 focus:border-neutral-900" id="remember_me" name="remember" />
                    <span class="inline-flex items-center py-2 text-xs font-semibold tracking-widest text-white uppercase focus:outline-none">{{ __('Pamatovat si mě') }}</span>                                
                </label>
                
                <button class="inline-flex items-center float-right py-2 text-xs font-semibold tracking-widest text-white uppercase select-text focus:outline-none hover:text-orange-400">
                    {{ __('Přihlásit se') }} 
                </button>
                                  
            </div>

        </form>
    </authentication-card>
    <a href="#" class="mb-3 text-[11px] tracking-wide text-center text-orange-400 hover:underline underline-offset-4">Nemáte přístup a chcete se stát členem? Požadejte o přístup!</a>
</div>
