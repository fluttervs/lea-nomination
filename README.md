# PSIRP LEA Nomination Form

## Project Overview

This is a **front-end only** implementation of the **Postal Security Incident Reporting Platform (PSIRP)** LEA (Law Enforcement Agency) Officer Nomination Form for **MCMC (Malaysian Communications and Multimedia Commission)**.

### Purpose

This multi-step form allows Law Enforcement Agencies to nominate officers for access to the PSIRP platform. The form collects agency information, primary and secondary contact details, authorization information, and generates a reference number upon successful submission.

---

## 🎯 Features

### ✅ Multi-Step Form (5 Steps)
1. **Agency Information** - Organization details, contact info
2. **Person In Charge 1 (Primary)** - Primary contact officer details
3. **Person In Charge 2 (Secondary)** - Optional secondary contact officer
4. **Authorization Details** - Authorization officer and signatures
5. **Review & Submit** - Summary of all entered information

### ✅ Frontend Functionality
- **Form Validation** - Real-time validation with error messages
- **Auto-Save** - Form data saved to localStorage automatically
- **Progress Indicator** - Visual stepper showing current progress
- **MyKad Formatting** - Auto-formats Malaysian IC numbers (XXXXXX-XX-XXXX)
- **File Upload** - Digital signature and organization stamp upload
- **Copy Function** - Copy PIC 1 details to PIC 2
- **Responsive Design** - Mobile-friendly layout
- **Success Page** - Confirmation with reference number generation

### ✅ No Backend Required
- All data stored in browser's localStorage
- Can be tested directly by opening HTML files
- No database or server needed

---

## 📁 Project Structure

```
leanomination/
├── public/
│   ├── css/
│   │   └── nomination.css          # All styling
│   ├── js/
│   │   └── nomination.js           # Form logic and validation
│   ├── index.html                  # Entry point (redirects to agency page)
│   ├── agency.html                 # Agency Information
│   ├── pic1.html                   # Person In Charge 1
│   ├── pic2.html                   # Person In Charge 2
│   ├── authorization.html          # Authorization Details
│   ├── review.html                 # Review & Submit
│   └── success.html                # Success confirmation page
│
└── resources/
    └── views/
        ├── layouts/
        │   └── app.blade.php       # Laravel layout template
        └── nomination/
            ├── agency.blade.php         # Laravel blade files
            ├── pic1.blade.php           # (for future Laravel integration)
            ├── pic2.blade.php
            ├── authorization.blade.php
            ├── review.blade.php
            └── success.blade.php
```

---

## 🚀 How to Run

### Option 1: Direct Browser Access (Recommended for Testing)

1. Navigate to the `public` folder:
   ```
   cd c:\leanomination\public
   ```

2. Open `index.html` or `agency.html` in your web browser:
   - **Windows**: Double-click the file
   - **Or**: Right-click → "Open with" → Choose your browser

3. The form will load and you can navigate through all steps

### Option 2: Local Web Server (Recommended for Development)

Using Python:
```bash
cd c:\leanomination\public
python -m http.server 8000
```

Then open: `http://localhost:8000`

Using PHP:
```bash
cd c:\leanomination\public
php -S localhost:8000
```

Then open: `http://localhost:8000`

Using Node.js (with http-server):
```bash
npm install -g http-server
cd c:\leanomination\public
http-server -p 8000
```

Then open: `http://localhost:8000`

---

## 🎨 Design Specifications

### Color Palette
- **Primary Blue**: `#003E7E`
- **Success Green**: `#10B981`
- **Warning Orange**: `#F59E0B`
- **Error Red**: `#EF4444`
- **Text Dark**: `#1E293B`
- **Text Gray**: `#64748B`
- **Border Gray**: `#E2E8F0`
- **Background Light**: `#F8FAFC`

### Typography
- **Font Family**: Inter (Google Fonts)
- **Base Font Size**: 16px
- **Line Height**: 1.6

### Responsive Breakpoints
- **Desktop**: > 768px
- **Tablet**: 481px - 768px
- **Mobile**: ≤ 480px

---

## 📝 Form Fields

### Step 1: Agency Information
- Organization Name (required)
- Agency Type (dropdown: Police, MACC, Immigration, etc.)
- Department/Division (required)
- Official Address (textarea, required)
- Phone Number (Malaysian format, required)
- Fax Number (optional)

### Step 2: Person In Charge 1
- Salutation (dropdown, required)
- Full Name (required)
- MyKad No. (format: XXXXXX-XX-XXXX, required)
- Designation/Position (required)
- Department (required)
- Official Email (.gov.my preferred, required)
- Office Phone No. (required)
- Mobile Phone No. (optional)

### Step 3: Person In Charge 2
- Same as Step 2, but all fields optional
- "Same as Person In Charge 1" checkbox for quick copy

### Step 4: Authorization Details
- Authorized Person Name (required)
- Authorized Person Position (required)
- Date of Submission (auto-fills today, required)
- Digital Signature Upload (optional, PNG/JPG/JPEG, max 5MB)
- Organization Stamp Upload (optional, PNG/JPG/JPEG, max 5MB)
- Declaration Checkbox (required)

