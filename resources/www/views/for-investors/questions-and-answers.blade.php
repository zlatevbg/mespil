@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Questions and answers for investors | MESPIL property investing FAQ'))
@section('description', __('Do you have questions about your property investment? ✪ MESPIL make it easy for property investors to buy quality real estate in the Algarve, Faro and Lisbon.'))

@section('content')
    <div class="container space-single">
        <div class="max-width-lg">
            <h1 class="title-border mb-5">{{ __('MESPIL Property Investors FAQ') }}</h1>
            <p>{{ __('Do you have questions about your property investment?') }}</p>
            <p>{!! __('MESPIL make it easy for property investors to invest in quality real estate in the Algarve, :faro, :vilamoura and the capital city of :lisbon.', ['faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
            <section class="my-5 faq">
                <nav>
                    @foreach ($questionsArray as $questions)
                        <h2 id="faq-{{ $loop->iteration }}" class="h5 text-primary {{ $loop->index ? 'mt-5' : '' }}">{{ $questions['category'] }}</h2>
                        <ol {!! $loop->index ? 'start="' . ++$id . '"' : '' !!} class="h5 font-weight-normal">
                        @foreach ($questions['questions'] as $id => $question)
                            <li class="my-2"><a class="internal-link p-2" href="#a-{{ $id }}">{{ $question['question'] }}</a></li>
                        @endforeach
                        </ol>
                    @endforeach
                </nav>

                @foreach ($questionsArray as $questions)
                    @foreach ($questions['questions'] as $id => $question)
                        <article id="a-{{ $id }}" class="my-5">
                            <h3 class="h4">{{ str_pad($id, 2, 0, STR_PAD_LEFT) }}. {{ $question['question'] }}<a class="ml-3 fa-right" href="#faq-{{ $loop->parent->iteration }}"><small>{{ __('back') }}@fas('level-up-alt')</small></a></h3>
                            @foreach ($question['answer'] as $answer)
                                @foreach ($answer as $key => $values)
                                    @if ($key == 'p')
                                        <p>{!! implode('</p><p>', $values) !!}</p>
                                    @elseif ($key == 'em')
                                        <em>{!! implode('</em><em>', $values) !!}</em>
                                    @elseif ($key == 'h4')
                                        <h4 class="h5">{!! implode('</h4><h4>', $values) !!}</h4>
                                    @elseif ($key == 'ul')
                                        <ul><li>{!! implode('</li><li>', $values) !!}</li></ul>
                                    @endif
                                @endforeach
                            @endforeach
                        </article>
                    @endforeach
                @endforeach
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "FAQPage",
            "mainEntity": [
@foreach ($questionsArray as $questions)
@foreach ($questions['questions'] as $id => $question)
                {
                    "@type": "Question",
                    "name": "{{ addslashes($question['question']) }}",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "@foreach ($question['answer'] as $answer)
@foreach ($answer as $key => $values)
@if ($key == 'p')<p>{!! implode('</p><p>', array_map('addslashes', $values)) !!}</p>@elseif ($key == 'em')<em>{!! implode('</em><em>', array_map('addslashes', $values)) !!}</em>@elseif ($key == 'h4')<h4>{!! implode('</h4><h4>', array_map('addslashes', $values)) !!}</h4>@elseif ($key == 'ul')<ul><li>{!! implode('</li><li>', array_map('addslashes', $values)) !!}</li></ul>@endif
@endforeach
@endforeach"
                    }
                }{{ $loop->parent->last && $loop->last ? '' : ',' }}
@endforeach
@endforeach
            ]
        }
    </script>
@endpush
