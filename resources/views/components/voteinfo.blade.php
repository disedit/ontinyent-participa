<header class="vote-info {{ !app('request')->input('header') ? 'vote-info--alt-header' : '' }} {{ (!Request::segment(1)) ? 'vote-info--full' : 'vote-info--compact' }}">
    @if (!$inPerson)
        <div class="container">
            <div class="row">
                <div class="col-md-8 vote-info__text">
                    <h2>@lang('participa.heading')</h2>
                    <p class="vote-info__intro d-none">Comencem una edició de l'Ontinyent Participa adaptada a la pandèmia, amb més formació per a la ciutadania i més temps per a votar. S'estableix que un mínim del 50% de les propostes guanyadores estiguen destinades a causes o accions de caràcter social, mediambiental o igualitari, d'acord amb els objectius de l'Agenda 2030.</p>

                    @if (isset($edition))
                        <p class="vote-info__action">
                            @if ($edition->isOpen())
                                <a data-scroll href="#content" class="big-button"><i aria-hidden="true" class="fa fa-bullhorn"></i> @lang('participa.vote')</a>
                            @elseif ($edition->inProposalPhase())
                                <a href="{{ secure_url('propose') }}" class="big-button"><i aria-hidden="true" class="fa fa-comment"></i> @lang('participa.propose_cta')</a>
                            @elseif ($edition->isPending())
                                <a data-scroll href="#content" class="big-button"><i aria-hidden="true" class="fa fa-info-circle"></i> @lang('participa.more_info')</a>
                            @elseif ($edition->resultsPublished())
                                <a data-scroll href="#content" class="big-button"><i aria-hidden="true" class="fa fa-chart-bar"></i> @lang('participa.results')</a>
                            @endif
                        </p>
                    @endif
                </div>

                <div class="col-lg-4 d-none">
                    @include('components/calendar')
                </div>
            </div>
        </div>
    @endif
</header>
