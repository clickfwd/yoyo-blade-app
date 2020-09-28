<div class="border border-gray-100 p-4" yoyo:on="load">

    @spinning
        @php
        $entries = require(APP_PATH.'/test-data.php');
        shuffle($entries);
        $entries = array_splice($entries,0,3);
        @endphp

        @foreach ($entries as $entry)
            <h6>{{ $entry['title'] }}</h6>
        @endforeach
    @endspinning

</div>
