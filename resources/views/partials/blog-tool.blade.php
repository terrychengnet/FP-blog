<div class="row tool-wrap">
  <div class="col-12 col-xl-6">
    <div class="tool-cat-wrap">
      @php
        $categories = get_categories();
        foreach($categories as $category) {
           echo '<div class="cat-name d-inline-block"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        }
      @endphp
    </div>
  </div>
  <div class="col-12 col-xl-6">
    <div class="search-wrap d-flex justify-content-xl-end">
     {!! get_search_form(false) !!}
    </div>
  </div>
</div>