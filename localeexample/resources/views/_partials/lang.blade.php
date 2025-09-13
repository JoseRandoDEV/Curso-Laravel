@foreach (Config::get('languages') as $lang => $language)
    @if ($lang != App::getLocale())
        <a href="{{ route('lang', $lang) }}">{{ $language }}</a>
    @endif
@endforeach
