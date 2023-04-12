<?php

declare(strict_types=1);

namespace EriBloo\LaravelModelSnapshots\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @mixin Model
 */
interface SnapshotInterface
{
    public function subject(): MorphTo;

    public function toModel(bool $fillExcludedAttributes = false): Model;

    public function restore(): Model;
}
