# Port Constants
[![Build Status](https://travis-ci.org/repat/port-constants.svg?branch=develop)](https://travis-ci.org/repat/port-constants)
[![Packagist](https://img.shields.io/packagist/v/repat/port-constants.svg)](https://packagist.org/packages/repat/port-constants)

The **Port Constants** package defines a number of useful PHP constants within your application, making it easier to express network port numbers. Pull Requests are welcome!

Shoutout to the [`stevegrunwell/time-constants`](https://github.com/stevegrunwell/time-constants) package for the idea. I also wrote a  [`repat/date-constants`](https://github.com/repat/date-constants) package.

## Installation
Port Constants is intended to be installed via Composer:

```sh
$ composer require repat/port-constants
```

The package has been configured to automatically expose the `constants.php` file via the Composer-generated autoloader, so you'll be ready to use the constants as soon as the package has been installed!

## Defined constants
This is a list of all constants defined by this package, along with their values. Each constant is wrapped in a `if (! defined(...))` conditional, ensuring these constants can easily be redefined if necessary and won't conflict with existing constants.

| Service                | Port  | Const                     |
| ---------------------- |:-----:|:-------------------------:|
| FTP Data               | 20     | `PORT_FTP_DATA`           |
| FTP Control            | 21     | `PORT_FTP_CTRL`           |
| SSH                    | 22     | `PORT_SSH`                |
| SMTP                   | 25     | `PORT_SMTP`               |
| HTTP                   | 80     | `PORT_HTTP`               |
| POP3                   | 110    | `PORT_POP3`               |
| IMAP                   | 143    | `PORT_IMAP`               |
| IRC                    | 194    | `PORT_IRC`                |
| HTTPS                  | 443    | `PORT_HTTPS`              |
| HTTPS                  | 443    | `PORT_SSL`                |
| SMTPS                  | 465    | `PORT_SMTPS`              |
| SMTP MSA               | 587    | `PORT_SMTP_MSA`           |
| FTPS Data              | 989    | `PORT_FTPS_DATA`          |
| FTPS Control           | 990    | `PORT_FTPS_CTRL`          |
| IMAPS                  | 993    | `PORT_IMAPS`              |
| POP3S                  | 995    | `PORT_POP3S`              |
| OpenVPN                | 1194   | `PORT_OPENVPN`            |
| MySQL/MariaDB          | 3306   | `PORT_MYSQL`              |
| PostgreSQL             | 5432   | `PORT_POSTGRES`           |
| XMPP C2S               | 5222   | `PORT_XMPP_C2S`           |
| XMPP Legacy SSL        | 5223   | `PORT_XMPP_LEGACY_SSL`    |
| XMPP S2S               | 5269   | `PORT_XMPP_S2S`           |
| Redis                  | 6379   | `PORT_REDIS`              |
| IRC Alternative        | 6667   | `PORT_IRC_ALT`            |
| BitTorrent Tracker     | 6969   | `PORT_BITTORRENT_TRACKER` |
| BitTorrent Start Range | 6881   | `PORT_BITTORRENT_START`   |
| BitTorrent End Range   | 6889   | `PORT_BITTORRENT_END`     |
| Memcached              | 11211  | `PORT_MEMCACHED`          |

## TODO
* Finish Tests

## Version
* Version 0.1.1

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/date-constants&title=date-constants&language=&tags=github&category=software)
