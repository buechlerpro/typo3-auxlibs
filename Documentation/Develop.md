# Developer notes

## Create phar-file

### Set environment variable
- Get path: `php composer.phar global config bin-dir --absolute`
- Update $PATH : `export PATH=$PATH:/root/.composer/vendor/bin`
- Build `phar-composer build symfony/process:"1.2.6" Libraries/symfony-process.phar`

## Create release
- Update library versions in `create-libs` script in `composer.json`
- Update library versions in `composer.json`
- Update library versions in README.md file
- Run `composer create-libs` from extension directory
- Run code sniffer: `php-cs-fixer fix`
- Rise version from extension
- Commit and create tag
- Push to Github
- Download from Github (to get clean package without dev-files)
- Upload to TER

## References

- [How to use PHP libraries in legacy extensions](https://insight.helhum.io/post/148112375750/how-to-use-php-libraries-in-legacy-extensions)
- [PHP-script to create phar-file](https://odan.github.io/2017/08/16/create-a-php-phar-file.html)
