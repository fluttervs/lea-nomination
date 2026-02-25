<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSIRP LEA Nomination Form - MCMC</title>
    <link rel="stylesheet" href="{{ asset('css/nomination.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Theme Toggle -->
    <button class="theme-toggle" id="themeToggle" onclick="toggleTheme()">
        <span class="theme-toggle-icon">🌙</span>
        <span class="theme-toggle-text">Dark</span>
    </button>

    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="logo">
                <img src="{{ asset('images/mcmc-logo.png') }}" alt="MCMC Logo" class="logo-image">
            </div>
            <h1 class="main-title">POSTAL SECURITY INCIDENT REPORTING PLATFORM</h1>
            <p class="sub-title">NOMINATION FORM FOR LAW ENFORCEMENT AGENCY (LEA)</p>
            <p class="organization">Suruhanjaya Komunikasi dan Multimedia Malaysia (MCMC)</p>
        </header>

        <!-- Progress Stepper -->
        @if(!isset($hideProgress) || !$hideProgress)
        <div class="progress-stepper">
            <div class="step {{ $currentStep >= 1 ? 'active' : '' }} {{ $currentStep > 1 ? 'completed' : '' }}">
                <div class="step-circle">
                    @if($currentStep > 1)
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 5L7.50004 14.1667L3.33337 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @else
                        1
                    @endif
                </div>
                <div class="step-label">Agency Info</div>
            </div>
            <div class="step-line {{ $currentStep > 1 ? 'completed' : '' }}"></div>
            
            <div class="step {{ $currentStep >= 2 ? 'active' : '' }} {{ $currentStep > 2 ? 'completed' : '' }}">
                <div class="step-circle">
                    @if($currentStep > 2)
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 5L7.50004 14.1667L3.33337 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @else
                        2
                    @endif
                </div>
                <div class="step-label">PIC 1</div>
            </div>
            <div class="step-line {{ $currentStep > 2 ? 'completed' : '' }}"></div>
            
            <div class="step {{ $currentStep >= 3 ? 'active' : '' }} {{ $currentStep > 3 ? 'completed' : '' }}">
                <div class="step-circle">
                    @if($currentStep > 3)
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 5L7.50004 14.1667L3.33337 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @else
                        3
                    @endif
                </div>
                <div class="step-label">PIC 2</div>
            </div>
            <div class="step-line {{ $currentStep > 3 ? 'completed' : '' }}"></div>
            
            <div class="step {{ $currentStep >= 4 ? 'active' : '' }} {{ $currentStep > 4 ? 'completed' : '' }}">
                <div class="step-circle">
                    @if($currentStep > 4)
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 5L7.50004 14.1667L3.33337 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @else
                        4
                    @endif
                </div>
                <div class="step-label">Authorization</div>
            </div>
            <div class="step-line {{ $currentStep > 4 ? 'completed' : '' }}"></div>
            
            <div class="step {{ $currentStep >= 5 ? 'active' : '' }} {{ $currentStep > 5 ? 'completed' : '' }}">
                <div class="step-circle">
                    @if($currentStep > 5)
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 5L7.50004 14.1667L3.33337 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @else
                        5
                    @endif
                </div>
                <div class="step-label">Review</div>
            </div>
        </div>
        <div class="step-counter">Step {{ $currentStep }} of 5</div>
        @endif

        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 Suruhanjaya Komunikasi dan Multimedia Malaysia. All rights reserved.</p>
        </footer>
    </div>

    <script src="{{ asset('js/nomination.js') }}"></script>
    @yield('scripts')
</body>
</html>
