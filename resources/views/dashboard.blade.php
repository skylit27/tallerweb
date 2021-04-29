<x-app-layout>
    <livewire:task-list>
    <div class="text-center">
        <h1 class="text-4xl text-gray-700 mb-2 mt-4 uppercase">Portfolio</h1>
        <img class="w-32 h-32 rounded-full mx-auto" src={{ asset('images/profile.png') }}>
        <h2 class="text-2xl text-gray-600 ">César Alonso Sánchez Ríos</h2>
        <br>
    </div>
    <div class="text-center">
        <h1 class="text-3xl text-gray-800 mb-2 uppercase">Estudios</h1>
        <ul class="text-lg text-gray-600">
            <li><strong>Primaria:</strong> Miguel Hidalgo y Costilla</li>
            <li><strong>Secundaria:</strong> Belisario Dominguez</li>
            <li><strong>Bachillerato:</strong> CBTIS 111</li>
            <li><strong>Licenciatura:</strong> Instituto Tecnológico de Cancún</li>
        </ul>
        <h2 class="text-2xl text-gray-600 ">Información Personal</h2>
        <ul class="text-lg text-gray-600">
            <li><strong>Edad:</strong>22 Años</li>
            <li><strong>Fecha de Nacimiento:</strong>10 de septiembre de 1998</li>
            <li><strong>Lugar de nacimiento:</strong>Cancún, Quintana Roo</li>
        </ul>
        <h2 class="text-2xl text-gray-600 ">Habilidades:</h2>
        <ul class="text-lg text-gray-600">
            <li><strong>Edad:</strong>22 Años</li>
            <li>Desarrollo Web</li>
            <li>Desarrollo de Aplicaciones</li>
            <li>Seguridad Informática</li>
        </ul>
    </div>
</x-app-layout>