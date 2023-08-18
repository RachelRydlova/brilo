# Brilo demo wepbage
# demo FE from figma https://www.figma.com/file/63rrLEozuwDRmFQxQOvfaK/%C3%9Akol-pro-uchaze%C4%8De?type=design&node-id=0-1&mode=design&t=MMbMfUqikfuD5JEu-0
# used BEM naming

**Table of Contents**

- [Quick start](#quick-start)
- [Configuration](#configuration)
- [Requirements](#requirements)
- [Changelog](CHANGELOG.md)

## Requirements

- [Node.js](https://nodejs.org) & npm (works on NODE 11.15.0 npm 6.7.0)
- Optionally:
    - Local development server ([XAMPP](https://www.apachefriends.org) / [MAMP](https://www.mamp.info/en/) / [WAMP](http://www.wampserver.com/en/)...)
    - PHP executable location set in the PATH environment variable - [Tutorial](https://www.php.net/manual/en/faq.installation.php#faq.installation.addtopath)

## Quick start
* `mkdir C:\XAMPP\htdocs\PROJECT-NAME` create new project folder on your local server
* `cd C:\XAMPP\htdocs\PROJECT-NAME` navigate to newly created folder
* `git clone https://gitlab.com/USER-NAME/PROJECT-NAME.git .` clone contents of this repository
* `npm install --global gulp-cli` install gulp globaly (first-time)
* `npm install` install all dependencies via npm
*  navigate to `gulp-config.json` and change `project variable` to `PROJECT-NAME`
* `gulp serve` start development server

### Development
* `gulp serve` starts local server on port 3000, starts watching files & runs tasks based on file changes
