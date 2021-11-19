<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- sweetalert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body class="font-sans antialiased">

    <x-jet-banner />

    <div class="flex h-screen antialiased text-gray-900 bg-gray-100">


        <x-aside-admin />

        <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
            <!-- Navbar -->
            <x-header-admin />


            <!-- Main content -->

            <main>

                @if (isset($title))
                    <div
                        class="mx-6 py-4 px-4 sm:px-6 lg:px-8 mt-6 rounded-lg bg-gradient-to-r from-blueGray-800 shadow-sm">
                        <div>
                            {{ $title }}
                        </div>
                    </div>
                @endif

                {{ $slot }}

            </main>

        </div>


    </div>

    @stack('modals')

    @livewireScripts

    @stack('script')

    <script>
        Livewire.on('errorSize', mensaje => {
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
        });
    </script>

</body>

</html>
