@extends('layouts.app')

@section('content')

  <!-- Section Breadcrumbs-->
  <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{ asset('html/images/bg-breadcrumbs-1-1920x726.jpg') }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">{{ $categoria->name }}</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('product.list', $categoria->slug) }}">Categoría</a></li>
          <li class="active">{{ $categoria->name }}</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Grid Shop-->
  <section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">

        <div class="col-xl-3">
          <div class="row row-50">
            <div class="col-md-6 col-xl-12">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Categorías
                  </h5>
                </div>
              </article>
              <div class="card-shop">
                <ul class="list-md form-wrap">
                  @foreach ($headerCategories as $category)
                    <li>
                      <label class="checkbox-inline checkbox-inline-lg">
                        <a class="" href="{{ route('product.list', $category->slug) }}">{{ $category->name }}</a>
                      </label>
                      <!--span class="checkbox-inline-count">2</span-->
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-9">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">{{ $categoria->name }}</h5>
              <!--div class="heading-component-aside">
                <ul class="list-inline list-inline-xs list-inline-middle">
                  <li>
                    <select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 124px">
                      <option value="newest first" selected="">newest first</option>
                      <option value="oldest first">oldest first</option>
                    </select>
                  </li>
                  <li>
                    <select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 135px">
                      <option value="product price" selected="">product price</option>
                      <option value="low to high">low to high</option>
                      <option value="high to low ">high to low</option>
                    </select>
                  </li>
                  <li>
                    <select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 150px">
                      <option value="show 6 per page" selected="">show 6 per page</option>
                      <option value="show 12 per page">show 12 per page</option>
                      <option value="show 24 per page">show 24 per page</option>
                    </select>
                  </li>
                  <li><a class="icon icon-xs-big icon-gray-500 fa-th active" href="grid-shop.html"></a></li>
                  <li><a class="icon icon-xs-big icon-gray-500 fa-list-ul" href="list-shop.html"></a></li>
                </ul>
              </div-->
            </div>
          </article>

          <div class="row row-30">
            @if (!empty($products))
              @foreach ($products as $product)
                <div class="col-md-6 col-lg-4">
                  <article class="product product-sm">
                    <header class="product-header">
                      <!--div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span></div-->
                      <div class="product-figure">
                        <img src="{{ Voyager::image($product->thumbnail('cropped')) }}" alt=""/>
                      </div>
                      <div class="product-buttons">
                        <!--div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                          <ul class="product-share">
                            <li class="product-share-item"><span>Share</span></li>
                            <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          </ul>
                        </div-->
                        <!--a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a-->
                        <a class="product-button fl-bigmug-line-zoom60" href="{{ Voyager::image($product->image) }}" data-lightgallery="item" style="font-size: 25px"></a>
                      </div>
                    </header>
                    <footer class="product-content">
                      <h6 class="product-title">
                        <a href="{{ route('product.show', $product->slug) }}"> {{ $product->name }} </a>
                      </h6>
                      <div class="product-price">
                        <!--span class="product-price-old">$400</span-->
                        <span class="heading-6 product-price-new"> s/{{ $product->price }} </span>
                      </div>
                      <!--ul class="product-rating">
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star_half"></span></li>
                      </ul-->
                    </footer>
                  </article>
                </div>
              @endforeach
            @endif
          </div>

          <nav class="pagination-wrap" aria-label="Page navigation">
            {{ $products->links() }}
          </nav>

        </div>

      </div>
    </div>
  </section>

@endsection
