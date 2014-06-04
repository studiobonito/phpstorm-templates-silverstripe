# PHPStorm Templates for SilverStripe

## Overview

This is a collection of file and live templates used for speeding up [SilverStripe](http://silverstripe.org/) development.

## Installation Instructions

Place the files into the correct folders in your configuration path and restart PHPStorm.

### Linux

    ~/.WebIdeXX/config

### OS X

    ~/Library/Preferences/WebIdeXX

### Windows

    <User home>\.WebIdeXX/config

`<User home>` in WindowsXP is `C:\Documents and Settings\<User name>\` and in Windows Vista it is `C:\Users\<User name>\`

## Usage Overview

### File Templates

Simply select the template you want to use when creating a new file.

- `SS Page`: Empty Page and Controller classes
- `SS Form`: Opinionated Form scaffold class
- `SS DataObject`: Empty DataObject class
- `SS DataExtension`: Empty DataExtension class
- `SS ModelAdmin`: ModelAdmin scaffold class
- `SS SapphireTest`: SapphireTest scaffold class

### Live Templates

Tab complete abbreviations of common SilverStripe static properties and methods.

For example `db` expands to:

```php
/**
 * List of database fields. {@link DataObject::$db}
 *
 * @var array
 */
private static $db = array(
    '' => ''
);
```