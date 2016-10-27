# Title
P3
## URL
[live site url](http://p3.ehay.me/) http://p3.ehay.me/
## Description
This is a web application named Developer's best friend. It has two links. One goes off to a lorem-ipsum generator. The other goes off to a random user generator.
## Link to demo
TODO
## Usage
The home page contains two links. The link to the lorem-ipsum generator and a link to the random user generator. Each page contains a form which will provide options to choose how you want your information generated. Each has backend validation that it provides. Both require a number to be specified, and that number must be between 1-9. The user generator requires that a locale is selected. The form will always to default sending en_US, even if the button has not been clicked. However, providing a locale that does not meet the specification of two under-case characters followed by an underscore followed by two upper-case characters, will throw an error. Currently if a locale is provided that meets this requirement, but is not an actual locale, or one that is not supported, the fzaninotto/faker package will convert it to en_US, but it will not throw an error to the user. 
## Dependencies
Frameworks: Bootstrap, Laravel
Dependency Management: NPM, Composer
### Packages
Packages: [badcow/lorem-ipsum](https://packagist.org/packages/badcow/lorem-ipsum)
          [fzaninotto/faker](https://packagist.org/packages/fzaninotto/faker)

## License
[MIT](http://opensource.org/licenses/MIT).
