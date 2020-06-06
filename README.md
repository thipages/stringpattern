# stringpattern
Simple String Pattern Recognition

## Installation
    composer require thipages\stringpattern
    
## Usage
```php
$norm=SPattern::normalize ($string)
// $norm[0] gives the length
// $norm[1] gives a sequence
// $norm[2] gives a sequence with occurrence (sequence_occ)
```
sequence syntax is
- N for numeric
- A for alphabet
- the character for any non alphanumeric character

## Examples

| input         | sequence  | sequence_occ  |
| :-----------: | :-------: | :-----------: |
| 123           | N         | N3            |
| 123.1         | N.N       | N3.1N1        |
| 12,1          | N,N       | N2,1N1        |
| T23@mail.com  | AN@A.A    | A1N2@1A4.1A3  |

## Use Case
- Find/Check database column data format


