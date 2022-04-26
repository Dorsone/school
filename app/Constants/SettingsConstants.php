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
    /**
     * @return array
     */
    public function menu(): array
    {
        return [
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
    }

    const CERTIFIED_TEACHERS = 'Certified Teachers';
    const SPECIAL_EDUCATION = 'Special Education';
    const BOOK_LIBRARY = 'Book & Library';
    const CERTIFICATION = 'Certification';
    /**
     * @return string[][][]
     */
    public function services(): array
    {
        return [
            "en" => [
                self::CERTIFIED_TEACHERS => ['title' => self::CERTIFIED_TEACHERS, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
                self::SPECIAL_EDUCATION => ['title' => self::SPECIAL_EDUCATION, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
                self::BOOK_LIBRARY => ['title' => self::BOOK_LIBRARY, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
                self::CERTIFICATION => ['title' => self::CERTIFICATION, 'body' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ],
            "ru" => [
                self::CERTIFIED_TEACHERS => ['title' => 'Сертифицированные Преподаватели', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
                self::SPECIAL_EDUCATION => ['title' => 'Специальное Образование', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
                self::BOOK_LIBRARY => ['title' => 'Книга & Библиотека', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
                self::CERTIFICATION => ['title' => 'Сертификация', 'body' => 'Даже всемогущее Указание не властно над слепыми текстами, оно почти орфографическое.'],
            ],
            "uz" => [
                self::CERTIFIED_TEACHERS => ['title' => "Sertifikatlangan O'qituvchilar", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
                self::SPECIAL_EDUCATION => ['title' => "Maxsus ta'lim", 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
                self::BOOK_LIBRARY => ['title' => 'Kitob & Kutubxona', 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
                self::CERTIFICATION => ['title' => 'Sertifikatlash', 'body' => "Hatto qudratli Ko'rsatkich ham ko'r matnlar ustidan hech qanday kuchga ega emas, u deyarli orfografikdir."],
            ],
        ];
    }
}
