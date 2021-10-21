<?php

namespace App\Modules\Authentication\Services;

use App\BaseClasses\BaseService;
use App\Helpers\FileHelpers;
use App\Modules\User\DTOs\CreateUserDTO;
use App\Modules\User\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class RegisterService extends BaseService
{
	public function __construct(private LoginService $loginService, private UserRepository $userRepository)
	{
		//
	}

	/**
	 * @throws UnknownProperties
	 */
	final public function attemptRegister(Request $request, array $credentials): RedirectResponse
	{
		$plainPassword = $credentials['user_password'];
		$credentials['user_password'] = Hash::make($plainPassword);
		$credentials = FileHelpers::handleIncomingFiles('users', $credentials);
		$createUserDTO = new CreateUserDTO($credentials);

		$this->wrapWithTransaction(function () use ($createUserDTO) {
			$this->userRepository->createUser(createUserDTO: $createUserDTO);
		});

		return $this->loginService->attemptLogin($request, [
			'user_email' => $credentials['user_email'],
			'user_password' => $plainPassword,
		]);
	}
}
