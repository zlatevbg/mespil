@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Non Habitual Residency | Becomе a tax resident in Portugal'))
@section('description', __('Portugal NHR scheme attracts HNW individuals and their families to Portugal and allows them to avail of very favourable tax advantages over a 10 year period.'))

@section('content')
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('Non Habitual Residency (NHR)') }}</h1>
        <p>{!! __('It was introduced in 2009 to attract individuals and their families to :link. It enables the individual :strong to avail of very favourable income tax advantages over a maximum 10 year period. The Non Habitual Residency has two income tax benefits, either you may be:', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal') . '</a>', 'strong' => '<strong>' . __('becoming a tax resident in Portugal') . '</strong>']) !!}</p>
    </div>

    <div class="container space-single">
        <div class="row row-cols-1 row-cols-md-2 mb-n5">
            <div class="col mb-5">
                <h2 class="mb-4">{{ __('Tax exempt') }}</h2>
                <p>{{ __('Any individual that receives a qualifying non-resident income (such as a pension, dividend, royalty and interest income) can apply for a tax free NHR status.') }}</p>
            </div>
            <div class="col mb-5">
                <h2 class="mb-4">{{ __('Flat tax rate of 20%') }}</h2>
                <p>{{ __('Professional individuals from high value-added activities, of which a list is enclosed to the applicable regulation, are eligible to apply for a flat income tax rate of 20%, when practicing this activity in Portugal.') }}</p>
            </div>
        </div>

        <div class="card card-home card-pgv card-font-sm flex-xl-row align-items-center space-single">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6 overflow-hidden bg-light d-flex align-self-stretch">
                    <img loading="eager" width="902" height="564" src="{{ Helper::autover('/svg/{subdomain}/portugal-non-habitual-residency-tax-regime-nhr.svg') }}" class="img-fluid" alt="{{ __('People discussing handling of tax concept. Tax advising.') }}">
                </div>
                <div class="col-xl-6">
                    <div class="card-body p-md-4">
                        <h3 class="title-border mb-5 text-uppercase">{{ __('Portugal Non-Habitual Residency Tax Regime Guide') }}</h3>
                        <p class="card-text">{{ __('Want to know more? Read the definitive guide to the Non-Habitual Residency tax regime – the fiscal exemption initiative created by the Portuguese administration to attract foreign investors, highly skilled professionals and retirees.') }}</p>
                        <p class="card-text">{{ __('Learn how to apply for the non-habitual residency tax regime in Portugal and how to avail of very favourable income tax benefits over a maximum 10 year period.') }}</p>
                        <a class="btn btn-lg btn-pgv d-inline-flex align-items-center" href="https://www.portugal-golden-visa.pt/portugal-non-habitual-residency-tax-regime-nhr">{{ __('Read The Ultimate NHR Guide Now!') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 mb-4">{{ __('Requirements') }}</h2>
        <ul>
            <li>{{ __('You have not been a Portuguese Tax Resident in the previous 5 years') }}</li>
            <li>{!! __('You will live in Portugal for a minimum of 183 days per tax year (counted from January :1st to December :31st)', ['1st' => __('1st'), '31st' => __('31st')]) !!}</li>
        </ul>
    </div>

    <div class="container container-secondary space-single">
        <p class="bg-secondary text-white my-5 py-5 lead text-uppercase text-center">{{ __('THE NON HABITUAL RESIDENCY (NHR) IS A PORTUGUESE TAX RESIDENCY STATUS') }}</p>
    </div>

    <div class="container space-single">

        <h2 class="mt-5 mb-4">{{ __('Can I apply for a non-habitual resident status?') }}</h2>
        <p>{{ __('Are you moving to portugal? Check your tax advantage here.') }}</p>

        <div class="nhr-guide my-5">
            <p class="lead text-primary">{{ __('Do you have Portuguese nationality?') }}</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="q1" id="q1-yes" value="yes">
                <label class="form-check-label" for="q1-yes">{{ __('Yes') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="q1" id="q1-no" value="no">
                <label class="form-check-label" for="q1-no">{{ __('No') }}</label>
            </div>

            <div class="nhr-q nhr-q2 my-3 d-none">
                <p class="lead text-primary">{{ __('Have you been a tax resident in Portugal in the previous 5 years?') }}</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2-yes" value="yes">
                    <label class="form-check-label" for="q2-yes">{{ __('Yes') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2-no" value="no">
                    <label class="form-check-label" for="q2-no">{{ __('No') }}</label>
                </div>
            </div>

            <div class="nhr-q nhr-q3 my-3 d-none">
                <p class="lead text-primary">{{ __('Have you lived in Portugal for at least 183 days per tax year?') }}</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3-yes" value="yes">
                    <label class="form-check-label" for="q3-yes">{{ __('Yes') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3-no" value="no">
                    <label class="form-check-label" for="q3-no">{{ __('No') }}</label>
                </div>
            </div>

            <div class="nhr-q nhr-q4 my-3 d-none">
                <p class="lead text-primary">{{ __('Do you have an income through pension, dividend, royalties and/or interests?') }}</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4-yes" value="yes">
                    <label class="form-check-label" for="q4-yes">{{ __('Yes') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4-no" value="no">
                    <label class="form-check-label" for="q4-no">{{ __('No') }}</label>
                </div>
            </div>

            <div class="nhr-q nhr-q5 my-3 d-none">
                <p class="lead text-primary">{{ __('Are you a professional individual to perform a high value-added activity whilst in Portugal?') }}</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5-yes" value="yes">
                    <label class="form-check-label" for="q5-yes">{{ __('Yes') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5-no" value="no">
                    <label class="form-check-label" for="q5-no">{{ __('No') }}</label>
                </div>
            </div>

            <p class="d-none nhr-status-eligible p-5 my-5 bg-success text-white lead">@fas('check', 'mr-3')<span></span></p>
            <p class="d-none nhr-status-ineligible p-5 my-5 bg-danger text-white lead">@fas('times', 'mr-3') {{ __('Unfortunely, you are not NHR eligible for the Status') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const eligible = document.querySelector('.nhr-status-eligible');
        const ineligible = document.querySelector('.nhr-status-ineligible');
        let question;
        let next;

        document.querySelector('.nhr-guide').addEventListener('change', function (event) {
            question = event.target.name;
            const answer = event.target.value;

            updateGuide(answer);
        });

        function updateGuide(answer)
        {
            next = question.replace(/(\d+)/, function() {
                return arguments[1] * 1 + 1;
            });

            if (answer == 'yes') {
                if (question == 'q1' || question == 'q2') {
                    updateStatus('ineligible');
                } else if (question == 'q4' || question == 'q5') {
                    updateStatus('eligible');

                    if (question == 'q4') {
                        eligible.querySelector('span').innerText = '{{ __('You might be eligible for a tax-free NHR status!') }}';
                    }

                    if (question == 'q5') {
                        eligible.querySelector('span').innerText = '{{ __('You might be eligible for a 20% flat income tax rate NHR status!') }}';
                    }
                } else {
                    updateStatus();
                }
            } else {
                if (question == 'q3' || question == 'q5') {
                    updateStatus('ineligible');
                } else {
                    updateStatus();
                }
            }
        }

        function updateStatus(status)
        {
            if (status == 'eligible') {
                eligible.classList.remove('d-none');
                ineligible.classList.add('d-none');
                nextQuestion('disable');
            } else if (status == 'ineligible') {
                eligible.classList.add('d-none');
                ineligible.classList.remove('d-none');
                nextQuestion('disable');
            } else {
                eligible.classList.add('d-none');
                ineligible.classList.add('d-none');
                nextQuestion('enable');
            }
        }

        function nextQuestion(status)
        {
            if (status == 'enable') {
                const wrapper = document.querySelector('.nhr-' + next);
                if (wrapper) {
                    wrapper.classList.remove('d-none');
                }
            } else {
                let disable = false;
                const questions = document.querySelectorAll('.nhr-guide .nhr-q');

                for (i = 0; i < questions.length; i++) {
                    if (questions[i].classList.contains('nhr-' + next)) {
                        disable = true;
                    }

                    if (disable) {
                        questions[i].classList.add('d-none');

                        const radios = questions[i].querySelectorAll('input');
                        for (j = 0; j < radios.length; j++) {
                            radios[j].checked = false;
                        }
                    }
                }
            }
        }
    </script>
@endpush
