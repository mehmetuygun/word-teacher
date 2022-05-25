<?php

namespace App\Services\Contracts;

interface DictionaryApiInterface
{
    /**
     * This function will fetch definition, pronunciation and examples of the given word
     */
    public function searchWord(string $word): array;
}
