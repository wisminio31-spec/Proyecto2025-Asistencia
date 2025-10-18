<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8">
    
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold underline mb-6">
            Editar Estudiante
        </h1>

        <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
            @csrf
            @method('PUT')
            
            <input type="hidden" name="id" value="{{ $estudiante->id }}">

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">
                    Código
                </label>
                <input type="text" 
                       name="codigo" 
                       value="{{ $estudiante->codigo }}" 
                       autocomplete="off" 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombres">
                    Nombres
                </label>
                <input type="text" 
                       name="nombres" 
                       value="{{ $estudiante->nombres }}" 
                       autocomplete="off" 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="pri_ape">
                    Primer Apellido
                </label>
                <input type="text" 
                       name="pri_ape" 
                       value="{{ $estudiante->pri_ape }}" 
                       autocomplete="off" 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="seg_ape">
                    Segundo Apellido
                </label>
                <input type="text" 
                       name="seg_ape" 
                       value="{{ $estudiante->seg_ape }}" 
                       autocomplete="off" 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dni">
                    DNI
                </label>
                <input type="text" 
                       name="dni" 
                       value="{{ $estudiante->dni }}" 
                       autocomplete="off" 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Guardar Cambios
                </button>
                <a href="{{ route('estudiantes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>

</body>
</html>