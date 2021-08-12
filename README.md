# phpDocumentor trait bug

Class documentation doesn't seem to show traits or the interited methods any more.

### Usage

Check src/Test.php and src/FooTrait.php for the class that uses the trait & the actual trait.

Generate the documentation with e.g.

```
docker run --rm -v $(pwd):/data phpdoc/phpdoc:3 run
```

Open .phpdoc/build/index.html and navigate to Darep > Test and see that the class documentation does not include anything related to the trait.

#### Test the class & reflection

You can check that Test.php works correctly & that the PHP reflection has the trait with:

```
php src/Test.php
```
