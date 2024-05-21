<div class="fondo-color">
{{-- registrarse en la web banco --}}
<style>
    body {
      background-color: #ffffff; /* Color de fondo blanco oscuro */
    }
    </style>
<div class="container">
    <div class="row ">
        <div class="mb-20">

        </div>
        <x-input label="Name" placeholder="your name" />
        <div class="mb-20">
            {{-- explorarWeb --}}
            @include('livewire.home.banco.partials.cambioMoneda')
            {{-- explorarWeb--}}
        </div>

        <div class="mb-20">
            @include('livewire.home.banco.partials.bannerInvitacion')
            {{-- registrarse en la web banco --}}
        </div>

        <div class="mb-20">
                @include('livewire.home.banco.partials.estadisticas')
                {{-- registrarse en la web banco --}}
        </div>

        <div class="mb-20">
            @include('livewire.home.banco.partials.pasosregistrarse')
            {{-- registrarse en la web banco --}}
        </div>

        <div class="mb-20">
            {{-- explorarWeb --}}
            @include('livewire.home.banco.partials.explorarWeb')
            {{-- explorarWeb--}}
        </div>
        <div class="mb-20">
            {{-- explorarWeb --}}
            @include('livewire.home.banco.partials.aplicacion')
            {{-- explorarWeb--}}
        </div>

        <div class="mb-20">
            {{-- explorarWeb --}}
            @include('livewire.home.banco.partials.seguridad')
            {{-- explorarWeb--}}
        </div>
        <div class="mb-20">
            {{-- explorarWeb --}}
            @include('livewire.home.banco.partials.banner')
            {{-- explorarWeb--}}
        </div>
            {{-- registrarse en la web banco --}}
            {{-- registrarse en la web banco --}}
        </div>
</div>


</div>
