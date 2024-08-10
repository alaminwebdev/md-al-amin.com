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
            'designation'       => 'Full-Stack Web Developer',
            'start_date'        => '01-03-2023',
            'end_date'          => null,
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
        'title'     => "Hi There! Welcome to My Professional World",
        'short_bio' => "I'm Md. Al Amin, a skilled full-stack web developer specializing in creating dynamic and user-friendly web applications.",
        'long_bio'  => "I'm Md. Al Amin, a full-stack developer with over a year of experience. I excel in crafting seamless web experiences using Laravel for robust back-end development and JavaScript for dynamic front-end interfaces. Proficient in MySQL, Git, and CSS. Skilled in AJAX for dynamic web interactions, dedicated to delivering polished applications with smooth user experiences.",
    ];

    const SOCIAL = [
        [
            'name' => 'facebook',
            'link' => 'https://www.facebook.com/mohammadalamin.dev',
            'icon' => 'iconoir-facebook'
        ],
        [
            'name' => 'linkedin',
            'link' => 'https://www.linkedin.com/in/mdalamin1998/',
            'icon' => 'iconoir-linkedin'
        ],
        [
            'name' => 'github',
            'link' => 'https://github.com/alaminwebdev',
            'icon' => 'iconoir-github'
        ],
        [
            'name' => 'gmail',
            'link' => 'mohammadalamin.dev@gmail.com',
            'icon' => 'iconoir-mail'
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

    const SKILL = ['PHP Framework Laravel', 'Javascript', 'React', 'PHP', 'AJAX', 'jQuery', 'MySQL', 'CSS', 'Bootstrap', 'SQL', 'JSON', 'Version Control System (Git)', 'Postman', 'MS Word', 'MS Excel', 'MS  Power Point'];

    const SKILL_ICON = [
        'Laravel-Dark.svg',
        'PHP-Dark.svg',
        'JavaScript.svg',
        'React-Dark.svg',
        'JQuery.svg',
        'MySQL-Dark.svg',
        'Bootstrap.svg',
        'CSS.svg',
        'HTML.svg',
        'Htmx-Dark.svg',
        'Photoshop.svg',
        'Git.svg',
        'Github-Dark.svg',
        'GitLab-Dark.svg',
        'BitBucket-Light.svg',
        'Postman.svg',
        'TailwindCSS-Dark.svg',
        'Vite-Dark.svg',
        'VSCode-Dark.svg'
    ];
}
