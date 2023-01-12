# BB Tailwind Starter Theme

## Writing Custom ACF Blocks

Example with a block called `test_block`. These are the files to be create and used:

- ACF fields: `acf-json/group_XXX.json` after local sync
- ACF declaration: `functions/acf-blocks/test_block.php` (automatically included by `functions/acf-blocks.php`)
- Style: `src/scss/acf-blocks/test_block.scss` (automatically included by `src/scss/styles.scss`)
- Template: `template-parts/acf-blocks/test_block.php`

To save the block to our repository, copy the files... (TBC)

## Formatting Standards

Use [Prettier](https://prettier.io) for formatting your code. Ideally you'll setup your IDE so that files are formatted upon saving.

The Prettier config is defined in `package.json` under the `prettier` key.

## Installation

`npm run install`

## Development

`npm run dev` or `npm run watch`

## Build

`npm run build`

## Deploying the Theme

Make sure that the following files and folders are excluded when uploading the
theme to the server:

- `.git/`
- `node_modules/`
- `src/`
- `.env` and `.env-example`
- `.gitignore`
