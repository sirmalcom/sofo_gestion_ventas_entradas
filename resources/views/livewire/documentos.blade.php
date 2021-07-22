<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $documento)
            <tr>
                <td class="border px-4 py-2">{{$documento->id}}</td>
                <td class="border px-4 py-2">{{$documento->nombre}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
