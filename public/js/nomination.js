// ===========================
// Language Translations
// ===========================
const translations = {
    en: {
        // Common
        'next': 'Next',
        'previous': 'Previous',
        'submit': 'Submit Nomination',
        'required': 'Required',
        'optional': 'Optional',
        
        // Header
        'mainTitle': 'Postal Security Incident Reporting Platform',
        'subTitle': 'Nomination Form For Law Enforcement Agency (LEA)',
        'organization': 'Report, track, and analyze postal security incidents securely with real-time collaboration and centralized governance oversight.',
        
        // Steps
        'stepAgency': 'Agency Info',
        'stepPIC1': 'PIC 1',
        'stepPIC2': 'PIC 2',
        'stepAuth': 'Authorization',
        'stepReview': 'Review',
        
        // Step 1
        'agencyInfoTitle': 'Agency Information',
        'agencyInfoSubtitle': 'Please provide your organization details',
        'orgName': 'Organization Name',
        'orgNamePlaceholder': 'e.g., Royal Malaysian Police',
        'agencyType': 'Agency Type',
        'selectAgency': 'Select agency type',
        'police': 'Police',
        'customs': 'Customs',
        'immigration': 'Immigration',
        'enforcement': 'Enforcement Agency',
        'other': 'Other',
        'department': 'Department/Division',
        'departmentPlaceholder': 'e.g., Cybercrime Investigation Department',
        'phoneNumber': 'Phone Number',
        'phonePlaceholder': '+60XXXXXXXXXX',
        'faxNumber': 'Fax Number',
        'faxPlaceholder': '+603XXXXXXXX or 03XXXXXXXX',
        'officialAddress': 'Official Address',
        'addressPlaceholder': 'Enter complete official address',
        
        // Step 2
        'pic1Title': 'Person In-Charge (PIC) 1 Details',
        'pic1Subtitle': 'Primary contact person for this nomination',
        'salutation': 'Salutation',
        'selectOption': 'Select an option',
        'firstName': 'First Name',
        'firstNamePlaceholder': 'As per MyKad/Official ID',
        'lastName': 'Last Name',
        'lastNamePlaceholder': 'As per MyKad/Official ID',
        'mykadNumber': 'MyKad Number',
        'mykadPlaceholder': 'XXXXXX-XX-XXXX',
        'designation': 'Designation/Position',
        'designationPlaceholder': 'e.g., Assistant Superintendent',
        'departmentLabel': 'Department',
        'departmentPlaceholder': 'e.g., Enforcement Division',
        'email': 'Official Email Address',
        'emailPlaceholder': 'name@agency.gov.my',
        'emailHint': 'Preferably .gov.my email',
        'altEmail': 'Optional Alternative Email',
        'altEmailPlaceholder': 'alternative@email.com',
        'mobileNumber': 'Mobile Number',
        'mobilePlaceholder': '+60XXXXXXXXXX',
        'altPhoneNumber': 'Optional Alternative Phone No.',
        'officeNumber': 'Office Phone Number',
        'officeNumberHint': 'Direct line if available',
        
        // Step 3
        'pic2Title': 'Person In-Charge (PIC) 2 Details',
        'pic2Subtitle': 'Secondary contact person for this nomination',
        'pic2Optional': 'PIC 2 information is optional but recommended',
        'sameAsPic1': 'Same as PIC 1',
        
        // Step 4
        'authTitle': 'Authorization & Declaration',
        'authSubtitle': 'Official authorization and nomination letter',
        'authPersonName': 'Authorized Person Name',
        'authPersonNamePlaceholder': 'Enter name of authorizing officer',
        'authPersonPosition': 'Authorized Person Position',
        'authPersonPositionPlaceholder': 'Enter position/title',
        'submissionDate': 'Date of Submission',
        'authLetterLabel': 'Authorization Letter',
        'authLetterDesc': 'Upload official authorization/nomination letter from your agency',
        'uploadButton': 'Choose File',
        'noFile': 'No file selected',
        'supportedFormats': 'Supported formats: PDF, JPG, PNG (Max 5MB)',
        'orgStampLabel': 'Organization Stamp',
        'declarationTitle': 'Declaration',
        'declarationText': 'I hereby declare that all information provided in this nomination form is true and accurate. I understand that MCMC reserves the right to verify all submitted information and may reject nominations that contain false or misleading information.',
        'agreeDeclaration': 'I agree to the declaration above',
        
        // Step 5
        'reviewTitle': 'Review Your Nomination',
        'reviewSubtitle': 'Please review all information before submission',
        'agencyInformation': 'Agency Information',
        'pic1Information': 'Person In-Charge (PIC) 1',
        'pic2Information': 'Person In-Charge (PIC) 2 (Optional)',
        'authorization': 'Authorization',
        'authLetter': 'Authorization Letter',
        'uploaded': 'Uploaded',
        'notProvided': 'Not provided',
        'declaration': 'Declaration',
        'agreed': 'Agreed to terms',
        'confirmAccuracy': 'I confirm that all the information provided above is accurate and complete',
        'printPreview': 'Print Preview',
        
        // Success Page
        'successTitle': 'Nomination Submitted Successfully!',
        'successSubtitle': 'Your nomination has been received and is being processed',
        'referenceNumber': 'Reference Number',
        'refNumberDesc': 'Please save this reference number for future correspondence',
        'nextStepsTitle': 'Next Steps:',
        'nextStep1': 'Your nomination will be reviewed by MCMC within 3-5 business days',
        'nextStep2': 'You will receive an email confirmation at the provided official email address',
        'nextStep3': 'Nominated officers will receive access credentials upon approval',
        'nextStep4': 'For urgent matters, please contact MCMC directly with your reference number',
        'downloadPDF': 'Download PDF',
        'returnHome': 'Return to Home',
        'needHelp': 'Need help? Contact MCMC Support:',
        'supportEmail': 'support@mcmc.gov.my',
        'supportPhone': '+603-8688-8000',
        
        // Demo Button
        'fillDemo': '⚡ Fill Demo Data',
        
        // Review Page
        'reviewAgencyInfo': 'Agency Information',
        'editButton': 'Edit',
        'reviewOrgName': 'Organization Name',
        'reviewAgencyType': 'Agency Type',
        'reviewDepartment': 'Department/Division',
        'reviewPhoneNumber': 'Phone Number',
        'reviewOfficialAddress': 'Official Address',
        'reviewPIC1Title': 'Person In Charge 1 (Primary)',
        'reviewFirstName': 'First Name',
        'reviewLastName': 'Last Name',
        'reviewMyKad': 'MyKad No.',
        'reviewDesignation': 'Designation',
        'reviewDepartmentLabel': 'Department',
        'reviewEmail': 'Official Email',
        'reviewAltEmail': 'Optional Alternative Email',
        'reviewOfficePhone': 'Office Phone',
        'reviewAltPhone': 'Optional Alternative Phone No.',
        'reviewAuthTitle': 'Authorization Details',
        'reviewAuthPerson': 'Authorized Person',
        'reviewPosition': 'Position',
        'reviewSubmissionDate': 'Date of Submission',
        'reviewDigitalSignature': 'Digital Signature',
        'notUploaded': 'Not uploaded',
        'acceptTerms': 'I accept the Terms and Conditions',
        'acceptPrivacy': 'I accept the Privacy Policy',
        
        // UI Elements
        'stepCounter3': 'Step 3 of 5',
        'stepCounter4': 'Step 4 of 5',
        'stepCounter5': 'Step 5 of 5',
        'mykadFormat': '(Format: XXXXXX-XX-XXXX)',
        'uploadTextStamp': 'Click to upload or drag and drop',
        'uploadSpecsStamp': 'PNG, JPG, JPEG (max. 5 MB)',
        'referenceNote': 'Please save this reference number for your records',
        
        // Footer
        'footerText': '© 2024 Suruhanjaya Komunikasi dan Multimedia Malaysia. All rights reserved.'
    },
    ms: {
        // Common
        'next': 'Seterusnya',
        'previous': 'Kembali',
        'submit': 'Hantar Pencalonan',
        'required': 'Wajib',
        'optional': 'Pilihan',
        
        // Header
        'mainTitle': 'PLATFORM PELAPORAN INSIDEN KESELAMATAN POS',
        'subTitle': 'BORANG PENCALONAN UNTUK AGENSI PENGUATKUASA UNDANG-UNDANG (LEA)',
        'organization': 'Suruhanjaya Komunikasi dan Multimedia Malaysia (SKMM)',
        
        // Steps
        'stepAgency': 'Info Agensi',
        'stepPIC1': 'PIC 1',
        'stepPIC2': 'PIC 2',
        'stepAuth': 'Kebenaran',
        'stepReview': 'Semakan',
        
        // Step 1
        'agencyInfoTitle': 'Maklumat Agensi',
        'agencyInfoSubtitle': 'Sila berikan butiran organisasi anda',
        'orgName': 'Nama Organisasi',
        'orgNamePlaceholder': 'cth: Polis Diraja Malaysia',
        'agencyType': 'Jenis Agensi',
        'selectAgency': 'Pilih jenis agensi',
        'police': 'Polis',
        'customs': 'Kastam',
        'immigration': 'Imigresen',
        'enforcement': 'Agensi Penguatkuasaan',
        'other': 'Lain-lain',
        'department': 'Jabatan/Bahagian',
        'departmentPlaceholder': 'cth: Jabatan Siasatan Jenayah Siber',
        'phoneNumber': 'Nombor Telefon',
        'phonePlaceholder': '+60XXXXXXXXXX',
        'faxNumber': 'Nombor Faks',
        'faxPlaceholder': '+603XXXXXXXX atau 03XXXXXXXX',
        'officialAddress': 'Alamat Rasmi',
        'addressPlaceholder': 'Masukkan alamat rasmi lengkap',
        
        // Step 2
        'pic1Title': 'Butiran Pegawai Bertanggungjawab (PIC) 1',
        'pic1Subtitle': 'Pegawai hubungan utama untuk pencalonan ini',
        'salutation': 'Gelaran',
        'selectOption': 'Pilih satu pilihan',
        'firstName': 'Nama Pertama',
        'firstNamePlaceholder': 'Seperti di MyKad/ID Rasmi',
        'lastName': 'Nama Akhir',
        'lastNamePlaceholder': 'Seperti di MyKad/ID Rasmi',
        'mykadNumber': 'Nombor MyKad',
        'mykadPlaceholder': 'XXXXXX-XX-XXXX',
        'designation': 'Jawatan/Pangkat',
        'designationPlaceholder': 'cth: Penolong Penguasa',
        'departmentLabel': 'Jabatan',
        'departmentPlaceholder': 'cth: Bahagian Penguatkuasaan',
        'email': 'Alamat E-mel Rasmi',
        'emailPlaceholder': 'nama@agensi.gov.my',
        'emailHint': 'Lebih baik e-mel .gov.my',
        'altEmail': 'E-mel Alternatif (Pilihan)',
        'altEmailPlaceholder': 'alternatif@email.com',
        'mobileNumber': 'Nombor Telefon Bimbit',
        'mobilePlaceholder': '+60XXXXXXXXXX',
        'altPhoneNumber': 'Nombor Telefon Alternatif (Pilihan)',
        'officeNumber': 'Nombor Telefon Pejabat',
        'officeNumberHint': 'Talian terus jika ada',
        
        // Step 3
        'pic2Title': 'Butiran Pegawai Bertanggungjawab (PIC) 2',
        'pic2Subtitle': 'Pegawai hubungan kedua untuk pencalonan ini',
        'pic2Optional': 'Maklumat PIC 2 adalah pilihan tetapi disyorkan',
        'sameAsPic1': 'Sama seperti PIC 1',
        
        // Step 4
        'authTitle': 'Kebenaran & Perakuan',
        'authSubtitle': 'Surat kebenaran dan pencalonan rasmi',
        'authPersonName': 'Nama Pegawai Yang Memberi Kuasa',
        'authPersonNamePlaceholder': 'Masukkan nama pegawai yang memberi kuasa',
        'authPersonPosition': 'Jawatan Pegawai Yang Memberi Kuasa',
        'authPersonPositionPlaceholder': 'Masukkan jawatan/pangkat',
        'submissionDate': 'Tarikh Penghantaran',
        'authLetterLabel': 'Surat Kebenaran',
        'authLetterDesc': 'Muat naik surat kebenaran/pencalonan rasmi daripada agensi anda',
        'uploadButton': 'Pilih Fail',
        'noFile': 'Tiada fail dipilih',
        'supportedFormats': 'Format disokong: PDF, JPG, PNG (Maks 5MB)',
        'orgStampLabel': 'Cap Organisasi',
        'declarationTitle': 'Perakuan',
        'declarationText': 'Saya dengan ini mengaku bahawa semua maklumat yang diberikan dalam borang pencalonan ini adalah benar dan tepat. Saya faham bahawa SKMM berhak untuk mengesahkan semua maklumat yang dikemukakan dan boleh menolak pencalonan yang mengandungi maklumat palsu atau mengelirukan.',
        'agreeDeclaration': 'Saya bersetuju dengan perakuan di atas',
        
        // Step 5
        'reviewTitle': 'Semak Pencalonan Anda',
        'reviewSubtitle': 'Sila semak semua maklumat sebelum penghantaran',
        'agencyInformation': 'Maklumat Agensi',
        'pic1Information': 'Pegawai Bertanggungjawab (PIC) 1',
        'pic2Information': 'Pegawai Bertanggungjawab (PIC) 2 (Pilihan)',
        'authorization': 'Kebenaran',
        'authLetter': 'Surat Kebenaran',
        'uploaded': 'Dimuat naik',
        'notProvided': 'Tidak disediakan',
        'declaration': 'Perakuan',
        'agreed': 'Bersetuju dengan terma',
        'confirmAccuracy': 'Saya mengesahkan bahawa semua maklumat yang diberikan adalah tepat dan lengkap',
        'printPreview': 'Pratonton Cetak',
        
        // Success Page
        'successTitle': 'Pencalonan Berjaya Dihantar!',
        'successSubtitle': 'Pencalonan anda telah diterima dan sedang diproses',
        'referenceNumber': 'Nombor Rujukan',
        'refNumberDesc': 'Sila simpan nombor rujukan ini untuk surat-menyurat akan datang',
        'nextStepsTitle': 'Langkah Seterusnya:',
        'nextStep1': 'Pencalonan anda akan disemak oleh SKMM dalam masa 3-5 hari bekerja',
        'nextStep2': 'Anda akan menerima pengesahan e-mel di alamat e-mel rasmi yang diberikan',
        'nextStep3': 'Pegawai yang dicalonkan akan menerima kelayakan akses setelah diluluskan',
        'nextStep4': 'Untuk perkara mendesak, sila hubungi SKMM secara terus dengan nombor rujukan anda',
        'downloadPDF': 'Muat Turun PDF',
        'returnHome': 'Kembali ke Halaman Utama',
        'needHelp': 'Perlukan bantuan? Hubungi Sokongan SKMM:',
        'supportEmail': 'sokongan@skmm.gov.my',
        'supportPhone': '+603-8688-8000',
        
        // Demo Button
        'fillDemo': '⚡ Isi Data Demo',
        
        // Review Page
        'reviewAgencyInfo': 'Maklumat Agensi',
        'editButton': 'Edit',
        'reviewOrgName': 'Nama Organisasi',
        'reviewAgencyType': 'Jenis Agensi',
        'reviewDepartment': 'Jabatan/Bahagian',
        'reviewPhoneNumber': 'Nombor Telefon',
        'reviewOfficialAddress': 'Alamat Rasmi',
        'reviewPIC1Title': 'Pegawai Bertanggungjawab 1 (Utama)',
        'reviewFirstName': 'Nama Pertama',
        'reviewLastName': 'Nama Akhir',
        'reviewMyKad': 'No. MyKad',
        'reviewDesignation': 'Jawatan',
        'reviewDepartmentLabel': 'Jabatan',
        'reviewEmail': 'E-mel Rasmi',
        'reviewAltEmail': 'E-mel Alternatif (Pilihan)',
        'reviewOfficePhone': 'Telefon Pejabat',
        'reviewAltPhone': 'Nombor Telefon Alternatif (Pilihan)',
        'reviewAuthTitle': 'Butiran Kebenaran',
        'reviewAuthPerson': 'Pegawai Yang Memberi Kuasa',
        'reviewPosition': 'Jawatan',
        'reviewSubmissionDate': 'Tarikh Penghantaran',
        'reviewDigitalSignature': 'Tandatangan Digital',
        'notUploaded': 'Tidak dimuat naik',
        'acceptTerms': 'Saya menerima Terma dan Syarat',
        'acceptPrivacy': 'Saya menerima Dasar Privasi',
        
        // UI Elements
        'stepCounter3': 'Langkah 3 daripada 5',
        'stepCounter4': 'Langkah 4 daripada 5',
        'stepCounter5': 'Langkah 5 daripada 5',
        'mykadFormat': '(Format: XXXXXX-XX-XXXX)',
        'uploadTextStamp': 'Klik untuk muat naik atau seret dan lepas',
        'uploadSpecsStamp': 'PNG, JPG, JPEG (maks. 5 MB)',
        'referenceNote': 'Sila simpan nombor rujukan ini untuk rekod anda',
        
        // Footer
        'footerText': '© 2024 Suruhanjaya Komunikasi dan Multimedia Malaysia. Hak cipta terpelihara.'
    }
};

