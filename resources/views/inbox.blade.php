<x-layout>
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Inbox</h2>
        <ul>
            @foreach($notifications as $notification)
                <li class="mb-2 p-2 bg-gray-100 rounded">
                    {{ $notification->data['message'] }}
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
