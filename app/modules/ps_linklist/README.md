# Link list

## About

Give more visibility to your content/static pages (CMS, external pages, or else), where you want and when you want, to make your visitors feel like shopping on your store.

## Compatibility

PrestaShop: `8.1.0` or later

## Multistore compatibility

This module is compatible with the multistore :heavy_check_mark: <br/>
It can be configured differently from one store to another.<br/>
It can be configured quickly in the same way on all stores thanks to the all shops context or the group of shops.<br/>
It can be activated on one store and deactivated on another

## How to test

Edit the existing linklist block and add custom contents
CRUD a new linklist block

## Building assets

If you need to change the javascript code you have to compile the assets, this operation is done
via command line. You can get base information and requirements in the dev doc (be careful with the
node version):

(https://devdocs.prestashop.com/1.7/development/compile-assets/)

Then the operations to compile assets are:

```$xslt
cd ps_linklist/views
npm install
npm run build
```

This will update the files in the `ps_linklist/view/public` folder.

During development you can build automatically the assets (in dev mode) when you modify them by using this command:

```
npm run watch
```

## Reporting issues

You can report issues with this module in the main PrestaShop repository. [Click here to report an issue][report-issue]. 

## Contributing

PrestaShop modules are open source extensions to the PrestaShop e-commerce solution. Everyone is welcome and even encouraged to contribute with their own improvements.

### Requirements

Contributors **must** follow the following rules:

* **Make your Pull Request on the "dev" branch**, NOT the "master" branch.
* Do not update the module's version number.
* Follow [the coding standards][1].

### Process in details

Contributors wishing to edit a module's files should follow the following process:

1. Create your GitHub account, if you do not have one already.
2. Fork this project to your GitHub account.
3. Clone your fork to your local machine in the ```/modules``` directory of your PrestaShop installation.
4. Create a branch in your local clone of the module for your changes.
5. Change the files in your branch. Be sure to follow the [coding standards][1]!
6. Push your changed branch to your fork in your GitHub account.
7. Create a pull request for your changes **on the _'dev'_ branch** of the module's project. Be sure to follow the [contribution guidelines][2] in your pull request. If you need help to make a pull request, read the [GitHub help page about creating pull requests][3].
8. Wait for one of the core developers either to include your change in the codebase, or to comment on possible improvements you should make to your code.

That's it: you have contributed to this open source project! Congratulations!

## License

This module is released under the [Academic Free License 3.0][AFL-3.0] 

[report-issue]: https://github.com/PrestaShop/PrestaShop/issues/new/choose
[1]: https://devdocs.prestashop.com/1.7/development/coding-standards/
[2]: https://devdocs.prestashop.com/1.7/contribute/contribution-guidelines/
[3]: https://help.github.com/articles/using-pull-requests
[AFL-3.0]: https://opensource.org/licenses/AFL-3.0
