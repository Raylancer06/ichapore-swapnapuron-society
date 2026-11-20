# Ichapore Swapnapuron Society - WordPress CMS & Donation System

Complete, modular WordPress CMS conversion of the Ichapore Swapnapuron Society website, featuring a custom theme with full admin customisation and a dedicated Indian Donation Gateway with automated Section 80G Tax Exemption Certificates.

---

## 📦 What's Included

```
wordpress/
├── ichapore-swapnapuron-theme.zip      # 1-Click installable theme package
├── swapnapuron-donations-plugin.zip   # 1-Click installable Razorpay + 80G plugin
├── sample-content.xml                  # WordPress WXR demo import (all 8 projects)
│
├── wp-content/
│   ├── themes/ichapore-swapnapuron/    # Complete uncompressed theme source
│   │   ├── style.css                   # Theme registration & styling
│   │   ├── functions.php               # Bootstrap 5.3, Nav Walker, Enqueues
│   │   ├── header.php                  # Glass navbar, emblem logo, top bar
│   │   ├── footer.php                  # Deep charcoal footer, dynamic links
│   │   ├── front-page.php              # Dynamic homepage with video hero & impact stats
│   │   ├── single-project.php          # Dynamic template for all 8 initiatives
│   │   ├── archive-project.php         # Archive listing for all projects
│   │   ├── page-donate.php             # Donation hub with PNB coordinates & shortcode
│   │   ├── index.php                   # Blog/archive fallback
│   │   ├── inc/
│   │   │   ├── theme-options.php       # Admin > Society Settings (Statutory, Bank, Social)
│   │   │   ├── custom-post-types.php   # 'project' CPT & 'project_category'
│   │   │   ├── meta-boxes.php          # Native meta fields (chips, deliverables, metrics)
│   │   │   └── template-tags.php       # Helper functions
│   │   └── assets/                     # CSS, JS, and all local HD images
│   │
│   └── plugins/swapnapuron-donations/  # Complete Indian Donation Plugin
│       ├── swapnapuron-donations.php   # Activation, DB table, shortcode, settings
│       ├── includes/
│       │   ├── class-razorpay-handler.php   # Orders API, HMAC SHA256 verification
│       │   ├── class-receipt-generator.php  # Automated 80G (Form 10BE) PDF generator
│       │   └── class-admin-ledger.php       # Donor table & Form 10BD CSV export
│       └── assets/
│           ├── donation.css            # Dark luxury donation widget styles
│           └── donation.js             # Razorpay checkout modal & AJAX flow
```

---

## 🚀 Quick Setup Instructions

### 1. Install the Theme
1. In your WordPress Admin Dashboard, go to **Appearance > Themes > Add New > Upload Theme**.
2. Choose `wordpress/ichapore-swapnapuron-theme.zip` and click **Install Now**.
3. Click **Activate**.

### 2. Install the Donation Plugin
1. Go to **Plugins > Add New > Upload Plugin**.
2. Choose `wordpress/swapnapuron-donations-plugin.zip` and click **Install Now**.
3. Click **Activate Plugin**.

### 3. Import All 8 Initiatives (Optional / 1-Click)
1. Go to **Tools > Import > WordPress**. (Install importer if prompted).
2. Upload `wordpress/sample-content.xml`.
3. Map author to your admin user and finish import. All 8 initiatives will be instantly populated under **Projects**!

### 4. Configure Society Details
1. Go to **Society Settings** in the WordPress Admin sidebar:
   - **Statutory Registration**: Society PAN (`AAAAI9694K`), 80G URN (`AAAAI9694KF20251`), 12A URN (`AAAAI9694KE20216`), Reg No (`S0011507 of 2019-2020`).
   - **Helpline Numbers**: Phone 1, Phone 2, Email, Official Address.
   - **PNB Banking Coordinates**: Account Name, Account No, IFSC (`PUNB0210100`), Branch, UPI ID (`ichaporeswapnapuronsociety@pnb`).
   - **Social Links**: Facebook, Twitter/X, Instagram, YouTube.
2. Click **Save Society Settings**. Every coordinate across the website updates immediately.

### 5. Configure Razorpay & 80G Settings
1. Go to **Donations > Settings & 80G** in the sidebar.
2. Enter your Razorpay credentials:
   - **Key ID**: `rzp_live_...` (or leave blank / test mode to simulate sandbox donations).
   - **Key Secret**: Razorpay secret.
   - **80G Details**: Prefix, authorized signatory, etc.
3. Supported payment methods include **UPI (GPay, PhonePe, Paytm, BHIM), Debit/Credit Cards, and Netbanking**.
4. When a donor completes payment:
   - Transaction is saved to the database.
   - An instant printable **Section 80G Tax Exemption Certificate (Form 10BE compliant)** with donor PAN and society URN is rendered.
   - Donor record appears in **Donations > All Donations**.
   - Admin can export all records with 1 click using **Export Form 10BD CSV** for annual Income Tax filing.

---

## 🎨 Editing Projects & Pages from Admin

- **Add / Edit Initiatives**: Go to **Projects > Add New / All Projects**. You have clean, intuitive input boxes for:
  - Initiative Category Badge (e.g. `Animal Safety & Welfare Initiative`)
  - Subtitle / Tagline
  - Ambient Glow Color Hex
  - 4 Header Feature Chips (Icon + Label)
  - Highlight Callout Quote
  - 3 Deliverable Feature Cards (Icon, Title, Description)
  - 4 Impact Metric Counters (Numbers, Labels, Subtexts)
  - 5 Checklist Program Highlights
- **Static Donation Page**: Go to **Pages > Add New**, title it "Donate Now", select Template **Donation Hub**, and publish. The page will render the complete interactive donation hub with dynamic PNB coordinates and Razorpay gateway.
