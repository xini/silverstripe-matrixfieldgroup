# silverstripe-matrixfieldgroup

**This is an archived project and is no longer maintained. Please do not file issues or pull-requests against this repo. If you wish to continue to develop this code yourself, we recommend you fork it or contact us.**


Adds a field group that lets you add form field in a table like div structure 

## Requirements

* SilverStripe 3.1.*

## Usage

Here an example of how to add the field table:

```
$matrixfield = MatrixFieldGroup::create("Finances")
	->setColumnHeaders(array(
		"Account",
		"Debit",
		"Credit"
	));
	
$objects = SomeObject::get();

foreach ($objects as $object) {
	// add row for each object
	$catalogueFields->addRow(
		$object->Title,
		NumericField::create('Debit['.$object->ID.']', $object->Title.': Debit')
			->addExtraClass('hiddenLabel'),
		NumericField::create('Credit['.$object->ID.']', $object->Title.': Credit')
			->addExtraClass('hiddenLabel')
	);
}
```
