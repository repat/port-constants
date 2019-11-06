<?php

// 20
if (! defined('PORT_FTP_DATA')) {
    /**
     * FTP Data
     * @var int
     */
    define('PORT_FTP_DATA', 20);
}

// 21
if (! defined('PORT_FTP_CTRL')) {
    /**
     * FTP Control
     * @var int
     */
    define('PORT_FTP_CTRL', 21);
}

// 22
if (! defined('PORT_SSH')) {
    /**
     * SSH
     * @var int
     */
    define('PORT_SSH', 22);
}

// 25
if (! defined('PORT_SMTP')) {
    /**
     * SMTP
     * @var int
     */
    define('PORT_SMTP', 25);
}

// 80
if (! defined('PORT_HTTP')) {
    /**
     * HTTP
     * @var int
     */
    define('PORT_HTTP', 80);
}

// 110
if (! defined('PORT_POP3')) {
    /**
     * POP3
     * @var int
     */
    define('PORT_POP3', 110);
}

// 143
if (! defined('PORT_IMAP')) {
    /**
     * IMAP
     * @var int
     */
    define('PORT_IMAP', 143);
}

// 194
if (! defined('PORT_IRC')) {
    /**
     * IRC
     * @var int
     */
    define('PORT_IRC', 194);
}

// 443
if (! defined('PORT_HTTPS')) {
    /**
     * HTTPS
     * @var int
     */
    define('PORT_HTTPS', 443);
}

// 443
if (! defined('PORT_SSL')) {
    /**
     * Syntactic Sugar for PORT_HTTPS
     * @var int
     */
    define('PORT_SSL', PORT_HTTPS);
}

// 465
if (! defined('PORT_SMTPS')) {
    /**
     * SMTPS
     * @var int
     */
    define('PORT_SMTPS', 465);
}

// 587
if (! defined('PORT_SMTP_MSA')) {
    /**
     * SMTP MSA
     * @var int
     */
    define('PORT_SMTP_MSA', 587);
}

// 989
if (! defined('PORT_FTPS_DATA')) {
    /**
     * FTPS Data
     * @var int
     */
    define('PORT_FTPS_DATA', 989);
}

// 990
if (! defined('PORT_FTPS_CTRL')) {
    /**
     * FTPS Control
     * @var int
     */
    define('PORT_FTPS_CTRL', 990);
}

// 993
if (! defined('PORT_IMAPS')) {
    /**
     * IMAPS
     * @var int
     */
    define('PORT_IMAPS', 993);
}

// 995
if (! defined('PORT_POP3S')) {
    /**
     * POP3S
     * @var int
     */
    define('PORT_POP3S', 995);
}

// 1194
if (! defined('PORT_OPENVPN')) {
    /**
     * OpenVPN
     * @var int
     */
    define('PORT_OPENVPN', 1194);
}

// 3306
if (! defined('PORT_MYSQL')) {
    /**
     * MySQL/MariaDB
     * @var int
     */
    define('PORT_MYSQL', 3306);
}

// 5432
if (! defined('PORT_POSTGRES')) {
    /**
     * PostgresSQL
     * @var int
     */
    define('PORT_POSTGRES', 5432);
}

// 5222
if (! defined('PORT_XMPP_C2S')) {
    /**
     * XMPP/Jabber Client to Server
     * @var int
     */
    define('PORT_XMPP_C2S', 5222);
}

// 5223
if (! defined('PORT_XMPP_LEGACY_SSL')) {
    /**
     * XMPP/Jabber Legacy SSL
     * @var int
     */
    define('PORT_XMPP_LEGACY_SSL', 5223);
}

// 5269
if (! defined('PORT_XMPP_S2S')) {
    /**
     * XMPP/Jabber Server to Server
     * @var int
     */
    define('PORT_XMPP_S2S', 5269);
}

// 6379
if (! defined('PORT_REDIS')) {
    /**
     * Redis
     * @var int
     */
    define('PORT_REDIS', 6379);
}

// 6667
if (! defined('PORT_IRC_ALT')) {
    /**
     * IRC Alternative
     * @var int
     */
    define('PORT_IRC_ALT', 6667);
}

// 6969
if (! defined('PORT_BITTORRENT_TRACKER')) {
    /**
     * BitTorrent Tracker
     * @var int
     */
    define('PORT_BITTORRENT_TRACKER', 6969);
}

// 6881
if (! defined('PORT_BITTORRENT_START')) {
    /**
     * BitTorrent Start Range
     * @var int
     */
    define('PORT_BITTORRENT_START', 6881);
}

// 6889
if (! defined('PORT_BITTORRENT_END')) {
    /**
     * BitTorrent End Range
     * @var int
     */
    define('PORT_BITTORRENT_END', 6889);
}

// 11211
if (! defined('PORT_MEMCACHED')) {
    /**
     * Memcached
     * @var int
     */
    define('PORT_MEMCACHED', 11211);
}
