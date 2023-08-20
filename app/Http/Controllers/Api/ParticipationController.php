<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\PDFController;
use App\Services\Participation;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class ParticipationController
{
	/**
	 * @var Participation $participation
	 */
	private Participation $participation;


	private PDFController $pdfController;
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
		
		$dados = json_decode($request->getContent(), true);
		$pdfController = new PDFController;
		$pdfContent = $pdfController->generatePDF($dados);

		// if ($pdfContent) {
		// 	$filename = 'Participacao_Sinistro_Automovel.pdf';
		// 	$path = storage_path('app/pdf/' . $filename);

		// 	// Salvar o conteúdo do PDF no arquivo
		// 	file_put_contents($path, $pdfContent);

			return response()->json([
				'message' => 'Formulario de participação realizado com sucesso!!',
				'successful' => true,
			]);
		// } else {
		// 	return response()->json([
		// 		'message' => 'Erro ao gerar o documento PDF.',
		// 		'successful' => false,
		// 		'data' => $request->all(),
		// 	]);
		// }
	}
	public function download(){
        return view('pdf.participation-auto');
    }
}