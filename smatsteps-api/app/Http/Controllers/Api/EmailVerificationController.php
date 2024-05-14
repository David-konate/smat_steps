<?php

namespace App\Http\Controllers\Api;

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
        return $this->emailVerificationService->verifyEmail($request->token, $request->email,);
    }

    public function resendEmailVerificationLink(ResendValidationEmailRequest $request)
    {
        return $this->emailVerificationService->resendEmailVerificationLink($request->email);
    }
}
