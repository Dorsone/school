<?php

namespace App\Constants;

class SettingsConstants
{

    const HOME = 'Home';
    const ABOUT = 'About';
    const TEACHER = 'Teacher';
    const COURESES = 'Courses';
    const BLOG = 'Blog';
    const CONTACT = 'Contact';

    const CERTIFIED_TEACHERS = 'Certified Teachers';
    const SPECIAL_EDUCATION = 'Special Education';
    const BOOK_LIBRARY = 'Book & Library';
    const CERTIFICATION = 'Certification';

    const ADDRESS = 'address name';
    const EMAIL = 'yourmail@email.com';
    const PHONE = '+998971234567';
    const WEB_SITE = 'domain.com';

    const FACEBOOK = 'https://facebook.com/';
    const TWITTER = 'https://twitter.com/';
    const INSTAGRAM = 'https://instagram.com';
    const TELEGRAM = 'https://telegram.org';

    const WHAT_WE_OFFER = 'What We Offer';
    const WELCOME_TO = 'Welcome to Kiddos Learning School';

    const SAFETY_FIRST = 'Safety First';
    const REGULAR_CLASSES = 'Regular Classes';
    const CREATIVE_LESSONS = 'Creative Lessons';
    const SUFFICIENT_CLASSROOMS = 'Sufficient Classrooms';
    const SPORTS_FACILITIES = 'Sports Facilities';

    const CERTIFIED_TEACHERS_NUMBER = 18;
    const SUCCESSFUL_KIDS = 351;
    const HAPPY_PARENTS = 564;
    const AWARDS_WON = 300;

