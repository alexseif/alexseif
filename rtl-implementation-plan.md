# RTL Support Implementation Plan for Arabic and Egyptian Locales

## Information Gathered

- **Application Type**: Symfony 6+ application with Webpack Encore for asset management
- **Current Locales**: Arabic (ar), Egyptian (eg), English (en)
- **Current Bootstrap**: Bootstrap 5.x is being used via SCSS imports
- **Template Structure**: Uses base.html.twig as the main layout template
- **Asset Management**: Webpack Encore with SCSS preprocessing

## Plan

### 1. Install Bootstrap RTL Package

- Install bootstrap-rtl package via npm
- Add RTL-specific SCSS variables and mixins

### 2. Create RTL-Specific Stylesheet

- Create `assets/scss/rtl.scss` for RTL-specific styles
- Import bootstrap-rtl CSS/SCSS
- Add custom RTL overrides

### 3. Update Webpack Configuration

- Add RTL entry point in webpack.config.js
- Configure conditional loading based on locale

### 4. Update Base Template

- Modify templates/base.html.twig to conditionally load RTL styles
- Add RTL direction attributes when needed

### 5. Create Locale Helper Service

- Create a Twig extension to check for RTL locales
- Add helper functions for RTL detection

## Detailed Implementation Steps

### File 1: Install Dependencies

```bash
npm install bootstrap-rtl
```

### File 2: Create RTL Stylesheet

**Path**: `assets/scss/rtl.scss`

- Import bootstrap-rtl
- Add custom RTL overrides
- Include RTL-specific variables

### File 3: Update Webpack Config

**Path**: `webpack.config.js`

- Add RTL entry point
- Configure locale-based loading

### File 4: Update Base Template

**Path**: `templates/base.html.twig`

- Add RTL conditional loading
- Update HTML direction attributes

### File 5: Create Twig Extension

**Path**: `src/Twig/RtlExtension.php`

- Add `is_rtl_locale()` function
- Add `rtl_class()` function

## Dependent Files to Edit

1. `webpack.config.js` - Add RTL entry point
2. `templates/base.html.twig` - Add conditional RTL loading
3. `assets/scss/app.scss` - Import RTL styles conditionally
4. `src/Twig/RtlExtension.php` - Create new Twig extension
5. `package.json` - Add bootstrap-rtl dependency

## Follow-up Steps

1. Test RTL rendering for Arabic locale
2. Test RTL rendering for Egyptian locale
3. Verify LTR rendering still works for English
4. Check responsive behavior in RTL mode
5. Validate all components work correctly in RTL

## Testing Checklist

- [ ] Arabic text renders correctly with RTL direction
- [ ] Egyptian text renders correctly with RTL direction
- [ ] Navigation menu works in RTL
- [ ] Forms and inputs are RTL-friendly
- [ ] Grid system works correctly in RTL
- [ ] No layout breaks in RTL mode
