<?php

namespace App\Http\Controllers;

use App\Http\Resources\IssueResource;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IssueController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $issues = Issue::all();

        return IssueResource::collection($issues);
    }
}
