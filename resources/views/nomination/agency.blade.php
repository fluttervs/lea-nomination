@extends('layouts.app')

@php
    $currentStep = 1;
@endphp

@section('content')
<div class="form-card">
    <h2 class="form-title">Agency Information</h2>
    
    <form id="step1Form" class="nomination-form">
        <!-- Organization Name -->
        <div class="form-group">
            <label for="organizationName" class="form-label">
                Organization Name <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="organizationName" 
                name="organizationName" 
                class="form-input" 
                placeholder="Enter organization name"
                required
            >
            <span class="error-message" id="organizationNameError"></span>
        </div>

        <!-- Agency Type -->
        <div class="form-group">
            <label for="agencyType" class="form-label">
                Agency Type <span class="required">*</span>
            </label>
            <select id="agencyType" name="agencyType" class="form-select" required>
                <option value="">Select an option</option>
                <option value="Police">Police</option>
                <option value="MACC">MACC (Malaysian Anti-Corruption Commission)</option>
                <option value="Immigration">Immigration Department</option>
                <option value="Customs">Royal Malaysian Customs Department</option>
                <option value="JPJ">JPJ (Road Transport Department)</option>
                <option value="Other">Other</option>
            </select>
            <span class="error-message" id="agencyTypeError"></span>
        </div>

        <!-- Department/Division -->
        <div class="form-group">
            <label for="department" class="form-label">
                Department/Division <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="department" 
                name="department" 
                class="form-input" 
                placeholder="Enter department or division"
                required
            >
            <span class="error-message" id="departmentError"></span>
        </div>

        <!-- Official Address -->
        <div class="form-group">
            <label for="officialAddress" class="form-label">
                Official Address <span class="required">*</span>
            </label>
            <textarea 
                id="officialAddress" 
                name="officialAddress" 
                class="form-textarea" 
                placeholder="Enter complete official address"
                rows="4"
                required
            ></textarea>
            <span class="error-message" id="officialAddressError"></span>
        </div>

        <!-- Phone Number -->
        <div class="form-group">
            <label for="phoneNumber" class="form-label">
                Phone Number <span class="required">*</span>
                <span class="hint-text">(Malaysian format)</span>
            </label>
            <input 
                type="tel" 
                id="phoneNumber" 
                name="phoneNumber" 
                class="form-input" 
                placeholder="+60XXXXXXXXXX or 0XXXXXXXXXX"
                required
            >
            <span class="error-message" id="phoneNumberError"></span>
        </div>

        <!-- Fax Number -->
        <div class="form-group">
            <label for="faxNumber" class="form-label">
                Fax Number
            </label>
            <input 
                type="tel" 
                id="faxNumber" 
                name="faxNumber" 
                class="form-input" 
                placeholder="+60XXXXXXXXXX or 0XXXXXXXXXX"
            >
            <span class="error-message" id="faxNumberError"></span>
        </div>

        <!-- Navigation Buttons -->
        <div class="form-actions">
            <button type="button" class="btn btn-primary" onclick="nextStep(1)">Next</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Load saved data on page load
    document.addEventListener('DOMContentLoaded', function() {
        loadFormData(1);
    });
</script>
@endsection
