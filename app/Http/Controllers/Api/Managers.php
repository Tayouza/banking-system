<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Managers extends Controller
{
    public function __invoke(Request $request): Collection
    {
        $search = strtolower($request->search);
        return User::query()
            ->whereIn('role_id', [1,2])
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->when(
                $search,
                fn (Builder $query) => $query
                    ->where(DB::raw('lower(name)'), 'like' , "%{$search}%")
                    ->orWhere(DB::raw('id'), 'like' , "%{$search}%")
            )
            ->get();
    }
}