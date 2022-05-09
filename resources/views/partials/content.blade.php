@php
$cats = get_the_category();
@endphp

<article @php post_class() @endphp>
  <div class="article-wrap">
    <a href="{{ get_permalink() }}">
    <div class="artcle-img" style="background-image:url('{!! get_the_post_thumbnail_url() !!}');">
      <div class="cat-wrap">
        @php
          foreach ($cats as $key => $cat) {
            echo '<span class="cat-name d-inline-block">' . $cat->name . '</span>';
          }
        @endphp
      </div>
    </div>
    <div class="article-info">
      <h2 class="article-title text-center">{!! get_the_title() !!}</h2>

      <time class="article-time d-block text-center" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>

      <div class="article-social d-flex justify-content-center">
        <a class="social-icon" href="#" target="_blank">
          <i class="fa-brands fa-facebook-square"></i>
        </a>
        <a class="social-icon" href="#" target="_blank">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div>
    </div>
    </a>
  </div>
</article>