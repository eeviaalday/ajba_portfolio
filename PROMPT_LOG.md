# Prompt Log

> **Purpose:** Chronological documentation of the prompts used to develop the e-portfolio with OpenCode/Big Pickle.

### Task 1: Project Initialization — Create Professional E-Portfolio
* Result/Output: This is the foundational project-start prompt: it establishes the complete portfolio from an empty implementation, using the supplied project guide as the requirements source and establishing the lavender/purple visual system, responsive architecture, theme controls, and extensible sections.
* Prompt used:
```text
Create a complete, professional, responsive e-portfolio website for me as an IT student, starting from the existing project folder which currently has no portfolio implementation.

IMPORTANT:
- Use the project guide/PDF provided with this project as the primary requirements reference.
- Follow the guide's required content/structure where applicable, but make the visual design modern, polished, and suitable for an IT student.
- Build the portfolio as a real working website, not a static mockup.
- Use the project's existing technology/framework and organize the implementation cleanly.
- Make it responsive for desktop, tablet, and mobile.
- Use reusable components and keep the code maintainable.

DESIGN DIRECTION:
I want a distinctive magical lavender / pastel-purple aesthetic with a subtle futuristic/cyberpunk influence.
The default appearance should be LIGHT MODE with:
- pastel lavender
- soft purple
- white/off-white backgrounds
- elegant dark-violet typography
- subtle gradients and decorative elements

Also provide a DARK MODE with:
- deep violet/near-black backgrounds
- lavender and neon-purple accents
- tasteful glowing effects

Both light and dark modes must look intentionally designed, not simply inverted.

Add a functional LIGHT/DARK MODE toggle using an immediately understandable sun/moon icon.

Add a functional COLOR THEME CHANGER in a single clickable icon/button. It should allow the visitor to change the portfolio's accent/color theme without breaking readability or the existing design.

GENERAL VISUAL STYLE:
- Modern creative portfolio
- Stylish typography with a display font paired with a clean sans-serif
- Strong visual hierarchy
- Elegant spacing
- Subtle animations and hover effects
- Tasteful decorative shapes/glows
- Professional rather than overly game-like
- Avoid a generic student portfolio template

PROFILE / PERSONAL INFORMATION:
Use the actual information and assets that I provide in the project. Do not invent personal information. Leave placeholders only where information has not yet been supplied.

The portfolio should have a clear navigation system and sections appropriate for a professional student e-portfolio, including the areas required by the project guide.

PROJECT PRESENTATION:
Design the Projects area so that major projects can later contain multiple screenshots and descriptions. Make room for project galleries/lightboxes and programming-language labels.

CERTIFICATES:
Create a dedicated Certificates area that can later support certificate images/PDFs. Keep its visual treatment distinct from Projects.

CONTACT:
Create a clean Contact section for my email, phone, location, and social links. Do not create fake contact functionality or fake information.

QUALITY REQUIREMENTS:
- No horizontal overflow
- Accessible text contrast
- Responsive layout
- Smooth but restrained animations
- Working navigation
- Working theme controls
- Correct asset loading
- No broken images
- No console errors
- Keep the implementation easy to extend later

Before coding, inspect the project guide and current folder structure. Then build the portfolio carefully from the ground up.

The goal is to establish the complete foundation and visual system of my e-portfolio so later updates can add my real profile information, projects, certificates, work experience, tools, and gallery without rebuilding the site.
```

