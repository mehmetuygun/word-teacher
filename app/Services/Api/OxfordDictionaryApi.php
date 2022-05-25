<?php

namespace App\Services\Api;

use App\Services\Contracts\DictionaryApiInterface;

class OxfordDictionaryApi implements DictionaryApiInterface
{
    /**
     * @inheritDoc
     */
    public function searchWord(string $word): array
    {
        return [];
    }
}
