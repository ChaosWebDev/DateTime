# Chaos\DT

Lightweight PHP DateTime utility library providing a simple, chainable interface for timestamp manipulation and formatting.  
Designed as a minimal alternative to `Carbon\Carbon`, it allows quick date/time operations without dependencies.

## 🕓 Features

- Simple object wrapper around UNIX timestamps
- Supports numeric, string, and `DateTimeInterface` inputs
- Chainable time adjustment methods (`adjSec`, `adjMin`, `adjHour`, `adjDay`, `adjWeek`)
- Built-in helpers for quick usage (`now()`, `epoch()`)
- Lightweight — no external dependencies

## 📦 Installation

Install via Composer:

```bash
composer require chaoswd/datetime
```

Or manually include the files in your project and autoload via PSR-4.

## 🚀 Usage

```php
use Chaos\DT\DT;

$now = DT::now();
echo $now->format(); // 2025-10-20 12:00:00

// Adjust the date/time
$nextDay = $now->copy()->adjDay(1)->format('Y-m-d');
echo $nextDay; // 2025-10-21

// Built-in helper functions
echo now()->adjHour(2)->format('H:i:s');
echo epoch(); // 1730000000 || Current Epoch timestamp
```

## ⚙️ Methods

| Method                                    | Description                                                                |
| ----------------------------------------- | -------------------------------------------------------------------------- |
| `__construct($value = null)`              | Accepts timestamp, string, or DateTimeInterface. Defaults to current time. |
| `format(string $pattern = 'Y-m-d H:i:s')` | Returns formatted date/time string.                                        |
| `copy()`                                  | Returns a cloned DT instance.                                              |
| `adjSec(int $adj)`                        | Adjusts seconds by ± value.                                                |
| `adjMin(int $adj)`                        | Adjusts minutes by ± value.                                                |
| `adjHour(int $adj)`                       | Adjusts hours by ± value.                                                  |
| `adjDay(int $adj)`                        | Adjusts days by ± value.                                                   |
| `adjWeek(int $adj)`                       | Adjusts weeks by ± value.                                                  |

## 🧩 Helpers

Two optional global helper functions are included in `src/helpers.php`:

```php
now();   // Returns Chaos\DT\DT::now()
epoch(); // Returns current UNIX timestamp
```

---

## 🧑‍💻 Author

**Chaos Web Dev**  
<https://github.com/ChaosWebDev>

---

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

---

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).