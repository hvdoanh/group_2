<?php


class DashboardController
{

    public function __construct()
    {

        $user = $_SESSION['user'] ?? [];
        // dd($user);
        // die;
        if ( !$user || $user['role'] != 'admin') {
            return header("Location: " . ROOT_URL);
        }
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}