// ===========================
// Language Management
// ===========================

/**
 * Initialize language on page load
 */
function initLanguage() {
    const savedLang = localStorage.getItem('language') || 'en';
    setLanguage(savedLang);
    updateLanguageButton(savedLang);
}

/**
 * Toggle between English and Malay
 */
function toggleLanguage() {
    const currentLang = localStorage.getItem('language') || 'en';
    const newLang = currentLang === 'en' ? 'ms' : 'en';
    setLanguage(newLang);
    localStorage.setItem('language', newLang);
    updateLanguageButton(newLang);
}

/**
 * Set language and update all translatable elements
 */
function setLanguage(lang) {
    localStorage.setItem('language', lang);
    
    // Update all elements with data-translate attribute
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang] && translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });
    
    // Update all placeholders
    document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
        const key = element.getAttribute('data-translate-placeholder');
        if (translations[lang] && translations[lang][key]) {
            element.placeholder = translations[lang][key];
        }
    });

    stylizeMainTitle();
}

/**
 * Split the hero title so the first 3 words can use a different color.
 */
function stylizeMainTitle() {
    const title = document.querySelector('.main-title');
    if (!title) return;

    const words = title.textContent.trim().split(/\s+/).filter(Boolean);
    if (words.length <= 3) return;

    const prefix = words.slice(0, 3).join(' ');
    const suffix = words.slice(3).join(' ');

    const prefixSpan = document.createElement('span');
    prefixSpan.className = 'title-prefix';
    prefixSpan.textContent = prefix;

    const suffixSpan = document.createElement('span');
    suffixSpan.className = 'title-suffix';
    suffixSpan.textContent = suffix;

    title.textContent = '';
    title.appendChild(prefixSpan);
    title.appendChild(document.createTextNode(' '));
    title.appendChild(suffixSpan);
}