### Task 2: Projects Section — Featured Projects
* Result/Output: Reconstructed from the project requirements discussed in the conversation; the original assistant response was in a skipped message and is not recoverable verbatim.
* Prompt used:
```text
Create/improve the Projects section of my existing e-portfolio without changing my existing personal information or unrelated sections.

Keep my three main projects as the Featured Projects:
1. Beauty Parlor Management System — Visual Basic .NET
   Images:
   BeautyParlorManagementSystem_01_Login
   BeautyParlorManagementSystem_02_Dashboard
   BeautyParlorManagementSystem_03_Customers
   BeautyParlorManagementSystem_04_Services
   BeautyParlorManagementSystem_05_Inventory
   BeautyParlorManagementSystem_06_Reports

2. Flower Shop Management System — C#
   Images:
   FlowerShopManagementSystem_01_Login
   FlowerShopManagementSystem_02_Home
   FlowerShopManagementSystem_03_CustomerDashboard
   FlowerShopManagementSystem_04_Admindashboard
   FlowerShopManagementSystem_05_OrderManagement

3. RHU Management System — C#
   Images:
   RHUManagementSystem_01_Login
   RHUManagementSystem_02_Dashboard
   RHUManagementSystem_03_PatientRegistration
   RHUManagementSystem_04_AccountManagement
   RHUManagementSystem_05_Backup&Restore

Generate professional, concise project descriptions from the project names, screenshots, and technologies actually provided. Do not invent features that cannot reasonably be supported.

Use the screenshots as the main visual content. I will not provide repository links, so the project presentation should focus on the images and descriptions.
```

### Task 3: Projects Section — Additional Activities Prompt
* Result/Output: Reconstructed because the original response was skipped. Later implementation feedback confirmed the user wanted older college activities separated visually from the three Featured Projects.
* Prompt used:
```text
Keep my first three projects as the Featured Projects. Add a 'View More Projects' option leading to an Additional Projects & Activities area.

Treat my older college work as smaller/basic activities rather than presenting them as equivalent to the three Featured Projects.

For the Java activities, use the screenshots and descriptions I provide. For each activity, show the activity name, programming language, short professional description, and its screenshot.

Do not invent projects or screenshots. Keep the Featured Projects unchanged.
```

### Task 4: Certificates Section
* Result/Output: Reconstructed from the conversation summary because the original prompt was in a skipped message. The user had five certificates and requested a design different from Projects.
* Prompt used:
```text
Add a Certificates section to my existing e-portfolio without deleting or redesigning my existing sections.

I currently have 5 certificates. Present them in a unique layout that is visually different from the Projects section.

Prefer a large interactive certificate presentation rather than a generic grid. Certificates should support a large preview and, where available, the original PDF. Keep the presentation consistent with the lavender/purple portfolio identity and responsive on desktop and mobile.

Do not invent certificate information. Use the certificate files/details I provide.
```

### Task 5: Portfolio Redesign — Panda Coders Visual Reference
* Result/Output: Implemented as a visual redesign direction. The user later requested additional refinements while explicitly preserving content and functionality.
* Prompt used:
```text
REDESIGN MY EXISTING PORTFOLIO BASED ON THIS REFERENCE:

https://habib277672.github.io/Personal-Portfolio/

The reference is the 'Portfolio Website By Panda Coders.'

I want the VISUAL STYLE, LAYOUT APPROACH, TYPOGRAPHY, COMPOSITION, SPACING, AND INTERACTION STYLE of the reference adapted to my existing portfolio.

DO NOT copy the reference's content, personal information, projects, experience, testimonials, or exact text. Use it strictly as a DESIGN REFERENCE.

MOST IMPORTANT: PRESERVE MY EXISTING PORTFOLIO.

Do not delete anything, rebuild the portfolio from scratch, replace the current Laravel structure unnecessarily, remove existing sections, rewrite my information, or generate placeholder content.

Keep all existing personal information, profile photo, biography, education, projects, screenshots, programming languages, email, phone, social links, theme functionality, light/dark mode, color theme changer, and gallery functionality.

Use the Panda Coders portfolio as inspiration for a large editorial hero, prominent typography, integrated profile image, asymmetric composition, large section headings, strong project presentation, numbered projects, spacious layout, and subtle animations.

Keep my lavender/purple identity:
LIGHT MODE: warm white, pale lavender, soft purple, dark violet typography, subtle lilac accents.
DARK MODE: deep violet, near-black, neon purple, lavender highlights, subtle cyberpunk glow.

Make light mode as intentionally designed as dark mode.

Keep the existing color theme changer and light/dark mode functional.

Redesign Projects as featured works rather than generic cards. Keep my existing project screenshots and gallery functionality.

Make Certificates different from Projects. Present certificates as a horizontal swipeable carousel with previous/next controls, mobile touch swipe, a current counter, large preview, title/organization/date where available, and a way to open the original PDF when available.

Keep Education, Skills, Experience, and Contact content exactly as it exists. Do not invent skills or experience.

Add tasteful decorative elements, subtle premium animations, and responsive layouts without creating horizontal overflow.

Before editing, inspect the current portfolio structure and modify the existing implementation carefully. Do not rebuild the portfolio.

After implementation verify Home, About, Journey, Tools, Certificates, Projects, Contact, profile image, light mode, dark mode, color changer, galleries, responsiveness, and absence of console/Laravel errors.
```

