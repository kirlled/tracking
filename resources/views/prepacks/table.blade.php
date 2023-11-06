<a href="?sort=tracking&order=desc">Sort by Tracking desc</a><br>
<a href="?sort=tracking&order=asc">Sort by Tracking asc</a><br>
<a href="?sort=creationdate&order=desc">Sort by creation desc</a><br>
<a href="?sort=creationdate&order=asc">Sort by creation asc</a><br>

<table class="table-fixed">
    <thead>
        <tr class="text-center font-bold">
            <td class="border px-6 py-4 w-2">Tracking</td>
            <td class="border px-6 py-4">Creation Date</td>
            <td class="border px-6 py-4">N Pack</td>
            <td class="border px-6 py-4">Pack Type</td>
            <td class="border px-6 py-4">Weight</td>
        </tr>
    </thead>
    @foreach ($prepacks as $prepack)
        <tr>
            <td class="border px-6 py-4" style="max-width: 300px; whitespace: normal">
                <div class="flex items-center">
                    @if ($prepack->image)
                        <a href="https://multitrack.trackingpremium.us/packimages/{{ $prepack->image }}"
                            target="__blank" class="mr-3">
                            <img width="50"
                                src="https://multitrack.trackingpremium.us/packimages/{{ $prepack->image }}">
                        </a>
                    @endif
                    <div style="word-wrap: anywhere;">{{ $prepack->tracking }}</div>
                </div>
            </td>
            <td class="border px-6 py-4">{{ $prepack->creationdate }}</td>
            <td class="border px-6 py-4">{{ $prepack->npack }}</td>
            <td class="border px-6 py-4">{{ $prepack->packtype }}</td>
            <td class="border px-6 py-4">{{ $prepack->weight }}</td>
        </tr>
    @endforeach
</table>

{{ $prepacks->links() }}
