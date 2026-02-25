@extends('layouts.app')

@php
    $currentStep = 4;
@endphp

@section('content')
<div class="form-card">
    <h2 class="form-title">Authorization Details</h2>
    
    <form id="step4Form" class="nomination-form">
        <!-- Authorized Person Name -->
        <div class="form-group">
            <label for="authorizedPersonName" class="form-label">
                Authorized Person Name <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="authorizedPersonName" 
                name="authorizedPersonName" 
                class="form-input" 
                placeholder="Enter name of authorizing officer"
                required
            >
            <span class="error-message" id="authorizedPersonNameError"></span>
        </div>

        <!-- Authorized Person Position -->
        <div class="form-group">
            <label for="authorizedPersonPosition" class="form-label">
                Authorized Person Position <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="authorizedPersonPosition" 
                name="authorizedPersonPosition" 
                class="form-input" 
                placeholder="Enter position/title"
                required
            >
            <span class="error-message" id="authorizedPersonPositionError"></span>
        </div>

        <!-- Date of Submission -->
        <div class="form-group">
            <label for="submissionDate" class="form-label">
                Date of Submission <span class="required">*</span>
            </label>
            <input 
                type="date" 
                id="submissionDate" 
                name="submissionDate" 
                class="form-input" 
                required
            >
            <span class="error-message" id="submissionDateError"></span>
        </div>

        <!-- Digital Signature Upload -->
        <div class="form-group">
            <label for="digitalSignature" class="form-label">
                Digital Signature Upload
            </label>
            <p class="file-hint">Physical stamp required on printed form</p>
            <div class="file-upload-area" id="signatureUploadArea">
                <div class="file-upload-content">
                    <svg class="upload-icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path d="M24 32V16M24 16L18 22M24 16L30 22" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M38 28V38H10V28" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="upload-text">Click to upload or drag and drop</p>
                    <p class="upload-specs">PNG, JPG, JPEG (max. 5 MB)</p>
                </div>
                <input 
                    type="file" 
                    id="digitalSignature" 
                    name="digitalSignature" 
                    class="file-input" 
                    accept=".png,.jpg,.jpeg"
                    onchange="handleFileUpload(this, 'signatureUploadArea', 'signatureFileName')"
                >
            </div>
            <div id="signatureFileName" class="file-name"></div>
            <span class="error-message" id="digitalSignatureError"></span>
        </div>

        <!-- Organization Stamp Upload -->
        <div class="form-group">
            <label for="organizationStamp" class="form-label">
                Organization Stamp Upload
            </label>
            <div class="file-upload-area" id="stampUploadArea">
                <div class="file-upload-content">
                    <svg class="upload-icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path d="M24 32V16M24 16L18 22M24 16L30 22" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M38 28V38H10V28" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="upload-text">Click to upload or drag and drop</p>
                    <p class="upload-specs">PNG, JPG, JPEG (max. 5 MB)</p>
                </div>
                <input 
                    type="file" 
                    id="organizationStamp" 
                    name="organizationStamp" 
                    class="file-input" 
                    accept=".png,.jpg,.jpeg"
                    onchange="handleFileUpload(this, 'stampUploadArea', 'stampFileName')"
                >
            </div>
            <div id="stampFileName" class="file-name"></div>
            <span class="error-message" id="organizationStampError"></span>
        </div>

        <!-- Declaration Checkbox -->
        <div class="form-group">
            <div class="declaration-box">
                <label class="checkbox-container">
                    <input type="checkbox" id="declaration" name="declaration" required>
                    <span class="checkbox-label">
                        I confirm that the information provided is accurate and the nominated officers are authorized to access the platform
                        <span class="required">*</span>
                    </span>
                </label>
            </div>
            <span class="error-message" id="declarationError"></span>
        </div>

        <!-- Navigation Buttons -->
        <div class="form-actions">
            <button type="button" class="btn btn-secondary" onclick="previousStep(4)">Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep(4)">Next</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Set today's date as default
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('submissionDate').value = today;
        loadFormData(4);
    });

    // Handle file upload
    function handleFileUpload(input, areaId, fileNameId) {
        const file = input.files[0];
        const area = document.getElementById(areaId);
        const fileNameDiv = document.getElementById(fileNameId);
        
        if (file) {
            // Check file size (5MB = 5 * 1024 * 1024 bytes)
            if (file.size > 5 * 1024 * 1024) {
                alert('File size must be less than 5 MB');
                input.value = '';
                return;
            }
            
            // Check file type
            const validTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (!validTypes.includes(file.type)) {
                alert('Only PNG, JPG, and JPEG files are allowed');
                input.value = '';
                return;
            }
            
            area.classList.add('file-uploaded');
            fileNameDiv.innerHTML = `
                <div class="file-info">
                    <span class="file-icon">📄</span>
                    <span>${file.name}</span>
                    <button type="button" class="remove-file" onclick="removeFile('${input.id}', '${areaId}', '${fileNameId}')">✕</button>
                </div>
            `;
            
            // Store file info in localStorage
            const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
            if (!formData.step4) formData.step4 = {};
            formData.step4[input.id] = file.name;
            localStorage.setItem('nominationFormData', JSON.stringify(formData));
        }
    }

    // Remove uploaded file
    function removeFile(inputId, areaId, fileNameId) {
        document.getElementById(inputId).value = '';
        document.getElementById(areaId).classList.remove('file-uploaded');
        document.getElementById(fileNameId).innerHTML = '';
        
        // Remove from localStorage
        const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
        if (formData.step4 && formData.step4[inputId]) {
            delete formData.step4[inputId];
            localStorage.setItem('nominationFormData', JSON.stringify(formData));
        }
    }
</script>
@endsection
