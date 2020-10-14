@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('reenviar'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se envio un link de verificación a su correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder por favor revise su correo, para el link de verificación.') }}
                    {{ __('Si no resiviste el correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haga click para enviar de nuevo') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
