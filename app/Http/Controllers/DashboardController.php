<?php

namespace App\Http\Controllers;

use session;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $rentlogs = RentLogs::with(['user', 'book'])->get();
        return view ('dashboard', ['book_count' => $bookCount, 'category_count' => $categoryCount, 'user_count' => $userCount, 'rent_logs' => $rentlogs]);
    }
}