/**
 * Update language toggle button
 */
function updateLanguageButton(lang) {
    const langToggle = document.getElementById('langToggle');
    if (langToggle) {
        const flag = langToggle.querySelector('.lang-toggle-flag');
        const text = langToggle.querySelector('.lang-toggle-text');

        flag.textContent = 'BM';
        text.textContent = 'EN';

        langToggle.classList.toggle('lang-ms', lang === 'ms');
        langToggle.classList.toggle('lang-en', lang === 'en');
        langToggle.setAttribute('aria-label', lang === 'ms' ? 'Bahasa Melayu selected' : 'English selected');
    }
}

// Initialize language when DOM loads
document.addEventListener('DOMContentLoaded', initLanguage);

// ===========================
// Theme Management
// ===========================

/**
 * Initialize theme on page load
 */
function initTheme() {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);
}

/**
 * Toggle between light and dark theme
 */
function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    updateThemeIcon(newTheme);
}

/**
 * Update theme toggle button icon and text
 */
function updateThemeIcon(theme) {
    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
        const icon = themeToggle.querySelector('.theme-toggle-icon');
        const text = themeToggle.querySelector('.theme-toggle-text');

        icon.textContent = '☼';
        if (text) {
            text.textContent = '';
        }
        themeToggle.setAttribute('aria-label', theme === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
    }
}

