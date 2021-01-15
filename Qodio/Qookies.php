<?php

namespace Qodio;

class Qookies {
    const CONSENT_NONE = 0;
    const CONSENT_PREFERENCES = 2;
    const CONSENT_STATISTICS = 4;
    const CONSENT_MARKETING = 8;

    private static function flag() {
        return isset($_COOKIE['_q_consents']) ? $_COOKIE['_q_consents'] : self::CONSENT_NONE;
    }

    /**
     * @return bool Whether the user has consented to marketing cookies.
     */
    static function marketing() {
        return (self::flag() & self::CONSENT_MARKETING) == self::CONSENT_MARKETING;
    }

    /**
     * @return bool Whether the user has consented to statistic cookies.
     */
    static function statistics() {
        return (self::flag() & self::CONSENT_STATISTICS) == self::CONSENT_STATISTICS;
    }

    /**
     * @return bool Whether the user has consented to preference cookies.
     */
    static function preferences() {
        return (self::flag() & self::CONSENT_PREFERENCES) == self::CONSENT_PREFERENCES;
    }

    /**
     * @return bool  Whether the user has consented to strictly necessary cookies.
     */
    static function strict() {
        // Strictly necessary cookies can't be declined
        return true;
    }

}
