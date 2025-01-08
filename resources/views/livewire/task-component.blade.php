

<div class="p-10 relative overflow-x-auto shadow-md sm:rounded-lg">
    <button class="my-6 bg-purple-500 text-white font-bold py-2 p-10 mb-6 px-4 rounded opacty-50 cursor-not-allowed hover:bg-purple-600">Nuevo</button>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700  dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Título
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)

            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$task->title}}
                </th>
                <td class="px-6 py-4">
                {{$task->description}}
                </td>
                <td class="px-6 py-4">
                    <button class="bg-yellow-500 text-white font-bold py-2 px-4 rounded opacty-50 cursor-not-allowed hover:bg-yellow-700">Editar</button>
                    <button class="bg-red-500 text-white font-bold py-2 px-4 rounded opacty-50 cursor-not-allowed hover:bg-red-700 ">Borrar</button>
                </td>
            </tr>
                @endforeach

        </tbody>
    </table>
  
    <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
        <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
          <div class="w-full">
            <div class="m-8 my-20 max-w-[400px] mx-auto">
              <div class="mb-8">
                <h1 class="mb-4 text-3xl font-extrabold">Crear nueva tarea</h1>
                <form action="">
                    <div class="mb-4">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                        <input type="text" id="title" name="title" class="w-full bg-gray-50 border border-gray-300" placeholder="Escribe el título de la tarea">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descipción</label>
                        <input type="text" id="description" name="title" class="w-full bg-gray-50 border border-gray-300" placeholder="Escribe la descripción de la tarea">
                    </div>
                </form>
              </div>
              <div class="flex flex-row">
                <button class="m-2 p-3 bg-black rounded-full text-white w-full font-semibold">Crear tarea</button>
                <button class="m-2 p-3 bg-white border rounded-full w-full font-semibold">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