    const SOCIAL = [
        self::FACEBOOK,
        self::TWITTER,
        self::INSTAGRAM,
        self::TELEGRAM,
    ];
    const SERVICES = [
        "en" => [
            ['title' => self::SAFETY_FIRST, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::REGULAR_CLASSES, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::CERTIFIED_TEACHERS, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::SUFFICIENT_CLASSROOMS, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::CREATIVE_LESSONS, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::SPORTS_FACILITIES, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],        ],
        "ru" => [
            ['title' => 'Безопасность прежде всего', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Регулярные занятия', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Сертифицированные преподаватели', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Творческие уроки', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Достаточно учебных комнат', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Удобства для спорта', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
        ],
        "uz" => [
            ['title' => "Birinchi navbatda xavfsizlik", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => "Doimiy darslar", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => "Sertifikatlangan o'qituvchilar", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => 'Ijodiy darslar', 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => "O'quv xonalari yetarli", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => 'Sport inshootlari', 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
        ],
    ];
    const ABOUT_US = [
        'en' => [
            ['title' => self::WHAT_WE_OFFER, 'body' => 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.'],
            ['title' => self::WELCOME_TO, 'body' => 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.'],
        ],
        'uz' => [
            ['title' => 'Biz nima taklif qilamiz', 'body' => "Yo'lda u bir nusxaga duch keldi. Ko‘chirma “Kichik ko‘r matn”ni qayerdan kelgan bo‘lsa, ming marta qayta yozilishi va aslidan qolgan faqat bir so‘z bo‘lishini ogohlantirgan."],
            ['title' => "Kiddos o'quv maktabiga xush kelibsiz", 'body' => "Yo'lda u bir nusxaga duch keldi. Ko‘chirma “Kichik ko‘r matn”ni qayerdan kelgan bo‘lsa, ming marta qayta yozilishi va aslidan qolgan faqat bir so‘z bo‘lishini ogohlantirgan. Alohida, ular Semantika, buyuk til okeani qirg'og'idagi Bookmarksgroveda yashaydilar. Ularning yonidan kichik Duden daryosi oqib o'tadi va ularni kerakli regaliya bilan ta'minlaydi. Va agar u qayta yozilmasa, u hali ham ishlatiladi."],
        ],
        'ru' => [
            ['title' => 'Что мы предлагаем', 'body' => 'На своем пути она встретила копию. Копия предупреждала Маленький Слепой Текст, что там, откуда он взялся, он был бы переписан тысячу раз, и все, что осталось от его происхождения, было бы словом.'],
            ['title' => 'Добро пожаловать в школу обучения Kiddos', 'body' => 'На своем пути она встретила копию. Копия предупреждала Маленький Слепой Текст, что там, откуда он взялся, он был бы переписан тысячу раз, и все, что осталось от его происхождения, было бы словом.'],
        ]
    ];
    const PARALLAX = [
        'en' => [
            'title' => 'Teaching Your Child Some Good Manners',
            'body' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ],
        'ru' => [
            'title' => 'Научите ребенка хорошим манерам',
            'body' => 'Рядом с ними протекает небольшая речка Дуден и снабжает их необходимыми регелиями. Это райская страна, в которой в рот летят обжаренные части предложений.'
        ],
        'uz' => [
            'title' => "Farzandingizga yaxshi xulq-atvorni o'rgating",
            'body' => "Ularning yonidan kichik Duden daryosi oqib o'tadi va ularni kerakli regaliya bilan ta'minlaydi. Bu jumlalarning qovurilgan qismlari og'zingizga uchib ketadigan jannat mamlakatidir.",
        ],
    ];
    const INFO = [
        'en' => [
            'address' => [
                'title' => 'Address',
                'content' =>  self::ADDRESS,
            ],
            'contact' => [
                'title' => 'Contact Number',
                'content' => self::PHONE,
            ],
            'email' => [
                'title'=> 'Email Address',
                'content' => self::EMAIL,

            ],
            'website' => [
                'title' => 'Website',
                'content' => self::WEB_SITE
            ]
        ],
        'ru' => [
            'address' => [
                'title' => 'Адрес',
                'content' =>  self::ADDRESS,
            ],
            'contact' => [
                'title' => 'Телефон',
                'content' => self::PHONE,
            ],
            'email' => [
                'title'=> 'Email Адресс',
                'content' => self::EMAIL,

            ],
            'website' => [
                'title' => 'Сайт',
                'content' => self::WEB_SITE
            ]
        ],
        'uz' => [
            'address' => [
                'title' => 'Manzil',
                'content' =>  self::ADDRESS,
            ],
            'contact' => [
                'title' => 'Telefon raqami',
                'content' => self::PHONE,
            ],
            'email' => [
                'title'=> 'Email Manzil',
                'content' => self::EMAIL,

            ],
            'website' => [
                'title' => 'Websayt',
                'content' => self::WEB_SITE
            ]
        ],
    ];
    const MAIN_SERVICES = [
        "en" => [
            ['title' => self::CERTIFIED_TEACHERS, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::SPECIAL_EDUCATION, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::BOOK_LIBRARY, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['title' => self::CERTIFICATION, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
        ],
        "ru" => [
            ['title' => 'Сертифицированные Преподаватели', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Специальное Образование', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Книга & Библиотека', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ['title' => 'Сертификация', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
        ],
        "uz" => [
            ['title' => "Sertifikatlangan O'qituvchilar", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => "Maxsus ta'lim", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => 'Kitob & Kutubxona', 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ['title' => 'Sertifikatlash', 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
        ],
    ];
    const MENU = [
        'en' => [
            self::HOME,
            self::ABOUT,
            self::TEACHER,
            self::COURESES,
            self::BLOG,
            self::CONTACT,
        ],
        'ru' => [
            self::HOME => 'Главная',
            self::ABOUT => 'О нас',
            self::TEACHER => 'Учителя',
            self::COURESES => 'Уроки',
            self::BLOG => 'Новости',
            self::CONTACT => 'Контакты',
        ],
        'uz' => [
            self::HOME => 'Bosh sahifa',
            self::ABOUT => 'Biz haqimizda',
            self::TEACHER => "O'qituvchilar",
            self::COURESES => 'Darslar',
            self::BLOG => 'Yangiliklar',
            self::CONTACT => 'Kontaktlar',
        ]
    ];
    const SECTIONS = [
        'teachers' => [
            'en' => [
                'title' => 'Certified Teachers',
                'body' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
            ],
            'ru' => [
                'title' => 'Сертифицированные преподаватели',
                'body' => 'Они живут раздельно. Рядом с их местом протекает небольшая речка Дуден, которая снабжает его необходимыми регелиями. Это райская страна',
            ],
            'uz' => [
                'title' => "Sertifikatlangan o'qituvchilar",
                'body' => "Ular alohida yashaydilar. Ularning joyi yaqinida kichik Duden daryosi oqib o'tadi, u uni kerakli regaliya bilan ta'minlaydi. Bu jannat mamlakati",
            ]
        ],
        'courses' => [
            'en' => [
                'title' => 'Our Courses',
                'body' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
            ],
            'ru' => [
                'title' => 'Наши курсы',
                'body' => 'Они живут раздельно. Рядом с их местом протекает небольшая речка Дуден, которая снабжает его необходимыми регелиями. Это райская страна',
            ],
            'uz' => [
                'title' => "Bizning Kurslarimiz",
                'body' => "Ular alohida yashaydilar. Ularning joyi yaqinida kichik Duden daryosi oqib o'tadi, u uni kerakli regaliya bilan ta'minlaydi. Bu jannat mamlakati",
            ]
        ],
        'reviews' => [
            'en' => [
                'title' => 'What Parents Says About Us',
                'body' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
            ],
            'ru' => [
                'title' => 'Что родители говорят о нас',
                'body' => 'Они живут раздельно. Рядом с их местом протекает небольшая речка Дуден, которая снабжает его необходимыми регелиями. Это райская страна',
            ],
            'uz' => [
                'title' => "Ota-onalar Biz haqimizda nima deydi",
                'body' => "Ular alohida yashaydilar. Ularning joyi yaqinida kichik Duden daryosi oqib o'tadi, u uni kerakli regaliya bilan ta'minlaydi. Bu jannat mamlakati",
            ]
        ],
        'experience' => [
            'en' => [
                'title' => "20 Years of Experience",
                'body' => "Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country",
                'content' => [
                    'Certified Teachers' => self::CERTIFIED_TEACHERS_NUMBER,
                    'Successful Kids' => self::SUCCESSFUL_KIDS,
                    'Happy Parents' => self::HAPPY_PARENTS,
                    'Awards Won' => self::AWARDS_WON,
                ],
            ],
            'ru' => [
                'title' => "20 Лет Опыта",
                'body' => "Они живут раздельно. Рядом с их местом протекает небольшая речка Дуден, которая снабжает его необходимыми регелиями. Это райская страна",
                'content' => [
                    'Сертифицированные преподаватели' => self::CERTIFIED_TEACHERS_NUMBER,
                    'Успешные дети' => self::SUCCESSFUL_KIDS,
                    'Счастливые родители' => self::HAPPY_PARENTS,
                    'Выигранные награды' => self::AWARDS_WON,
                ],
            ],
            'uz' => [
                'title' => "20 Yillik Tajriba",
                'body' => "Ular bir-biridan ajralgan holda yashaydilar. Ularning joyidan Duden ismli kichik daryo oqib o'tadi va uni zarur regelialiya bilan ta'minlaydi. Bu jannatli mamlakat",
                'content' => [
                    "Sertifikatlangan o'qituvchilar" => self::CERTIFIED_TEACHERS_NUMBER,
                    'Muvaffaqiyatli bolalar' => self::SUCCESSFUL_KIDS,
                    'Baxtli Ota-onalar' => self::HAPPY_PARENTS,
                    "Mukofotlar qo'lga kiritildi" => self::AWARDS_WON,
                ],
            ],
        ],
        'request' => [
            'en' => [
                'title' => "Request A Quote",
                'body' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.",
                'content' => [
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'course_name' => 'Select Your Class',
                    'phone' => 'Phone',
                    'message' => 'Message',
                ],
            ],
            'ru' => [
                'title' => "Оставить отзыв",
                'body' => "Далеко-далеко, за словесными горами, вдали от стран Vokalia и Consonantia живут слепые тексты.",
                'content' => [
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'course_name' => 'Выберите ваш класс',
                    'phone' => 'Тел. номер',
                    'message' => 'Сообщение',
                ],
            ],
            'uz' => [
                'title' => "Fikr qoldirish",
                'body' => "Uzoqda, uzoqda, og'zaki tog'lardan tashqarida, Vokaliya va Konsonantiya mamlakatlaridan uzoqda, ko'r matnlar yashaydi.",
                'content' => [
                    'first_name' => 'Ism',
                    'last_name' => 'Familiya',
                    'course_name' => 'Sinfingizni tanlang',
                    'phone' => 'Tel. raqam',
                    'message' => 'Xabar',
                ],
            ],
        ],
        'footer' => [
            'have_que' => [
                'en' => 'Have a Questions?',
                'ru' => 'Есть вопросы?',
                'uz' => "Savollaringiz bormi?",
            ],
            'recent_blog'=> [
                'en' => 'Recent Blog',
                'ru' => 'Последние новости',
                'uz' => "So'nggi yangiliklar"
            ],
            'subscribe' => [
                'en' => [
                    'title' => 'Subscribe Us!',
                    'enter' => 'Enter email address',
                    'sub' => 'Subscribe',
                    'connect' => 'Connect With Us',
                ],
                'ru' => [
                    'title' => 'Подпишитесь на нас!',
                    'enter' => 'Введите email',
                    'sub' => 'Подписаться',
                    'connect' => 'Связаться с нами',
                ],
                'uz' => [
                    'title' => "Bizga obuna bo'ling!",
                    'enter' => "Email manzilini kiriting",
                    'sub' => "Obuna bo'ling",
                    'connect' => "Biz bilan bog'laning",
                ],
            ],
        ]
    ];



}
