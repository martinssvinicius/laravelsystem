<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-4">Fale conosco</h1>
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nome" placeholder="Seu nome" class="w-full border-gray-300 rounded p-2">
            <input type="email" name="email" placeholder="Seu email" class="w-full border-gray-300 rounded p-2">
            <textarea name="mensagem" placeholder="Sua mensagem" class="w-full border-gray-300 rounded p-2"></textarea>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Enviar</button>
        </form>
    </div>
</x-app-layout>