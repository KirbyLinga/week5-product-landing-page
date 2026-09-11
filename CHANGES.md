# Change Log

## 2026-09-10 — Fix Blade Component and View Resolution Errors

### Problem

Three "not found" errors caused by filename typos:

1. `View [layouts.app] not found` — layout directory case mismatch
2. `Unable to locate a class or view for component [testimonial-card]` — file name typo
3. `Unable to locate a class or view for component [button]` — file missing `.blade` segment

### Changes Made

| # | What | From (wrong) | To (correct) | Reason |
|---|------|----------------|--------------|--------|
| 1 | Layout directory | `resources/views/Layout/` | `resources/views/layouts/` | `@extends('layouts.app')` uses lowercase; filesystem is case-sensitive |
| 2 | Testimonial component file | `testimonal-card.blade.php` | `testimonial-card.blade.php` | Filename had a typo — missing an `l` |
| 3 | Button component file | `button-blade.php` | `button.blade.php` | The `.blade` was part of the name, not the extension |

### What Was NOT Changed

- No file contents were modified.
- All `<x-...>` usage in templates was already correct.
- All `@extends`, `@props`, and `@yield` references in Blade files were already correct.

### Why This Happened

Laravel resolves Blade views and components by converting the dotted name to a
file path on disk. If the file name (including directory casing and the
`.blade.php` extension) does not match exactly, the view finder throws an
`InvalidArgumentException`. In this project the filesystem is case-sensitive,
so even a capital vs. lowercase directory name causes a failure.

### Files Affected

- `resources/views/layouts/app.blade.php` (directory renamed)
- `resources/views/Components/testimonial-card.blade.php` (renamed)
- `resources/views/Components/button.blade.php` (renamed)
