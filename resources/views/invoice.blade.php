<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CV - {{ $profesionista->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="text-gray-800 p-8">
    <div class="grid grid-cols-1 bg-blue-500">
        <h1 class="text-3xl font-bold text-white text-center">{{ $profesionista->nombre }} {{ $profesionista->apellido_paterno }} {{ $profesionista->apellido_materno }}</h1>
    </div>
    <div class="grid grid-cols-1 bg-blue-500">
        <p class="text-lg italic text-white text-center">{{ $profesionista->carrera }}</p>
    </div>

    <div class="flex">
        <!-- Columna izquierda -->
        <div class="flex-auto">
            <div class="grid grid-cols-7 gap-4">
                <div class="col-start-3 col-span-4 mt-8">
                    <img class="object-none object-center w-28 h-28" src="{{ asset('storage') }}/{{ $profesionista->foto }}">
                </div>
            </div>
            
            <h2 class="font-bold text-lg mb-2 border-b text-blue-400">Datos de contacto</h2>
            <p>📧 {{ $profesionista->correo }}</p>
            <p>📞 {{ $profesionista->telefono }}</p>
            <p>🏠 {{ $profesionista->direccion }}</p>

            <h2 class="font-bold text-lg mb-2 border-b text-blue-400">Formación</h2>
            @foreach($profesionista->formaciones as $form)
                <p><strong>{{ $form->titulo }}</strong> - {{ $form->escuela }} ({{ $form->periodo }})</p>
            @endforeach

            <h2 class="font-bold text-lg mb-2 border-b text-blue-400">Competencias</h2>
            <div class="flex">
                <div class="flex-auto">
                    <ul class="list-disc list-inside">
                        @for ($i = 0; $i < 6; $i++)
                            <li>{{ $profesionista->competencias[$i]->herramienta }} {{ $profesionista->competencias[$i]->porcentaje }}%</li>
                        @endfor
                        @for ($i = 7; $i < 8; $i++)
                            <li>{{ $profesionista->competencias[$i]->herramienta }} {{ $profesionista->competencias[$i]->porcentaje }}%</li>
                        @endfor
                        @for ($i = 9; $i < 16; $i++)
                            <li>{{ $profesionista->competencias[$i]->herramienta }} {{ $profesionista->competencias[$i]->porcentaje }}%</li>
                        @endfor
                    </ul>
                </div>
                <div class="flex-auto">
                    <ul class="list-disc list-inside">
                        @for ($i = 16; $i < 29; $i++)
                            <li>{{ $profesionista->competencias[$i]->herramienta }} {{ $profesionista->competencias[$i]->porcentaje }}%</li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="flex">
                <div class="flex-auto">
                    <ul class="list-disc list-inside">
                        <li>
                            {{ $profesionista->competencias[6]->herramienta }} {{ $profesionista->competencias[6]->porcentaje }}%
                        </li>
                        <li>
                            {{ $profesionista->competencias[8]->herramienta }} {{ $profesionista->competencias[8]->porcentaje }}%
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Columna derecha -->
        <div class="flex-auto">
            <h2 class="font-bold text-lg mb-2 text-blue-400">Experiencia</h2>
            @foreach($profesionista->experiencias as $exp)
                <div class="mb-2">
                    <p class="font-semibold">{{ $exp->puesto }}</p>
                    <p class="text-sm text-gray-600">{{ $exp->empresa }} ({{ $exp->fecha_inicio }} - {{ $exp->fecha_termino }})</p>
                    <p>{{ $exp->descripcion_puesto }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
