<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\CreateUser;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'loginId_userName' => ['required', 'max:30', Rule::unique(CreateUser::class, 'loginId_userName')],
            'loginPass' => ['required', 'alpha_num', 'max:20', 'min:4'],
        ];
    }

    /**
     * バリデーションルールのエラーメッセージ
     */
    public function messages(): array
    {
        return [
            'loginId_userName.unique' => '既に登録済みのID/ユーザー名です',
        ];
    }
}