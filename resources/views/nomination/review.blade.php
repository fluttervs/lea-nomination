@extends('layouts.app')

@php
    $currentStep = 5;
@endphp

@section('content')
<div class="form-card">
    <h2 class="form-title">Review & Submit</h2>
    <p class="form-subtitle">Please review all information before submitting</p>
    
    <form id="step5Form" class="nomination-form">
        <!-- Agency Information Summary -->
        <div class="review-section">
            <div class="review-header">
                <h3 class="review-title">Agency Information</h3>
                <button type="button" class="btn-edit" onclick="editStep(1)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M11.334 2.00004C11.5091 1.82494 11.7169 1.68605 11.9457 1.59129C12.1745 1.49653 12.4197 1.44775 12.6673 1.44775C12.9149 1.44775 13.1601 1.49653 13.3889 1.59129C13.6177 1.68605 13.8255 1.82494 14.0007 2.00004C14.1758 2.17513 14.3147 2.383 14.4094 2.61178C14.5042 2.84055 14.553 3.08575 14.553 3.33337C14.553 3.58099 14.5042 3.82619 14.4094 4.05497C14.3147 4.28374 14.1758 4.49161 14.0007 4.66671L5.00065 13.6667L1.33398 14.6667L2.33398 11L11.334 2.00004Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Edit
                </button>
            </div>
            <div class="review-grid">
                <div class="review-item">
                    <span class="review-label">Organization Name</span>
                    <span class="review-value" id="review-organizationName">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Agency Type</span>
                    <span class="review-value" id="review-agencyType">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Department/Division</span>
                    <span class="review-value" id="review-department">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Phone Number</span>
                    <span class="review-value" id="review-phoneNumber">-</span>
                </div>
                <div class="review-item full-width">
                    <span class="review-label">Official Address</span>
                    <span class="review-value" id="review-officialAddress">-</span>
                </div>
            </div>
        </div>

        <!-- Person In Charge 1 Summary -->
        <div class="review-section">
            <div class="review-header">
                <h3 class="review-title">Person In Charge 1 (Primary)</h3>
                <button type="button" class="btn-edit" onclick="editStep(2)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M11.334 2.00004C11.5091 1.82494 11.7169 1.68605 11.9457 1.59129C12.1745 1.49653 12.4197 1.44775 12.6673 1.44775C12.9149 1.44775 13.1601 1.49653 13.3889 1.59129C13.6177 1.68605 13.8255 1.82494 14.0007 2.00004C14.1758 2.17513 14.3147 2.383 14.4094 2.61178C14.5042 2.84055 14.553 3.08575 14.553 3.33337C14.553 3.58099 14.5042 3.82619 14.4094 4.05497C14.3147 4.28374 14.1758 4.49161 14.0007 4.66671L5.00065 13.6667L1.33398 14.6667L2.33398 11L11.334 2.00004Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Edit
                </button>
            </div>
            <div class="review-grid">
                <div class="review-item">
                    <span class="review-label">Full Name</span>
                    <span class="review-value" id="review-pic1FullName">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">MyKad No.</span>
                    <span class="review-value" id="review-pic1MyKad">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Designation</span>
                    <span class="review-value" id="review-pic1Designation">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Department</span>
                    <span class="review-value" id="review-pic1Department">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Official Email</span>
                    <span class="review-value" id="review-pic1Email">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Office Phone</span>
                    <span class="review-value" id="review-pic1OfficePhone">-</span>
                </div>
            </div>
        </div>

        <!-- Authorization Details Summary -->
        <div class="review-section">
            <div class="review-header">
                <h3 class="review-title">Authorization Details</h3>
                <button type="button" class="btn-edit" onclick="editStep(4)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M11.334 2.00004C11.5091 1.82494 11.7169 1.68605 11.9457 1.59129C12.1745 1.49653 12.4197 1.44775 12.6673 1.44775C12.9149 1.44775 13.1601 1.49653 13.3889 1.59129C13.6177 1.68605 13.8255 1.82494 14.0007 2.00004C14.1758 2.17513 14.3147 2.383 14.4094 2.61178C14.5042 2.84055 14.553 3.08575 14.553 3.33337C14.553 3.58099 14.5042 3.82619 14.4094 4.05497C14.3147 4.28374 14.1758 4.49161 14.0007 4.66671L5.00065 13.6667L1.33398 14.6667L2.33398 11L11.334 2.00004Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Edit
                </button>
            </div>
            <div class="review-grid">
                <div class="review-item">
                    <span class="review-label">Authorized Person</span>
                    <span class="review-value" id="review-authorizedPersonName">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Position</span>
                    <span class="review-value" id="review-authorizedPersonPosition">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Date of Submission</span>
                    <span class="review-value" id="review-submissionDate">-</span>
                </div>
                <div class="review-item">
                    <span class="review-label">Digital Signature</span>
                    <span class="review-value" id="review-digitalSignature">Not uploaded</span>
                </div>
            </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="terms-section">
            <label class="checkbox-container">
                <input type="checkbox" id="termsConditions" name="termsConditions" required>
                <span class="checkbox-label">
                    I accept the Terms and Conditions
                    <span class="required">*</span>
                </span>
            </label>
            <span class="error-message" id="termsConditionsError"></span>
        </div>

        <div class="terms-section">
            <label class="checkbox-container">
                <input type="checkbox" id="privacyPolicy" name="privacyPolicy" required>
                <span class="checkbox-label">
                    I accept the Privacy Policy
                    <span class="required">*</span>
                </span>
            </label>
            <span class="error-message" id="privacyPolicyError"></span>
        </div>

        <!-- Navigation Buttons -->
        <div class="form-actions">
            <button type="button" class="btn btn-secondary" onclick="previousStep(5)">Back</button>
            <button type="button" class="btn btn-primary" onclick="submitForm()">Submit Nomination</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        loadReviewData();
    });

    function loadReviewData() {
        const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
        
        // Agency Information
        if (formData.step1) {
            document.getElementById('review-organizationName').textContent = formData.step1.organizationName || '-';
            document.getElementById('review-agencyType').textContent = formData.step1.agencyType || '-';
            document.getElementById('review-department').textContent = formData.step1.department || '-';
            document.getElementById('review-phoneNumber').textContent = formData.step1.phoneNumber || '-';
            document.getElementById('review-officialAddress').textContent = formData.step1.officialAddress || '-';
        }
        
        // Person In Charge 1
        if (formData.step2) {
            const pic1Name = (formData.step2.pic1Salutation || '') + ' ' + (formData.step2.pic1FullName || '');
            document.getElementById('review-pic1FullName').textContent = pic1Name.trim() || '-';
            document.getElementById('review-pic1MyKad').textContent = formData.step2.pic1MyKad || '-';
            document.getElementById('review-pic1Designation').textContent = formData.step2.pic1Designation || '-';
            document.getElementById('review-pic1Department').textContent = formData.step2.pic1Department || '-';
            document.getElementById('review-pic1Email').textContent = formData.step2.pic1Email || '-';
            document.getElementById('review-pic1OfficePhone').textContent = formData.step2.pic1OfficePhone || '-';
        }
        
        // Authorization Details
        if (formData.step4) {
            document.getElementById('review-authorizedPersonName').textContent = formData.step4.authorizedPersonName || '-';
            document.getElementById('review-authorizedPersonPosition').textContent = formData.step4.authorizedPersonPosition || '-';
            document.getElementById('review-submissionDate').textContent = formData.step4.submissionDate || '-';
            document.getElementById('review-digitalSignature').textContent = formData.step4.digitalSignature || 'Not uploaded';
        }
    }

    function editStep(stepNumber) {
        window.location.href = `step${stepNumber}.html`;
    }

    function submitForm() {
        const termsChecked = document.getElementById('termsConditions').checked;
        const privacyChecked = document.getElementById('privacyPolicy').checked;
        
        if (!termsChecked) {
            document.getElementById('termsConditionsError').textContent = 'You must accept the Terms and Conditions';
            return;
        }
        
        if (!privacyChecked) {
            document.getElementById('privacyPolicyError').textContent = 'You must accept the Privacy Policy';
            return;
        }
        
        // Clear error messages
        document.getElementById('termsConditionsError').textContent = '';
        document.getElementById('privacyPolicyError').textContent = '';
        
        // Generate reference number
        const refNumber = 'LEA-' + new Date().getFullYear() + '-' + Math.floor(Math.random() * 90000 + 10000);
        localStorage.setItem('referenceNumber', refNumber);
        
        // Redirect to success page
        window.location.href = 'success.html';
    }
</script>
@endsection
