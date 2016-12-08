# Periodic Table API
This is a RESTful API for the Periodic Table of Elements.
## Syntax
(I'll be using my website, [nickclifford.me](https://nickclifford.me/), as an example address here, with `/api` tacked onto the end.)

The basic syntax is:
`https://nickclifford.me/api/pt.php?mode={modes}&elements={element symbols}`

Certain options can be added to the GET parameters as well.

The `modes` field contains comma-seperated mode values. If the `modes` field is omitted, an error will be returned.

The `elements` field contains comma-seperated element symbols. If the `elements` field is omitted, **all** elements will be used.

### Modes
|Valid Modes|Purpose|Options|Purpose|Values|
|-----------|-------|-------|-------|------|
|`names`|Get the full name of an element given it's symbol.|`spelling`|Changes the spelling of the element names.|`uk`/`sci`|
|`orbitals` or `electrons`|Get the electronic configuration of an element given it's symbol.|`showBlocks`|Show the electron blocks of the element.|`true`|
|`numbers`|Get the atomic number of an element given it's symbol.|`mass`|Show the atomic mass of the element.|`true`|
|`dankmemes`|¯\\\_(ツ)_/¯|N/A|N/A|N/A|

### Response
The JSON response has a top-level `error` field, and a top-level field for each mode you select.

Example:
```json
{
	"error": null,
	"names": {
		"Nh": "Nihonium"
	},
	"numbers": {
		"Nh": {
			"atomic": 133
		}
	}
}
```

## Elements
Now, I know you're saying, *But, Nick, which elements are supported by your wonderful fantastic API?*

The answer? **Every single element on the Periodic Table!** Pretty cool, right?

## Issues? Bugs? Compliments?
If you find a bug or issue, please submit an issue here on [GitHub](https://github.com/MiningPotatoes/PeriodicTable-API).

If you want to contribute, feel free to submit a pull request with your code!