// Initialize theme when DOM loads
document.addEventListener('DOMContentLoaded', initTheme);

// ===========================
// Form Data Management
// ===========================

/**
 * Fill all nomination steps with demo data once user starts typing/selecting.
 */
function seedLeaDemoData() {
    const today = new Date().toISOString().split('T')[0];
    const demoData = {
        step1: {
            organizationName: 'Royal Malaysia Police',
            agencyType: 'Police',
            department: 'Commercial Crime Investigation Department',
            officialAddress: 'Menara Cyber Crime, Jalan Semarak\n50630 Kuala Lumpur\nWilayah Persekutuan Kuala Lumpur',
            phoneNumber: '+60388888888',
            faxNumber: '+60388888899'
        },
        step2: {
            pic1Salutation: 'Dato\'',
            pic1FirstName: 'Ahmad Razali',
            pic1LastName: 'bin Abdullah',
            pic1MyKad: '720815-14-5678',
            pic1Designation: 'Assistant Commissioner of Police',
            pic1Department: 'Commercial Crime Investigation Department',
            pic1Email: 'ahmad.razali@rmp.gov.my',
            pic1AltEmail: 'ahmad.alt@email.com',
            pic1OfficePhone: '+60388888801',
            pic1MobilePhone: '+60123456789'
        },
        step3: {
            pic2Salutation: 'Ms',
            pic2FirstName: 'Siti Nurhaliza',
            pic2LastName: 'binti Ibrahim',
            pic2MyKad: '850522-10-1234',
            pic2Designation: 'Deputy Superintendent of Police',
            pic2Department: 'Commercial Crime Investigation Department',
            pic2Email: 'siti.nurhaliza@rmp.gov.my',
            pic2OfficePhone: '+60388888802',
            pic2MobilePhone: '+60129876543'
        },
        step4: {
            authorizedPersonName: 'Tan Sri Mohd Shuhaily bin Mohd Zain',
            authorizedPersonPosition: 'Inspector-General of Police',
            submissionDate: today,
            declaration: true
        }
    };

    const existing = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
    const merged = {
        ...existing,
        ...demoData,
        step1: { ...(existing.step1 || {}), ...demoData.step1 },
        step2: { ...(existing.step2 || {}), ...demoData.step2 },
        step3: { ...(existing.step3 || {}), ...demoData.step3 },
        step4: { ...(existing.step4 || {}), ...demoData.step4 }
    };

    localStorage.setItem('nominationFormData', JSON.stringify(merged));
}

