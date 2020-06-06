# stringpattern
Simple String Pattern Recognition

## Usage
```php
$p=SPattern::parse ($string)
$p->sequence
$p->sequence_occ
```
sequence syntax uses
- D for digits
- A for alphabet
- the character for any non alphanumeric character

## Examples

| $string       | sequence_occ  | sequence  |
| :-----------: | :-----------: | :-------: |
| 123           | D3            | D         |
| 123.1         | D3.1D1        | D.D       |
| 12,1          | D2,1D1        | D,D       |
| T23@mail.com  | A1D2@1A4.1A3  | AD@A.A    |


