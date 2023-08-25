@php
    $user = 'Mehedi Alam';
    $fruits = ['Apple', 'Banana', 'Grapes', 'Guava'];
@endphp


<script>
    var data = {{ Js::from($user) }};
    var data1 = @json($fruits);
    data1.forEach(function(entry) {
    console.log(entry);
    });
    // console.log(data);
</script>
