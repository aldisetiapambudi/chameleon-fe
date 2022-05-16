@extends('web.user.app')
@section('section')
    <div class="container mx-auto">
        <div class="row ml-2 mt-4 mb-2 flex">
            <div class="col w-1/2">
                <h3 class="text-base md:text-2xl font-semibold ml-4">Chameleon Cloth Account</h3>
            </div>
            <div class="col w-1/2 flex justify-end items-end ">
                <form action="">
                    <button type="submit"
                        class="w-30 h-auto text-white bg-blue-600 py-2 px-4 rounded-lg font-semibold hover:bg-blue-500 mr-2">Keluar</button>
                </form>
            </div>
        </div>
        <hr class="w-full h-4 mx-auto">
        <div class="row mb-96 flex">
            <div class="col w-1/2 max-w-xs block border-2">
                @include('web.user.sections.account.menu')
            </div>
            <div class="col w-full justify-start border-2 ">
                <h1>Account</h1>
            </div>
        </div>
    </div>
@endsection