/**
 * Save form data to localStorage
 */
function saveFormData(step) {
    const formId = `step${step}Form`;
    const form = document.getElementById(formId);
    
    if (!form) return;
    
    const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
    if (!formData[`step${step}`]) {
        formData[`step${step}`] = {};
    }
    
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        if (input.type === 'checkbox') {
            formData[`step${step}`][input.name] = input.checked;
        } else if (input.type === 'file') {
            // Files are handled separately in the file upload handler
        } else {
            formData[`step${step}`][input.name] = input.value;
        }
    });
    
    localStorage.setItem('nominationFormData', JSON.stringify(formData));
}

/**
 * Load form data from localStorage
 */
function loadFormData(step) {
    const formId = `step${step}Form`;
    const form = document.getElementById(formId);
    
    if (!form) return;
    
    const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
    const stepData = formData[`step${step}`];
    
    if (!stepData) return;
    
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        if (stepData[input.name] !== undefined) {
            if (input.type === 'checkbox') {
                input.checked = stepData[input.name];
            } else if (input.type !== 'file') {
                input.value = stepData[input.name];
            }
        }
    });
}

// ===========================
// Form Validation
// ===========================

/**
 * Validate email format
 */
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

/**
 * Validate phone number (Malaysian format)
 */
function validatePhone(phone) {
    // Accepts formats: +60XXXXXXXXXX, 60XXXXXXXXXX, 0XXXXXXXXXX
    const re = /^(\+?60|0)\d{9,10}$/;
    return re.test(phone.replace(/[\s-]/g, ''));
}