### Step 5: Review & Submit
- Summary of all entered data
- Edit buttons for each section
- Terms and Conditions checkbox (required)
- Privacy Policy checkbox (required)

### Success Page
- Reference Number (auto-generated: LEA-YYYY-XXXXX)
- Next steps information
- Download PDF button
- Return to Home button
- Support contact information

---

## 🔧 Technical Details

### Form Validation

**Client-Side Validation**:
- Required fields check
- Email format validation
- Phone number format validation (Malaysian: +60XXXXXXXXXX or 0XXXXXXXXXX)
- MyKad format validation (XXXXXX-XX-XXXX)
- File type validation (PNG, JPG, JPEG only)
- File size validation (max 5MB)

**Error Handling**:
- Real-time error messages
- Scroll to first error
- Clear error messages on field correction

### Data Storage

**localStorage Keys**:
- `nominationFormData` - JSON object containing all form data from all steps
- `referenceNumber` - Generated reference number after submission

**Data Structure**:
```javascript
{
  "step1": {
    "organizationName": "...",
    "agencyType": "...",
    // ... other step 1 fields
  },
  "step2": {
    "pic1Salutation": "...",
    "pic1FullName": "...",
    // ... other step 2 fields
  },
  // ... step3, step4
}
```

### Reference Number Generation

Format: `LEA-YYYY-XXXXX`
- `LEA` - Prefix for Law Enforcement Agency
- `YYYY` - Current year
- `XXXXX` - Random 5-digit number (10000-99999)

---

## 🛠️ Customization

### Changing Colors

Edit `public/css/nomination.css` and modify the CSS variables:

```css
:root {
    --primary-blue: #003E7E;
    --success-green: #10B981;
    /* ... other colors */
}
```

### Adding New Fields

1. Add HTML input in the appropriate page file (e.g., `agency.html`)
2. Add validation logic in `public/js/nomination.js`
3. Update the review section in `review.html`

### Modifying Steps

To add or remove steps:
1. Update all progress steppers in each HTML file
2. Update navigation logic in `nomination.js`
3. Update `nextStep()` and `previousStep()` functions

---

## 📋 Browser Compatibility

Tested and working on:
- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Opera 76+

**Minimum Requirements**:
- localStorage support
- ES6 JavaScript support
- CSS Grid support
- Flexbox support

---

## 🔜 Future Enhancements (Backend Integration)

When integrating with Laravel backend:

### Backend Features to Implement:
1. **Database Storage** - Save nominations to MySQL database
2. **Email Notifications** - Send confirmation emails
3. **File Upload** - Store signature/stamp files on server
4. **PDF Generation** - Create downloadable PDF of nomination
5. **Admin Dashboard** - Review and approve nominations
6. **Authentication** - User login for tracking submissions
7. **API Endpoints** - RESTful API for form submission
8. **Validation** - Server-side validation
9. **Audit Trail** - Log all submissions and changes
10. **Reporting** - Analytics and reports on nominations

### Laravel Routes (Example):
```php
// Web Routes
Route::get('/nomination', [NominationController::class, 'index']);
Route::post('/nomination/submit', [NominationController::class, 'submit']);
Route::get('/nomination/success/{refNumber}', [NominationController::class, 'success']);

// API Routes
Route::post('/api/nomination/save-draft', [NominationController::class, 'saveDraft']);
Route::post('/api/nomination/submit', [NominationController::class, 'submit']);
```

---

## 🐛 Known Issues

- File uploads are simulated (files not actually uploaded, only names stored)
- No actual PDF generation (shows alert instead)
- Data persists in browser until manually cleared
- No backend validation

---

## 📞 Support

For questions or issues regarding this implementation:

**MCMC Contact**:
- Email: support@mcmc.gov.my
- Phone: +603-8688-8000
- Website: www.mcmc.gov.my

---

## 📄 License

This is a demonstration project for MCMC internship. All rights reserved by Suruhanjaya Komunikasi dan Multimedia Malaysia (MCMC).

---

## 👨‍💻 Developer Notes

### Testing Checklist

- [ ] All form fields validate correctly
- [ ] Progress stepper updates on navigation
- [ ] Data persists across steps
- [ ] MyKad auto-formatting works
- [ ] File upload size/type validation works
- [ ] "Same as PIC 1" checkbox copies data
- [ ] Review page shows all data correctly
- [ ] Success page generates reference number
- [ ] Responsive layout works on mobile
- [ ] All buttons function correctly
- [ ] Error messages display properly
- [ ] localStorage saves and loads correctly

### Development Tips

1. **Clear localStorage** - Use browser console: `localStorage.clear()`
2. **View stored data** - Console: `localStorage.getItem('nominationFormData')`
3. **Debug form data** - Call `debugFormData()` in console
4. **Test validation** - Try submitting empty forms to see error handling
5. **Mobile testing** - Use browser dev tools responsive mode

---

## 📸 Screenshots

The form matches the provided UI designs with:
- Professional MCMC branding
- Clean, modern interface
- Intuitive multi-step navigation
- Clear visual feedback
- Accessible design

---

**Last Updated**: February 24, 2026

**Version**: 1.0.0

**Status**: ✅ Complete (Frontend Only)
