<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use EmailVerificationService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResendValidationEmailRequest;
use App\Http\Requests\VerifyUserEmailRequest;
use App\Services\EmailVerificationService as ServicesEmailVerificationService;

class EmailVerificationController extends Controller
{
    public function __construct(
        private ServicesEmailVerificationService $emailVerificationService,
    ) {
    }

    public function emailVerify(VerifyUserEmailRequest $request)
    {
        return $this->emailVerificationService->verifyEmail($request->user_email, $request->token);
    }

    public function resendEmailVerificationLink(ResendValidationEmailRequest $request)
    {
        return $this->emailVerificationService->resendEmailVerificationLink($request->user_email);
    }
}
