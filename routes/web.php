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
    ];

    return view('portfolio', compact('portfolio'));
});
