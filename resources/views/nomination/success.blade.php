@extends('layouts.app')

@php
    $hideProgress = true;
@endphp

@section('content')
<div class="success-container">
    <div class="success-icon">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
            <circle cx="40" cy="40" r="38" stroke="#10B981" stroke-width="4"/>
            <path d="M25 40L35 50L55 30" stroke="#10B981" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    
    <h1 class="success-title">Nomination Submitted Successfully</h1>
    <p class="success-subtitle">Your LEA Officer Nomination has been received and is being processed</p>
    
    <div class="reference-box">
        <p class="reference-label">Reference Number</p>
        <h2 class="reference-number" id="referenceNumber">LEA-2026-70905</h2>
        <p class="reference-note">Please save this reference number for your records</p>
    </div>
    
    <div class="next-steps-box">
        <h3 class="next-steps-title">Next Steps:</h3>
        <ul class="next-steps-list">
            <li>Your nomination will be reviewed by MCMC within 3-5 business days</li>
            <li>You will receive an email confirmation at the provided official email address</li>
            <li>Nominated officers will receive access credentials upon approval</li>
            <li>For urgent matters, please contact MCMC directly with your reference number</li>
        </ul>
    </div>
    
    <div class="success-actions">
        <button type="button" class="btn btn-secondary" onclick="downloadPDF()">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M17.5 12.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.83301 8.33331L9.99967 12.5L14.1663 8.33331" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 12.5V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Download PDF
        </button>
        <button type="button" class="btn btn-primary" onclick="returnHome()">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M2.5 7.5L10 2.5L17.5 7.5V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Return to Home
        </button>
    </div>
    
    <div class="support-info">
        <p>Need help? Contact MCMC Support:</p>
        <p>
            <a href="mailto:support@mcmc.gov.my" class="support-link">support@mcmc.gov.my</a> | 
            <a href="tel:+60386888000" class="support-link">+603-8688-8000</a>
        </p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Load reference number from localStorage
        const refNumber = localStorage.getItem('referenceNumber') || 'LEA-2026-70905';
        document.getElementById('referenceNumber').textContent = refNumber;
    });

    function downloadPDF() {
        // In a real implementation, this would generate and download a PDF
        alert('PDF download functionality would be implemented here.\n\nThe PDF would contain:\n- Reference number\n- All submitted information\n- Submission timestamp\n- MCMC contact details');
    }

    function returnHome() {
        // Clear form data
        if (confirm('Return to home? This will clear your form data.')) {
            localStorage.removeItem('nominationFormData');
            localStorage.removeItem('referenceNumber');
            window.location.href = 'agency.html';
        }
    }
</script>
@endsection
