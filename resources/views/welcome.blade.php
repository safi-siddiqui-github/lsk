<x-default.layout>

    <div class="flex flex-col gap-4 p-4">

        <div class="flex flex-col gap-1">
            <h2 class="text-xl font-medium">Safi Siddiqui</h2>
            <p class="">Livewire, React, Vue, React Native</p>
        </div>
        <hr>

        <div class="flex flex-col item-start">
            <h2 class="font-medium">Livewire Apps</h2>
            <a href="{{route('livewire.crm.home')}}" class="">CRM App</a>
        </div>

        <div class="flex flex-col  item-start">
            <h2 class="font-medium">React Apps</h2>
            <a href="{{route('react.crm.home')}}" class="">CRM App</a>
        </div>
        
        <div class="flex flex-col  item-start">
            <h2 class="font-medium">Vue Apps</h2>
            <a href="{{route('vue.crm.home')}}" class="">CRM App</a>
        </div>
    </div>
</x-default.layout>