### Task 6: About + Journey — Work Experience and Education
* Result/Output: Added work experience to Journey and changed About layout as requested. The user supplied three real work experiences and existing education details.
* Prompt used:
```text
Make ONLY the following changes to my existing portfolio.

Do not redesign the entire website. Do not delete or modify existing content unless specifically instructed.

Use this website as the visual/layout reference for the About/Experience/Education concept:
https://habib277672.github.io/Personal-Portfolio/?utm_source=Pinterest&utm_medium=organic#about

ABOUT:
Switch the About layout so the existing profile photo is on the LEFT and the existing About text/content is on the RIGHT. Do not change the wording or replace the profile photo.

Add a Resume button directly below/near the profile picture. Label it 'Resume' or 'View Resume'. Use the existing files in public/file/:
Alday Resume.pdf
Alday Resume.jpg
Clicking the Resume button should open the PDF in a new browser tab, using the actual existing file.

JOURNEY:
Keep the section name Journey, but combine WORK EXPERIENCE + EDUCATIONAL BACKGROUND in one visually cohesive section inspired by the Panda Coders Experience/Education presentation.

Add these exact work experiences:

Instructor / Trainer
OCTA Information Technology Services
2025 - Present
Part-Time
Responsibilities:
• Deliver engaging lessons on basic computer skills, including computer fundamentals and Microsoft Office applications.
• Guide students through hands-on activities and practical exercises to build confidence in using computers and essential software.
• Assess student progress, provide constructive feedback, and offer individualized support to improve technical skills.

Special Program for Employment of Students (SPES)
Abra Provincial Hospital - Administrative Office
April - June 2026
Responsibilities:
• Assisted in sorting, organizing, and maintaining employee records to ensure accurate and up-to-date documentation.
• Updated and verified personnel files, ensuring completeness, accuracy, and compliance with office record-keeping procedures.
• Supported leave application processing, Daily Time Record (DTR) monitoring, and payroll documentation.
• Assisted in the preparation and transmittal of hospital e-claims and other administrative documents.
• Performed data verification, document filing, and general administrative tasks while maintaining confidentiality and organization of records.

Computer Systems Servicing (CSS) NC II Trainer
DCCP - Bangued, TESDA Accredited Center
Feb - March 2026
Responsibilities:
• Facilitated intensive training for Computer Systems Servicing (CSS) NC II certification, covering computer assembly/disassembly, operating system installation, networking, and server configuration.
• Prepared students thoroughly for national assessment standards, resulting in high passing rate.
• Managed and maintained laboratory equipment, ensuring a safe and efficient practical learning environment.

Keep this education exactly:
Data Center College of the Philippines - Bangued
2023 - Present
Bachelor of Science in Information Technology
4th Year Student

Abra High School Main Campus
2021 - 2023
General Academic Strand (GAS)

Do not invent additional jobs or change education details. Keep light/dark mode, color changer, projects, certificates, contact, navigation, animations, and other existing functionality intact. Make the Journey layout responsive and visually consistent with the existing lavender/purple editorial design.
```