/**
 * Validate MyKad format
 */
function validateMyKad(mykad) {
    // Format: XXXXXX-XX-XXXX
    const re = /^\d{6}-\d{2}-\d{4}$/;
    return re.test(mykad);
}

/**
 * Clear error message
 */
function clearError(fieldName) {
    const errorElement = document.getElementById(`${fieldName}Error`);
    if (errorElement) {
        errorElement.textContent = '';
    }
}

/**
 * Show error message
 */
function showError(fieldName, message) {
    const errorElement = document.getElementById(`${fieldName}Error`);
    if (errorElement) {
        errorElement.textContent = message;
    }
}

/**
 * Validate Step 1 - Agency Information
 */
function validateStep1() {
    let isValid = true;
    
    // Organization Name
    const orgName = document.getElementById('organizationName').value.trim();
    if (!orgName) {
        showError('organizationName', 'Organization name is required');
        isValid = false;
    } else {
        clearError('organizationName');
    }
    
    // Agency Type
    const agencyType = document.getElementById('agencyType').value;
    if (!agencyType) {
        showError('agencyType', 'Agency type is required');
        isValid = false;
    } else {
        clearError('agencyType');
    }
    
    // Department
    const department = document.getElementById('department').value.trim();
    if (!department) {
        showError('department', 'Department/Division is required');
        isValid = false;
    } else {
        clearError('department');
    }
    
    // Official Address
    const address = document.getElementById('officialAddress').value.trim();
    if (!address) {
        showError('officialAddress', 'Official address is required');
        isValid = false;
    } else {
        clearError('officialAddress');
    }
    
    // Phone Number
    const phone = document.getElementById('phoneNumber').value.trim();
    if (!phone) {
        showError('phoneNumber', 'Phone number is required');
        isValid = false;
    } else if (!validatePhone(phone)) {
        showError('phoneNumber', 'Invalid phone number format (e.g., +60XXXXXXXXXX or 0XXXXXXXXXX)');
        isValid = false;
    } else {
        clearError('phoneNumber');
    }
    
    // Fax Number (optional)
    const fax = document.getElementById('faxNumber').value.trim();
    if (fax && !validatePhone(fax)) {
        showError('faxNumber', 'Invalid fax number format');
        isValid = false;
    } else {
        clearError('faxNumber');
    }
    
    return isValid;
}

/**
 * Validate Step 2 - Person In Charge 1
 */
