<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container d-flex align-items-center">
    <a class="navbar-brand" href="#">{{ __('message.Registration Form') }}</a>
    <ul class="m-0 d-flex">
      @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
          <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ $properties['native'] }}
          </a>
        </li>
      @endforeach
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mx-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">{{ __('message.Home') }}</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="{{ __('message.Search') }}" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">{{ __('message.Search') }}</button>
      </form>
    </div>
  </div>
</nav>
