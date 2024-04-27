<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Affichez les informations du candidat dans un tableau -->
                    <h3>Informations du candidat :</h3>
                    <table class="table-auto">
                        <tr>
                            <td class="font-bold">Nom :</td>
                            <td>{{ $candidat->name }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Email :</td>
                            <td>{{ $candidat->email }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Série du candidat :</td>
                            <td>{{ $candidat->serie }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Moyenne au bac :</td>
                            <td>{{ $candidat->moybac }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Année du bac :</td>
                            <td>{{ $candidat->annebac }}</td>
                        </tr>
                        <!-- Ajoutez d'autres informations du candidat au besoin -->
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
