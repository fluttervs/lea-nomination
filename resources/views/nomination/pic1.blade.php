@extends('layouts.app')

@php
    $currentStep = 2;
@endphp

@section('content')
<div class="form-card">
    <h2 class="form-title">Person In Charge 1 (Primary Contact)</h2>
    <p class="form-subtitle">Primary contact person for this nomination</p>
    
    <form id="step2Form" class="nomination-form">
        <!-- Salutation -->
        <div class="form-group">
            <label for="pic1Salutation" class="form-label">
                Salutation <span class="required">*</span>
            </label>
            <select id="pic1Salutation" name="pic1Salutation" class="form-select" required>
                <option value="">Select an option</option>
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                <option value="Mrs">Mrs</option>
                <option value="Dr">Dr</option>
                <option value="Prof">Prof</option>
                <option value="Dato'">Dato'</option>
                <option value="Datin">Datin</option>
                <option value="Tan Sri">Tan Sri</option>
                <option value="Puan Sri">Puan Sri</option>
            </select>
            <span class="error-message" id="pic1SalutationError"></span>
        </div>

        <!-- Full Name -->
        <div class="form-group">
            <label for="pic1FullName" class="form-label">
                Full Name <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="pic1FullName" 
                name="pic1FullName" 
                class="form-input" 
                placeholder="Enter full name as per MyKad"
                required
            >
            <span class="error-message" id="pic1FullNameError"></span>
        </div>

        <!-- MyKad No. -->
        <div class="form-group">
            <label for="pic1MyKad" class="form-label">
                MyKad No. <span class="required">*</span>
                <span class="hint-text">(Format: XXXXXX-XX-XXXX)</span>
            </label>
            <input 
                type="text" 
                id="pic1MyKad" 
                name="pic1MyKad" 
                class="form-input" 
                placeholder="XXXXXX-XX-XXXX"
                maxlength="14"
                required
            >
            <span class="error-message" id="pic1MyKadError"></span>
        </div>

        <!-- Designation/Position -->
        <div class="form-group">
            <label for="pic1Designation" class="form-label">
                Designation/Position <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="pic1Designation" 
                name="pic1Designation" 
                class="form-input" 
                placeholder="Enter job title or position"
                required
            >
            <span class="error-message" id="pic1DesignationError"></span>
        </div>

        <!-- Department -->
        <div class="form-group">
            <label for="pic1Department" class="form-label">
                Department <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="pic1Department" 
                name="pic1Department" 
                class="form-input" 
                placeholder="Enter department name"
                required
            >
            <span class="error-message" id="pic1DepartmentError"></span>
        </div>

        <!-- Official Email -->
        <div class="form-group">
            <label for="pic1Email" class="form-label">
                Official Email <span class="required">*</span>
                <span class="hint-text">(.gov.my domain preferred)</span>
            </label>
            <input 
                type="email" 
                id="pic1Email" 
                name="pic1Email" 
                class="form-input" 
                placeholder="name@agency.gov.my"
                required
            >
            <span class="error-message" id="pic1EmailError"></span>
        </div>

        <!-- Office Phone No. -->
        <div class="form-group">
            <label for="pic1OfficePhone" class="form-label">
                Office Phone No. <span class="required">*</span>
            </label>
            <input 
                type="tel" 
                id="pic1OfficePhone" 
                name="pic1OfficePhone" 
                class="form-input" 
                placeholder="+60XXXXXXXXXX or 0XXXXXXXXXX"
                required
            >
            <span class="error-message" id="pic1OfficePhoneError"></span>
        </div>

        <!-- Mobile Phone No. -->
        <div class="form-group">
            <label for="pic1MobilePhone" class="form-label">
                Mobile Phone No.
            </label>
            <input 
                type="tel" 
                id="pic1MobilePhone" 
                name="pic1MobilePhone" 
                class="form-input" 
                placeholder="+60XXXXXXXXXX or 0XXXXXXXXXX"
            >
            <span class="error-message" id="pic1MobilePhoneError"></span>
        </div>

        <!-- Navigation Buttons -->
        <div class="form-actions">
            <button type="button" class="btn btn-secondary" onclick="previousStep(2)">Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Load saved data on page load
    document.addEventListener('DOMContentLoaded', function() {
        loadFormData(2);
        
        // Auto-format MyKad input
        document.getElementById('pic1MyKad').addEventListener('input', function(e) {
            let value = e.target.value.replace(/[^\d]/g, '');
            if (value.length > 6) {
                value = value.slice(0, 6) + '-' + value.slice(6);
            }
            if (value.length > 9) {
                value = value.slice(0, 9) + '-' + value.slice(9, 13);
            }
            e.target.value = value;
        });
    });
</script>
@endsection
