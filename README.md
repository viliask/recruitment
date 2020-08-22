# App for shipping price calculation

Specification:

- The calculation form should contain fields:
    -postcode, 
    - total order amount,
    - checkbox "long product".
- Postcode is a 5-digit number. A user mustn't enter an incorrect value.
- The shipping cost is based on zone, total order amount, and long product flag.
- Zone means the first two digits of the postcode (examples: “35463” -> zone “35”, “23456” -> zone “23”).
- User can import zones from CSV file and saves data in database; sample data are in zones.csv.
- If the total order amount is greater than 12500 € then we should add a 5% discount to the total shipping price.
- If we have a long product, we should add extra shipping cost - 1995€.


Tools requirements: 

- PHP 7 

- MySQL

- CakePHP (use as MVC solution).

## Steps to setup
- create db from dump file recruitment.sql
- go to localhost/orders
- click into "Codes" link
- click "NEW ZONES FROM CSV" button
- attach csv file from base dir of this repository
- click "LOAD DATA FROM CSV"
- zones should be saved and listed
- click "Orders" link
- fill in form by following data: 
    - Total order amount: 100000
    - Postcode: 2300
    - toggle checkbox
- click "SAVE AND CALCULATE"
- See result, shipping amount should give 1917,1(1995 + 23 - 100,9)

### Screenshots

<p align="center">
    <a href="https://i.imgur.com/n7o2C8B.png"><img src="https://i.imgur.com/n7o2C8B.png" alt="image" border="0" /></a>
</p>

<p align="center">
    <a href="https://i.imgur.com/1lI55Oh"><img src="https://i.imgur.com/1lI55Oh.png" alt="image" border="0" /></a>
</p>

<p align="center">
    <a href="https://i.imgur.com/dKKcOO8"><img src="https://i.imgur.com/dKKcOO8.png" alt="image" border="0" /></a>
</p>

<p align="center">
    <a href="https://i.imgur.com/16fGdSq"><img src="https://i.imgur.com/16fGdSq.png" alt="image" border="0" /></a>
</p>

<p align="center">
    <a href="https://i.imgur.com/M8ZEZK6"><img src="https://i.imgur.com/M8ZEZK6.png" alt="image" border="0" /></a>
</p>