function validateStep2() {
    let isValid = true;
    
    // Salutation
    const salutation = document.getElementById('pic1Salutation').value;
    if (!salutation) {
        showError('pic1Salutation', 'Salutation is required');
        isValid = false;
    } else {
        clearError('pic1Salutation');
    }
    
    // First Name
    const firstName = document.getElementById('pic1FirstName').value.trim();
    if (!firstName) {
        showError('pic1FirstName', 'First name is required');
        isValid = false;
    } else {
        clearError('pic1FirstName');
    }

    // Last Name
    const lastName = document.getElementById('pic1LastName').value.trim();
    if (!lastName) {
        showError('pic1LastName', 'Last name is required');
        isValid = false;
    } else {
        clearError('pic1LastName');
    }
    
    // MyKad No.
    const mykad = document.getElementById('pic1MyKad').value.trim();
    if (!mykad) {
        showError('pic1MyKad', 'MyKad number is required');
        isValid = false;
    } else if (!validateMyKad(mykad)) {
        showError('pic1MyKad', 'Invalid MyKad format (XXXXXX-XX-XXXX)');
        isValid = false;
    } else {
        clearError('pic1MyKad');
    }
    
    // Designation
    const designation = document.getElementById('pic1Designation').value.trim();
    if (!designation) {
        showError('pic1Designation', 'Designation/Position is required');
        isValid = false;
    } else {
        clearError('pic1Designation');
    }
    
    // Department
    const department = document.getElementById('pic1Department').value.trim();
    if (!department) {
        showError('pic1Department', 'Department is required');
        isValid = false;
    } else {
        clearError('pic1Department');
    }
    
    // Email
    const email = document.getElementById('pic1Email').value.trim();
    if (!email) {
        showError('pic1Email', 'Official email is required');
        isValid = false;
    } else if (!validateEmail(email)) {
        showError('pic1Email', 'Invalid email format');
        isValid = false;
    } else {
        clearError('pic1Email');
    }

    // Alternative Email (optional)
    const altEmail = document.getElementById('pic1AltEmail').value.trim();
    if (altEmail && !validateEmail(altEmail)) {
        showError('pic1AltEmail', 'Invalid alternative email format');
        isValid = false;
    } else {
        clearError('pic1AltEmail');
    }
    
    // Office Phone
    const officePhone = document.getElementById('pic1OfficePhone').value.trim();
    if (!officePhone) {
        showError('pic1OfficePhone', 'Office phone number is required');
        isValid = false;
    } else if (!validatePhone(officePhone)) {
        showError('pic1OfficePhone', 'Invalid phone number format');
        isValid = false;
    } else {
        clearError('pic1OfficePhone');
    }
    
    // Mobile Phone (optional)
    const mobilePhone = document.getElementById('pic1MobilePhone').value.trim();
    if (mobilePhone && !validatePhone(mobilePhone)) {
        showError('pic1MobilePhone', 'Invalid mobile phone format');
        isValid = false;
    } else {
        clearError('pic1MobilePhone');
    }
    
    return isValid;
}

/**
 * Validate Step 3 - Person In Charge 2 (Optional)
 */
function validateStep3() {
    // Step 3 is optional, but if any field is filled, validate it
    const pic2FirstName = document.getElementById('pic2FirstName').value.trim();
    const pic2LastName = document.getElementById('pic2LastName').value.trim();
    const pic2MyKad = document.getElementById('pic2MyKad').value.trim();
    const pic2Email = document.getElementById('pic2Email').value.trim();
    const pic2OfficePhone = document.getElementById('pic2OfficePhone').value.trim();
    const pic2MobilePhone = document.getElementById('pic2MobilePhone').value.trim();
    
    let isValid = true;
    
    // If any field is filled, validate MyKad format
    if (pic2MyKad && !validateMyKad(pic2MyKad)) {
        showError('pic2MyKad', 'Invalid MyKad format (XXXXXX-XX-XXXX)');
        isValid = false;
    } else {
        clearError('pic2MyKad');
    }
    
    // Validate email if provided
    if (pic2Email && !validateEmail(pic2Email)) {
        showError('pic2Email', 'Invalid email format');
        isValid = false;
    } else {
        clearError('pic2Email');
    }
    
    // Validate office phone if provided
    if (pic2OfficePhone && !validatePhone(pic2OfficePhone)) {
        showError('pic2OfficePhone', 'Invalid phone number format');
        isValid = false;
    } else {
        clearError('pic2OfficePhone');
    }
    
    // Validate mobile phone if provided
    if (pic2MobilePhone && !validatePhone(pic2MobilePhone)) {
        showError('pic2MobilePhone', 'Invalid mobile phone format');
        isValid = false;
    } else {
        clearError('pic2MobilePhone');
    }
    
    return isValid;
}

