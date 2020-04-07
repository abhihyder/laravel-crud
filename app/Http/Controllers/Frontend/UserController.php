<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.users.users');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers()
    {
        return Datatables::of(User::query())
        ->setRowId('id')
        ->setRowClass('{{ $id % 2 == 0 ? "text-dark" : "text-muted" }}')
        ->editColumn('created_at', function(User $user) {
            return  $user->created_at->diffForHumans();
        })
        ->addColumn('action', 'frontend.columns.edit')
        ->make(true);
    }
}
