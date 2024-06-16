@extends('layout.main')
@include('partial.navbar')

<div class="w-full flex flex-row">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="w-3/4 flex content-center flex-col items-center py-20">
    </div>
</div>
   
@include('partial.footer')