### Task 7: Contact Section — Remove Message Form and Add Copy Buttons
* Result/Output: Implemented as a simplified contact section after the user decided the message form was not worth keeping due to time constraints.
* Prompt used:
```text
Update ONLY my Contact section. Do not modify any other section or existing content.

Remove the visitor message form and Send Message functionality completely, including related validation/error/success UI and unused code if safe to remove.

Center the entire Contact section to match the centered alignment of my other sections.

Use this structure concept:
Reach Out
Get in Touch
Have a question, opportunity, or just want to say hello? I'd love to hear from you.

[Copy Email] [Copy Phone No.]

Email / Social Media
aiveejoyba@gmail.com / GitHub, Facebook, TikTok, Instagram, Discord
Phone Number / +639350552647
Location / Sta. Rosa, Bangued, Abra, Philippines

Add a clickable 'Copy Email' button that copies aiveejoyba@gmail.com to the visitor's clipboard using the browser Clipboard API. Show a temporary 'Email Copied' confirmation.

Add a clickable 'Copy Phone' button that copies +639350552647 to the visitor's clipboard and shows a temporary 'Phone Copied' confirmation.

Keep the existing social media links and their actual URLs. Display GitHub, Facebook, TikTok, Instagram, and Discord with recognizable icons.

Keep the lavender/purple identity, light/dark mode, color changer, animations, and responsive behavior. Use proper CSS Grid/Flexbox and avoid unnecessary empty space.

Only modify the Contact section. Test both copy buttons.
```

### Task 8: Tools I've Used — Add Technology Showcase
* Result/Output: Added a new Tools section after Journey and before Certificates with icons/logos and hover effects.
* Prompt used:
```text
Add a new section to my EXISTING portfolio called:

TOOLS I'VE USED

Subtitle:
'Technologies, platforms, and creative tools I've explored throughout my IT journey.'

This is an addition only. Do not delete, rewrite, replace, or restructure existing content or sections.

Place it AFTER Journey and BEFORE Certificates.

Use exactly these categories and tools:

PROGRAMMING & SCRIPTING
C#, VB.NET, Python, Java, HTML5, CSS3, JavaScript, SQL, PHP

DATABASES
MS Access, MySQL, SQL Server

DEVELOPMENT & VERSION CONTROL
Visual Studio, VS Code, Git, GitHub

MULTIMEDIA & UI/UX DESIGN
Photoshop, CapCut, Canva

Use recognizable/high-quality logos/icons. Each tool should show its icon and name.

Do not use proficiency percentages or progress bars. The purpose is to show technologies/software I have explored or used as an IT student.

Create a stylish technology wall/tool archive that fits the existing lavender/purple identity. Use subtle hover effects such as slight enlargement, soft glow, and smooth animation.

Keep the section attractive in both light and dark mode. Use responsive CSS Grid/Flexbox and do not introduce horizontal overflow.

Do not add other technologies. Do not break existing functionality.
```

### Task 9: Tools I've Used — Center and Balance Layout
* Result/Output: Corrective refinement after the first Tools layout was left-aligned and had excessive unused space.
* Prompt used:
```text
Fix ONLY the layout of the 'Tools I've Used' section. Do not change the content, tools, icons, colors, or any other section.

The entire Tools section is currently aligned too far to the left. Center the entire section so it matches the centered alignment of my other sections.

Center the TOOLKIT label, Tools I've Used heading, subtitle, category headings, and tool/logo items.

Remove excessive/wasted empty space. The tools should use the available width efficiently and be evenly distributed and visually balanced.

Use proper responsive CSS Grid/Flexbox instead of manually positioning individual items.

Each tool should have a consistent visual area so rows look organized and symmetrical.

Do not force every category to have the same number of columns if that creates awkward empty spaces. Automatically choose a balanced number of columns for each category.

Keep all existing tools, including PHP.

Make it responsive for desktop, tablet, and mobile.

ONLY fix alignment, spacing, and distribution. Do not make unrelated changes.
```

