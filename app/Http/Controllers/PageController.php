<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($credentials['username'] === 'yanto' && $credentials['password'] === '123') {

             $request->session()->put('username', $credentials['username']);
             return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password tidak valid.',
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username', 'Mahasiswa');
        $tasks = [
            [
                'type' => 'Prioritize Task',
                'done' => 23,
                'total' => 34
            ],
            [
                'type' => 'Upcoming Task',
                'done' => 3,
                'total' => 34
            ],
            [
                'type' => 'Overdue Task',
                'done' => 10,
                'total' => 34
            ],
            [
                'type' => 'Pending Task',
                'done' => 2,
                'total' => 34
            ],
        ];
        $recentlyVisit = [
            [
                'title' => 'Design System',
                'category' => 'Design Project',
                'desc' => 'a collection of components, rules, and guidelines that can be used repeatedly to create consistent digital products.'],
            [
                'title' => 'Concept Analysis and Application',
                'category' => 'Essay Assignment',
                'desc' => 'Answer narratively and analytically based on theoretical concepts and real examples in the world of information technology-based business.'],
            [
                'title' => 'UTS Laravel Website',
                'category' => 'Website Project',
                'desc' => 'Laravel is a web application framework with expressive, elegant syntax.'],
        ];
        return view('dashboard', compact('username','tasks','recentlyVisit'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->session()->get('username', 'Mahasiswa');
        $tugas = [
            [
                'judul' => 'Tugas UTS Laravel',
                'deadline' => '23 Oktober 2025',
                'status' => 'Priority Task',
                'deskripsi' => 'Membuat Front end website',
            ],
            [
                'judul' => 'Tugas Ideate UI/UX Design',
                'deadline' => '17 Oktober 2025',
                'status' => 'Overdue Task',
                'deskripsi' => 'Prioritize Idea, use case diagram, and Wireframing',
            ],
            [
                'judul' => 'Tugas Arsitektur Komputer',
                'deadline' => '28 Oktober 2025',
                'status' => 'Priority Task',
                'deskripsi' => 'TOGAF',
            ],
            [
                'judul' => 'Tugas Essay MKWU',
                'deadline' => '28 November 2025',
                'status' => 'Upcoming Task',
                'deskripsi' => 'tulis essay 1000 kata',
            ],
        ];
        return view('pengelolaan', compact('username', 'tugas'));
    }

    public function profile(Request $request)
    {
        $username = $request->session()->get('username', 'Mahasiswa');
        $data = [
            'username' => $username,
            'password' => '*********',
            'location' => 'Universitas Jember',
            'status' => 'Student',
        ];
        return view('profile', compact('data'));
    }
}
