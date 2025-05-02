@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1>Players</h1>
        <div class="row g-1 justify-content-center">
            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('classes') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">📝 Classes</h5>
                            <p class="card-text">Classes</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('clan') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">🏰 Clan</h5>
                            <p class="card-text">Clan</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('feats') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">🏆 Feats</h5>
                            <p class="card-text">Feats</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('backgrounds.index') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">🛡 Backgrounds</h5>
                            <p class="card-text">Backgrounds</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('jutsu') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">✨ Jutsus</h5>
                            <p class="card-text">The complete jutsus repertoire.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('items') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">🎒 Items</h5>
                            <p class="card-text">Equipment and seals</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <h1>Rules</h1>
        <div class="row g-1 justify-content-center">
            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('conditions.index') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">⚠️ Conditions</h5>
                            <p class="card-text">Conditions</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('clan') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">🏰 Clan</h5>
                            <p class="card-text">Clan</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('feats') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">🏆 Feats</h5>
                            <p class="card-text">Feats</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('backgrounds.index') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">🛡 Backgrounds</h5>
                            <p class="card-text">Backgrounds</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('jutsu') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">✨ Jutsus</h5>
                            <p class="card-text">The complete jutsus repertoire.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-3 col-md-2 col-lg-2">
                <a href="{{ route('items') }}" class="text-decoration-none">
                    <div class="card text-bg-dark border-secondary h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">🎒 Items</h5>
                            <p class="card-text">Equipment and seals</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