### Task 10: Additional Projects & Activities — Java and MS Access
* Result/Output: Added the older college activities under View More Projects. Later refined so MS Access would use one visible preview with the other screenshots inside a gallery.
* Prompt used:
```text
Add an 'Additional Projects & Activities' section below my existing 3 Featured Projects.

IMPORTANT: Do not modify my 3 Featured Projects. Keep their current layout, descriptions, screenshots, and functionality exactly as they are.

Add a 'View More Projects' button/link below the three featured projects.

Under Additional Projects & Activities, add these Java activities using actual files from public/images/:
BMI_Calculator.png
TipCalculator.png
Travel_Expenses_Calculator.png
ShoppingCart.png

Programming Language: Java.

Each Java activity has one screenshot containing source code and output. Do not create additional screenshots or placeholders. Display activity title, Java, a short professional description, and the existing screenshot.

Also add my earlier MS Access activity using:
MS_01_Login.png
MS_02_Signup.png
MS_03Mainmenu.png
MS_04_Registration.png
MS_05_SearchRec_Manage.png

Programming/Platform: Microsoft Access.

Initially implement it as an additional activity without inventing information. Keep the three Featured Projects unchanged.
```

### Task 11: Additional Projects & Activities — MS Access Gallery Correction
* Result/Output: Corrected the layout after all five MS Access screenshots were displayed simultaneously. The user wanted MS Access to look exactly like the Java activities, with one visible image and the other screenshots inside a gallery.
* Prompt used:
```text
Fix ONLY the Additional Projects & Activities section. Do not change my 3 Featured Projects or any other section.

Treat the MS Access activity exactly like the Java activities.

Keep everything together under Additional Projects & Activities. Do not create a separate MS Access section.

The activity collection should contain:
- BMI Calculator — Java
- Tip Calculator — Java
- Travel Expenses Calculator — Java
- Shopping Cart — Java
- MS Access Activity — Microsoft Access

For MS Access, use:
MS_01_Login.png
MS_02_Signup.png
MS_03Mainmenu.png
MS_04_Registration.png
MS_05_SearchRec_Manage.png

IMPORTANT: Do NOT display all five MS Access images in the main layout. Only display MS_01_Login.png as the single preview/thumbnail.

Add a clear VIEW GALLERY control. Clicking the preview or VIEW GALLERY should open the image viewer/lightbox and show all five MS Access screenshots with previous/next controls and normal close behavior.

Keep the Java activities as one-image activities. Clicking the Java image opens the larger viewer.

All five activities should have the same visual treatment. The MS Access activity must not look larger/different merely because it has five screenshots.

Keep the lavender/purple design, animations, responsive behavior, light/dark mode, and color theme changer.

Do not display the five MS Access screenshots simultaneously. Do not modify anything outside Additional Projects & Activities.
```

### Task 12: My Gallery — College Journey
* Result/Output: New feature prompt generated to add a personal 10-image swipeable gallery accessible from the About section.
* Prompt used:
```text
Add a My Gallery feature to my existing portfolio.

IMPORTANT: This is an addition only. Do not modify, delete, or rearrange existing sections, information, projects, certificates, contact details, or existing functionality.

ABOUT:
Add a clickable button below/near my profile picture:
'View My Gallery'

When clicked, open My Gallery in a modal/lightbox.

The gallery should work similarly to my existing Project Gallery:
- one large photo at a time
- previous/next buttons
- swipe left/right on mobile
- smooth transitions
- close button
- current image number, e.g. 01 / 10
- photo title below the image
- no navigation away from the About section

Use these exact files from public/images/ (preserve their actual file extensions):
01_Attending the CHED Tertiary Education Subsidy Congress
02_Pinning Ceremony
03_Passing the CSS NC II
04_Winning a Competition at School
05_With my Students in OCTA Computer Services
06_With my Research Group
07_Winning a Competition during our ITCS Day
08_Elected as the President of our Department
09_Becoming an Officer in our Department
10_During our NSTP

Use these short titles:
1. CHED Tertiary Education Subsidy Congress
2. Pinning Ceremony
3. Passing the CSS NC II Certification
4. Winning a School Competition
5. With My Students at OCTA Computer Services
6. With My Research Group
7. Winning a Competition During ITCS Day
8. Elected Department President
9. Becoming a Department Officer
10. During Our NSTP Journey

Do not invent additional information. Keep the gallery personal, elegant, and visually distinct from Projects while remaining consistent with the lavender/purple design.

Make it work in light/dark mode and responsive on desktop and mobile. Test all 10 images, next/previous navigation, touch swipe, close button, and theme compatibility.
```
