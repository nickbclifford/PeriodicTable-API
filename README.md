# Periodic Table API
This is a RESTful API for the Periodic Table of Elements.
## Syntax
(I'll be using my website, [nickclifford.me](https://nickclifford.me/) as an example address here, with `/api` tacked onto the end.)

The basic syntax is:
`https://nickclifford.me/api/pt.php?mode={mode}&elements={element symbols}`

Certain options can be added to the GET parameters as well.

The `elements` field contains comma-seperated element symbols. If the `elements` field is removed, **all** elements will be used.

### Modes
|Valid Modes|Purpose|Options|Purpose|
|-----------|-------|-------|-------|
|`names`|Get the full name of an element given it's symbol.|N/A|N/A|
|`orbitals`/`electrons`|Get the electronic configuration of an element given it's symbol.|`showBlocks`|Show the electron blocks of the element.|
|`numbers`|Get the atomic number of an element given it's symbol.|`mass`|Show the atomic mass of the element.|
|`dankmemes`|¯\\\_(ツ)_/¯|N/A|N/A|

## Elements
Now, I know you're saying, *But, Nick, which elements are supported by your wonderful fantastic API?*

The answer? **Every single element on the Periodic Table!** Pretty cool, right?

## Issues? Bugs? Compliments?
If you find a bug or issue, please submit an issue here on [GitHub](https://github.com/MiningPotatoes/PeriodicTable-API).

If you want to help join the fight, feel free to submit a pull request with your code!