/**
 * Validate Step 4 - Authorization Details
 */
function validateStep4() {
    let isValid = true;
    
    // Authorized Person Name
    const authName = document.getElementById('authorizedPersonName').value.trim();
    if (!authName) {
        showError('authorizedPersonName', 'Authorized person name is required');
        isValid = false;
    } else {
        clearError('authorizedPersonName');
    }
    
    // Authorized Person Position
    const authPosition = document.getElementById('authorizedPersonPosition').value.trim();
    if (!authPosition) {
        showError('authorizedPersonPosition', 'Authorized person position is required');
        isValid = false;
    } else {
        clearError('authorizedPersonPosition');
    }
    
    // Submission Date
    const submissionDate = document.getElementById('submissionDate').value;
    if (!submissionDate) {
        showError('submissionDate', 'Date of submission is required');
        isValid = false;
    } else {
        clearError('submissionDate');
    }
    
    // Declaration
    const declaration = document.getElementById('declaration').checked;
    if (!declaration) {
        showError('declaration', 'You must confirm the declaration');
        isValid = false;
    } else {
        clearError('declaration');
    }
    
    return isValid;
}

// ===========================
// Navigation Functions
// ===========================

/**
 * Navigate to next step
 */
function nextStep(currentStep) {
    // Validate current step
    let isValid = false;
    
    switch (currentStep) {
        case 1:
            isValid = validateStep1();
            break;
        case 2:
            isValid = validateStep2();
            break;
        case 3:
            isValid = validateStep3();
            break;
        case 4:
            isValid = validateStep4();
            break;
        default:
            isValid = true;
    }
    
    if (!isValid) {
        // Scroll to first error
        const firstError = document.querySelector('.error-message:not(:empty)');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return;
    }
    
    // Save form data
    saveFormData(currentStep);
    
    // Navigate to next step
    const stepPages = ['', 'agency.html', 'pic1.html', 'pic2.html', 'authorization.html', 'review.html'];
    const nextStepNumber = currentStep + 1;
    window.location.href = stepPages[nextStepNumber];
}

/**
 * Navigate to previous step
 */
function previousStep(currentStep) {
    // Save current form data (optional, in case user goes back)
    saveFormData(currentStep);
    
    // Navigate to previous step
    const stepPages = ['', 'agency.html', 'pic1.html', 'pic2.html', 'authorization.html', 'review.html'];
    const prevStepNumber = currentStep - 1;
    window.location.href = stepPages[prevStepNumber];
}

// ===========================
// Auto-save on input change
// ===========================
document.addEventListener('DOMContentLoaded', function() {
    // Get current step from URL or form ID
    const form = document.querySelector('.nomination-form');
    if (!form) return;
    
    const formId = form.id;
    const stepMatch = formId.match(/step(\d+)Form/);
    
    if (stepMatch) {
        const currentStep = parseInt(stepMatch[1]);
        let hasAutoSeeded = false;

        // Auto-fill all info once when user clicks/focuses any input control.
        const controls = form.querySelectorAll('input, select, textarea');
        controls.forEach(control => {
            control.addEventListener('focus', function handleFirstFocus() {
                if (hasAutoSeeded) {
                    return;
                }

                seedLeaDemoData();
                hasAutoSeeded = true;
                loadFormData(currentStep);
            }, { once: true });
        });
        
        // Auto-save on input change
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('change', function() {
                saveFormData(currentStep);
            });
            
            // Also save on blur for text inputs
            if (input.type === 'text' || input.type === 'email' || input.type === 'tel' || input.tagName === 'TEXTAREA') {
                input.addEventListener('blur', function() {
                    saveFormData(currentStep);
                });
            }
        });
    }
});

// ===========================
// Utility Functions
// ===========================

/**
 * Format phone number on input
 */
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    
    if (value.startsWith('60')) {
        value = '+' + value;
    } else if (value.startsWith('0')) {
        // Keep as is
    }
    
    input.value = value;
}

/**
 * Clear all form data
 */
function clearAllFormData() {
    if (confirm('Are you sure you want to clear all form data?')) {
        localStorage.removeItem('nominationFormData');
        localStorage.removeItem('referenceNumber');
        location.reload();
    }
}

/**
 * Print form data to console (for debugging)
 */
function debugFormData() {
    const formData = JSON.parse(localStorage.getItem('nominationFormData') || '{}');
    console.log('Form Data:', formData);
}
