# Dxtrs Bedrock

* Author: Claude Müller
* Tags: wordpress, foundation, theme
* Stable tag: master

---

## Description

This is the very basic setup for a WordPress theme using [Zurb's Foundation](http://foundation.zurb.com/) css framework along with [SASS](http://sass-lang.com/); [NPM](https://www.npmjs.org/) and [Bower](http://bower.io/) for package management; and [Grunt](http://gruntjs.com/) as a task runner.


## Installation

1. Ensure that you have the Dependencies installed and know how to use your operating system's command line interface (cli)
2. To download all necessary Foundation files issue the following command in the cli: `bower install zurb/bower-foundation`
3. Then download all necessary plugins for Grunt by running the following in the cli: `npm install`


## Usage

1. To run Grunt issue the following in the cli: `grunt` and the plugin _watch_ will watch your theme for any changes and grunt will run the appropriate task.
2. Put all unoptimised images into the `_images` directory
3. Upon deployment, run `grunt build` and exclude the following files and directories from your product:
    - .bowerrc
    - .git/
    - .gitignore
    - Gruntfile.js
    - \_images/
    - bower.json
    - bower\_components/
    - node\_modules/
    - package.json
    - scss/
4. Livereload is enabled on this theme, so if you'd like to make use of it, install the appropriate [plugin](http://feedback.livereload.com/knowledgebase/articles/86242-how-do-i-install-and-use-the-browser-extensions-) for your browser


## Dependencies

1. Node Package Manager (npm)
    - download and install Node.js from [http://nodejs.org/](http://nodejs.org/)
2. Bower
    - install Bower via npm `npm install -g bower` if this fails on a \*nix system try prepending the command with `sudo`
3. Grunt
    - install Grunt via npm: `npm install -g grunt-cli` if this fails on a \*nix system try prepending the command with `sudo`


## ChangeLog

See [CHANGES.md](CHANGES.md).

