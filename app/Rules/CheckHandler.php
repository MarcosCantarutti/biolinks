<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {


        if (!str_starts_with($value, '@')) {
            $fail('Precisa começar com um @');
        }

        if (str_contains($value, ' ')) {
            $fail('Não pode ter espaços');
        }

        if (!preg_match('/^@[a-zA-Z0-9_-]+$/', $value)) {
            $fail('Não pode ter caracteres especiais diferentes de _ ou - e começar com @');
        }
    }
}
