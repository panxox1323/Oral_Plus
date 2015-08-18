<?php namespace Oral_Plus\Http\Requests;

use Oral_Plus\Http\Requests\Request;

class CreateEspecialidadRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'especialidad'    => 'required|unique',
		];
	}

}
