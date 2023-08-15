<?php

namespace App\Http\Controllers\Api;

use App\Services\Participation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Mail\ParticipationEmail;
use Mail;

class ParticipationController
{
	/**
	 * @var Participation $participation
	 */
	private Participation $participation;

	/**
	 * 
	 * 
	 * @param Participation $participation
	 */
	public function __construct(Participation $participation)
	{
		$this->participation = $participation;
	}

	/**
	 * 
	 * 
	 * @param Request $request
	 * @return JsonResponse
	 */
	public function store(Request $request): JsonResponse
	{
		$participation = $this->participation->log($request->all());
		Mail::to('paulomaculuve758@gmail.com')->send(new ParticipationEmail($participation));
		return response()->json([
			'message' => 'Participação de Sinistro feita com sucesso!',
			'successful' => true,
			'data' => $request->all()
		]);
	}
}