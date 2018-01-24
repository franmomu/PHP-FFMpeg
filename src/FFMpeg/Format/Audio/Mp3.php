<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format\Audio;

/**
 * The MP3 audio format
 */
class Mp3 extends DefaultAudio
{

    /**
     * @inheritDoc
     */
    protected $audioCodec = 'libmp3lame';

    /**
     * @inheritDoc
     */
    public function getAvailableAudioCodecs(): array 
    {
        return ['libmp3lame'];
    }
}
