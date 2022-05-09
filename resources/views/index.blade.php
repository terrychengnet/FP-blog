@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @include('partials.blog-tool')

  <div class="row article-gutter">
    @while (have_posts()) @php the_post() @endphp
      <div class="col-12 col-md-6">
        @include('partials.content-'.get_post_type())
      </div>
    @endwhile
  </div>
  @include('partials.blog-pagination')
  {{-- {!! get_the_posts_navigation() !!} --}}

@endsection
