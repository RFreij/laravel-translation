<?php

namespace JoeDixon\Translation\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TranslationChangedEvent
{
    use Dispatchable;
    use SerializesModels;

    public string $language;

    public function __construct(string $language)
    {
        $this->language = $language;
    }
}
