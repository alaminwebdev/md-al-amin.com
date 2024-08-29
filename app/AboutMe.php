<?php

namespace App;

class AboutMe
{
    const EDUCATION = [
        [
            'degree'        => 'Professional Web Design & Development',
            'passing_year'  => 2022,
            'session'       => '2021-2022',
            'institute'     => 'Creative IT Institute , Dhaka',
            'type'          => 'Training',
            'description'   => 'Creative IT is an institution where empowering the community with an excellent standard of learning is what they desire. They endeavour for the continuous improvement of their leaders who will work to construct a better future. '
        ],
        [
            'degree'        => 'Bachelor of Science in Computer Science and Engineering',
            'passing_year'  => 2022,
            'session'       => '2017-2021',
            'institute'     => 'Daffodil Institute of IT (DIIT)',
            'type'          => 'Education',
            'description'   => 'Daffodil Institute of IT (DIIT) became affiliated to the National University for conducting the BSc (Professional) in Computer Science and BBA programs.'
        ],
        [
            'degree'        => 'Higher Secondary Certificate (HSC)',
            'passing_year'  => 2016,
            'session'       => '2015-2016',
            'institute'     => 'Patuakhali Government College',
            'type'          => 'Education',
            'description'   => 'Patuakhali Government College is a educational institution in Patuakhali district of Barisal division.'
        ]
    ];
    const EXPERIENCE = [
        [
            'designation'       => 'Software Engineer',
            'start_date'        => '01-07-2024',
            'end_date'          => null,
            'company'           => 'Ambala IT',
            'responsibilites'   => 
                '
                    <ul>
                        <li>🛠️ Enhanced microfinance software by adding new features and fixing bugs to improve loan processing, client management, and financial reporting.</li>
                        <li>📈 Developed and automated microfinance reports, including income statements and balance sheets, ensuring accurate data analysis and compliance.</li>
                        <li>🔧 Customized microfinance tools to meet specific needs, optimizing performance and user experience.</li>
                        <li>🚀 Optimized ERP workflows by streamlining processes, resulting in improved system performance and user satisfaction.</li>
                    </ul>
                '

        ],
        [
            'designation'       => 'Full-Stack Web Developer',
            'start_date'        => '01-03-2023',
            'end_date'          => '30-06-2024',
            'company'           => 'Nano Information Technology (Nanosoft)',
            'responsibilites'   => 
                '
                    <ul>
                        <li>🚀 Leveraged my expertise in Laravel to craft web applications for seamless user experiences.</li>
                        <li>🤝 Collaborated with diverse teams, including project managers and designers, to implement features aligned with project goals using JavaScript, React.js, and AJAX.</li>
                        <li>🗄️ Managed database design and performance using MySQL, optimizing queries and ensuring data integrity.</li>
                        <li>📜 Utilized Git for version control, enabling efficient collaboration with fellow developers.</li>
                        <li>🚀 Pursued continuous learning to stay updated with the latest trends and best practices in Laravel and web development.</li>
                    </ul>
                '

        ],
        [
            'designation'       => 'Executive - Support Engineer',
            'start_date'        => '01-09-2022',
            'end_date'          => '28-02-2023',
            'company'           => 'One Sky Communications Limited',
            'responsibilites'   => 
            '
                <ul>
                    <li>🔌 Provided technical support for ISP infrastructure, routers, and switches to end-users based on requirements.</li>
                    <li>🕒 Participated in on-call rotation schedule for nights and weekends.</li>
                    <li>🤝 Coordinated with the network operation team to ensure smooth rollout plans and service delivery.</li>
                    <li>📝 Performed other duties and responsibilities as required and assigned.</li>
                </ul>
            '
        ]
    ];

    const BIO = [
        'title'     => "Explore the World of Md Alamin",
        'short_bio' => "Dedicated software engineer based in Dhaka, creating dynamic and user-friendly applications that drive innovation.",
        'long_bio'  => "I'm Md. Al Amin, a software engineer at Ambala IT. I specialize in Laravel, JavaScript, and MySQL, delivering efficient and user-focused web applications",
    ];

    const SOCIAL = [
        [
            'name' => 'facebook',
            'link' => 'https://www.facebook.com/mohammadalamin.dev',
            'icon' => 'facebookIcon'
        ],
        [
            'name' => 'linkedin',
            'link' => 'https://www.linkedin.com/in/mdalamin1998/',
            'icon' => 'linkedinIcon'
        ],
        [
            'name' => 'github',
            'link' => 'https://github.com/alaminwebdev',
            'icon' => 'githubIcon'
        ],
        [
            'name' => 'gmail',
            'link' => 'mailto:mohammadalamin.dev@gmail.com',
            'icon' => 'gmailIcon'
        ]
    ];

    const CONTACT = [
        [
            'name'  => 'Email',
            'icon'  => 'iconoir-mail',
            'infos' => ['mohammadalamin.dev@gmail.com', 'alamin80336034@gmail.com']
        ],
        [
            'name'  => 'contact',
            'icon'  => 'iconoir-phone',
            'infos' => ['+8801718695350', '+8801580336034']
        ],
        [
            'name'  => 'location',
            'icon'  => 'iconoir-pin-alt',
            'infos' => ['Dhaka, Bangladesh']
        ]
    ];

    const SKILL_DATA = [
        [
            'name' => 'PHP Framework Laravel',
            'icon' => 'Laravel-Dark.svg'
        ],
        [
            'name' => 'Javascript',
            'icon' => 'JavaScript.svg'
        ],
        [
            'name' => 'React',
            'icon' => 'React-Dark.svg'
        ],
        [
            'name' => 'PHP',
            'icon' => 'PHP-Dark.svg'
        ],
        [
            'name' => 'AJAX',
            'icon' => 'Htmx-Dark.svg'
        ],
        [
            'name' => 'jQuery',
            'icon' => 'JQuery.svg'
        ],
        [
            'name' => 'MySQL',
            'icon' => 'MySQL-Dark.svg'
        ],
        [
            'name' => 'HTML',
            'icon' => 'HTML.svg'
        ],
        [
            'name' => 'CSS',
            'icon' => 'CSS.svg'
        ],
        [
            'name' => 'Bootstrap',
            'icon' => 'Bootstrap.svg'
        ],
        [
            'name' => 'SQL',
            'icon' => 'MySQL-Dark.svg'
        ],
        [
            'name' => 'JSON',
            'icon' => 'json.svg' 
        ],
        [
            'name' => 'Version Control System (Git)',
            'icon' => 'Git.svg'
        ],
        [
            'name' => 'Postman',
            'icon' => 'Postman.svg'
        ],
        [
            'name' => 'MS Word',
            'icon' => 'Htmx-Dark.svg' 
        ],
        [
            'name' => 'Vite',
            'icon' =>'Vite-Dark.svg'
        ],
        [
            'name' => 'MS Excel',
            'icon' => 'Htmx-Dark.svg' 
        ],
        [
            'name' => 'Tailwind CSS',
            'icon' =>'TailwindCSS-Dark.svg'
        ],
        [
            'name' => 'MS Power Point',
            'icon' => 'Htmx-Dark.svg'
        ]
    ];
    
}
