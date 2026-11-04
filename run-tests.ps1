$phpPath = (Get-Command php -ErrorAction Stop).Source
$phpDirectory = Split-Path -Parent $phpPath

& $phpPath `
    -d "extension_dir=$phpDirectory\ext" `
    -d "extension=php_mbstring.dll" `
    "vendor/bin/phpunit"

exit $LASTEXITCODE
