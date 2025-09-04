<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Data statis untuk kursus (sebagai contoh)
        $courses = [
            [
                'id' => 1,
                'title' => 'Machine Learning Dasar',
                'slug' => 'machine-learning-dasar',
                'description' => 'Pelajari fundamental machine learning dengan Python dan scikit-learn.',
                'price' => 'Gratis',
                'rating' => 4.5,
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'category' => 'Machine Learning',
                'platform' => 'Coursera',
                'level' => 'Pemula',
                'duration' => '6 minggu'
            ],
            [
                'id' => 2,
                'title' => 'Deep Learning dengan TensorFlow',
                'slug' => 'deep-learning-tensorflow',
                'description' => 'Bangun model neural network untuk computer vision dan NLP.',
                'price' => 'Rp 199.000',
                'rating' => 4.0,
                'image' => 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'category' => 'Deep Learning',
                'platform' => 'Udemy',
                'level' => 'Menengah',
                'duration' => '8 minggu'
            ],
            [
                'id' => 3,
                'title' => 'Computer Vision dengan OpenCV',
                'slug' => 'computer-vision-opencv',
                'description' => 'Pelajari pengolahan gambar dan video untuk aplikasi AI.',
                'price' => 'Rp 149.000',
                'rating' => 5.0,
                'image' => 'https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'category' => 'Computer Vision',
                'platform' => 'Dicoding',
                'level' => 'Menengah',
                'duration' => '10 minggu'
            ]
        ];

        $articles = [
            [
                'title' => '10 Tren AI yang Perlu Anda Ketahui di 2023',
                'slug' => '10-tren-ai-2023',
                'excerpt' => 'Pelajari perkembangan terbaru dalam dunia kecerdasan buatan yang akan mengubah industri.',
                'category' => 'Trending',
                'date' => '5 Juni 2023',
                'image' => 'https://images.unsplash.com/photo-1677442135135-416f8aa26a5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Tips Python untuk Data Science',
                'slug' => 'tips-python-data-science',
                'excerpt' => 'Optimalkan kode Python Anda untuk analisis data dan machine learning.',
                'category' => 'Python',
                'date' => '28 Mei 2023',
                'image' => 'https://images.unsplash.com/photo-1526379879527-8559ecfcaec0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
            ]
        ];

        return view('home', compact('courses', 'articles'));
    }
    
    public function courses()
    {
        // Data statis untuk semua kursus
        $courses = [
            // ... (data kursus yang lebih lengkap)
        ];
        
        $categories = ['Machine Learning', 'Deep Learning', 'Computer Vision', 'NLP', 'Data Science'];
        
        return view('courses.index', compact('courses', 'categories'));
    }
    
    public function courseShow($slug)
    {
        // Data statis untuk detail kursus
        $course = [
            'title' => 'Machine Learning Dasar',
            'slug' => 'machine-learning-dasar',
            'description' => 'Kursus ini membahas fundamental machine learning dengan Python dan scikit-learn. Anda akan mempelajari algoritma-algoritma dasar, preprocessing data, dan evaluasi model.',
            'full_description' => '<p>Kursus Machine Learning Dasar dirancang untuk pemula yang ingin memahami konsep-konsep fundamental dalam machine learning. Materi mencakup:</p>
                                <ul>
                                    <li>Pengenalan Machine Learning</li>
                                    <li>Preprocessing Data</li>
                                    <li>Algoritma Supervised Learning</li>
                                    <li>Algoritma Unsupervised Learning</li>
                                    <li>Evaluasi Model</li>
                                </ul>',
            'price' => 'Gratis',
            'original_price' => 'Rp 299.000',
            'rating' => 4.5,
            'students' => 12500,
            'duration' => '6 minggu',
            'level' => 'Pemula',
            'platform' => 'Coursera',
            'instructor' => 'Dr. Andi Wijaya',
            'instructor_bio' => 'Data Scientist dengan pengalaman 10 tahun di industri AI dan Machine Learning',
            'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'what_you_will_learn' => [
                'Konsep dasar Machine Learning',
                'Membangun model pertama Anda',
                'Evaluasi dan improvement model',
                'Aplikasi praktis dalam industri'
            ]
        ];
        
        return view('courses.show', compact('course'));
    }
    
    public function articles()
    {
        // Data statis untuk artikel
        $articles = [
            // ... (data artikel)
        ];
        
        return view('articles.index', compact('articles'));
    }
    
    public function articleShow($slug)
    {
        // Data statis untuk detail artikel
        $article = [
            'title' => '10 Tren AI yang Perlu Anda Ketahui di 2023',
            'slug' => '10-tren-ai-2023',
            'content' => '<h2>Pengenalan</h2>
                        <p>Artificial Intelligence terus berkembang dengan pesat. Tahun 2023 membawa berbagai tren baru yang akan membentuk masa depan teknologi.</p>
                        
                        <h2>Tren 1: Generative AI</h2>
                        <p>Generative AI seperti GPT-4 dan DALL-E terus mengubah cara kita berinteraksi dengan teknologi...</p>
                        
                        <h2>Tren 2: AI Ethics</h2>
                        <p>Isu etika dalam AI semakin mendapatkan perhatian dengan fokus pada fairness, accountability, dan transparency...</p>',
            'category' => 'Trending',
            'date' => '5 Juni 2023',
            'author' => 'Budi Santoso',
            'author_title' => 'AI Researcher',
            'image' => 'https://images.unsplash.com/photo-1677442135135-416f8aa26a5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'read_time' => '5 min read'
        ];
        
        return view('articles.show', compact('article'));
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }
}