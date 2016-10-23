<?php
namespace p3\Http\Handlers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Handler {
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}
