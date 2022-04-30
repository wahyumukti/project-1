<div>
    <div wire:ignore id='map' style='width: 400px; height: 300px;'></div>

</div>

@push('scripts')
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoeXVtdWt0aSIsImEiOiJjbDJpaWw2bXMwMmM3M2txdm1qbHc0ZG9kIn0.4FymH9uPRP4aGIMB4ybOYQ';
    const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9 // starting zoom
    });
    </script>
@endpush
