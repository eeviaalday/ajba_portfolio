<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolio = [
        'name' => 'Aivee Joy Bañez Alday',
        'title' => 'BSIT Student (4th Year)',
        'tagline' => 'Adaptable and goal-oriented IT student with strong leadership, communication, and problem-solving skills.',
        'email' => 'aiveejoyba@gmail.com',
        'phone' => '+639350552647',
        'location' => 'Sta. Rosa, Bangued, Abra, Philippines',
        'social' => [
            'github' => 'https://github.com/eeviaalday',
            'facebook' => 'https://www.facebook.com/eevialday24',
            'tiktok' => 'https://www.tiktok.com/@2ivcrafts?_r=1&_t=ZS-99B80qeFMH9',
            'instagram' => 'https://www.instagram.com/veexoxo24?igsi=MTR4bGk2b2d1ZG9sOQ==',
            'discord' => 'https://discord.com/users/1448612152842653800',
        ],
        'gallery' => [
            ['title' => 'CHED Tertiary Education Subsidy Congress', 'image' => 'images/01_Attending the CHED Tertiary Education Subsidy Congress.jpg'],
            ['title' => 'Pinning Ceremony', 'image' => 'images/02_Pinning Ceremony.jpg'],
            ['title' => 'Passing the CSS NC II Certification', 'image' => 'images/03_Passing the CSS NC II.jpeg'],
            ['title' => 'Winning a School Competition', 'image' => 'images/04_Winning a Competition at School.jpeg'],
            ['title' => 'With My Students at OCTA Computer Services', 'image' => 'images/05_With my Students in OCTA Computer Services.jpg'],
            ['title' => 'With My Research Group', 'image' => 'images/06_With my Research Group.jpg'],
            ['title' => 'Winning a Competition During ITCS Day', 'image' => 'images/07_Winning a Competition during our ITCS Day.jpg'],
            ['title' => 'Elected Department President', 'image' => 'images/08_Elected as the President of our Department.jpeg'],
            ['title' => 'Becoming a Department Officer', 'image' => 'images/09_Becoming an Officer in our Department.jpeg'],
            ['title' => 'During Our NSTP Journey', 'image' => 'images/10_During our NSTP.jpeg'],
        ],
        'bio' => 'Adaptable and goal-oriented fourth-year Bachelor of Science in Information Technology (BSIT) student with strong leadership, communication, and problem-solving skills. Experienced as a Technical Instructor with a background in video editing, computer troubleshooting, and network configuration.',
        'bio_extra' => 'Eager to apply technical knowledge, learn from industry professionals, and contribute effectively during On-the-Job Training.',
        'experience' => [
            [
                'title' => 'Instructor / Trainer',
                'company' => 'OCTA Information Technology Services',
                'year' => '2025 - Present',
                'type' => 'Part-Time',
                'responsibilities' => [
                    'Deliver engaging lessons on basic computer skills, including computer fundamentals and Microsoft Office applications.',
                    'Guide students through hands-on activities and practical exercises to build confidence in using computers and essential software.',
                    'Assess student progress, provide constructive feedback, and offer individualized support to improve technical skills.',
                ],
            ],
            [
                'title' => 'Special Program for Employment of Students (SPES)',
                'company' => 'Abra Provincial Hospital - Administrative Office',
                'year' => 'April - June 2026',
                'type' => '',
                'responsibilities' => [
                    'Assisted in sorting, organizing, and maintaining employee records to ensure accurate and up-to-date documentation.',
                    'Updated and verified personnel files, ensuring completeness, accuracy, and compliance with office record-keeping procedures.',
                    'Supported leave application processing, Daily Time Record (DTR) monitoring, and payroll documentation.',
                    'Assisted in the preparation and transmittal of hospital e-claims and other administrative documents.',
                    'Performed data verification, document filing, and general administrative tasks while maintaining confidentiality and organization of records.',
                ],
            ],
            [
                'title' => 'Computer Systems Servicing (CSS) NC II Trainer',
                'company' => 'DCCP - Bangued, TESDA Accredited Center',
                'year' => 'Feb - March 2026',
                'type' => '',
                'responsibilities' => [
                    'Facilitated intensive training for Computer Systems Servicing (CSS) NC II certification, covering computer assembly/disassembly, operating system installation, networking, and server configuration.',
                    'Prepared students thoroughly for national assessment standards, resulting in high passing rate.',
                    'Managed and maintained laboratory equipment, ensuring a safe and efficient practical learning environment.',
                ],
            ],
        ],
        'education' => [
            [
                'school' => 'Data Center College of the Philippines - Bangued',
                'degree' => 'Bachelor of Science in Information Technology',
                'year' => '2023 - Present',
                'description' => '4th year student',
                'status' => 'current',
            ],
            [
                'school' => 'Abra High School Main Campus',
                'degree' => 'General Academic Strand (GAS)',
                'year' => '2021 - 2023',
                'description' => 'Senior High School graduate',
                'status' => 'completed',
            ],
        ],
        'projects' => [
            [
                'title' => 'Beauty Parlor Management System',
                'language' => 'Visual Basic .NET',
                'description' => 'A desktop-based management application designed to organize the day-to-day operations of a beauty parlor. The system includes interfaces for managing customers, services, inventory, and reports, supported by a login screen and dashboard. It was developed using Visual Basic .NET.',
                'cover' => 'images/BeautyParlorManagementSystem_01_Login.png',
                'screenshots' => [
                    ['image' => 'images/BeautyParlorManagementSystem_01_Login.png', 'label' => 'Login'],
                    ['image' => 'images/BeautyParlorManagementSystem_02_Dashboard.png', 'label' => 'Dashboard'],
                    ['image' => 'images/BeautyParlorManagementSystem_03_Customers.png', 'label' => 'Customers'],
                    ['image' => 'images/BeautyParlorManagementSystem_04_Services.png', 'label' => 'Services'],
                    ['image' => 'images/BeautyParlorManagementSystem_05_Inventory.png', 'label' => 'Inventory'],
                    ['image' => 'images/BeautyParlorManagementSystem_06_Reports.png', 'label' => 'Reports'],
                ],
            ],
            [
                'title' => 'Flower Shop Management System',
                'language' => 'C#',
                'description' => 'A management application designed for a flower shop, with separate areas for customers and administrators. The system includes a home interface, customer dashboard, admin dashboard, and order management screens. It was developed using C#.',
                'cover' => 'images/FlowerShopManagementSystem_01_Login.png',
                'screenshots' => [
                    ['image' => 'images/FlowerShopManagementSystem_01_Login.png', 'label' => 'Login'],
                    ['image' => 'images/FlowerShopManagementSystem_02_Home.png', 'label' => 'Home'],
                    ['image' => 'images/FlowerShopManagementSystem_03_CustomerDashboard.png', 'label' => 'Customer Dashboard'],
                    ['image' => 'images/FlowerShopManagementSystem_04_Admindashboard.png', 'label' => 'Admin Dashboard'],
                    ['image' => 'images/FlowerShopManagementSystem_05_OrderManagement.png', 'label' => 'Order Management'],
                ],
            ],
            [
                'title' => 'RHU Management System',
                'language' => 'C#',
                'description' => 'A management application designed to support the operations of a Rural Health Unit (RHU). The system includes a dashboard, patient registration, account management, and backup and restore functions, with a login interface for accessing the application. It was developed using C#.',
                'cover' => 'images/RHUManagementSystem_01_Login.png',
                'screenshots' => [
                    ['image' => 'images/RHUManagementSystem_01_Login.png', 'label' => 'Login'],
                    ['image' => 'images/RHUManagementSystem_02_Dashboard.png', 'label' => 'Dashboard'],
                    ['image' => 'images/RHUManagementSystem_03_PatientRegistration.png', 'label' => 'Patient Registration'],
                    ['image' => 'images/RHUManagementSystem_04_AccountManagement.png', 'label' => 'Account Management'],
                    ['image' => 'images/RHUManagementSystem_05_Backup&Restore.png', 'label' => 'Backup & Restore'],
                ],
            ],
        ],
        'additional_projects' => [
            'java' => [
                [
                    'title' => 'BMI Calculator',
                    'language' => 'Java',
                    'description' => 'A console-based application that calculates Body Mass Index from user-input height and weight, displaying the corresponding health category.',
                    'image' => 'images/01_BMI_Calculator.png',
                ],
                [
                    'title' => 'Tip Calculator',
                    'language' => 'Java',
                    'description' => 'A simple utility that computes the suggested tip amount and total bill based on the entered bill total and desired tip percentage.',
                    'image' => 'images/02_TipCalculator.png',
                ],
                [
                    'title' => 'Travel Expenses Calculator',
                    'language' => 'Java',
                    'description' => 'A program that tallies and summarizes travel-related costs such as transportation, accommodation, and meals into a total expense report.',
                    'image' => 'images/03_Travel_Expenses_Calculator.png',
                ],
                [
                    'title' => 'Shopping Cart',
                    'language' => 'Java',
                    'description' => 'A console-based shopping cart simulation that allows users to add items, specify quantities, and compute the total cost.',
                    'image' => 'images/04_ShoppingCart.png',
                ],
            ],
            'msaccess' => [
                'title' => 'Microsoft Access Database System',
                'language' => 'Microsoft Access',
                'description' => 'A database application featuring user authentication, record management, and search functionality built with Microsoft Access forms and queries.',
                'screenshots' => [
                    ['image' => 'images/MS_01_Login.png', 'label' => 'Login'],
                    ['image' => 'images/MS_02_Signup.png', 'label' => 'Sign Up'],
                    ['image' => 'images/MS_03_Mainmenu.png', 'label' => 'Main Menu'],
                    ['image' => 'images/MS_04_Registration.png', 'label' => 'Registration'],
                    ['image' => 'images/MS_05_SearchRec_Manage.png', 'label' => 'Search & Manage Records'],
                ],
            ],
        ],
        'certificates' => [
            [
                'title' => 'Computer Systems Servicing NC II',
                'issuer' => 'TESDA',
                'date' => 'September 2025',
                'image' => 'certificates/Certificate_01_CSS NC2 - TESDA.png',
                'pdf' => 'certificates/Certificate_01_CSS NC2 - TESDA.pdf',
                'description' => 'National certification covering front-end web development, networking, and system servicing skills.',
            ],
            [
                'title' => 'ICT Career Prep Essentials',
                'issuer' => 'DICT',
                'date' => 'June 2025',
                'image' => 'certificates/Certificate_02_ICT Career Prep Essentials - DICT.png',
                'pdf' => 'certificates/Certificate_02_ICT Career Prep Essentials - DICT.pdf',
                'description' => 'Training on ICT career pathways, workplace readiness, and professional development.',
            ],
            [
                'title' => 'Data Analytics and Visualization Essentials',
                'issuer' => 'DICT',
                'date' => 'December 2025',
                'image' => 'certificates/Certificate_03_Data Analytics and Visualization Essentials - DICT.png',
                'pdf' => 'certificates/Certificate_03_Data Analytics and Visualization Essentials - DICT.pdf',
                'description' => 'Fundamentals of data analytics, interpretation, and visualization techniques.',
            ],
            [
                'title' => 'Online Safety Through Netiquette',
                'issuer' => 'DICT',
                'date' => 'July 2026',
                'image' => 'certificates/Certificate_04_Online Safety Through Netiquette - DICT.png',
                'pdf' => 'certificates/Certificate_04_Online Safety Through Netiquette - DICT.pdf',
                'description' => 'Online safety awareness and proper digital etiquette practices.',
            ],
            [
                'title' => 'Stay Alert, Stay Secure: Promoting Cyber Awareness',
                'issuer' => 'CHED',
                'date' => 'July 2026',
                'image' => 'certificates/Certificate_05_Stay Alert, Sptay Secure Promoting Cyber Awareness.png',
                'pdf' => 'certificates/Certificate_05_Stay Alert, Sptay Secure Promoting Cyber Awareness.pdf',
                'description' => 'Cybersecurity awareness training on threat prevention and safe online behavior.',
            ],
        ],
        'tools' => [
            'Programming & Scripting' => [
                ['name' => 'C#',       'icon' => '<svg viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="5" fill="#68217A"/><text x="12" y="16.5" text-anchor="middle" fill="#fff" font-family="system-ui,sans-serif" font-size="9" font-weight="700">C#</text></svg>'],
                ['name' => 'VB.NET',    'icon' => '<svg viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="5" fill="#953024"/><text x="12" y="16" text-anchor="middle" fill="#fff" font-family="system-ui,sans-serif" font-size="7.5" font-weight="700">VB</text></svg>'],
                ['name' => 'Python',    'icon' => '<i class="fab fa-python" style="color:#3776AB"></i>'],
                ['name' => 'Java',      'icon' => '<i class="fab fa-java" style="color:#E76F00"></i>'],
                ['name' => 'HTML5',     'icon' => '<i class="fab fa-html5" style="color:#E34F26"></i>'],
                ['name' => 'CSS3',      'icon' => '<i class="fab fa-css3-alt" style="color:#1572B6"></i>'],
                ['name' => 'JavaScript','icon' => '<i class="fab fa-js" style="color:#F7DF1E"></i>'],
                ['name' => 'PHP',       'icon' => '<i class="fab fa-php" style="color:#777BB4"></i>'],
                ['name' => 'SQL',       'icon' => '<svg viewBox="0 0 24 24" fill="none"><ellipse cx="12" cy="6" rx="9" ry="4" fill="#2563EB"/><path d="M3 6v6c0 2.2 4 4 9 4s9-1.8 9-4V6" fill="#3B82F6"/><path d="M3 12v6c0 2.2 4 4 9 4s9-1.8 9-4v-6" fill="#2563EB"/><text x="12" y="15.5" text-anchor="middle" fill="#fff" font-family="system-ui,sans-serif" font-size="5.5" font-weight="700">SQL</text></svg>'],
            ],
            'Databases' => [
                ['name' => 'MS Access', 'icon' => '<svg viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="5" fill="#B8461B"/><text x="12" y="16.5" text-anchor="middle" fill="#fff" font-family="system-ui,sans-serif" font-size="11" font-weight="700">A</text></svg>'],
                ['name' => 'MySQL',     'icon' => '<svg viewBox="0 0 24 24" fill="none"><path d="M12 3C8.5 3 5 5 5 5v2s1.5-1.5 3-2c.8-.3 1.8-.5 4-.5s3.2.2 4 .5c1.5.5 3 2 3 2V5S15.5 3 12 3z" fill="#00758F"/><path d="M5 7v4c0 2 3 3.5 7 3.5S19 13 19 11V7" stroke="#00758F" stroke-width="1.5" fill="none"/><path d="M5 11v4c0 2 3 3.5 7 3.5s7-1.5 7-3.5v-4" fill="#00618A"/><ellipse cx="12" cy="11" rx="6.5" ry="2.5" fill="#009CA6"/><path d="M5.5 7.5S8 9.5 12 9.5 18.5 7.5 18.5 7.5" stroke="#fff" stroke-width=".7" fill="none" opacity=".4"/></svg>'],
                ['name' => 'SQL Server','icon' => '<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="4" fill="#CC2927"/><text x="12" y="15.5" text-anchor="middle" fill="#fff" font-family="system-ui,sans-serif" font-size="7" font-weight="700">SS</text></svg>'],
            ],
            'Development & Version Control' => [
                ['name' => 'Visual Studio','icon' => '<svg viewBox="0 0 24 24" fill="none"><path d="M4 4l7 8-7 8h4l7-8-7-8H4z" fill="#A855F7"/><path d="M13 4l7 8-7 8h4l7-8-7-8h-4z" fill="#7C3AED"/></svg>'],
                ['name' => 'VS Code',   'icon' => '<svg viewBox="0 0 24 24" fill="none"><path d="M17 3L7 11l10 8v-4l-5-4 5-4V3z" fill="#007ACC"/><path d="M7 11l-3 2.5L7 16v-5z" fill="#1F9CF0"/><path d="M17 3v4l-5 4 5 4v4" stroke="#007ACC" stroke-width="1.2" fill="none"/></svg>'],
                ['name' => 'Git',        'icon' => '<svg viewBox="0 0 24 24" fill="none"><path d="M21.6 11.4L12.6 2.4a1 1 0 00-1.4 0L9.2 4.4l1.8 1.8a1.5 1.5 0 011.9 2.2l1.6 1.6a1.5 1.5 0 012.2 1.9l1.5 1.5a1.5 1.5 0 010 2.1l-.3.3v.2a1.5 1.5 0 01-2.1 0l-1.5-1.5a1.5 1.5 0 01-1.9-2.2l-1.6-1.6a1.5 1.5 0 01-2.2-1.9L7.8 7.2a1 1 0 00-.7-.3H4.8a1 1 0 00-1 1v3a1 1 0 00.3.7l8.9 8.9a1 1 0 001.4 0l8.9-8.9a1 1 0 00.3-.7v-2a1 1 0 00-.4-.8z" fill="#F05032"/></svg>'],
                ['name' => 'GitHub',     'icon' => '<svg viewBox="0 0 24 24" fill="none"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.61.07-.61 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.34 1.08 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.12 2.51.34 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z" fill="#F0F6FC"/></svg>'],
            ],
            'Multimedia & UI/UX Design' => [
                ['name' => 'Photoshop', 'icon' => '<svg viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="5" fill="#001E36"/><text x="12" y="16.5" text-anchor="middle" fill="#31A8FF" font-family="system-ui,sans-serif" font-size="9" font-weight="700">Ps</text></svg>'],
                ['name' => 'CapCut',    'icon' => '<svg viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="5" fill="#1A1A1A"/><path d="M8 7l4 5-4 5M13 7l4 5-4 5" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ['name' => 'Canva',     'icon' => '<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="11" fill="#00C4CC"/><path d="M7 15c0-3 2-6 5-6s5 3 5 6" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>'],
            ],
        ],
    ];

    return view('portfolio', compact('portfolio'));
});
