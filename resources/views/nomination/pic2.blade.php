@extends('layouts.app')

@php
    $currentStep = 3;
@endphp

@section('content')
<div class="form-card">
    <h2 class="form-title">Person In Charge 2 (Secondary Contact)</h2>
    <p class="form-subtitle">Secondary contact person for this nomination</p>
    <p class="optional-badge">Optional but Recommended</p>
    
    <form id="step3Form" class="nomination-form">
        <!-- Same as PIC 1 Checkbox -->
        <div class="form-group">
            <label class="checkbox-container">
                <input type="checkbox" id="sameAsPic1" name="sameAsPic1" onchange="copyFromPic1()">
                <span class="checkbox-label">Same as Person In Charge 1</span>
            </label>
        </div>

        <!-- Salutation -->
        <div class="form-group">
            <label for="pic2Salutation" class="form-label">
                Salutation
            </label>
            <select id="pic2Salutation" name="pic2Salutation" class="form-select">
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
            <span class="error-message" id="pic2SalutationError"></span>
        </div>

        <!-- Full Name -->
        <div class="form-group">
            <label for="pic2FullName" class="form-label">
                Full Name
            </label>
            <input 
                type="text" 
                id="pic2FullName" 
                name="pic2FullName" 
                class="form-input" 
                placeholder="Enter full name as per MyKad"
            >
            <span class="error-message" id="pic2FullNameError"></span>
        </div>

        <!-- MyKad No. -->
        <div class="form-group">
            <label for="pic2MyKad" class="form-label">
                MyKad No.
                <span class="hint-text">(Format: XXXXXX-XX-XXXX)</span>
            </label>
            <input 
                type="text" 
                id="pic2MyKad" 
                name="pic2MyKad" 
                class="form-input" 
                placeholder="XXXXXX-XX-XXXX"
                maxlength="14"
            >
            <span class="error-message" id="pic2MyKadError"></span>
        </div>

        <!-- Designation/Position -->
        <div class="form-group">
            <label for="pic2Designation" class="form-label">
                Designation/Position
            </label>
            <input 
                type="text" 
                id="pic2Designation" 
                name="pic2Designation" 
                class="form-input" 
                placeholder="Enter job title or position"
            >
            <span class="error-message" id="pic2DesignationError"></span>
        </div>

        <!-- Department -->
        <div class="form-group">
            <label for="pic2Department" class="form-label">
                Department
            </label>
            <input 
                type="text" 
                id="pic2Department" 
                name="pic2Department" 
                class="form-input" 
                placeholder="Enter department name"
            >
            <span class="error-message" id="pic2DepartmentError"></span>
        </div>

        <!-- Official Email -->
        <div class="form-group">
            <label for="pic2Email" class="form-label">
                Official Email
                <span class="hint-text">(.gov.my domain preferred)</span>
            </label>
            <input 
                type="email" 
                id="pic2Email" 
                name="pic2Email" 
                class="form-input" 
                placeholder="name@agency.gov.my"
            >
            <span class="error-message" id="pic2EmailError"></span>
        </div>

        <!-- Office Phone No. -->
        <div class="form-group">
            <label for="pic2OfficePhone" class="form-label">
                Office Phone No.
            </label>
            <input 
                type="tel" 
                id="pic2OfficePhone" 
                name="pic2OfficePhone" 
                class="form-input" 
                placeholder="+60XXXXXXXXXX or 0XXXXXXXXXX"
            >
            <span class="error-message" id="pic2OfficePhoneError"></span>
        </div>

        <!-- Mobile Phone No. -->
        <div class="form-group">
            <label for="pic2MobilePhone" class="form-label">
                Mobile Phone No.
            </label>
            <input 
                type="tel" 
                id="pic2MobilePhone" 
                name="pic2MobilePhone" 
                class="form-input" 
                placeholder="+60XXXXXXXXXX or 0XXXXXXXXXX"
            >
            <span class="error-message" id="pic2MobilePhoneError"></span>
        </div>

        <!-- Navigation Buttons -->
        <div class="form-actions">
            <button type="button" class="btn btn-secondary" onclick="previousStep(3)">Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Load saved data on page load
    document.addEventListener('DOMContentLoaded', function() {
        loadFormData(3);
        
        // Auto-format MyKad input
        document.getElementById('pic2MyKad').addEventListener('input', function(e) {
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

    // Copy data from PIC 1 to PIC 2
    function copyFromPic1() {
        const checkbox = document.getElementById('sameAsPic1');
        const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
        
        if (checkbox.checked && formData.step2) {
            document.getElementById('pic2Salutation').value = formData.step2.pic1Salutation || '';
            document.getElementById('pic2FullName').value = formData.step2.pic1FullName || '';
            document.getElementById('pic2MyKad').value = formData.step2.pic1MyKad || '';
            document.getElementById('pic2Designation').value = formData.step2.pic1Designation || '';
            document.getElementById('pic2Department').value = formData.step2.pic1Department || '';
            document.getElementById('pic2Email').value = formData.step2.pic1Email || '';
            document.getElementById('pic2OfficePhone').value = formData.step2.pic1OfficePhone || '';
            document.getElementById('pic2MobilePhone').value = formData.step2.pic1MobilePhone || '';
        } else {
            // Clear all fields if unchecked
            document.getElementById('pic2Salutation').value = '';
            document.getElementById('pic2FullName').value = '';
            document.getElementById('pic2MyKad').value = '';
            document.getElementById('pic2Designation').value = '';
            document.getElementById('pic2Department').value = '';
            document.getElementById('pic2Email').value = '';
            document.getElementById('pic2OfficePhone').value = '';
            document.getElementById('pic2MobilePhone').value = '';
        }
    }
</script>
@endsection
