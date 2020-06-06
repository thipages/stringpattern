# stringpattern
Simple String Pattern Recognition

## Usage
```php
$p=SPattern::parse ($string)
$p->sequence
$p->sequence_occ
```
sequence syntax uses
- N for numeric
- A for alphabet
- the character for any non alphanumeric character

## Examples

| $string       | sequence_occ  | sequence  |
| :-----------: | :-----------: | :-------: |
| 123           | N3            | N         |
| 123.1         | N3.1N1        | N.N       |
| 12,1          | N2,1N1        | N,N       |
| T23@mail.com  | A1N2@1A4.1A3  | AN@A.A    |


