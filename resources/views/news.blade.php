@extends('layouts.masterlayout')

@section('content')
<h1>This is News page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam qui expedita ab, ullam corrupti quo nam amet cumque illum enim eligendi sed blanditiis libero! Dicta modi vel dolorum iusto similique, cupiditate assumenda. Eum dignissimos error nisi at saepe officiis deleniti repudiandae dicta tenetur, optio, odit laudantium doloremque quia, aliquam rem facilis eaque nam in fugit odio consectetur nobis eveniet maiores reprehenderit? Suscipit veritatis illo, totam quo harum vitae distinctio unde, autem eius rerum labore architecto minus atque quasi quidem saepe minima iste sunt et. Aliquid ullam ipsum consequuntur! Excepturi quos accusamus nemo veniam nihil doloribus accusantium necessitatibus dolores, repudiandae eius.</p><br><br>
@verbatim
<div id="app">{{ message }}</div>
@endverbatim
<br><br><br><br>
@endsection

@section('title')
News
@endsection


@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush
